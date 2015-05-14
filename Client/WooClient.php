<?php
/**
 * Created by PhpStorm.
 * User: Nav
 * Date: 14-5-2015
 * Time: 21:55
 */

namespace Nav\WooBundle\Client;

require_once 'lib/woocommerce-api.php';

/**
 * Simple WooClient for using the WooCommerce Library
 * in a Bundle.
 *
 * Class WooClient
 * @package Nav\WooBundle\Client
 */
class WooClient extends \WC_API_Client{

    /**
     * Turned off ssl_verify, you could
     * turn this on if you want.
     *
     * @param string $shop
     * @param string $key
     * @param string $secret
     * @param array $options
     */
    public function __construct($shop,$key,$secret,$options=['ssl_verify'=>false])
    {
        /*
         * Feed the parent construct
         * so the WC_CLIENT is Loaded
         */
        parent::__construct(
            $shop,
            $key,
            $secret,
            $options
        );
    }

}