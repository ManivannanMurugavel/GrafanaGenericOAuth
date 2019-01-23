<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
foreach($_GET as $key => $value){
  fwrite($myfile, $key . " : " . $value . "<br />\r\n");
  //echo $key . " : " . $value . "<br />\r\n";
}
fclose($myfile);


$state = $_GET['state'];

$state = urlencode($state);

$url = "http://localhost:3000/login/generic_oauth?state=".$state."&code=cc536d98d27750394a87ab9d057016e636a8ac31&scopes=email manivannanmca2012@gmail.com";

$user_email =  $_COOKIE["user_email"];
if($user_email != "")
{
	header("Location: ".$url);
}
if(isset($_POST["submit"])){
	//echo $_POST['url'];
	$myfile = fopen("userinfo/newfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_POST['email']);
	fclose($myfile);
	setcookie("user_email", $_POST['email'], time()+60, "/","", 0);
	header("Location: ".$_POST['url']);
	//setcookie("name", "Manivannan", time()+60, "/","", 0);
	//setcookie("username", "Manivannan", time()+60, "/","", 0);
}


?>

<form method="POST">
	<input type="email" name="email">
	<input type="hidden" name="url" value="<?php echo $url; ?>">
	<input type="submit" name="submit">
</form>
