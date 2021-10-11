<?php
    include 'model.php';
    include 'view.php';
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php
        
        if (isset($_GET['getrandom'])) {
            $view = new View();
            redirect($view -> showRandomSecret());  
        }
        function redirect($id) {
            ob_start();
            header('Location: '. '/secret.php?id='. $id);
            ob_end_flush();
            die();
        }
    ?>
    <main>
        <h1>Welcome to the website!</h1>
        <p>On this site you are able to read secrets of other users or share yours with other.</p>
        <button onclick="document.location='?getrandom=true'">Show a secret</button>
        <button onclick="document.location='/postsecret.php'">Share a secret</button>
    </main>
</body>
</html>