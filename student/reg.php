<!DOCTYPE html>
<html lang='ru'>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="imstudent.css" media="all">

</head>
<body>
	<div class="middle">
	<form class="auto" enctype="multipart/form-data" name='reg' action='' method="post">
		
		<input placeholder='login' type="text" name='login' value="<?=$_SESSION['login']?>"><span style="color:red"><?=$error_log?></span>
		
		<input type="password" placeholder='password'  name='password' value="<?=$_SESSION['password']?>""><span style="color:red"><?=$error_pass?><br>
			<input type="text" name="name" placeholder='name' >
			<input type="text" name="sec_name" placeholder='second name' ><br>
			<input type="text" name="university" placeholder='university' >
			<input type="text" name="kurs" placeholder='kurs' ><br>
			<input type="text" name="facultet" placeholder='group' ><br>
			<input type="file" name="photo" multiple="" accept="image/*,image/jpeg, image/png"><br>
		<input type='submit' name='reg' value='ready'>
		<?php
if(isset($_POST['reg'])>0)
{
	session_start();
	$n_login = htmlspecialchars($_POST['login']);
	$n_pass = htmlspecialchars($_POST['password']);
	$university = htmlspecialchars($_POST['university']);
	$name = htmlspecialchars($_POST['name']);
	$sec_name = htmlspecialchars($_POST['sec_name']);
	$facultet = htmlspecialchars($_POST['facultet']);
	$kurs = htmlspecialchars($_POST['kurs']);
	$uploaddir = '/photo/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$error_log = "";
	$error_pass = "";
	$error = false;
	
	if(strlen($n_login)==0)
	{
		$error_log = "enter login";
		$error = true;
	}
	if(strlen($n_pass)==0)
	{
		$error_pass == "enter your pass";
		$error = true;

	}
	$mysqli = new mysqli("localhost", "root", "root", "myBase");
	$mysqli->query("SET NAMES 'utf8'");
	$query = mysqli_query($mysqli, "SELECT id, password FROM users WHERE login = '".mysqli_real_escape_string($mysqli, $_POST['login'])."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			
	if($data['id'] == false && $error==false)
		
		{
			$mysqli->query("INSERT INTO ".users." (login, password, reg_date, name, sec_name, university, kurs, facultet) VALUES ('$n_login', '".md5("$n_pass")."', '".time()."', '$name', '$sec_name', '$university', '$kurs', '$facultet')");
		$mysqli->close(); 
		header("Location:imstudent.html");}
	else echo("use other login");
    

}

?>
	</form>
	</div>
</body>
</html>