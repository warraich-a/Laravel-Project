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
		//Getting the inputs thorugh post method
		$name = ($_POST["name"]);
  		$email = ($_POST["email"]);
	    $password_1 = ($_POST["password_1"]);
		$password_2 = ($_POST["password_2"]);
		$country = ($_POST["country"]);
		

		$password = md5($password_1);//encrypt the password before saving in the database
	
		$sql = "INSERT INTO registration (name, email, password, country) VALUES (:name, :email, :password, :country)"; // querty to insert the data in the database
		$stmt = $db->prepare($sql); 
							//Actually inserting the data into the database by bindparam
		$stmt->bindParam(':name', $_REQUEST['name']); 
		$stmt->bindParam(':email', $_REQUEST['email']);
		$stmt->bindParam(':password', $_REQUEST['password_1']);
		$stmt->bindParam(':country', $_REQUEST['country']);
		$stmt->execute();
		header('location: login.php');
			
	}
	

	// LOGIN USER
	if (isset($_POST['login_user'])) 
	{
 
	 $email    = $_POST["email"];
	 $password_login = $_POST["password_login"];

	if($email == "admin"){
		
			header('location: adminIndex.php');
		
	}  else {

		if (empty($email)) {
			array_push($errors, "Username is required"); //Adding the error to the errors so that It wont be possible to login with an empty username and password
		}
		if (empty($password_login)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$sql = "SELECT * FROM registration WHERE email=:email AND password= :password_login";
			$stmt = $db->prepare($sql);
			$stmt->execute(

				array(

					'email' => $_POST["email"],
					'password_login' => $_POST["password_login"]
				)
			);
			$count = $stmt->rowCount();
			if($count > 0){
				
				header('location: index.php');
			
			}
			else
			{
				echo '<script>
				alert("Password is wrong")
				</script>';
			}

		}
	}
}

?>