<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
   
  </head>
  <body>
  
    <?php
$name = trim($_POST['name']);
$email = trim($_POST['email']); 
$comment = trim($_POST['comment']);       



if ($name == '' or $email == '' or $comment == '')
{
echo("You did not complete the form properly ");
exit();    
}
else
{
$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); //checkconnection
if (mysqli_connect_errno($dbcnx ))
{echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}
if ($_POST['submitButton'] == "Submit") {

$name = mysqli_real_escape_string($dbcnx, $name);
$email = mysqli_real_escape_string($dbcnx, $email);
$comment = mysqli_real_escape_string($dbcnx, $comment);



$sql = "INSERT INTO feedback(name, email, comment)
 VALUES('$name', '$email', '$comment')";
$res = mysqli_query($dbcnx, $sql);

if ($res == 0) 
      {
      echo("<p>Error registering: " . mysqli_error() . "</p>");
      }
else
      {
	echo("Comment added");
      }
}mysqli_close($dbcnx);
}	

?>

  </body>
</html>