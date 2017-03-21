<!DOCTYPE html>
<html lang='cs'>
   <head>
      <title>Select into a listbox</title>

   </head>

<?php
// Connect to the database server
$dbcnx = mysqli_connect("localhost", "root", "", "bookshop");
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}



$sql = "SELECT *
        FROM customer";
              
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }
?>


<!-- This piece of code displays a listbox with book titles. When the use selects a title and clicks the button 
the page refreshes itself with the selected item NOW the default in the list box and the selected item and its isbn being displayed-->


<form action="custorder.php" method="POST">

<?php
$bookid = $_POST['bookid'];
echo $bookid;

//create the listbox
echo("Select the book you wish to purchase: "); 

echo("<select name='surname'>");

while ( $row = mysqli_fetch_array($res) ) {
$bt = $row['surname'];

?>

<!-- this piece of code makes sure that the selected item from the first time is the selected item when the button is clicked -->

<option value="<?php echo $bt ?>"
<?php if(isset($_POST['surname'])){if ($_POST['surname'] == $bt) echo ' selected';} ?>>     
<?php echo ucwords($row["surname"]); ?>

</option> 
<?php }
        
echo("</select>");

?>  
<input type='submit' name='do_action' value="submitlist" ><br> 


<!--this piece of code gets executed only when the user clicks the button -->

<?php
if (isset($_POST['do_action'])){  
  echo("<table>");
	echo("<tr> <td><b>Surname:</b>:</td> <td>" . ucwords($_POST['surname']) ."</td></tr>");
	$who = $_POST['surname'];
	$result = mysqli_query($dbcnx, "SELECT * FROM customer where surname = '$who' ");
  
	if (!$result) {
		echo("<p>Error performing query: mysql_error() </p>");
		exit();
	}
	else
	{
		$row = mysqli_fetch_array($result); 
		echo(" <tr><td> <b>Forename:</b></td><td>" . ucwords($row['forename']) . "</td></tr>"); 
    echo(" <tr><td> <b>Full Name: </b></td><td>" .ucwords($row['forename'] . " " .$row['surname']) . "</td></tr>");
    echo(" <tr><td> <b>Customer ID: </b></td><td> " .$row['custid'] . "</td></tr>");   
    echo(" <tr><td> <b>Street: </b></td><td>" . ucwords($row['street']) . "</td></tr>");
    echo(" <tr><td> <b>Town: </b></td><td>" .ucwords($row['town']) . "</td></tr>");
    echo(" <tr><td> <b>County: </b></td><td>" . $row['county'] . "</td></tr>");
    echo(" <tr><td> <b>Mobile No: </b></td><td>" .$row['mobileno'] . "</td></tr>");
     echo(" <tr><td> <b>Card No: </b></td><td>" .$row['cardno'] . "</td></tr>");
      echo(" <tr><td> <b>Security Code: </b></td><td>" .$row['securitycode'] . "</td></tr>");
    echo ("</table>");
    

    
   
	}
}


mysqli_close($dbcnx);                                
?> 
<br>Date Order Placed <?php $date = date("Y/m/d");  echo date_format(new DateTime($date), 'd/m/y');?>   <br>
Delivery Cost: &euro;3.50
<br>Total Cost: <?php $res = 3.50*4; echo "&euro;" . $res; ?>
</form>    
</html>