<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <title>Internet and WWW How to Program - Welcome</title>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="styles.css" />
   </head>
<?php
// Connect to the database server
$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); 
if (!$dbcnx) {
echo( "<p>Unable to connect to the " .
"database server at this time.</p>" );
exit();
}

// Select the  database
if (! @mysql_select_db("bookshop") ) {
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


<form action="book order details.php" method="POST">

<?php
// Display the text of each name in a paragraph
    echo("Select a Book Name"); 
    echo("<select name='bookname'>");
    while ( $row = mysql_fetch_array($result) ) 
    {
          $bt = $row['bookname'];
?>
<option value="<?php echo $bt; ?>
<?php if (isset($_POST['bookname'])){ if ($_POST['bookname'] == $bt) echo ' selected'; }?> >

     
<?php echo $row["bookname"]; ?>
</option> 
<?php }
echo("<\select>");
?>

<input type='submit' name='do_action' value="submitlist" /> 
<?php
if (isset($_POST['do_action'])){
if ($_POST['do_action']=="submitlist"){
echo($_POST['bookname']);

$result = @mysql_query("SELECT * FROM books where bookname =" . $_POST['bookname']);
if (!$result) {
echo("<p>Error performing query: mysql_error() </p>");
exit();
}
else
{
$row = mysql_fetch_array($result);

echo(" and to make sure that correct record was selected for we output the status " .$row['author']."<br>");
 echo("select a book"); 
 $result = @mysql_query("SELECT * FROM customers");
echo("<select name='surname'>");

while ( $row = mysql_fetch_array($result) ) {
$bt = $row['surname'];

//echo("<option value=$bt>". $row["ISBN"] ."</option>");
?>

// this piece of code makes sure that the selected item from the first time is the selected item when the button // is clicked

<option value="<?php echo $bt; ?>"
<?php if (isset($_POST['surname'])){if ($_POST['surname'] == $bt) echo ' selected'; }?>>     
<?php echo $row['surname']; ?>

</option> 
<?php }

echo("</select>");
   echo "<input type='submit' name='do_action' value='submitlist'>"; 








}
}

}?>

</form>
</html>