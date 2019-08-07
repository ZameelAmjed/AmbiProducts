# AmbiProducts

Add products with categories using geotags and display in a map or embed to section pages using shortcodes

## Description

<p>This plugin enables you to add products with categories using geotags then use shortcodes to print a table according to category and display in a map</p>
<p>If you have products listed in different geographical locations this plugin helps you to maintain all in a single table and display in category pages using a map.</p>
<p>Simple case would be a real estate agent with a list of houses distributed across different locations, could insert all listings in a single table then shortcodes can be used in different pages to pull listings according to each category such as apartments, bungalow, condominium and etc.</p>
<p>Map shortcode is used to mark houses in a map and upon click information is shown in a balloon in which user may redirected to a page to inquire about the particular house.</p>

<p>Plugin is checked on wordpress 5.2.2 and fully functional.</p>

## Installation

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/ambi_products` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Ambi Products Settings screen to configure the plugin
1. Use Google Maps Javascript API to generate a key and paste it
1. List each category seperated by comma e.g. apartments, bungalow, condominium
1. Now you can navigate to Plugins->Ambi Products to add / update products

## Shortcodes
###Category

1. Use **ambi-products** to list products of each category in a table. e.g
`[ambi-products cat="category name" url="link to redirect"][/ambi-products]`

2. Then use **ambi-product-inquiry** shortcode in contact page to capture inquiry for your form (you can use plugins like contact form 7 to add forms)
`[ambi-product-inquiry form-id="*my-form-id*" field-name="*mail-subject*"][/ambi-product-inquiry]`

    Above shortcode is used for a form generated using [contact-form-7](https://wordpress.org/plugins/contact-form-7/)
`[contact-form-7 html_id="*my-form-id*" title="Contact form 1"]`
`[text mail-subject]`

3. If your table consists large number of records use **datatable="true"** attribute to organize it neatly with pagination and search function
`[ambi-products cat="CATEGORY NAME" datatable="true" ][/ambi-products]`

###Plot in Google Map
1. Use **ambi-products-map** to list products of each category in a map. e.g
`[ambi-products-map cat="category name" url="link to redirect"][/ambi-products-map]`
