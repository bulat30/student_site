<?php
		if(isset($_POST['enter'])>0)
		{
			session_start();
			
			$login = htmlspecialchars($_POST['login']);
			$password = htmlspecialchars($_POST['password']);
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			$error_login = "";
			$error_password = "";
			$error = false;
			$error_user = false;
			if(strlen($login)==0) 
				{
				$error_login = "enter your login";
				$error = true;

				}

			if(strlen($password)==0)
			{
				$error_password = "enter your password";
				$error = true;
			}

		//----------Autorisation-------------------------------

			$mysqli = new mysqli("localhost", "root", "root", "myBase");
			$mysqli->query("SET NAMES 'utf8'");
			$query = mysqli_query($mysqli, "SELECT id, password FROM users WHERE login = '".mysqli_real_escape_string($mysqli, $_POST['login'])."' LIMIT 1");
			$data = mysqli_fetch_assoc($query);
			if($data['password']=== md5($_POST['password']))
				{

					
					
					header("Location:my_prof.php");
					exit();
				}
			else 
				{	header("Location:imstudent.html");
				
			}


			//-----------------------------------------------------
			
			$mysqli->close();
		}

		if(isset($_POST['reg']))
		{
			header("Location:reg.php");
		}
	?>
