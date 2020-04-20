<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$password = "";
	$errors = array(); 
	$_SESSION['success'] = "";



	$host = "studmysql01.fhict.local";
	$username = "dbi435688";
	$password = "webhosting54";
	$db = "dbi435688";

	
		// connect to database
	$db =  new PDO( "mysql:host=$host;dbname=$db", $username, $password);
	//$db = mysqli_connect('localhost', 'root', '', 'registration');

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	// REGISTER USER
	if (isset($_POST['reg_user']))
	 {
		$name = ($_POST["name"]);
  		$email = ($_POST["email"]);
	    $password_1 = ($_POST["password_1"]);
		$password_2 = ($_POST["password_2"]);
		$country = ($_POST["country"]);
		
		// form validation: ensure that the form is correctly filled
		//if (empty($name)) { echo "Username is required"; }
		//if (empty($email)) { echo "Email is required"; }
		// if (empty($password_1)) {echo "Password is required"; }

	//   if ($password_1 != $password_2) {
		
  
	// 		echo '<script type="text/JavaScript">  
	// 			alert("Passwords does not match"); 
	// 			</script>' ;
			

	// 	}
	// 	// register user if there are no errors in the form
	// 	else {
			
				$password = md5($password_1);//encrypt the password before saving in the database
			
				$sql = "INSERT INTO registration (name, email, password, country) VALUES (:name, :email, :password, :country)";
				$stmt = $db->prepare($sql);
	
				$stmt->bindParam(':name', $_REQUEST['name']);
				$stmt->bindParam(':email', $_REQUEST['email']);
				$stmt->bindParam(':password', $_REQUEST['password_1']);
				$stmt->bindParam(':country', $_REQUEST['country']);
				
				$stmt->execute();
	
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			

			
		//}
	
	}
	

	// LOGIN USER
	if (isset($_POST['login_user'])) 
	{
 
	 $email    = ($_POST["email"]);
	 $password_login = $_POST["password_login"];

	if($email == "admin"){
		
			header('location: adminIndex.php');
		
	}  else {

		if (empty($username)) {
			echo "Username is required";
		}
		if (empty($password)) {
			echo "Password is required";
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$sql = "SELECT * FROM registration WHERE email=:email AND password= :password";
			$stmt = $db->prepare($sql);
			$stmt->execute(

				array(

					'email' => $_POST["email"],
					'password' => $_POST["password_login"]
				)
			);
			$count = $stmt->rowCount();
			if($count > 0){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			
			}
			else{
				echo "Password is wrong";
			}

		}
	}
	}

?>