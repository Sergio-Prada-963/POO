<?php
class Jugador{
    //metodo estatico no necesita objetos no instancia para acceder a esos objetos
    private static $goles = 5;
    public static function info()
    {
        return self::$goles;
    }
}
/* $jugador = new Jugador();
echo $jugador->info() */
echo Jugador::info();
?>