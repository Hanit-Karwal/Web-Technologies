<!DOCTYPE html>
<html lang="en">

 
<head>
    <link rel="stylesheet" href="1905359_practical_7.css" type="text/css">
    <title>Practical 7</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
// define variables and set to empty values
$name = $email = $gender = $desc = $interests = $about ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $desc = test_input($_POST["desc"]);
  $interests = test_input($_POST["interests"]);
  $interets = test_input($_POST["about"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<body>
    <div class="form1">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend><span class="number">1</span>Candidate Info</legend>
                <input type="text" name="name" placeholder="Your Name * "><br>
                <input type="email" name="email" placeholder="Your Email * "><br>
                    <label>Gender: </label>
                    <label for="male"><span><input type="radio" value="male" name="gender" value="male">Male</span></label>
                    <label for="female"><span><input type="radio" value="female" name="gender"
                                value="female">Female</span></label>
                    <label for="other"><span><input type="radio" value="other" name="gender"
                                value="other">Other</span></label>
                <textarea name="desc" placeholder="Describe Yourself"></textarea><br>
                <label for="job">Interests: </label>
                <select name="interests" id="job">
                    <optgroup label="Indoors">
                        <option value="Fishkeeping">Fishkeeping</option>
                        <option value="Reading">Reading</option>
                        <option value="Boxing">Boxing</option>
                        <option value="Debate">Debate</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Snooker">Snooker</option>
                        <option value="Other_indoor">Other</option>
                    </optgroup>
                    <optgroup label="Outdoors">
                        <option value="Football">Football</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Fishing">Fishing</option>
                        <option value="Climbing">Climbing</option>
                        <option value="Cycling">Cycling</option>
                        <option value="Other_indoor">Other</option>
                    </optgroup>
                </select>
            </fieldset>
            <fieldset>
                <legend><span class="number">2</span>Candidate Info</legend>
                <textarea name="about" placeholder="About Your school: "></textarea>
            </fieldset>
            <input type="submit" value="Submit">
        </form>
    </div>
<?php  
    echo "<h2>Your Input:</h2>";
    echo "Your Name: ";
    echo $name;
    echo "<br>";
    echo "Your Mail: ";
    echo $email;
    echo "<br>";
    echo "Your Gender: ";
    echo $gender;
    echo "<br>";
    echo "Your Description: ";
    echo $desc;
    echo "<br>";
    echo "Your about: ";
    echo $about;
    echo "<br>";
    echo "Your interests: ";
    echo $interests;
    echo "<br>";
?>
</body>

</html>


