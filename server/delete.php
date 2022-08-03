<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $delete_id = mysqli_real_escape_string($connection, $_GET['delete_id']);
        if(isset($delete_id)){
            $status = "Offline now";
            $sql = mysqli_query($connection, "DELETE FROM `users` WHERE unique_id={$_GET['delete_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../auth-login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../auth-login.php");
    }
?>