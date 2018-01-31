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
$dbcnx = @mysql_connect("localhost", "root");
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


<form action="selectlistbox.php" method="POST">

<?php
// Display the text of each name in a paragraph

echo("select a book"); 

echo("<select name='bookid'>");

while ( $row = mysql_fetch_array($result) ) {
$bt = $row['bookid'];

//echo("<option value=$bt>". $row["ISBN"] ."</option>");
?>

// this piece of code makes sure that the selected item from the first time is the selected item when the button // is clicked

<option value="<?php echo $bt; ?>"
<?php if (isset($_POST['bookid'])){ if ($_POST['bookid'] == $bt) echo ' selected'; }?>>     
<?php echo $row["bookid"]; ?>

</option> 
<?php }

echo("</select>");

?>

<input type='submit' name='do_action' value="submitlist" /> 
<?php
if (isset($_POST['do_action'])){
    
    if ($_POST['do_action']=="submitlist")
    { 
        echo($_POST['bookid']);
        $result = @mysql_query("SELECT * FROM books where bookid =" . $_POST['bookid']);
            if (!$result) 
            {
            echo("<p>Error performing query: mysql_error() </p>");
            exit();
            }
            else
            {
            $row = mysql_fetch_array($result);

            echo("<br><b> Book Name:</b>" . ucwords($row['bookname']));
            echo("<br><b> Author: </b>" .ucwords($row['author']));
            echo("<br><b> Genre: </b>" . ucwords($row['genre']));
            echo("<br><b>Description: </b>" . ucwords($row['description']));
            echo("<br><b>Quanity: </b>" . ucwords($row['description']));
            }
    
/////////////////////////////////////////////////////////////////////////////
      //echo($_POST['surname']);
      $result = @mysql_query("SELECT * FROM customer");
          if(!$result)
          {
          echo("<p>Error performing query: mysql_error()</p>");
          exit();
          }
 ?>
    
<?php 
 
 echo("<br><br>select a surname"); 
 
echo("<select name='surname'>");

while ( $row = mysql_fetch_array($result) ) {
$bt = $row['surname'];

//echo("<option value=$bt>". $row["ISBN"] ."</option>");
?>

// this piece of code makes sure that the selected item from the first time is the selected item when the button // is clicked

<option value="<?php echo $bt; ?>"
<?php if (isset($_POST['surname'])){if ($_POST['surname'] == $bt) echo ' selected'; }?>>     
<?php echo $row['surname'];  ?>

</option> 
<?php }
   
echo("</select>");

?>

<input type='submit' name='do_action1' value='submitlist'> 
<?php
if (isset($_POST['do_acton'])){
if ($_POST['do_action1']=="submitlist") {

echo($_POST['surname']);

$result = @mysql_query("SELECT * FROM customer WHERE surname=" . $_POST['surname']);
if(!$result) {
echo("<p>Error performing query: mysql_error() </p>");
exit();
}
else
{
$row = mysql_fetch_array($result);
echo("<h3>Customer Details</h3>");
echo("<br><b>Customer ID: </b>" . ucwords($row['custid']));
echo("<br><b>Title: </b>" . ucwords($row['title']));
echo("<br><b>Forename: </b>" . ucwords($row['forename']));
echo("<br><b>Surname: </b>" . ucwords($row['surname']));
echo("<br><b>Mobile No: </b>" . $row['mobileno']);

echo("<br><br>Customer Address Details");
echo("<br><b>Street: </b>" . ucwords($row['street']));
echo("<br><b>Town: </b>" . ucwords($row['town']));
echo("<br><b>County: </b>" . ucwords($row['county']));




}
}
}
}

}



?>


</form>
</html>