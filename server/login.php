<?php
   
   session_start();
   include "config.php";
   $email = mysqli_escape_string($connection, $_POST['email']);
   $password = mysqli_escape_string($connection, $_POST['password']);
   if (!empty($email) && !empty($password)) {
     $sql = mysqli_query($connection,  "SELECT * FROM users WHERE email = '{$email}'");
     if(mysqli_num_rows($sql) > 0){
       $row = mysqli_fetch_assoc($sql);
       $users_pass = password_verify($password, $row['password']);
       $enc_pass = $row['password'];
       if ($users_pass == $enc_pass) {
         $status = "Active now";
         $sql2= mysqli_query($connection, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
         if ($sql2) {
          $_SESSION['unique_id'] = $row['unique_id'];
          echo "success";
         }else{
          echo "Something went wrong. Please try again later";
         }
       }else{
        echo "Email or Password is Incorrect";
       }
     }else{
      echo "$email -  This email does not exist";
     }
   }else{
    echo "All input fields are required";
   }




?>