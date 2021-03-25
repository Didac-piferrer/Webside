<!DOCTYPE html>
<html>
<head>
    <title>LISTA DE CATEGORIAS</title>
    <meta charset="utf-8"/>
<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <!--<link rel="stylesheet" type="text/css" href="css/estilo.css" >-->
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <!--<script src="jquery.js"></script>
    <script src="js/scrpit.js"></script>-->
</head>

<body>
<header >
   
    <?php
    require __DIR__. '/header.php';
    ?>

</header>

<div id="productos">
<?php


 
    require __DIR__. '/controller/llistarproductes.php';

?>
</div>
<footer>
    <?php 
    if(!isset($_GET['accio']))
    {
    require __DIR__. '/footer.php';
    }
    ?>
</footer>
</body>
</html>
