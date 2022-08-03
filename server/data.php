<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= ' 
           <ul class="list-unstyled chat-list chat-user-list">
            <li>
            <a href="index.php?user_id'. $row['unique_id'] .'">
            <div class="d-flex">                            
                <div class="chat-user-img online align-self-center me-3 ms-0">
                    <img src="server/uploads/'.$row['img'] . '" class="rounded-circle avatar-xs" alt="">
                </div>
                <div class="flex-grow-1 overflow-hidden">
                    <span class="text-truncate font-size-15 mb-1">'. $row['fname'] . " " . $row['lname']. '</span>
                    <p class="chat-user-message text-truncate mb-0">'. $you . $msg . '</p>
                </div>
                <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
            </div>
            
        </a>
    
            </li>
        </ul>
    ';

       
    }
?>











