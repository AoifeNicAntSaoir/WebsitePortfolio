<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>

  Year Of Release 
  <form action="trial.php" method="post">
  <input type="text" placeholder="yyyy-mm-dd" name="yearofrelease">
  <input type="submit" name="checkdate" value="submitlist" > 
  </form>
  
  
  <?php if(isset($_POST['checkdate']))
  { 
  $yearofrelease = $_POST['yearofrelease'];
  
  $date=date_create($yearofrelease);
  echo date_format($date,"d/m/Y");  
 
  }     
  
  ?>
  </body>
</html>