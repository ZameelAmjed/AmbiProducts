<?php
/**
 * Project: rich
 * File Name: display_products.php
 * Author: Zameel Amjed
 * Date: 7/31/2019
 * Time: 10:21 AM
 */

if( !class_exists('Ambi_Display_Products') )
{

	class Ambi_Display_Products
	{
		function __construct()
		{
			add_action('init', array(&$this,'ambi_products_shortcodes_init'));

		}

		function ambi_products_shortcodes_init()
		{
			function ambi_list_products($atts = [], $content = null)
			{

				if(!isset($atts['cat']))
					return "set category [ambi-products cat=\"HOARDINGS\"]";

				$item_name = (isset($atts['item-name'])) ? $atts['item-name'] : 'Item Name' ;

				global $wpdb;
				$wpdb->hide_errors();
				$table_name = $wpdb->prefix . 'ambi_products';
				$atts['cat'] = preg_replace('/\s+/', '_', $atts['cat']);

				$results = $wpdb->get_results( "SELECT * FROM $table_name WHERE category = '{$atts['cat']}' LIMIT 1000" );

				if($results){
					$table = '<table class="table table-responsive">';
					$table .= '<thead>
								<tr>
								<th>Serial</th>
								<th>'.$item_name.'</th>
								<th>Location</th>
								<th>Availability</th>
								<th>&nbsp;</th>
								</tr>
								</thead>';
					foreach($results as $val){
						$url = isset($atts['url']) ? "<a class='glyphicon glyphicon-envelope' href='{$atts['url']}?serial={$val->serial}'></a>" : '';

						$table .="<tr>
						<td>{$val->serial}</td>
						<td>{$val->item_name}</td>
						<td>{$val->location}</td>
						<td>{$val->status}</td>
						<td>{$url}</td>
						</tr>";
					}
					$table .= '</table>';
					return $table;
				}else{
					return '<p>No product found</p>';
				}
			}
			add_shortcode('ambi-products','ambi_list_products');

			/**
			 * Display items in a map
			 * @param array $atts
			 * @param null $content
			 *
			 * @return string
			 */
			function map_items($atts = [], $content = null){

				if(!isset($atts['cat']))
					return "set category [ambi-products-map cat=\"HOARDINGS\"]";

				if(!isset($atts['url']))
					return "set url [ambi-products-map url=\"http:\\\website.com\contact\"]";

				global $wpdb;
				$wpdb->hide_errors();
				$table_name = $wpdb->prefix . 'ambi_products';
				$atts['cat'] = preg_replace('/\s+/', '_', $atts['cat']);

				$results = $wpdb->get_results( "SELECT * FROM $table_name WHERE category = '{$atts['cat']}' LIMIT 20" );

				$cordinates = [];
				foreach ($results as $val){
					array_push($cordinates, array('lat'=>$val->lat, 'lng'=>$val->long, 'name'=>$val->item_name, 'serial'=>$val->serial));
				}
				$settings = get_option('my_option_name_key');
				return print_maps($cordinates, $atts['url'], $settings['key']);
			}
			add_shortcode('ambi-products-map','map_items');
		}

	}# End class
	$ambi_display_products = new Ambi_Display_Products();
}