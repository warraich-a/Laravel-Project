<!-- <?php include('../Controller/changePassword.request.php') ?> -->

<?php

    include('../Model/server.php');

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
<link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>
<body>

<header>
<div id="main_img">

</div>
<div id = "header_menu">
    <div class="container">
        <ul>
            <li class="test"><a><div id="img_prof"></div></a></li>
            <li class="test" id="Username_a"><a id="">Username</a></li>
            <li class="test" style="float: left; padding: 0;"><div id="logo_header"></div></li>
        </ul>
    </div>
</div>
</header>
    <main>
        <div class="container">    
            <div  id="white_block"  >
                <div id="login_page">
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
                
                </div>    
            </div>
        </div>
    </main>
        <footer>
         
        </footer>
</body>
</html>