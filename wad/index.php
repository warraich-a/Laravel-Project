<?php 
 include('Model/config/session.php');
 include('Model/config/session_expiry.php');
    date_default_timezone_get('Europe/Copenhagen');
    include 'Model/commentConnection.inc.php';
    include 'Model/functions.php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="View/CSS/main.css" />
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
                        <li class="test" id="Username_a"><a href="View/logout.php" id = "logoutBtn">Log Out</a></li>
                        <li class="test" id="Username_a"><a href="">Username</a></li>
                        <li class="test" id="Username_a"><a href="View/createTopics.php"><b>Create topic</b></a></li>
                        <li class="test" style="float: left; padding: 0;"><a href="index.php"><div id="logo_header"></div></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="main_info">
                    <?php

                $result = GetTopicValue($conn);
                while($row = $result->fetch_assoc()){ {
                    $fileName = str_replace(' ', '', $row['name']);
                    $fileName = str_replace('?', '', $fileName);
                    $fileName = str_replace('.', '', $fileName);
                    $fileName .=".php";
                    ?>

                    <div class="post">
                        <?php echo "<a href='View/".$fileName."'>"?>
                            <br />
                            <h2 class="post_text"><?php echo $row['name'];?></h2>
                            <hr class="goodHr" />
                            <br />
                            <p class="post_text"><?php echo $row['desc'];?></p>
                            <br />
                        </a>
                    </div>

                    <?php
	                }
                }
                    ?>
                </div>
                <div class="sidebar">
                    <div class="side_post">
                        <br />
                        <p class="post_text categ_text">Categories</p>
                        <hr class="goodHr" />
                        <ul>
                            <li class="post_text">
                                <a class="a_goodFont">Trading for Money</a>
                                <p class="countText"><b>20</b></p>
                            </li>
                            <li class="post_text">
                                <a class="a_goodFont">Vault Keys Giveway</a>
                                <p class="countText"><b>10</b></p>
                            </li>
                            <li class="post_text">
                                <a class="a_goodFont">Misc Guns Locations</a>
                                <p class="countText"><b>50</b></p>
                            </li>
                            <li class="post_text">
                                <a class="a_goodFont">Looking for Players</a>
                                <p class="countText"><b>36</b></p>
                            </li>
                            <li class="post_text">
                                <a class="a_goodFont">Stupid Bugs & Solves</a>
                                <p class="countText"><b>41</b></p>
                            </li>
                            <li class="post_text">
                                <a class="a_goodFont">Video & Audio Drivers</a>
                                <p class="countText"><b>11</b></p>
                            </li>
                            <br />
                        </ul>
                    </div>
                    <div class="side_post">
                        <br />
                        <p class="post_text">Last topics</p>
                        <hr class="goodHr" />
                        <br />
                        <ul id="last_topics">
                            <li>
                                <i><a class="post_text" href="#">Lorem ipsum dolor sit amet</a></i>
                            </li>
                            <br />
                            <li>
                                <i><a class="post_text" href="#">Lorem ipsum dolor sit amet</a></i>
                            </li>
                            <br />
                            <li>
                                <i><a class="post_text" href="#">Lorem ipsum dolor sit amet</a></i>
                            </li>
                            <br />
                            <li>
                                <i><a class="post_text" href="#">Lorem ipsum dolor sit amet</a></i>
                            </li>
                        </ul>
                        <br />
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
