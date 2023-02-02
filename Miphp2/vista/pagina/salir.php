<?php
session_start();
if(session_destroy()){
        header("location: index.php?pagina=ingreso");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salir</title>
</head>
<body>
    <h1 class="text-center">Salir</h1>
</body>
</html>
