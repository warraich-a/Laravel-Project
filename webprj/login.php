<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
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
                    <form method="post" action="login.php">
                        <?php include('errors.php'); ?>
                        <ul class="Login_list">
                        <li> <h2>Member Login </h2> </li><br>
                            <label><p>Username</p></label><br>
                            <li> <input type="text" name="email" id = "login_input"> </li><br>
                            <label><p>Password</p></label><br>
                            <li><input type="password" name="password_login" id="login_input">  </li> 
                            <br>
                            <li> <button type="submit" class="btn" name="login_user" id="btn_log"><p>Login<p></button> </li>  <br>  
                            <li> <button type="button" name="Forget Password" value="Forget Password" id="btn_log"> Forget Password </button> </li>
                            </ul>
                    </form>
                    <div class="registeration">
                        <li>
                        <p>Not yet a member? <a href="register.php">Sign up</a></p>
                        </li>
                    </div>
                </div>    
            </div>
        </div>
    </main>
        <footer>
         
        </footer>
</body>
</html>