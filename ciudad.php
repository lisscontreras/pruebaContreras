<?php
class ciudad
{
    private $id;
    private $nombre;
    
      
    function __construct($id, $Nombre) {  
     $this->id = $id;  
     $this->nombre = $nombre;
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
   
}
?> 
