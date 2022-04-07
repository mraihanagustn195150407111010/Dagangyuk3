<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <?= form_open_multipart('Auth/editprocess'); ?>
    <div class="form">
        <label for="email" class="col-sm-2">Username</label>
        <input type="text" name="Username" id="Username" value="<?= $user['username']; ?>">
    </div>
    <div class="form">
        <label for="email" class="col-sm-2">Username</label>
        <input type="text" name="Username" id="Username">
    </div>
</body>

</html>