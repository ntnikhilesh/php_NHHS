<?php 
require('config/db.php');

$query = 'SELECT * FROM posts';

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
</head>
<body>
    <div class='container'>
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>
            <div class='well'>
                <h3><?php echo $post['title']; ?></h3>
                <small>Created on <?php echo $post['created_at']; ?>
                by <?php echo $post['author']; ?>
                </small>
                <p><?php echo $post['body']; ?></p>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>