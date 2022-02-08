<!DOCTYPE html>
<html>
<head>
<title>Gestion du magazin WooCommerce</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php 
   $data = file_get_contents('http://localhost:8080/woo/Products/product.php');
   $data=json_decode($data,true);

?>
<h1 style="text-align:center; margin-top:50px; margin-bottom:10px;">List of products</h1>
<h3 style="text-align:center; margin-top:0px; margin-bottom:10px;"><a href="http://localhost:8080/WooCommerce/shop/">Go to Shop</a></h3>
 <div class="container">
 <h3 style="text-align:center; margin-top:0px; margin-bottom:50px;"><a href="Create.php">Create new Product</a></h3>
   <div class="table-responsive"> 
      <table class=" table table-hover">
      <thead>
         <tr>
         <th>#</th>
         <th>Name</th>
         
         <th>Stock</th>
         <th>Sale price</th>
         <th>Regular price</th>
         <th>Date</th>
         <th>Action</th>
         </tr>
      </thead>
      <tbody>
      <?php $i=0; ?>
      <?php
       foreach($data as $row) : ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'];?></td>
     
        <td style="color:green;"><b><?= $row['stock_status'];?></b></td>
        <td><?= $row['sale_price'];?></td>
        <td><s><?= $row['regular_price'];?></s></td>
        <td><?= $row['date_created'];?></td>
        <td><button class="btn btn-primary"><a href="Update.php?ID=<?= $row['id']?>" style="color:white; text-decoration:none;">Update</a></button>
        <button class="btn btn-danger"> <a href="Delete.php?ID=<?= $row['id'] ?>" style="color:white; text-decoration:none;">Delete</a></button></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach ;?>
      </tbody>
      </table> 
   </div>
 </div>
</body>
</html>
