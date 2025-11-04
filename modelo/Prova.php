<?php

require_once("Instrumento.php");

class Prova extends Instrumento{
    //Métodos

    public function getNotaFinal(){
        return parent::nota + ($this->nota*0.3);

         if($this->nota > 10){
            return 10;
        else{
            return nota;
        }
            
        }

    }
}