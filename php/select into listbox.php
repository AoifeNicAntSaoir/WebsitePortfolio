<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <?php
// Connect to the database server
$dbcnx = @mysql_connect("localhost", "root");
if (!$dbcnx) {
echo( "<p>Unable to connect to the " .
"database server at this time.</p>" );
exit();
}

// Select the  database
if (! @mysql_select_db("lib") ) {
echo( "<p>Unable to locate the database at this time.</p>" );
exit();
}

// Request the names from the customer table 
$result = @mysql_query("SELECT * FROM books");
if (!$result) {
echo("<p>Error performing query: mysql_error() </p>");
exit();
}
?>


<!-- This piece of code displays a listbox with numbers in it - isbn. When the use selects an isbn and clicks the button the page refreshes itself with the selected item NOW the default in the list box and the selected item andits status being displayed-->


<form action="select into listbox.php" method="POST">

<?php
// Display the text of each name in a paragraph

echo("select a book"); 

echo("<select name='bookISBN'>"); 

while ( $row = mysql_fetch_array($result) ) {
$bt = $row['bookISBN'];
//echo("<option value=$bt>". $row["ISBN"] ."</option>");
?>

// this piece of code makes sure that the selected item from the first time is the selected item when the button // is clicked

<option value="<?php echo $bt; ?>"
<?php if (isset($_POST['bookISBN'])){ if ($_POST['bookISBN'] == $bt) echo ' selected'; }?>>     
<?php echo $row["bookISBN"]; ?>

</option> 
<?php }

echo("</select>");

?>

<input type='submit' name='do_action' value="submitlist" /> 
<?php
if (isset($_POST['do_action'])){
if ($_POST['do_action']=="submitlist"){

echo($_POST['bookISBN']);

$result = @mysql_query("SELECT * FROM books where bookISBN =" . $_POST['bookISBN']);
if (!$result) {
echo("<p>Error performing query: mysql_error() </p>");
exit();
}
else
{
$row = mysql_fetch_array($result);

echo(" and to make sure that correct record was selected for we output the status " .$row['status']. "<br>");
 echo("select a book"); 
 $result = @mysql_query("SELECT * FROM books");
echo("<select name='bookISB'>");

while ( $row = mysql_fetch_array($result) ) {
$bt = $row['bookISBN'];

//echo("<option value=$bt>". $row["ISBN"] ."</option>");
?>

// this piece of code makes sure that the selected item from the first time is the selected item when the button // is clicked

<option value="<?php echo $bt; ?>"
<?php if (isset($_POST['bookISB'])){if ($_POST['bookISB'] == $bt) echo ' selected'; }?>>     
<?php echo $row["bookISBN"]; ?>

</option>
 

<?php }  ?>

</select>
<input type='submit' name='do_action' value='submitlist'>
<?php
if (isset($_POST['do_action'])) {
echo($_POST['bookISBN']);

$result = @mysql_query("SELECT * FROM book wher bookISBN =" . $_POST['bookISBN']);
if(!$result){
echo("Error");
exit();
}
else
{
$row = mysql_fetch_array($result);
echo("adkjfadjakadja the djlkajal status" . $row['status']);
}

}









}
}}?>

</form>

</html>