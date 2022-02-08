<!DOCTYPE html>
<html>
<head>
<title>Update product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align:center; margin-top:50px; margin-bottom:10px;">Update customer</h1>
<h3 style="text-align:center; margin-top:0px; margin-bottom:40px;"><a href="http://localhost:8080/WooCommerce/shop/">Go to Shop</a></h3><h3 style="text-align:center; margin-top:0px; margin-bottom:40px;"><a href="http://localhost:8080/woo/Customers/listCustomers.php">Go back to customers's list</a></h3>
<div style="margin-left:550px; margin-top:70px;">

<?php 

require '../authentification.php';
 
$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);

 $data =$woocommerce->get('customers/'.$query['ID']);

 ?>

<form action="" method="POST">

    <div class="mb-3" style="width:450px;">
         <input type="text" class="form-control" name="Firstname" placeholder="Firstname" value="<?= $data->first_name;?>">  
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control"  name="Lastname" placeholder="Lastname" value="<?= $data->last_name;?>"> 
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control"  name="Email" placeholder="Email" value="<?= $data->email;?>">
    </div>
    <button type="submit" class="btn btn-warning" name="submit" style="margin-left:170px;">Update Customer</button>

</form>


<?php

if(isset($_POST['submit'])){
    $Firstname= $_POST['Firstname'];
    $Lastname =$_POST['Lastname'];

    $Email =$_POST['Email'];


    $data = [
        'first_name' => $Firstname,
        'last_name' => $Lastname,
        'email' => $Email,
        ];
    $woocommerce->put('customers/'.$query['ID'], $data);
 ?>  
  <div class="alert alert-success" style="width:450px; margin-top:50px" role="alert">
   The customer <b><?= $Firstanme." ".$Lastname;?></b> has been updated successfully.
</div>
<?php 

?>
<script>
location.href = 'listCustomers.php';
</script>
<?php
}

?>
</div>
</body>
</html>