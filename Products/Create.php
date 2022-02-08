<!DOCTYPE html>
<html>
<head>
<title>Create new product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align:center; margin-top:50px; margin-bottom:10px;">Create product</h1>
<h3 style="text-align:center; margin-top:0px; margin-bottom:10px;"><a href="http://localhost:8080/WooCommerce/shop/">Go to Shop</a></h3><NOBR><h3 style="text-align:center; margin-top:0px; margin-bottom:40px;"><a href="http://localhost:8080/woo/Products/listProducts.php">Go back to product's list</a></h3>
<div style="margin-left:550px; margin-top:70px;">
<form action="" method="POST">

    <div class="mb-3" style="width:450px;">
         <input type="text" class="form-control" name="Name" placeholder="Name">
         
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control"  name="regular_Price" placeholder="Regular Price">
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control"  name="sale_Price" placeholder="Sale Price">
    </div>
    <div class="mb-3"  style="width:450px;">
      <input type="text" class="form-control" name="Description" placeholder="Description">
    </div>
    <div class="mb-4"  style="width:450px;">
       <input type="file" class="form-control" name="Image_link" placeholder="Image">
    </div>
    <button type="submit" class="btn btn-warning" name="submit" style="margin-left:170px;">Add Product</button>

</form>

<?php 

require "../authentification.php";

if(isset($_POST['submit'])){
    $name= $_POST['Name'];
    $regular_Price =$_POST['regular_Price'];
    $sale_price =$_POST['sale_Price'];
    $Desc =$_POST['Description'];
    $Image ='http://localhost:8080/WooCommerce/wp-content/uploads/2022/02/';
    $Image.=$_POST['Image_link'];

    $data = [
        'name' => $name,
        'type' => 'simple',
        'regular_price' => $regular_Price,
        'sale_price'=> $sale_price,
        'description' => $Desc,
        'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'images' => [
            [
                'src' => $Image
            ],
            [
                'src' => $Image
            ]
          ],

        ];
    $woocommerce->post('products', $data);
 ?>  
  <div class="alert alert-success" style="width:450px; margin-top:50px" role="alert">
   The product <b><?= $name?></b> has been added to the shop.
</div>
<?php }

?>
</div>
</body>
</html>