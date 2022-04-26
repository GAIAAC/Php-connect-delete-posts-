<?php
require_once('connect.php');
$connection = connect();
$users = $connection->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <form action="get-post.php" method="POST">

        <span>Titolo</span>

        <input name="title"></input>

        <textarea name="content"></textarea>

        <div>
            <input type="submit" value="Pubblica" name="save">
        </div>

        <select name="id_users">
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['nome']; ?>"><?= $user['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        </select>

    </form>

</body>

</html>