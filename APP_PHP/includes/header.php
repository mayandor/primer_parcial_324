<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Chivo:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="topnavbar">
        <a href="functions/salir.php">Salir</a>
        <span><b>User:</b><?php echo $_SESSION['usuario'] ?></span>
        
        <img src="<?php echo 'img/'.$_SESSION['imagen_perfil']; ?>" width="50">
    </div>