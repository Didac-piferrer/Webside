<?php
    session_start();
    require __DIR__. '/model/connectaDb.php';
    $conn = connectaBD();
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $records=$conn->prepare('SELECT id, email, password FROM USUARIO WHERE email=:email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id'];
            header('Location: /resource_portada.php');
        }else{
            $message = 'Credenciales no coinciden';
        }

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css" >-->
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <!--<script src="jquery.js"></script>
    <script src="js/scrpit.js"></script>-->
</head>

<body>
<header >
    <?php require __DIR__. '/header.php';?>

</header>
<div id="inicioSesion">
    <section>
        <p> Completa el siguiente formulario para iniciar sesión:</p>

        <?php
        if (!empty($message)): ?>
            <p><?=$message ?></p>
        <?php endif; ?>

        <form action="iniciosesion.php" target="_self" method="post">
            <input type="mail" name="mail" placeholder="Introduzca su correo"><br/>
            <input type="text" name="contraseña" placeholder="Introduzca su contraseña"><br/>
        <input type="submit" value="iniciar">
        </form>

    </section>
</div>
<footer>
    <?php require __DIR__. '/footer.php';?>
</footer>

</body>
</html>
