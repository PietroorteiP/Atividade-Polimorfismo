<?php

class Instrumento{
    //Atributos

    protected float $nota

    //Métodos

    public function getNotaFinal(){
        
    }

    public function getNota(): float
    {
        return $this->nota;
    }

    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}
