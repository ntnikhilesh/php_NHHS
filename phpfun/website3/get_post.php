<?php 
    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
        echo $name. '\'s profile....';
    }

    // if(isset($_POST['name'])){
    //     $name = htmlentities($_POST('name'));
    // }

    //     if(isset($_REQUEST['name'])){
    //     $name = htmlentities($_REQUEST('name'));
    // }

    
?>


<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method='GET' action='get_post.php'>
    <div>
        <label> Name </label>
        <input type='text' name='name'>
    </div>
    <div>
        <label> Email </label>
        <input type='text' name='email'>
    </div>
    <input type='submit' value='Submit'>
    </form>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method='POST' action='get_post.php'>
    <div>
        <label> Name </label>
        <input type='text' name='name'>
    </div>
    <div>
        <label> Email </label>
        <input type='text' name='email'>
    </div>
    <input type='submit' value='Submit'>
    </form>
</body>
</html> -->


<body>
    <form method="GET" action="get_post.php">
    <div>
        <label> Name </label>
        <input type="text" name="name">
    </div>
    <div>
        <label> Email </label>
        <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Deb">Deb</a>
        </li>
        <li>
            <a href="get_post.php?name=Toshan">Toshan</a>
        </li>
    </ul>
   
</body>