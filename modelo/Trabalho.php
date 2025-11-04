<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento{
    //Métodos

    public function getNotaFinal(){
        return parent::nota + ($this->nota*0.2);

         if($this->nota > 10){
            return 10;
        else{
            return nota;
        }
        }

    }
}