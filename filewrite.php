<?php

$myFile = 'newfile.txt';
try{
$fh = fopen($myFile, 'w');

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);

$txt = "user id date";
$myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}




?>