<?php 
$fname = $email = $lname = $save = $phone = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $save = test_input($_POST["save"]);
}


/* CHECK_1 : Don't access "insert_action" page via URL. */
if (!isset($save)) {
  header("Location: insert_form.php");
  exit();
}


/* CHECK_2 : All inputs don't have whitespace */
function test_input($data) {
  $data = str_replace(' ', '', $data);
  return $data;
}

echo $fname;
echo $lname;
echo $phone;
echo $email;
echo $save;


/* CHECK_3 : All inputs must be entered in order to be saved. */



?>