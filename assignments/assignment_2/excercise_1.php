<?php
$i = 1;
$j = 1;


$table = "<table border='1'> ";
  for ($i=1; $i<=4;$i++) {
      $table .= "<li>$i</li><br>";
         for ($j=1;$j <= 5;$j++){
         $table .= "<ul><ul><li>$j</li></ul></ul>";
         
     }
     
     $table .= "</ul>";
  }

  $table .= "</table>";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Nested List</title>
  </head>
  <body>
 <p><?php echo $table ?></p>    
  </body>
</html>