<?php

require_once("Instrumento.php");

class Participacao extends Instrumento{
    //Atributos
    
    //Métodos
    public function getNotaFinal(){
        return parent::nota;

         if($this->nota > 10){
            return 10;
        else{
            return nota;
        }
        }

    }
}