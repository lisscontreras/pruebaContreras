<?php
class museo

{
    private $id;
    private $nombre;
    private $id_ciudad_fk;
  
    
    
    function __construct($id, $nombre, $id_ciudad_fk) {  
     $this->id = $id;  
     $this->Nombre = $nombre;  
     $this->id_ciudad_fk = $id_ciudad_fk;
   }  
    
    
   public function getId() {  
     return $this->id;  
   }  
   public function setId($id){  
     return $this->id = $id;  
   }  
    
    public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre){  
     return $this->nombre = $nombre;  
   }  
   
   public function getIdCiudad() {  
     return $this->id_ciudad_fk;  
   }  
   public function setIdCiudad($id_ciudad_fk){  
     return $this->id_ciudad_fk = $id_ciudad_fk;  
   } 

    
   
}
?> 
