<?php 
$array = file_get_contents("./generated.json");
$arrays = json_decode($array);
var_dump($arrays);
?>