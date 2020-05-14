<?php include('../Controller/register.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <title>Forum</title>
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
                    <li class="test" style="float: left; padding: 0;"><a href="../index.php"><div id="logo_header"></div></a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
<div class="container">  
    <div  id="white_block">
    <div id="registration_page">
        
        <form name = "validationForm" method="post" onsubmit="return Validation()" action="register.php">

           
    
			<center>
                <label><p>Name</p></label>
				 <input type="text"   placeholder="Your Name"name="name" id="name" class="login_input"><br>
         
                <label<p>Email</p></label>
                 <input type="email" placeholder="Your Email" name="email" id="email" class="login_input"> <br>

                <label><p>Password</p></label>
				 <input type="password" required placeholder="....." name="password_1" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="login_input"><br>

                <label><p>Confirm password</p></label>
				 <input type="password" required placeholder="....." name="password_2" id="psw" class="login_input"> <br>

                <label><p>Country</p></label>
                <input type="text" placeholder="Your Country" name="country" id="login_input" class="login_input"> <br>
                <br>
                <button type="submit" class="btn" value="Submit" name="reg_user" id="btn_log">Register</button> 
                
			   <p>
               <br>
                Already a member? <a href="login.php">Sign in</a>
               </p>
               <br>
			</center> 
          
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
      
</main>
        
</body>
</html>