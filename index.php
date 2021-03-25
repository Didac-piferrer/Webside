<?php

    session_start();

    require __DIR__. '/model/connectaDb.php';
    $conn=connectaBD();
    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT id, email, password FROM USUARIO WHERE id=:id');
        $records->bindParam(':id',$_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0) {
            $user = $results;
        }
    }

    if(isset($_GET['accio'])){
        $accio=$_GET['accio'];
        switch($accio) {
            case 'llistar-categories':
            include __DIR__. '/resource_llistar_categories.php';
            break;
            case 'llistar-productes':
            include __DIR__. '/resource_llistar_categories.php';
            break;
        }
    }else {
        include __DIR__ . '/resource_portada.php';
    }
?>
