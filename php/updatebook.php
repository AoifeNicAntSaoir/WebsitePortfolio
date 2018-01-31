<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Update Book Details - Clonakilty Bookshop</title>
    <meta charset='utf-8'>
    <meta name="description" content="Clonakilty Bookshop's new website is now live! Come visit us in 12 Pearse Street, Clonakilty, Co. Cork">
    <meta name="author" content="Aoife Sayers">
     <meta name="viewport" content="width=device-width" />


 <link rel="shortcut icon" type="image/ico" href="\images\favicon.ico"/>
 <link rel="stylesheet" type="text/css" href="bookshopStyle.css"/>
 <style type="text/css">
  #box1 table{
  width: 100%;
  border: 1px solid black;
  border-collapse:collapse;
  margin-left: 5%;
  padding-right: 100px;
  overflow: auto;
  
  
  }
   
    td, th{
    border: 1px solid black;
    padding:6px;
    font-weight:bold;
    
   }
 
  </style>
  </head>
  <body>
<div id="wrapper">

<div class="background">
  <div class="transbox">
    <h1><p>Clonakilty <span class="highlight">Bookshop</span></p></h1>
  </div>

  
<div id="menu">  
  <div class="menu-container">
    <a href="#menu" class="menu-button">Menu</a>
      <div class="menu">
        <a href="index.html" class="active">Home</a>
        <a href="add-a-book.html">Add Book</a>
        <a href="UpdateRemove.php">Update/Delete Book</a>
        <a href="select2.php">View All Books</a>
        <a href="refinesearch.html">Search Book</a> 
        <a href="custorder.php">Order Books</a>
      </div>
  </div>
</div>
</div>


<div id="box1">
<h3 style="text-shadow: 1px 1px gray; text-align: center; ">Update <span style="text-shadow: 1px 1px gray;" class="highlight"> Book Details</span></h3>    
    <?php
include 'TryConn.php';
$id=$_GET['bookid'];

$sql="SELECT * FROM books WHERE bookid=$id";
  
$res = mysqli_query($dbcnx, $sql);

if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error($dbcnx));
        exit();
    }


else 
{
$row = mysqli_fetch_array($res); 
$bookname=trim($row['bookname']);
$author=trim($row['author']);
}
//free results
  mysqli_free_result($res);
  
  //close connection
  mysqli_close($dbcnx);
?>

<form action="updated.php" method="post">
  <input type="hidden" name="bookid" value="<?php echo $id; ?>"> 
  <table style="margin-top: 10%; margin-left: 15%;" width="500" border="0" cellspacing="4" cellpadding="5">
    <tr><td>Book Name:</td><td> <input type="text" name="bookname" value="<?php echo $bookname; ?>"></td></tr>
    <tr><td>Author:</td><td> <input type="text" name="author" value="<?php echo $author; ?>"> </td></tr>
    
    <tr><td><input type="Submit" name="submitdetails" value="Update" style="margin-left: 8%; background: orange; color: #fff; text-shadow: 1px 1px gray; font-weight: bold; width: 100px; border-radius: 15px; height: 25px;"></td></tr>
  </table>
</form>

</div>


<div id="footer">
    <div class="footerinfo">
        Clonakilty Bookshop Limited&trade;<br>
        Email: <a href="emailto:clonakiltybookshop@gmail.com">clonakiltybookshop@gmail.com</a><br>
        Telephone:(077)0123456789<br><br>
        
        <div class="hidefb"><div class="fb-page" data-href="https://www.facebook.com/clonakiltybookshop" data-width="300" data-height="250" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/clonakiltybookshop"></blockquote></div></div></div>
        <div class="hidefb"><a class="twitter-timeline" href="https://twitter.com/clonakiltybooks style=" position: absolute; top: 5%; " data-widget-id="588012825290874881">Tweets by @clonakiltybooks</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div> </div>
    <div class="sitemap">
        <h3>Sitemap</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Clonakilty Bookshop Facebook Page</a></li>
            <li><a href="#">Clonakilty Bookshop Twitter Page</a></li>
        </ul>      
    </div>
<div class="SitemapR">View the Sitemap</div>
    
</div>
</div>







  </body>
</html>