=== AmbiProducts ===

Contributors: zameelamjed
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z48JJTG4LEZRU&source=url
Tags: products table, category, list products, Geotag, products in map, show in map, map markers, coordinates
Requires at least: 4.6
Tested up to: 5.2.2
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add products with categories and geotags and display in a map or embed to section pages using shortcodes

== Description ==

<p>This plugin enables you to add products with categories and geotags and use shortcodes to print a table according to category or display it in a map</p>
<p>If you have products listed in different geographical locations this plugin helps you to maintain all in a single table and display in different pages categorized and display map.</p>
<p>Simple case would be a real estate agent with a list of houses distributed across different locations, could insert all listings in a single table then shortcodes can be used in different pages to pull listings according to each category such as apartments, bungalow, condominium and etc.</p>
<p>Map shortcode is used to mark houses in a map and upon click information is shown in a balloon in which user may redirected to a page to inquire about the particular house.</p>

<p>Plugin is checked on wordpress 5.2.2 and fully functional.</p>

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/ambi_products` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Ambi Products Settings screen to configure the plugin
1. Use Google Maps Javascript API to generate a key and paste it
1. List each category seperated by comma e.g. apartments, bungalow, condominium
1. Now you can navigate to Plugins->Ambi Products to add / update products

== Shortcodes ==
1. To list products of each category in a table. e.g
#####[ambi-products cat=\"category name\" url=\"link to redirect\"][/ambi-products]
```[ambi-products cat="CATEGORY NAME" url="http://mywordpresssite.com/contact/houses"][/ambi-products]```
1. To list products of each category in a map. e.g
#####[ambi-products-map cat=\"category name\" url=\"link to redirect\"][/ambi-products-map]

== Screenshots ==

1. Activate plugin `/assets/1.png` 
1. Navigate to Settings page `/assets/2.png` 
1. Add Google Maps Javascript API Key `/assets/3.png` 
1. Add Categories and API Key`/assets/4.png` 
1. Add Products `/assets/5.png` 
1. Shortcodes `/assets/6.png` 
1. Homepage with plugin `/assets/7.png` 
