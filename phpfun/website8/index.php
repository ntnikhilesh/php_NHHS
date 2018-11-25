<?php 
require('config/db.php');

$query = 'SELECT * FROM posts';

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($posts);

mysqli_free_result($result);

mysqli_close($conn);

?>