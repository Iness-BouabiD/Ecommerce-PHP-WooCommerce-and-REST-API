<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
'http://localhost:8080/WooCommerce',
'ck_ecdc598e46049dfa7c49a19d8193cfad2588bec8',
'cs_cb8ac963bd24bfd55bca4ca43b09473cc7b7c813',
[
    'wp_api'=>true,
    'version' =>'wc/v3',
]
);
?>