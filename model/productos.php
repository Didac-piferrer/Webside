 <?php
function getProductes($connexio)
{
    $variable=$_GET['categoriaID']
    try{
        $consulta=$connexio->prepare("SELECT id,nombre,imagen,precio FROM PRODUCTO WHERE id_categoria=$variable");
        $consulta->execute();
        $productos=$consulta->fetchAll(PDO::FETCH_ASSOC);
        
    }catch(PDOException $e){echo "ERROR: ". $e->getMessage();}
    return($productos);
}
?>