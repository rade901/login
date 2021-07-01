<?php
session_start();

if(!isset($_SESSION['autoriziran'])){
    header('location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zasticena stranica</title>
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
<h1><a href="#">Dobrodošli</a></h1><p><?php echo $_SESSION['autoriziran'] ?></p><a class="odjava" href="odjava.php">Odjavi me </a>
</body>
</html>