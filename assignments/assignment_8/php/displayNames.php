<?php

$sql="SELECT * FROM names ORDER BY FNAME ASC";
$res = $conn->query($sql);
$x = array();

while($i < count($json)){
	$list .= '<li>' . $json[$i]->name;
	
	$list .= '</ul></li>';
	$i++;
}

$list .= '</ul>';
?>