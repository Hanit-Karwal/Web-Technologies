<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = "";
$email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $name = test_input($_POST["name"]);
  $message = test_input($_POST["message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3 align="center">Sign Up</h3>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
            <label for="message">Message</label>
            <input type="text" class="form-control" name="message" id="message" placeholder="Type Message">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
?>
</body>
</html>