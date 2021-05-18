<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practical 7</title>
    <link rel="stylesheet" href="./practical7.css" />
    </head>
    <body>
        <div class="contact-title">
            <h1>SAMPLE FORM</h1>
            <h2>Containg php</h2>
        </div>
        <div class="contact-form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="contact-form">
            <input
            type="text"
            name="name"
            class="form-control"
            placeholder="Your Name"
            required
            />
        <br />
            <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Your Email"
            required
            />
        <br />
            <textarea
            name="message"
            class="form-control"
            placeholder="Message"
            rows="3"
            required
            >       </textarea>
        <br />
        <p class="form-control-radio">Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="male" class="form-control-radio">
        <label for="male" class="form-control-radio">Male</label>
        <input type="radio" id="female" name="gender" value="female" class="form-control-radio">
        <label for="female" class="form-control-radio">Female</label>
        <input type="radio" id="other" name="gender" value="other" class="form-control-radio">
        <label for="other" class="form-control-radio">Other</label>
        <br />
             <input type="submit" class="form-control submit" value="Submit" />
        </form>
        </div>
    </body>
 </html>


<?php
 
 $name = $gender= "";
 $email = $text = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $text=$_REQUEST['message'];
        $gender=$_REQUEST['gender'];
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
      }

echo "<br><br>";
echo "<h2> You Input is:- <h2>";
echo "<h3> Name:".$name."<h3>";
echo "<h3> Text:".$text."<h3>";
echo "<h3> Gender:".$gender."<h3>";
echo "<h3> Email:".$email."<h3>";

?>
