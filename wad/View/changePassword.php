<?php

    include("Model\server.php");

    $emailToChange = '';

    if(isset($_GET['email'])){
        $emailToChange = $_GET['email'];
    }

    if (isset($_POST['changePassword']))
    {
        $email = $_POST["emailToChange"];	
        $NewPassword = $_POST["New_Password"];
        $R_New_Password = $_POST["Repeat_New_Password"];
        if($NewPassword !=$R_New_Password)
        {
            echo '<script>
            alert("Passwords mush be same");
            </script>';
        }
        else 
        {
            PasswordToChange($email, $NewPassword);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <title>Change Password</title>
</head>
<body>
 <main id="container">
 <h1>Reset Password </h1> 
    <form name = "validationForm" action="changePassword.php" method="post" onsubmit="return Validation()">
        <input type="hidden" name="emailToChange" value="<?php echo $emailToChange; ?>" id = "login_input"> 
        <br>
        <label><p>New Password</p></label>
        <input type="password" required placeholder="....."  name="New_Password"  id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        <br> 
        <label><p>Repeat Password</p></label>
        <input type="password" required placeholder="....."  name="Repeat_New_Password"  id="psw">   <br> <br>
        <button type="submit" class="btn" name="changePassword" id="btn_log"><p>Save<p></button>    
    </form>
        <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        <script src="View\JS\jsFormValidation.js"></script>
  </main>
</body>
</html>