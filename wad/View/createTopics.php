<?php
    include '../Model/newTopicFunc.php';
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
            <li class="test" id="Username_a"><a href="" id = "logoutBtn">Log Out</a></li>
            <li class="test" id="Username_a"><a id="">Username</a></li>
            <li class="test" style="float: left; padding: 0;"><a href="../index.php"><div id="logo_header"></div></a></li>
        </ul>
    </div>
</div>
</header>
    <main>
        <div class="container">    
            <div  id="white_block"  >
                <div id="login_page">
                <form method="POST">
                    <center>
                    <h3>Your question</h3><br>
                    <input type="text" name="file"  id = "file" class = "login_input" style="width: 400px"><br>
                    <h3>Description</h3><br>
                    <textarea type="text" name="desc"  id = "desc" class = "login_input" style="min-width: 464px;min-height: 251px;max-width: 464px;max-height: 251px; "> </textarea><br><br>
                    <input type="submit" name="test" id="test" value="Create" class="btn_log"/><br><br>
                    </center>
                </form>
                   
                    
                </div>    
            </div>
        </div>
    </main>
        <footer>
         
        </footer>
</body>
</html>