<?php
$dbcnx = mysqli_connect("localhost", "root", "", "bookshop");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}

$forename= $_POST['custfirstname'];
$surname= $_POST['custsurname'];


$sql = "SELECT custid from customer where forename = '$forename' and surname = '$surname'  ";

$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
        exit();
    }

  else
{
   if(mysqli_num_rows($res)> 1){
  
  header("location:loginsuccess.php?surname");
  }
else
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
  
  
 echo "Wrong Username or Password";
	}}

//free results
mysqli_free_result($res);
  
mysqli_close($dbcnx);
?>




   
   
   
   
  </body>
  </html>