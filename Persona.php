<?php


class Persona
{
    public $nombre;
    public $peso;
    public $estatura;
    public function __construct($nombre, $peso, $estatura)
    {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->estatura = $estatura;
    }


    function calcularImc($Imc,$peso, $estatura){
        $Imc=($peso)/($estatura*$estatura);

    if ($Imc < 18.5){
        echo ('Bajo de peso');
    } elseif ($Imc >= 18.5 && $Imc <= 24.9){
        echo ('Peso saludable');
    } elseif ($Imc >= 25.0 && $Imc <= 29.9){
        echo ('Sobrepeso');
    } elseif ($Imc >= 30.0){
        echo ('Obesidad');}
    }
}
