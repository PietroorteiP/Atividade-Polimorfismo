<?php

require_once("Instrumento.php");

class Prova extends Instrumento{
    //Métodos

    public function getNotaFinal(): float{
        $notaf =  $this->nota + ($this->nota*0.3);

         if($notaf > 10){
            return 10;
         }else{
            return $notaf;
        }
            
        }

    }
