<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Ingrese el usuario que desea registrar</h1>
    <form action="store" method="POST">

        <input type="text" name="username">

        <button>Registrar</button>

    </form>
    <?php if(isset($error)): ?>

        <span>Error al registrar usuario, vuelva a intentar</span>

    <?php endif?>

    <script></script>
</body>
</html>