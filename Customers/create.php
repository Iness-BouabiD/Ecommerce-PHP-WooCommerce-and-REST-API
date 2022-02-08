<!DOCTYPE html>
<html>
<head>
<title>Create new product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align:center; margin-top:50px; margin-bottom:10px;">Create customer</h1>
<h3 style="text-align:center; margin-top:0px; margin-bottom:10px;"><a href="http://localhost:8080/WooCommerce/shop/">Go to Shop</a></h3><NOBR><h3 style="text-align:center; margin-top:0px; margin-bottom:40px;"><a href="http://localhost:8080/woo/Customers/listCustomers.php">Go back to customer's list</a></h3>
<div style="margin-left:550px; margin-top:70px;">
<form action="" method="POST">

    <div class="mb-3" style="width:450px;">
         <input type="text" class="form-control" name="Firstname" placeholder="Firstname">
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control"  name="Lastname" placeholder="Lastname">
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="email" class="form-control"  name="Email" placeholder="Email">
    </div>

    <button type="submit" class="btn btn-warning" name="submit" style="margin-left:170px;">Add Product</button>

</form>

<?php 

require "../authentification.php";

if(isset($_POST['submit'])){
    $Firstname= $_POST['Firstname'];
    $Lastname =$_POST['Lastname'];
    $Email =$_POST['Email'];

    $data = [
        'first_name' => $Firstname,
        'last_name' => $Lastname,
        'email'=>$Email,
        ];
    $woocommerce->post('customers', $data);
 ?>  
  <div class="alert alert-success" style="width:450px; margin-top:50px" role="alert">
   The customer <b><?php echo $Firstname." ".$Lastname; ?></b> has been added to the shop.
</div>
<?php }

?>
</div>
</body>
</html>