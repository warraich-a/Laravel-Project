<?php 

    date_default_timezone_get("Europe/Copenhagen");
    include "../Model/commentConnection.inc.php";
    include "comments.inc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/main.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <title>Forum</title>
    </head>
    <body>
        <header>
            <div id="main_img"></div>
            <div id="header_menu">
                <div class="container">
                    <ul>
                        <li class="test">
                            <a><div id="img_prof"></div></a>
                        </li>
                        <li class="test" id="Username_a"><a id="">Username</a></li>
                        <li class="test" id="Username_a"><a href="createTopics.php"><b>Create topic</b></a></li>
                        <li class="test" style="float: left; padding: 0;"><a href="../index.php"><div id="logo_header"></div></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="question">
                    <br />
                    <h2 class="post_text">Topic?</h2>
                    <br />
                    <p class="post_text">
                         qwe
                    </p>
                    <br />
                    <p class="post_text"><b>Post Your Comment Below</b></p>
                    <div class="post_text">
                        <input type="text" class="name" placeholder="Name" id="login_input" /><br />
                        <input type="email" class="email" placeholder="Email" id="login_input" /><br />
                        <input type="hidden" name="tId" class="tId" value="18" /><br />
                        <textarea class="comment" id="comment_textarea"></textarea>
                        <br />
                        <br />
                        <a href="javascript:void(0)" class="submit"><button id="btn_log">Submit</button></a>
                        <br />
                        <br />
                    </div>
                </div>
                
                <?php session_start();$_SESSION["tid"] = 18;?>
                <div class="comment_listing"></div>
                
            </div>
        </main>
    </body>
</html>
<script src="JS/AddComment.js"></script>
