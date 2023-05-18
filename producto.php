<?php
    class Producto
    {
        private $nombre;
        private $precio;
        private $cantidad;
        private $tipo;
        private $color;
        private $tamaño;
        private $calidad;

        public function __construct($nombre, $precio, $cantidad, $tipo, $color, $tamaño, $calidad)  //-------ideal para inicializar valores de propiedades
        {
            $this->nombre =  $nombre;
            $this->precio = $precio;
            $this->cantidad = $cantidad;
            $this->tipo = $tipo;
            $this->color = $color;
            $this->tamaño = $tamaño;
            $this->calidad = $calidad;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
        public function getPrecio()
        {
            return $this->precio;
        }
        public function getCantidad()
        {
            return $this->cantidad;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function getTamaño()
        {
            return $this->tamaño;
        }
        public function getCalidad()
        {
            return $this->calidad;
        }

        /* public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }
        public function setCantidad($cantidad)
        {
            $this->cantidad = $cantidad;
        }
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }public function setColor($color)
        {
            $this->color = $color;
        }
        public function setTamaño($tamaño)
        {
            $this->tamaño = $tamaño;
        }
        public function setCalidad($calidad)
        {
            $this->calidad = $calidad;
        } */
    }
    $producto = new Producto("Silla Bonita :)", "$5.000.000", "20 sillas :)", "Muy buena calidad :)", "Silla de tipo para sentarce :)", "Color Negro And Marron :)", "Es plegable y ocupa poco espacio :)");
/*     $producto->setNombre("Silla Bonita :)");
    $producto->setPrecio("$5.000.000");
    $producto->setCantidad("20 sillas :)");
    $producto->setCalidad("Muy buena calidad :)");
    $producto->setTipo("Silla de tipo para sentarce :)");
    $producto->setColor("Color Negro And Marron :)");
    $producto->setTamaño("Es plegable y ocupa poco espacio :)"); */

    echo "<h2>Nombre del Producto :  </h2>";
    echo $producto->getNombre() . "<br>";
    echo "<h2>Precio del Producto :  </h2>";
    echo $producto->getPrecio() . "<br>";
    echo "<h2>Calidad del Producto :  </h2>";
    echo $producto->getCalidad() . "<br>";
    echo "<h2>Cantidades disponibles :  </h2>";
    echo $producto->getCantidad() . "<br>";
    echo "<h2>Tipos del Producto :  </h2>";
    echo $producto->getTipo() . "<br>";
    echo "<h2>Colores del Producto :  </h2>";
    echo $producto->getColor() . "<br>";
    echo "<h2>Tamaño de Producto :  </h2>";
    echo $producto->getTamaño() . "<br>";
?>