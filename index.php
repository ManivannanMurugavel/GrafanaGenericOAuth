<?php

$state = $_GET['state'];

$state = urlencode($state);

$url = "http://localhost:3000/login/generic_oauth?state=".$state."&code=cc536d98d27750394a87ab9d057016e636a8ac31";

$user_email =  $_COOKIE["user_email"];
if($user_email != "")
{
	$myfile = fopen("userinfo/newfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $user_email);
	fclose($myfile);
	header("Location: ".$url);
}
if(isset($_POST["submit"])){
	$myfile = fopen("userinfo/newfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_POST['email']);
	fclose($myfile);
	setcookie("user_email", $_POST['email'], time()+60, "/");
	header("Location: ".$_POST['url']);

}


?>

<form method="POST">
	<input type="email" name="email">
	<input type="hidden" name="url" value="<?php echo $url; ?>">
	<input type="submit" name="submit">
</form>
