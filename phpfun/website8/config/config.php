<?php

// create connection
$conn = mysqli_connect('localhost', 'root', '12345', 'phpblog');

//check connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to MYSQL'. mysqli_connect_errno();
}
?>
