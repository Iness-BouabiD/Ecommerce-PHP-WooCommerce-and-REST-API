

<?php
require '../authentification.php';
 
$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);


print_r($woocommerce->delete('customers/'.$query['ID'], ['force' => true])); 

?>
<script>
location.href = 'listCustomers.php';
</script>
