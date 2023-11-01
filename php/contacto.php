<?php

require_once './db.php';


class Contacto extends Database{


    public function __construct (  private string $nombre='', private string $email='', private string $tema='', private string $mensaje=''){
        parent::__construct();

    }

    public function save(){

        $query= $this->connect()->prepare("INSERT INTO contacto (nombre,email,tema,mensaje) VALUES (:nombre, :email, :tema, :mensaje)" );
        
        $query->execute(['nombre'=>$this->nombre, 'email'=>$this->email, 'tema'=>$this->tema, 'mensaje'=>$this->mensaje]);
    }
     }