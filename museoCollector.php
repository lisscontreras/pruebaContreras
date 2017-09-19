<?php

include_once('museo.php');
include_once('Collector.php');

class museoCollector extends Collector
{
    function showmuseo() {
        $rows = self::$db->getRows("SELECT * FROM museo "); 
        echo "Listado";
        $arraymuseo= array();        
        foreach ($rows as $c){
            $aux = new museo($c{'id'},$c{'nombre'},$c{'id_ciudad_fk'});
            array_push($arraymuseo, $aux);
        }
        return $arraymuseo;        
    }
    function showmuseos($id) {
        $rows = self::$db->getRows("SELECT * FROM museo where id= ? ", array ("{$id}"));        
        $ObjDemo= new museo($rows[0]{'id'},$rows[0]{'nombre'},$rows[0]{'id_ciudad_fk'});
        return $ObjDemo; 
    }
    

function UpdateDemo($id,$nombre,$id_ciudad_fk) {
    $insertrow = self::$db->updateRow("UPDATE museo SET nombre = ?, id_ciudad_fk= ? where id= ? ", array ("{$nombre}","{$id_ciudad_fk}",$id));

}

    function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.museo where id = ? ", array ("{$id}"));
    }
    

    function createDemo($nombre,$id_ciudad_fk){  

    $insertrow = self::$db->insertRow("INSERT INTO public.museo(nombre, id_ciudad_fk) VALUES (?,?)", array ("{$nombre}","{$id_ciudad_fk}"));             
  
}

}
?>
