<!DOCTYPE html>
<html>
<head>
    <title>Satisfaction Form</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
    <link rel="stylesheet" type="text/css" href="form.css" />
</head>
<style>
.error {color: #ff0000;}    
</style>
<body>
    <div class="nav_bar">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="form.php">Form</a></li>
                <li><a href="img.html">Gallery</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
    </div>
    <br>
    <br>
    
<?php
// define variables and set to empty values
$firstErr = $lastErr = $emailErr = $genderErr = $telephoneErr = "";
$first = $last = $email = $gender = $message = $telephone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first"])) {
      $firstErr = "First name is required";
    } else {
      $name = test_input($_POST["first name"]);
    }
    
    if (empty($_POST["last"])) {
      $lastErr = "Last name is required";
    } else {
      $name = test_input($_POST["last name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
      
    if (empty($_POST["telephone"])) {
      $telephone = "";
    } else {
      $telephone = test_input($_POST["telephone"]);
    }
  
    if (empty($_POST["message"])) {
      $message = "";
    } else {
      $message = test_input($_POST["message"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<h2>User Satisfaction Reply Form</h2>
<br>
<p>Thanks for browsing this website, please submit this form and leave some comments for us to improve :)</p>
<p><span class="error">* required field</span></p>
    <form class="comment" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
            <label for="first-name">
            First Name:
            </label>
            <input type="text" id="first-name">
            <span class="error">* <?php echo $firstErr;?></span>
            <br><br>
            <label for="last-name">
                Last Name:
                </label>
            <input type="text" id="last-name">
            <span class="error">* <?php echo $lastErr;?></span>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <label for="telephone">
                Telephone#
            </label>
            <input type="text" id="telephone">
            <span class="error"><?php echo $telephoneErr;?></span>
            <br><br>
            <label for="email">
                Email:
            </label>
            <input type="text" id="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <label for="msg">
                Message:
                </label>
            <textarea id="msg"></textarea>
            <br>
            <input type="submit" value="Submit :)" id="btn">

        </form>

    </body>
</html>