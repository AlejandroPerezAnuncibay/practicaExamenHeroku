<?php
/**
* @author evilnapsis
**/
function connect(){
    

    try{
        $db = new PDO("mysql:eu-cdbr-west-03.cleardb.net;dbname=heroku_e91d6da0e5ae3f7",'b55227fd0484d8','7aa98dac');
        echo "conexión correcta a la base de datos";
        return $db;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

connect();

?>
