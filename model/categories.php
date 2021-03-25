 <?php
function getCategories($connexio)
{
    try{
        $consulta=$connexio->prepare("SELECT id,nombre, imagencat FROM CATEGORIA ");
        $consulta->execute();
        $categories=$consulta->fetchAll(PDO::FETCH_ASSOC);
        
    }catch(PDOException $e){echo "ERROR: ". $e->getMessage();}
    return($categories);
}
?>