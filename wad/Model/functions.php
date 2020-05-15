<?php 
    function commentListValue($id){
        $link = mysqli_connect("studmysql01.fhict.local","dbi435688","webhosting54","dbi435688");
        $result = mysqli_query($link,"SELECT * FROM comm WHERE tid = '$id'");
        return $result;
    }

    function GetAdminValue($conn){
        $sql ="SELECT * FROM comm ORDER BY id";
        $result = $conn->query($sql);
        return $result;
    }

    function GetTopicValue($conn){
        $sql ="SELECT * FROM topic";
        $result = $conn->query($sql);
        return $result;
    }

    function GetSetComm($uid,$date,$message,$conn){
        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid','$date','$message')";
        $result = $conn->query($sql);
    }

    function GetDelValue($cid,$conn){
        $sql = "DELETE FROM comm WHERE id = '$cid'";
        $result = $conn->query($sql);
    }
?>