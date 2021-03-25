<?php
    require __DIR__. '/model/connectaDb.php';
    $conn = connectaBD();
    $message = '';
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO USUARIO (email, password) VALUES (:email,:password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);
        $contra = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $contra);

        if ($stmt->execute()){
            $message = 'Successfuly created new user';
        }
        else {
            $message = 'Sorry there must have been an issue creating your account';

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
<?php
    if (!empty($message)): ?>
        <p><?=$message ?></p>
    <?php endif; ?>

<div class="registro"><!--action="resourceregistro.php"-->
    <form  method="post">
        <input type="text" name="nombre" placeholder="nombre"><br/>
        DIRECCIÓN: <input type="text" name="direccion"><br/>
        PAÍS: <select name="pais">
        <option value="ESPAÑA">ESPAÑA</option>
        <option value="PORTUGAL">PORTUGAL</option>
        <option value="FRANCIA">FRANCIA</option>
        <option value="ALEMANIA">ALEMANIA</option>
        <option value="AUSTRIA">AUSTRIA</option>
        <option value="HOLANDA">PAÍSES BAJOS</option>
        <option value="BÉLGICA">BÉLGICA</option>
        <option value="ANDORRA">ANDORRA</option>
        <option value="REINOUNIDO">REINO UNIDO</option>

    </select><br/>
        EMAIL: <input type="mail" name="email"><br/>
        POBLACIÓN: <input type="text" name="población"><br/>
        CÓDIGO POSTAL: <input type="text" name="codigopostal"><br/>
        USUARIO: <input type="text" name="usuario"></br>
        CONTRASEÑA: <input type="text" name="password"><br/>

        <input type="reset" value="LIMPIAR">
        <input type="submit" value="REGISTRARSE">
    </form>
</div>
<footer>
    <?php require __DIR__. '/footer.php';?>
</footer>

</body>
</html>