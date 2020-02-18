<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <h1>Ingrese el usuario que iniciará la sesión</h1>
    <form action="start" method="POST">

        <input type="text" name="username">

        <button>Ingresar</button>

    </form>

    <?php if(isset($error)): ?>

        <span>El usuario no existe</span>

    <?php endif?>
</body>
</html>