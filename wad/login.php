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
                    
                             <center>
                            <h2>Member Login </h2> <br>
                            <label><p>Username</p></label><br>
                             <input type="text" name="email" class = "login_input"> <br>
                            <label><p>Password</p></label><br>
                            <input type="password" name="password_login" class="login_input">  
                            <br>
                            <button type="submit" class="btn" name="login_user" id="btn_log"><p>Login<p></button>   <br>  <br>
                             <button type="button" name="Forget Password" value="Forget Password" id="btn_log"> Forget Password </button> 
                             </center>
                    </form>
                   
                    <div class="registeration">
                        <li>
                        <p>Not yet a member? <a href="register.php">Sign up</a></p>
                        <br>
                        <br>
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