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
    <title>Secret</title>
</head>
<body>
    <main>
        <h1>Secret</h1>
        <button onclick="document.location='/'">Home page</button>
            <?php
                if (isset($_GET['id'])) {
                    $view = new View();
                    $sec = $view -> showHashSecret($_GET['id']);
                    if($sec){
                        echo $sec;
                        $cont = new Controller();
                        $cont -> minusViewExp($_GET['id']);
                    }
                    else {
                        echo 'There is no secret';
                    }
                }
            ?>
    </main>
</body>
</html>