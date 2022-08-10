<?php 

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateproduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="ram">Ram:</label><br>
  <input value="<?php echo $product['Ram'] ?>" type="text" id="surname" name="surname"><br>
  <label for="rom">Rom:</label><br>
  <input value="<?php echo $product['Rom'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>