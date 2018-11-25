<?php include 'superglobals.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class='container'>
    <h1>Server side info:</h1>
    <?php if($server): ?>
        <ul class='list-group'>
            <?php foreach($server as $key => $value): ?>
                <li class='list-group-item'>
                    <strong><?php echo $key.': ' ?></strong>
                    <strong><?php echo $value; ?></strong>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>

        <h1>Client side info:</h1>
    <?php if($client): ?>
        <ul class='list-group'>
            <?php foreach($client as $key => $value): ?>
                <li class='list-group-item'>
                    <strong><?php echo $key.': ' ?></strong>
                    <strong><?php echo $value; ?></strong>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>
    </div>
</body>
</html>