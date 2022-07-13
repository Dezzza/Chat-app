<?php
  session_start();
  include_once "config.php";
  $fname = mysqli_real_escape_string($connection, $_POST['fname']);
  $lname = mysqli_real_escape_string($connection, $_POST['lname']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
  $day = mysqli_real_escape_string($connection, $_POST['day']);
  $month = mysqli_escape_string($connection, $_POST['month']);
  $year = mysqli_escape_string($connection, $_POST['year']);
  $gender = mysqli_escape_string($connection, $_POST['gender']);
  $country = mysqli_escape_string($connection, $_POST['country']);
  
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);

  if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) 
  && !empty($cpassword) && !empty($day) && !empty($month) && !empty($year) 
  && !empty($gender) && !empty($country)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $sql = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
          echo "$email - This email is already in use" ."<br>";
        }if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
          echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
       } elseif ($password !== $cpassword) {
          echo ('Password miss match');
        }elseif(!preg_match("/^[0-9]*$/", $phone)){
               echo "Only numbers are allowed";
        } else{
          if (isset($_FILES['image'])) {
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];

            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if(in_array($img_ext, $extensions) === true){
              $types = ['image/jpeg', "image/jpg", "image/png"];
               if(in_array($img_type, $types) === true){
                  $time = time();
                  $new_img_name = $time.$img_name;
                  if (move_uploaded_file($tmp_name, "uploads/".$new_img_name)) {
                      $ran_id = rand(time(), 1000000000);
                      $status = "Active now";
                      $encrypt_pass = trim($password);
                      $encrypt_pass_hash = password_hash($encrypt_pass, PASSWORD_DEFAULT);
                      $dob = $day. '/' .$month. '/' .$year;
                      $insert_query = mysqli_query($connection, "INSERT INTO users (unique_id, fname, lname, email, phone, password, dob, country, gender, img, status)
                      VALUES ('{$ran_id}', '{$fname}', '{$lname}', '{$email}', '{$phone}', '{$encrypt_pass_hash}', '{$dob}', '{$country}','{$gender}', '{$new_img_name}', '{$status}')");
                      if($insert_query){
                        $select_sql2 = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}'");
                        if(mysqli_num_rows($select_sql2) > 0){
                            $result = mysqli_fetch_assoc($select_sql2);
                            $_SESSION['unique_id'] = $result['unique_id'];
                            echo "success";
                        }else{
                            echo "This email address does not exist"; 
                        }
                      }else{
                            echo "Something went wrong. Please try again";
                      }

                  }
               }else{
                        echo "Please upload an image file - jpeg, png, jpg";
               }
            }else{
              echo "Please upload an image file - jpeg, png, jpg";
            }

          }
        }
    }else{
      echo "$email is not a valid email";
    }
  }else{
    echo "All input fields are required!";
  }


?>