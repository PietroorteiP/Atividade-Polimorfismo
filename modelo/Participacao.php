<?php

require_once("Instrumento.php");

class Participacao extends Instrumento
{
    //Atributos

    //Métodos
    public function getNotaFinal(): float
    {
        $notaf = $this->nota;
        if ($notaf > 10) {
            return 10;
        } else {
            return $notaf;
        }
    }
}
