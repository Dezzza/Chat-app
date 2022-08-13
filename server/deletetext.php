<?php
    session_start();
    if(isset($_SESSION['msg_id'])){
        include_once "config.php";
        $msg_id = mysqli_real_escape_string($connection, $_GET['msg_id']);
        if(isset($msg_id)){
            $sql = mysqli_query($connection, "DELETE FROM `msg` WHERE msg_id={$_GET['msg_id']}");
        }  
    }
?>