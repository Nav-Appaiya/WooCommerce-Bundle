<?php
/**
 * Created by PhpStorm.
 * User: Nav
 * Date: 14-5-2015
 * Time: 21:55
 */

namespace Nav\WooBundle\Client;

require_once 'lib/woocommerce-api.php';

class WooClient extends \WC_API_Client{

    public function __construct($shop,$key,$secret,$options=['ssl_verify'=>false])
    {
        parent::__construct(
            $shop,
            $key,
            $secret,
            $options
        );
    }

    public function retrieveAllOrders()
    {

    }

}