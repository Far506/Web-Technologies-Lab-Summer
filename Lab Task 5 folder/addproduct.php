</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createproduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="ram">Ram:</label><br>
  <input type="text" id="ram" name="ram"><br>
  <label for="rom">Rom:</label><br>
  <input type="text" id="rom" name="rom"><br>
  <label for="camera">Camera:</label><br>
  <input type="text" id="camera" name=camera><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>