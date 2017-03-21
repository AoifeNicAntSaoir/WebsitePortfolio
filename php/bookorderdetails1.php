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
        FROM books,customer";
              
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }
?>


<!-- This piece of code displays a listbox with book titles. When the use selects a title and clicks the button 
the page refreshes itself with the selected item NOW the default in the list box and the selected item and its isbn being displayed-->


<form action="bookorderdetails1.php" method="POST">

<?php
//create the listbox
echo("Select the book you wish to purchase: "); 

echo("<select name='bookname'>");

while ( $row = mysqli_fetch_array($res) ) {
$bt = $row['bookname'];

?>

<!-- this piece of code makes sure that the selected item from the first time is the selected item when the button is clicked -->

<option value="<?php echo $bt ?>"
<?php if(isset($_POST['bookname'])){if ($_POST['bookname'] == $bt) echo ' selected';} ?>>     
<?php echo ucwords($row["bookname"]); ?>

</option> 
<?php }

echo("</select>");

?>  
<input type='submit' name='do_action' value="submitlist" ><br> 


<!--this piece of code gets executed only when the user clicks the button -->

<?php
if (isset($_POST['do_action'])){  
  echo("<table>");
	echo("<tr> <td><b>Book Name</b>:</td> <td>" . ucwords($_POST['bookname'])."</td></tr>");
	$who = $_POST['bookname'];
	$result = mysqli_query($dbcnx, "SELECT * FROM books where bookname = '$who' ");
  
	if (!$result) {
		echo("<p>Error performing query: mysql_error() </p>");
		exit();
	}
	else
	{
		$row = mysqli_fetch_array($result); 
		echo(" <tr><td> <b>Author:</b></td><td>" . ucwords($row['author']) . "</td></tr>"); 
    echo(" <tr><td> <b>Price: </b></td><td> &euro;" .$row['price'] . "</td></tr>");
    echo(" <tr><td> <b>Stock Remaining: </b></td><td> " .$row['quantity'] . "</td></tr>");   
    echo(" <tr><td> <b>Book ID: </b></td><td>" .$row['bookid'] . "</td></tr>");
    echo ("</table>");
    
   
	}
}


mysqli_close($dbcnx);                                
?>
</form>
<input type>     
</html>