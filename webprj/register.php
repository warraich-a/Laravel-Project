<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
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
                    <li class="test" style="float: left; padding: 0;"><div id="logo_header"></div></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
<div class="container">  
    <div  id="white_block">
    <div id="registration_page">
        
        <form name = "validationForm" method="post" onsubmit="return Validation()" action="register.php">

            <?php include('errors.php'); ?>
    
			<ul class="Login_list">
                <label><p>Name</p></label>
				<li> <input type="text"   placeholder="Your Name"name="name" id="name" ></li><br>
         
                <label<p>Email</p></label>
               <li>  <input type="email" placeholder="Your Email" name="email" id="email" > </li><br>

                <label><p>Password</p></label>
				<li> <input type="password" required placeholder="....." name="password_1" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></li><br>

                <label><p>Confirm password</p></label>
				<li> <input type="password" required placeholder="....." name="password_2" id="psw" ></li> <br>

                <label><p>Country</p></label>
               <li> <input type="text" placeholder="Your Country" name="country" id="login_input" > </li><br>
			   <li> <button type="submit" class="btn" value="Submit" name="reg_user" id="btn_log">Register</button>  </li>
			   <p>
                Already a member? <a href="login.php">Sign in</a><br>
               </p>
			   </ul>
          
        </form>
         <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        <script src="jsFormValidation.js"></script>
     </div> 
</div>
      
</main>
        
</body>
</html>