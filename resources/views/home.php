<?php 
    session_start();
    $_SESSION["id"]   = $id;
    $_SESSION["user"] = $user;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido <?php echo $user ?> </h1>
    <a href="files/register">Subir un archivo</a>
</body>
</html>