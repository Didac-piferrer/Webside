<?php
require_once __DIR__. '../model/connectaDb.php';
require_once __DIR__. '/../model/productos.php';
$connexio=connectaBD();
$productes=getProductes($connexio);
include __DIR__. '/../views/llistar_productes.php';
?>