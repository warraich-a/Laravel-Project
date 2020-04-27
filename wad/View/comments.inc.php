<?php 

function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid','$date','$message')";
        $result = $conn->query($sql);
    }
    
}
function delComments($conn){
    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];

        $sql = "DELETE FROM comments WHERE cid = '$cid'";
        $result = $conn->query($sql);
    }
}

function getComments($conn){
    $sql ="SELECT * FROM comments";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='question'>";
        echo "<br> <p class='post_text'>";
        echo $row['uid'];
        echo "</p>";
        echo " <p class='post_text' style = 'font-size: 10px;'>";
        echo $row['date'];
        echo "</p>";
        echo "<br> <p class='post_text'>";
        echo $row['message'];
        echo "</p>";
        echo "<br> ";
        echo "</div>";
        
    }
    

}
function getAdminComments($conn){
    $sql ="SELECT * FROM comments";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='question'>";
        echo "<br> <p class='post_text'>";
        echo $row['uid'];
        echo "</p>";
        echo " <p class='post_text' style = 'font-size: 10px;'>";
        echo $row['date'];
        echo "</p>";
        echo "<br> <p class='post_text'>";
        echo $row['message'];
        echo "</p>";
        echo "<br> ";
        echo "</div>";
        echo "<form method = 'POST' action='".delComments($conn)."' >";
        echo "<input type='hidden' name='cid' value='".$row['cid']."' class='post_text'>";
        echo "<button type='submit' name='commentDelete' class='post_text' id ='btn_log'>Delete</button>";
        echo "</form>";
        
    }
    

}