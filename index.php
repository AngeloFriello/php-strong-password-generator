<?php  
    include 'functions.php';
    
    $length = $_GET['lunghezza'] ?? null;

    $password = randomPassword($length)

    // if ($password) {
    //     $_SESSION['password'] = $password;
    //   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="number" name="lunghezza">
        <input type="submit" value="invia">
    </form>

    <h1>la tua password  è : <?php echo $password ?></h1>
</body>
</html>
