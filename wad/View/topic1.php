<?php 

    date_default_timezone_get('Europe/Copenhagen');
    include 'connection.inc.php';
    include 'comments.inc.php';
?>

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
                        <li class="test" style="float: left; padding: 0;"><div id="logo_header"></div></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div >
                    <div class="question">
                        <br>
                        <h2 class="post_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <br>
                        <p class="post_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat suscipit finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus nec mauris tempor, rhoncus mi eu, euismod purus. Quisque quis scelerisque augue. Mauris consectetur, odio a condimentum hendrerit</p>
                        <br>
                        <?php
                        echo "<form action='".setComments($conn)."' method='POST'>
                            <h2 class='post_text'>Name</h2>
                            <input type='' name='uid' value='Anon' class='post_text' id = 'login_input'><br>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."' class='post_text'><br>
                            <h2 class='post_text'>Comment</h2><textarea name='message' class='post_text' id ='comment_textarea'></textarea><br>
                            <button type='submit' name='commentSubmit' class='post_text' id = 'btn_log'>submit</button>
                            </form>";
                        
                        ?>
                    </div>
                    
                    <?php 
                    getComments($conn);
                    ?>
                    
                    
                </div>

            </div>

        </main>
        
    </body>
</html>