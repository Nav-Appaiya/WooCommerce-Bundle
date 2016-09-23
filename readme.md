WooCommerce REST API V2 Bundle
===

**September 2016 Nav Note:** 
*This bundle is currently not maintained or used, so please use this bundle on your own risk.*


Gives you a WC_CLIENT to work with the REST API V2 of
your woocommerce webshop. 

Please note that you will need a API_KEY and API_SECRET in order to use this bundle.
Also don't forget to enable the pretty Permalinks for the WC-API endpoints to work.

About
-------------
- WooCommerce REST API v2 Bundle for in your Symfony2 Projects.
- Uses WooCommerce REST API PHP Client Library [WooCommerce-REST-API-Client-Library](https://github.com/kloon/WooCommerce-REST-API-Client-Library) 
- Easy to install and just easy to use.
- For now it just gives you a service container with the WC-Client from the original WooCommerceRestAPI Library.
- Will be adding more usefull stuff soon. 

Installation
-------------
1. Go to your symfony application and do:
	composer require nav/woo-bundle dev-master
2. Enable the bundle in your app/AppKernel file 
    new \Nav\WooBundle\NavWooBundle()
    
And finally Configure the parameters for your WC-Shop in config:

    parameters:
            woo_shop:   http://wp-shop.nl/
            woo_key:    API_KEY
            woo_secret: API_SECRET

Usage
-------------
Use it as a service by calling:

    $client = $this->get('nav_woo.client');
    
    $client->orders->get();
    $client->orders->update_status($order_id, 'pending')
    
    $client->customers->delete($customer_id);
    $client->customers->get_orders($customer_id)
    
    $client->products->get_count(); 
    $client->products->get_count(array('type'=>'simple'))
    
For more examples and usage please see the examples given in
WooBundle/Client/example/example.php

Credits original library:
Copyright (c) 2013-2014 - Gerhard Potgieter, Max Rice and other contributors
https://github.com/kloon/WooCommerce-REST-API-Client-Library
    
    
    
    
