<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>insert_form</title>
  </head>
  <body>
    <h1>Insert new customer</h1>
    <form action="insert_action.php" method="post">
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="fname" /><span class="error"> * <?php echo $nameErr;?></span><br />

      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname" /><br />

      <label for="lname">Phone:</label>
      <input type="text" id="lname" name="phone" /><br /> 

      <label for="lname">E-mail:</label>
      <input type="text" id="lname" name="email" /><br />

      <input type="submit" value="save" name="save"/>
    </form>
  </body>
</html>
