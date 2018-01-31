<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Home - Clonakilty Bookshop</title>
    <meta charset='utf-8'>
    <meta name="description" content="Clonakilty Bookshop's new website is now live! Come visit us in 12 Pearse Street, Clonakilty, Co. Cork">
    <meta name="author" content="Aoife Sayers">


 <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="bookshopStyle.css"/>

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
    <h3 style="text-shadow: 1px 1px gray; text-align: center; ">Delete a <span style="text-shadow: 1px 1px gray;" class="highlight">Book</span></h3>
  <?php
$bookid = $_GET['bookid'];

if ($bookid == '')
{
echo("<p style='text-align: center; font-style: italic;'>You did not complete the delete form correctly<br> <a style='color: orange; font-weight: bold; font-style: none; text-shadow: 1px 1px gray;' href='delete-a-book.html'>Try Again?</a><p> <br />\n <img style='height: 250px; margin-left: 35%;' src='error.png'>");
exit();
}
else
{
include 'TryConn.php';
$sql = "DELETE from books WHERE bookid = $bookid";
$res = mysqli_query($dbcnx, $sql);  
if($res){  
		$count = mysqli_affected_rows($dbcnx);
}
if($count>0){
             echo("<p style='text-align: center; font-style: italic'>Book no. " . " ". $bookid. " " . "
                     has been deleted successfully</p>\n<img style='height: 240px; margin-left: 35%;' src='tick.png'>" );
}
mysqli_close($dbcnx);	
}	
?>
    <div id="viewmorelink"><a href="select2.php">View all Books</a></div>
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



