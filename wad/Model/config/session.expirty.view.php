<?php
//If not remove his session after 1 hour

if(isset($_SESSION['email']) && !isset($_SESSION['remember_me'])) {
    $current_time = time();
    if($current_time - $_SESSION['loggedin_time'] >= 3600){
        session_start();

        // Unset all of the session variables.
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['remember_me']);
        unset($_COOKIE['uid']);
        // Finally, destroy the session.    
        session_destroy();
            
            $directory = dirname($_SERVER["PHP_SELF"]);
            $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
            $path .=$_SERVER["SERVER_NAME"]. $directory;        
            $link = $path."/login.php";

            // $absolute_path = realpath("$link");
            // Include URL for Login page to login again.
            header("Location: $link");;
		}
    }
    
    ?>