<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>View All Books - Clonakilty Bookshop</title>
    <meta charset='utf-8'>
    <meta name="description" content="Clonakilty Bookshop's new website is now live! Come visit us in 12 Pearse Street, Clonakilty, Co. Cork">
    <meta name="author" content="Aoife Sayers">


 <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

    <style type="text/css">
    table{
    margin-left: 25%;
    border: 1px solid black;
    border-collapse: collpase;
    }
    th{
    border: 1px solid black;
    color: orange;
    text-shadow: 1px 1px gray;
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
    body{
margin: 0px;
padding: 0px;
width: 100%;
height: 100%;
background-color: #140A00;
font-family:   'Open Sans', sans-serif;
color: white;
}

#wrapper{
width: 100%;
margin: 0px;
height: 1100px;
margin-right: 0px;
}    

div.background{
  width: 100%;
  height: 400px;
  background:url(large.png); 
  border-bottom: 5px solid orange;
  background-size: cover;
  position: relative;
  margin:0px;
  paddding: 0px;
  }
 
  div.transbox{
  width: 35% auto;
  height: 20% auto;
  margin 30px 50px;
  background-color: black;
  border 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60);
  position: absolute;
  top: 30%;
  left: 10%;
  border-radius: 25px; 
  padding-left: 25px;
  padding-right: 25px;
  }
  
  div.transbox p
  {
  margin: 20px 20px;
  font-weight: bold;
  color: white;
 
  }
  
    
.menu-container .menu-button{
display:none;
}

a, a:link, a:visited, a:hover {
    
    text-decoration: none;
    
  }
  
  .menu-container{
  margin: 0 auto;
  margin-left: 5%;
  padding 0px;
  width:100%;
  height: 400px;
 position: absolute;
 top: 88%;
 clear: below;}
 
  .menu-container a {
    background: orange; 
    color: #fff;
    text-shadow: 1px 1px gray;
    font-weight: bold;
    display: inline-block;
    padding: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    -moz-transition: background-color .3s;
    -o-transition: background-color .3s;
    -webkit-transition: background-color .3s;
    transition: background-color .3s;
    text-align: center;
    text-transform: uppercase;
  }
 
  .menu-container .active {
    background: #FFD700;
    color: white;
  }
 
  .menu-container a:hover,
  .menu-container .active:hover {
  background-color: white;
  color:#ccc;
  border: 5px #ccc solid;
   border-style: outset;
  }
 
  /* Responsive Menu Button */
 
  .menu-container .menu-button {
    background: orange;
    margin-left: 25%;
    position: absolute;
    width: 50%;
    
  } 
 
  /* Responsive */
 
  @media all and (max-width: 550px) {
    .menu-container {
      width: 80%;
	  margin: 0 auto;
    clear: below; }
	  
 
    .menu-container .menu-button {
      display: block;
    }
 
    .menu-container .menu {
      height: 0;
      opacity: 0;
      overflow: hidden;
      
     
      -moz-transition: opacity 1s ease-out;
      -o-transition: opacity 1s ease-out;
      -webkit-transition: opacity 1s ease-out;
      transition: opacity 1s ease-out;   
      width: 100%;
    }
 
    .menu a {
      display: block;
      margin: 1px 0;
    }
 
    #menu:target .menu {
      opacity: 1; 
      height: auto;
	
    }
 
    #menu:target .menu-button {
      display: none;
    }
    
    .hideme{
    
    display:none;
    float:none;
    }
    .mobilecollapse{
    
    width:100%;
    clear:all;
    float:none;
    }
    
    #box1 li{
    list-style-type: none;}
    
    .tablett{
display: block;}

table{
display: none;}

img{
display: none;}

#box1{
overflow: auto;}
.hidefb{
display: none;}

.sitemap{
display: none;
}
  }
  
  
    

.highlight{
color: orange
}

#box1{  
position: relative;
background-color: #b8b894;
border: 1px solid orange;                        
width: 50%;
height: 400px auto;
border-radius: 15px;
float: left;
margin: 4%;
margin-left: 25%;
overflow: auto;

}
#box1 li{
line-height: 1.8em;
list-style-type: square;
}
#box1 a{
color: #fff;
}
#box1 li a:hover{
color: white;
font-weight:bold;
background-color: orange;
padding: 2% 5% 2% 5%;
border-radius: 5px;}

#viewmorelink a{
width: 50%;
margin-top: 3%;
background-color: orange;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
text-align: center;
padding: 4%;
padding-top: 3%;
padding-bottom: 3%;
text-transform: uppercase;
font-weight: bold;
position: absolute;
left: 20%;
bottom: 0%;
}


#viewmorelink a:hover {
background-color: white;
  border: 5px #ccc solid;
   border-style: outset;
   color: #ccc;
  
}

.align{
margin-left: 4.5%;
}
#footer{
position: relative;
background-color: #433B33;
border-top: 5px solid orange;
width: 100%;
height: 700px;
top: 100%;
margin: 0px;
}
.footerinfo{
position: absolute;
float: left;
color: gray;
margin: 2%;
}
.footerinfo a{
color: gray;
}
.footerinfo a:hover{
color: white;
}
.sitemap{
position: absolute;
right: 10%;
color: gray;
}

.sitemap a{
color: gray;
line-height: 1.8em;
}

.sitemap a:hover{
color: white;
font-weight:bold;
background-color: orange;
padding: 2% 5% 2% 5%;
border-radius: 5px;}

.sitemap li{
list-style-type: square;}

.SitemapR{
display: none;}
    
    
    
    
    </style>
    
  </head>
  <body>
 <div id="wrapper">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
    <h3 style="text-shadow: 1px 1px gray; text-align: center; ">All <span style="text-shadow: 1px 1px gray;" class="highlight">Books</span></h3>
<?php


$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); 
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();}
else {
$sql= "SELECT * FROM books";
$res = mysqli_query($dbcnx, $sql);
if ( !$res ) {
        echo('Query failed ' . $sql . ' Error:' . mysqli_error());
    exit();}
else
{
   if(mysqli_num_rows($res)< 1){
  //there are no books
  echo "<p><em> No books in database</em></p>";
exit();  }
else
{ 

echo("<table>");
echo("<tr><th>Book ID:</th> <th>Name:</th><th>Author:</th></tr>");
while ( $row = mysqli_fetch_array($res) ) {


echo("<tr><td>". $row['bookid']. "</td><td>". stripslashes($row['bookname'] ). "</td><td>". stripslashes($row['author'] ). "</td></tr>");

}echo("</table>");
}} 
//free results
mysqli_free_result($res);
  
mysqli_close($dbcnx);
}?>
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

