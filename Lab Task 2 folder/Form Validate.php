<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $websiteErr =  "";
$name = $email = $dateofbirth = $gender = $comment =  $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST[dateofbirth])) {
    $dateofbirthErr = "dateofbirth is required";
  } else {
    $dateofbirth = $_POST["dateofbirth"];
    // check if date of birth is well-formed
    if (!preg_match("/^[11-99-9' ]*$/",$dateofbirth)) {
      $dateofbirth = "Invalid date of birth format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = $_POST["website"];
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $websiteErr = "Invalid email format";
      $website = "";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
}

if (empty($_POST["Bloodgroup"])) {
    $BloodgroupErr = "Bloodgroup is required";
  } else {
    $Bloodgroup = $_POST["Bloodgroup"];
  }



?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  

<form action= "" method = "post">
  Date of Birth:
  
  <input type = "date" name = "d"><br>
  <input type="submit"name = "s" value = "Calculate"><br>
</form>
<?php
if(isset($_POST['s'])) {
  $dateofbirth = $_POST['d'];
  $today = date("d,m,y");
  $diff= date_diff(date_create(dateofbirth),date_create($today));
  echo 'You are' .$diff->format('%y'). "Years Old";
}
?>

Degree:
<form>
  <input type="checkbox" id="degree1" name="degree" value="SSC">
  <label for="degree1"> SSC</label><br>
  <input type="checkbox" id="degree2" name="degree2" value="HSC">
  <label for="degree2"> HSC</label><br>
  <input type="checkbox" id="degree3" name="degree3" value="Bsc">
  <label for="degree3"> Bsc</label>
  <input type="checkbox" id="degree4" name="degree4" value="Msc">
  <label for="degree4"> Msc</label>
</form>

Blood Group: 
<form action="/action_page.php">
  <label for="Bloodgroup">Choose a group:</label>
  <select name="blood" id="Bloodgroup">
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="A+">A+</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
  </select>
  <br><br>
  
</form>


 <input type="submit" name="submit" value="Submit">  
</form>
	



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";


?>

</body>
</html>