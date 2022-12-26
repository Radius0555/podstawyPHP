<?php

//JSON Decode

$jsonObj = '{"Radek":31,"Aga":30,"Rafał":30}';
$obj = json_decode($jsonObj);
$tab = json_decode($jsonObj, true);
var_dump(json_decode($jsonObj));
echo '<br>';
echo 'Mam lat: '.$obj->Radek.'<br>';
echo 'Siostrunia ma lat: '.$tab["Aga"];
?>
