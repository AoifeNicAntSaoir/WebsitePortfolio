<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Home - Clonakilty Bookshop</title>
    <meta charset='utf-8'>
    <meta name="description" content="Clonakilty Bookshop's new website is now live! Come visit us in 12 Pearse Street, Clonakilty, Co. Cork">
    <meta name="keywords" content="Clonakilty Irish Bookshop Cork Home Page">
    <meta name="author" content="Aoife Sayers">


 <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
 <link rel="stylesheet" type="text/css" href="bookshopStyle.css"/>


  </head>
  <body>
  <div id="wrapper">

<div class="header">


                                                             
</div> 
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
    <h3 style="text-shadow: 1px 1px gray; text-align: center; ">Add a <span style="text-shadow: 1px 1px gray;" class="highlight">Book</span></h3>


    <?php
$bookname = trim($_POST['bookname']);
$quantity = trim($_POST['quantity']);
$genre = trim($_POST['genre']);
$description = trim($_POST['description']);
$yearofrelease = trim($_POST['yearofrelease']);
$price = trim($_POST['price']);
$author = trim($_POST['author']);           



if ($bookname == '' or $genre == '' or $description == '' or $yearofrelease == '' or $price == '' or $author == '' or !is_numeric($price))
{
echo("<p style='text-align: center;'>You did not complete the add a book form correctly <br> <a style='color: orange; font-weight: bold; text-shadow: 1px 1px gray;' href='add-a-book.html'>Try Again?</a><br><br></p> <img style='height: 300px; margin-left: 30%;' src='error.png'>");
exit();    
}
else
{
include 'TryConn.php';
if ($_POST['submitdetails'] == "SUBMIT") {

$bookname = mysqli_real_escape_string($dbcnx, $bookname);
$author = mysqli_real_escape_string($dbcnx, $author);
$genre = mysqli_real_escape_string($dbcnx, $genre);
$description = mysqli_real_escape_string($dbcnx, $description);
$yearofrelease = mysqli_real_escape_string($dbcnx, $yearofrelease);


$sql = "INSERT INTO books(bookname,quantity,genre,description,yearofrelease,price, author)
 VALUES('$bookname', $quantity, '$genre', '$description', '$yearofrelease', $price, '$author')";
$res = mysqli_query($dbcnx, $sql);

if ($res == 0) 
      {
      echo("<p>Error registering: " . mysqli_error() . "</p>");
      }
else
      {
	echo("<p style='text-align: center;'> Your book has been added! <br> <a style='color: orange; font-weight: bold; text-shadow: 1px 1px gray;' href='add-a-book.html'> Click here to enter another book </a></p><br> <img style='height: 300px; margin-left: 30%;' src='tick.png'>");
      }
}mysqli_close($dbcnx);
}	

?>
<div id="viewmorelink"><a href="select2.php">View All Books</a></div>
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

<!--Error image: http://www.pd4pic.com/images/alert-stop-warning-icon-error-cancel.png!-->
<!--Tick image: http://vignette1.wikia.nocookie.net/tibia/images/2/29/Tick.png/revision/20140104123244?path-prefix=en!-->


