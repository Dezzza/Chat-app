<?php
  session_start();
  include_once "config.php";
  global $connection;
  extract($_POST);
  if (isset($update)) {  
  if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($day) && !empty($month) && !empty($year) 
  && !empty($gender) && !empty($country)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
       $sql = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
          echo "$email - This email is already in use" ."<br>";
        }elseif(!preg_match("/^[0-9]{11}+$/", $phone)){
               echo "Invalid Phone Number";
        } else{
          $unique_id = $_SESSION['unique_id'];
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
                      $dob = $day. '/' .$month. '/' .$year;
                      
                      $insert_query = mysqli_query($connection, "UPDATE `users` SET `fname`='$fname',`lname`='$lname',
                      `email`='$email',`phone`='$phone',`dob`='$dob',`country`='$country',`gender`='$gender',`img`='$new_img_name' WHERE unique_id = '{$unique_id}'");
                      if($insert_query){
                            echo "Updated Successfully";
                            $_SESSION['unique_id']=$unique_id;
                      } else{
                            echo "DB Connection Error"; 
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
}

function tabledata()
{global $connection;
	$query = mysqli_query($connection, "SELECT * FROM users");
while ($result = mysqli_fetch_assoc($query)) {
	echo '<tr>
	<td>'.$result['first'].'</td>
	<td>'.$result['last'].'</td>
	<td>'.$result['email'].'</td>
	<td>'.$result['phone'].'</td>
	<td>'.$result['dob'].'</td>
	<td>'.$result['gender'].'</td>
</tr>';
}
}
?>