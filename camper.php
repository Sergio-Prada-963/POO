<?php
    class Camper
    {   
        //1. Atributos Con Modificadores de acceso
        // ------Private, Public, and Protected
        private $nombre;
        private $email;
        private $celular;
        //2. Constructor (metodo magico)
        //en ocaciones se inicializa con valores parametros
       /*  public function __construct($nombre, $email, $camper)  //-------ideal para inicializar valores de propiedades
        {
            $this->nombre =  $nombre;
            $this->email = $email;
            $this->celular = $camper;
        } */
        //3. metodos (Getters and setters)
        public function getNombre()
        {
            return $this->nombre;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getCelular()
        {
            return $this->celular;
        }
        //------ get --> obtener valores de atributos
        //------ set --> modificar valores de atributos
        //metodo setters
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setCelular($celular)
        {
            $this->celular = $celular;
        }
    }
    //instancia de la clase del (objeto) --> variable de instancia 
    //---- datos de arriba "Alejandro", "alejanprada140705@gmail.com", 315353360
    $camper = new Camper();
    $camper->setNombre("Sergio");
    $camper->setEmail("alejanprada140705@gmail.com");
    $camper->setCelular("315353360");
    echo $camper->getNombre() . "<br>";
    echo $camper->getEmail() . "<br>";
    echo $camper->getCelular() . "<br>";
?>