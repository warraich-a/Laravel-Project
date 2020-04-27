<?php 
include("../Model/config/dbConfig.php");


	// include("php/connection.inc.php");
	$errors = array();

	function login($giveEmail, $givenPassword_login){
		global $conn;
		try{

			$email = $giveEmail;
			$password_login = $givenPassword_login;

			if($email == "admin")
			{
		
				header('location: ../View/adminIndex.php');
				
			}  
			else 
			{
			
			$password = md5($password_login);
			$sql = "SELECT * FROM registration WHERE email=:email AND password= :password_login";
			$stmt = $conn->prepare($sql);
			$stmt->execute(

				array(

					'email' => $_POST["email"],
					'password_login' => $password
				)
			);
				$result = $stmt->fetch();
				$count = $stmt->rowCount();
				if($count > 0 ){
					session_start();

					// Save email
					$_SESSION["email"] = $email;

					// Used in remember me
					$_SESSION['loggedin_time'] = time();

					//Check remember me
					if(isset($_POST['remember_me']))
					{
						$remember_me = $_POST['remember_me'];
						$_SESSION['remember_me'] = $remember_me;
					}
				

					// If user has a session
					if(isset($_SESSION['email']))
					{
						setcookie('uid', $result[0], time() + (86400 * 30));
						header('Location: index.php');
						// echo '<script>
						// alert("Youre logged in")
						// </script>';
					}
				}
				else
				{
					echo '<script>
					alert("Password/Username is wrong")
					</script>';
				}
			}
				$conn = null;

		}catch(PDOEXCEPTION $e) {
			print_r("Something went wrong: " . $e->getMessage());
		}
	}
	

	// REGISTER USER

	function registration($givenNname, $givenEmail, $givenPassword, $givenCountry)
	{
		global $conn;
		try	{

			$name = $givenNname;
			$email = $givenEmail;
			$password = $givenPassword;
			$country = $givenCountry;
	
			$password = md5($password);//encrypt the password before saving in the database
		
			$sql = "INSERT INTO registration (name, email, password, country) VALUES (:name, :email, :password, :country)"; // querty to insert the data in the database
			$stmt = $conn->prepare($sql); 
								//Actually inserting the data into the database by bindparam
			$stmt->bindParam(':name', $name); 
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':password', $password);
			$stmt->bindParam(':country', $country);
			$stmt->execute();
			header('location: login.php');
		
		$conn = null;
		}
		catch(PDOEXCEPTION $e) 
		{
			print_r("Something went wrong: " . $e->getMessage());
		}
	}
		
	function SendEmailForForgotPassword($givenEmail)
	{
		global $conn;
		try{
		require 'phpmailer\PHPMailerAutoload.php';

		$emailTo=$givenEmail;
		// $url = $_SERVER["PHP_SELF"];
		// $url = getcwd(); 

		// $pageName = $_SERVER["PHP_SELF"];
		// $filePath = realpath(dirname(__FILE__))."$pageName";
		// $rootPath = realpath($_SERVER['DOCUMENT_ROOT']);

		// $htmlPath = str_replace($rootPath, '', $filePath);

		//echo $filePath;  



			// another way adding the root folder to link, for example to add the relative path
		// $path = (@$filePath == "C:\xampp\htdocs") ? "https://xampp/htdocs" : "https://xampp/htdocs";
		// $path .="r2da-project-website/changePassword.php"; 

		// to add 
		// $path = (@$filePath == "C:\xampp\htdocs") ? "https://xampp/htdocs" : "https://xampp/htdocs";
		// $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);  
		// $link = $path."/changePassword.php" ;  

		// to add by server
		$path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
		$path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        
		
		$link = $path."/changePassword.php" ;     
		echo $link;
		$body = "<!DOCTYPE html>
		<html lang='en'>
		<head>
			<meta charset='UTF-8'>
			<meta name='viewport'content='width=device-width, initial-scale=1.0'>
			<title>Document</title>
		</head>
		<body>
			<div class = 'Wrapper'>
			
			<p>	
				Hello there,
				
				Please click on the link to reset your password.
				<a href='".$link."?email=".$emailTo."'</a>
			Reset your password
			
			</p>	
			</div>
		</body>
		</html>";
		
		$mail = new PHPMailer();
		  //Enable SMTP debugging.
		//   $mail->SMTPDebug = 1;
		  //Set PHPMailer to use SMTP.
		  $mail->isSMTP();
		  //Set SMTP host name
		  $mail->Host = "smtp.gmail.com";
		  $mail->SMTPSecure = 'tls';
		  //Set this to true if SMTP host requires authentication to send email
		  $mail->SMTPAuth = TRUE;
		  //Provide username and password
		  $mail->Username = "mediabazaar2@gmail.com";
		  $mail->Password = "Sendcode43";
		  //If SMTP requires TLS encryption then set it
		  $mail->SMTPSecure = "false";
		  $mail->Port = 587;
		  //Set TCP port to connect to
		  
		  $mail->From = "mediabazaar2@gmail.com";
		  $mail->FromName = "Media Bazaar";
		  
		  $mail->addAddress("Anaswarraich72@gmail.com");
		  //$mail->addAddress("rawan.ad7@gmail.com");

		  
		 $mail->isHTML(true);
		 
		  $mail->Subject = "Password Reset";
		  $mail->Body = $body;
		//   $mail->AltBody = "This is the plain text version of the email content";
		  if($mail->send())
		  {
			// echo '<script>
			// alert("email sent")
			// </script>';
			
			header("Location:login.php");
		  }
	
		}
		
		catch(PDOEXCEPTION $e) {
         print_r("Something went wrong: " . $e->getMessage());
		}
	}

	function PasswordToChange($givenEmail, $givenNewPassword){

		global $conn;
		try{
			$NewPassword = $givenNewPassword;
			
			$password = md5($NewPassword);//encrypt the password before saving in the database
			$sql =  "UPDATE registration SET password = :R_New_Password WHERE email = :emailToChange" ;

			$stmt = $conn->prepare($sql); 
			$stmt->bindParam(':emailToChange', $givenEmail);
			$stmt->bindParam(':R_New_Password', $password);
			
			$result = $stmt->execute();

			if($result){
				echo '<script>
				alert("Password was successfully changed");
				</script>';

				header("refresh:5; url=login.php"); 
			}
			else {
				echo '<script>
				alert("Something went wrong");
				</script>';
			}

		}
		catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}
		$conn = null;
	}
?>