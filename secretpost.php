<?php
    include 'model.php';
    include 'view.php';
    include 'controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <!-- FONT -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret shared</title>
</head>
<body>
    <main>
        <h1>Secret shared!</h1>
        <button onclick="document.location='/'">Home page</button>
        <p>Thanks for sharing your secret. You can share it with this link: </p>
            <?php
            function rndString(){
                return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1, 10);
            }
                $hash = rndString();
                echo $hash;
                echo 'Secret: ' . $_POST["secret"] . '<br />';
                echo 'Expview: ' . $_POST["expview"] . '<br />';
                echo 'TTL: ' . $_POST["ttl"] . '<br />';
                $post = new Controller();
                $post-> postSecret($_POST["secret"], $_POST["expview"], $_POST["ttl"], $hash);
                echo 'Valami: ' . $post-> deleteSecret();
            ?>
    </main>
</body>
</html>