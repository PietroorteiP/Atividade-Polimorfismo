<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento
{
    //Métodos

     public function getNotaFinal(): float{
        $notaf =  $this->nota + ($this->nota*0.2);

         if($notaf > 10){
            return 10;
         }else{
            return $notaf;
        }
            
        }

    }


