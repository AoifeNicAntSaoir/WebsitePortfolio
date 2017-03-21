<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Home - Clonakilty Bookshop</title>
    <meta charset='utf-8'>
    <meta name="description" content="Clonakilty Bookshop's new website is now live! Come visit us in 12 Pearse Street, Clonakilty, Co. Cork">
    <meta name="author" content="Aoife Sayers">


 <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

 <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    
       
  </script>    
<style type="text/css">
@media all {

/*Nav Bar*/
    
  .header {
      height:50px;
    background:#333;
    width: 100%;
    margin:0px;
    position: relative; 
    z-index: 4;
    }
    
  .header-cont {
    width:100%;
    height: 57px; 
    position:fixed;
    background-color: #333;
    top:0px;
    }
    .header-cont ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    }

    .header-cont ul li{
      display: inline-block;
    }

.hamburger {
    width: 25px;
    height: 3px;
    background-color: white;
    margin: 6px 0;
}

.hamburger:active {
background-color: #ccc;}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #333;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    display: none;
    line-height: 25px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 1.2em;
    display: block;
    transition: 0.3s;
    line-height: 25px;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}


.dropbtn:hover {
border-bottom: 10px solid #068894;
 transition: 0.5s;}

.fullMenu:hover {
border-bottom: 10px solid #068894;
 transition: 0.5s;}


li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
     transition: 0.5s;
}

li a:hover, .dropdown:hover .dropbtn {
   background-color: black;
   }



li.dropdown {
    display: inline-block;
}


.dropdown-content {
    font-size: 0.9em;
    display: none;
    position: absolute;
    color: #333;
    min-width: 160px;
    background-color: black;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.iconGroup a img:hover {
border: 3px solid #ccc;
border-radius: 50%;
}
.iconGroup a img:active {
border: 3px solid #ccc;
border-radius: 50%;
}




.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
border-left: 10px solid #068894;
}

.dropdown:hover .dropdown-content {
    display: block;
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
  .fullMenu{
display: none;}

 .sidenav {
 display: block;
 padding-top: 15px;
 }
  .sidenav a {
  color: white;
  font-size: 18px;
  }
  
    .sidenav a:hover {
  background-color: black;
  margin-left: 30px;
 }
    
   .sideHighlight:hover {
  border-bottom: 10px #068894 solid;}
   .sideNavSub {
 margin-left: 15%;
 font-size: 0.5em;
 }
 
  .sideNavSub:hover {
 border-left: 10px #068894 solid;
 margin-left: 50%;
 }
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
height: 400px;
border-radius: 15px;
float: left;
margin: 4%;
margin-left: 25%;
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
  <body onload="closeNav();">
<div id="wrapper">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="header">
<div class="header-cont">
<a href="index.html"><img src="images/myIcon.svg" alt="logo" height="35" width="145" style="margin-left: 75px; margin-top: 8px; position: absolute;"></a>
<ul style="margin-left: 36%;">
  <li><a class="fullMenu" href="#Home"> Home</a></li>
  <li><a href="#About" class="fullMenu">About</a></li>
  <li class="dropdown">
    <a href="#Portfolio" class="fullMenu">Portfolio</a>
    <div class="dropdown-content">
      <a href="#Programming">Programming</a>
      <a href="#WebDev">Web Development</a>
      <a href="#Design">Design</a>
      <a href="#">Networking</a>
    </div>
  </li>
  <li><a class="fullMenu" href="#Contact">Contact</a></li>
</ul>


</div>
<ul>
 <li>
  <a class="menuButton" onclick="openNav()" href="#">
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div></a>
</li>
</ul> 
<div id="mySidenav" class="sidenav" style="width: 250px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a style="margin-top: 15%;" onclick="closeNav()" class="sideHighlight" href="#Home">Home</a>
  <a href="#About" class="sideHighlight" onclick="closeNav()">About</a>
  <a href="#Portfolio" class="sideHighlight" onclick="closeNav()">Portfolio</a>
  <a href="#Programming" class="sideNavSub" onclick="closeNav()">Programming</a>
  <a href="#WebDev" class="sideNavSub" onclick="closeNav()">Web Development</a>
  <a href="#Design" class="sideNavSub" onclick="closeNav()">Design</a>
  <a href="#Contact" class="sideHighlight" onclick="closeNav()">Contact</a>
</div>

                                                             
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
$dbcnx = mysqli_connect("sql8.freesqldatabase.com", "sql8126604", "DHjsYWPBpf", "sql8126604"); 
if (mysqli_connect_errno($dbcnx )){
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}
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



