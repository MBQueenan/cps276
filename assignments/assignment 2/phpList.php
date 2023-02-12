<?php
$table = "<table border='1'>";

    if(isset($_POST['btnSubmit']))
    {
        $firstNumber=$_POST['firstNumber'];
        $secondNumber=$_POST['secondNumber'];
       
        $i=0;
        $j=0;
        while ($i<$firstNumber){
            $table .="<tr>"
            $j=0;
            while($j<$secondNumber){
                $table .="<td>number</td>
                $j++;
            }
                $i++;
                $table .= "</tr>";
        }
       
       
        $table .= "</table>"
    }
?>