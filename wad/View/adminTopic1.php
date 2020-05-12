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
                        
                    </div>
                    
                    <?php 
                    getAdminComments($conn);
                    ?>
                    
                    
                </div>

            </div>

        </main>
        
    </body>
</html>