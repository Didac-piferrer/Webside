 <?php
 function connectaBD()
 {
    $servidor="localhost"; $usuari="tdiw-g4"; $clau="GKLmrNbx"; $dbname="tdiwg4";
    try
    {
        $connexio= new PDO("mysql:host=$servidor; dbname=$dbname; charset=UTF8",$usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){echo "Error: " . $e->getMessage();}
    return($connexio);
 }
 ?>