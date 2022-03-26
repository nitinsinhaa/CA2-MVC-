
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
$nameErr = $regErr = $speErr = $cgpaErr = "";
$name = $reg = $spe = $cgpa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["reg"])) {
    $regErr = "Registration Number is required";
  } else {
    $reg = test_input($_POST["reg"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^(['.'0-9_]*)$/i', $reg)) {
      $regErr = "Only numbers and white space allowed";
    }
  }
    
  if (empty($_POST["cgpa"])) {
    $cgpaErr = "CGPA is required";
  } else {
    $cgpa = test_input($_POST["cgpa"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^(['.'. 0-9_]*)$/i', $cgpa)) {
      $cgpaErr = "Only numbers and white space allowed";
    }
  }

  if (empty($_POST["spe"])) {
    $speErr = "Course is required";
  } else {
    $spe = test_input($_POST["spe"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$spe)) {
      $speErr = "Only letters and white space allowed";
    }
  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// ===============



?>

<h2>Student Registration Form</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" action="upload.php"> 

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Registration Number: <input type="text" name="reg" value="<?php echo $reg;?>">
  <span class="error">* <?php echo $regErr;?></span>
  <br><br>

  CGPA: <input type="text" name="cgpa" value="<?php echo $cgpa;?>">
  <span class="error"><?php echo $cgpaErr;?></span>
  <br><br>


  Course: <input type="text" name="spe" value="<?php echo $spe;?>">
  <span class="error"><?php echo $speErr;?></span>
  <br><br><br>
  

  <input type="submit" name="submit" value="Submit">  
</form>
<br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Resume to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<br><br>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $reg;
echo "<br>";
echo $cgpa;
echo "<br>";
echo $spe;
echo "<br>";

// File Upload script

?>

</body>
</html>