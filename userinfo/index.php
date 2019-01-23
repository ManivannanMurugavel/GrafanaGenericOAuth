<?php


//$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
//foreach($_GET as $key => $value){
//  fwrite($myfile, $key . " : " . $value . "<br />\r\n");
  //echo $key . " : " . $value . "<br />\r\n";
//}
//fclose($myfile);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$email =  fread($myfile,filesize("newfile.txt"));
fclose($myfile);


$myObj->name = "Manivannan";
$myObj->username = "Manivannan";
$myObj->email = $email;
$myJSON = json_encode($myObj);

echo $myJSON;


?>