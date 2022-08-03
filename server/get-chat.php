<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
<<<<<<< HEAD
        $incoming_id = mysqli_real_escape_string($connection, $_POST['incoming_id']);
=======
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
>>>>>>> 2f0c52dd718ada22dc31c1125f6fdf78a3d19824
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
<<<<<<< HEAD
        $query = mysqli_query($connection, $sql);
=======
        $query = mysqli_query($conn, $sql);
>>>>>>> 2f0c52dd718ada22dc31c1125f6fdf78a3d19824
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
<<<<<<< HEAD
                                <img src="uploads/images/'.$row['img'].'" alt="">
=======
                                <img src="php/images/'.$row['img'].'" alt="">
>>>>>>> 2f0c52dd718ada22dc31c1125f6fdf78a3d19824
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>