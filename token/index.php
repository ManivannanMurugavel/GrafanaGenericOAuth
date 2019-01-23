<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
foreach($_GET as $key => $value){
  fwrite($myfile, $key . " : " . $value . "<br />\r\n");
  //echo $key . " : " . $value . "<br />\r\n";
}
fclose($myfile);

$myObj->access_token = "d50d9fd00acf797ac409d5890fcc76669b727e63";
$myObj->token_type = "Bearer";
$myObj->expiry_in = "1295998";
$myObj->refresh_token="TZzj2yvtWlNP6BvG6UC5UKHXY2Ey6eEo80FSYax6Yv8";


$myJSON = json_encode($myObj);

echo $myJSON;

?>