
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DEMOO</title>
    <link rel="stylesheet" href="style.css">
<?php
//DB connection
// mysqli_connect(); 4parameters [host,user,pass,dbname] 1 return  connection status
$host='localhost';
$user_name='sami';
$password='sami';
$DB_name='users';
// $connection = mysqli_connect($host,$user_name,$password,$DB_name);
// if($connection ) echo "Ahlayn Byke ya ABO SAMYY";
// else  die(mysqli_connect_error());
 $PASS=md5(123);
// $QUERY ="INSERT INTO `accounts` (`id`,`name`,`password`) VALUES (NULL,'SEMOO','$PASS')";
// mysqli_query($connection,$QUERY);

$QUERY=" SELECT * FROM `accounts` WHERE `name`='semoo'  AND `id`='8'";
// $result= mysqli_query($connection,$QUERY);
// print_r($result);







// echo mysqli_num_rows($result);
// if(!$connection) die("DB-ERROR");


// calling Function To Validate & Sanitize input From User 
require 'login.php';
setcookie("Role","Ad4mIN",time() +20 ,"/","localhost", "Secure","httponly" );
session_start();
 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }
 
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

?>

<h2>CLIENT & SERVER SIDE VALADATION</h2><?php echo "Your PHPSESSID= :"."  ". session_id();?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" >
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input Is Here! :</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<script>
console.log("hi");

var x= "ceab068d9522dc567177de8009f323b";
var y= x.split("").reverse;
console.log(y);

</script>
</body>
</html>
