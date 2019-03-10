<?php


$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$email =  fread($myfile,filesize("newfile.txt"));
fclose($myfile);


$myObj->name = "Manivannan";
$myObj->username = "Manivannan";
$myObj->email = $email;
$myJSON = json_encode($myObj);

echo $myJSON;


?>