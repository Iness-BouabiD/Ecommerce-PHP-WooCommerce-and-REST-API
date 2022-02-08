<?php 
  require "../authentification.php";

echo json_encode($woocommerce->get('customers'));


?>