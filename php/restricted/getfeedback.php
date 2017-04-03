<!DOCTYPE html>
<html lang='en'>

<style type="text/css">
    table{
    width: 100%;
    border: 1px solid black;
    border-collapse: collpase;
    }
    th{
    border: 1px solid black;
    color: red;
    text-align: center;
    background: none;
    padding: 6px;
    font-weight: bold;
    }
    td{
  
    border: 1px solid black;
    padding:  6px;
    text-align: center;
    }
  </style>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
  <body>
  
  <?php


$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); 
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}
else {
$sql= "SELECT * FROM feedback";
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
    exit();}
else
{
   if(mysqli_num_rows($res)< 1){
  //there are no comments
  echo "<p><em> No comments in database</em></p>";
exit();  }
else
{ 

echo("<table>");
echo("<tr><th>Feedback ID:</th> <th>Name:</th><th>Email:</th><th>Comment</th></tr>");
while ( $row = mysqli_fetch_array($res) ) {


echo("<tr><td>". $row['fbackid']. "</td><td>". stripslashes($row['name'] ). "</td><td>". stripslashes($row['email'] ) . "</td><td>" . stripslashes($row['comment'] ) . "</td></tr>");

}echo("</table>");
}} 
//free results
mysqli_free_result($res);
  
mysqli_close($dbcnx);
}?>

  </body>
</html>