<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];   
$email = $_POST["email"];
$save = $_POST["save"];

echo $fname;
echo $lname;
echo $phone;
echo $email;
echo $save;

if (!isset($save)) {
  header("Location: insert_form.php");
  exit();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
}else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

?>