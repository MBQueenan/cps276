<?php
$row = 0;
$col = 0;


$table= "<table border = '2'>";

for($row =1; $row <=15; $row++){
    $table .= "<tr>\n";
    $j=0;
    for($col=1; $col <= 5; $col++){
        $table .= "<td>Row $row Cell $col</td>";
        $j++;
    }
    $table .= "</tr>"; 
} 
$table .= "</table>";

  
?>


<!doctype html>
<html lang="en">
  <head>
  <style>
    th, td {
    border-style:double;
}
</style>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Table</title>
  </head>
  <body>
 <p><?php echo $table ?></p>    
  </body>
</html>