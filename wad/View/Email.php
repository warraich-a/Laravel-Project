<?php include('../Controller/email.request.php') ?>
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
                    <center>
                <form method="post" action="Email.php"> 
                    <label for="email"><h3> Enter Your Email Address! </h3></label> <br> <br>
                    <input type="text" name="emailToUse" class = "login_input"> <br> <br>
                    <button type="submit" class="btn" name="SendMail" id="btn_log"><p>Send Email<p></button> </li>
                </form>
                    </center>
                    <br><br>
                </div>    
            </div>
        </div>
    </main>
</body>
</html>