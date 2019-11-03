<?php

$varContact = $_POST['contact'];
$varEmail = $_POST['emails'];
$varCountry = $_POST['drpCategory'];
$varCase = $_POST['case'];
$fs = fopen("helpinghands.txt", "a");
fwrite($fs, $varName . "," . $varEmail . "," . $varCountry . "," . $varContact . "," . $varCase . "\n" );
fclose($fs);
header ("Location:index.html");
 ?>