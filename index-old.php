<!-- <!DOCTYPE html>
<html>
<head>
	<title>OAuth Login</title>
</head>
<body>
	<input type="button" name="Login" value="Login" onclick="redirect()">
</body>
<script type="text/javascript">
	function redirect(){
		console.log('clicked');
		window.location = "http://localhost:3000/login/generic_oauth/?state=abcd123edgsh23khfi59fntu3739h4&code=sdgjh76q5398--kjshdj_sdhgjweushdgjh-qaeuyghbsdbn"
	}
</script>
</html> -->



<?php


$state = $_GET['state'];

$state = urlencode($state);

header("Location: http://localhost:3000/login/generic_oauth?state=".$state."&code=cc536d98d27750394a87ab9d057016e636a8ac31");

$url = "http://localhost:3000/login/generic_oauth?state=".$state."&code=cc536d98d27750394a87ab9d057016e636a8ac31";

?>

<button onclick="clicked()">Click Auth</button>

<script type="text/javascript">


	function clicked(argument) {
		var url = "<?php echo $url; ?>";
		// alert("<?php echo $url; ?>");
		console.log(url);
		window.location = url;
	}
</script>