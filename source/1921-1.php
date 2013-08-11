<?php
// break lines on 'Comprising' or semicolon
$lines = file_get_contents("php://stdin");
$lines = str_replace('Comprising ',"\n",$lines);
$lines = str_replace('; ',"\n",$lines);
print_r($lines);
?>
