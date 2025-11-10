<?php

require_once("modelo/Instrumento.php");
require_once("modelo/Prova.php");
require_once("modelo/Participacao.php");
require_once("modelo/Trabalho.php");


$notas = array();

do {

    echo "\n-------MENU------- \n";
    echo "1- Ver média final \n";
    echo "2- Fazer prova \n";
    echo "3- Fazer trabalho \n";
    echo "4- Ver nota de participação \n";
    echo "0- Sair \n";
    echo "------------------ \n";

    $opcao = readline("Escolha uma opção: \n");

    switch ($opcao) {
        case 1:

            $total = 0;
            $quantidade = count($notas);

            if ($quantidade > 0) {
                foreach ($notas as $notaObj) {
                    $total += $notaObj->getNotaFinal();
                }
                $media = $total / $quantidade;
            } else {
                $media = 0;
            }

            echo "\nSua média final é: " . $media . "\n";
            break;
        case 2:
            $prova = new Prova;
            $prova->setNota(readline("Informe a sua nota na prova: \n"));
            $prova->getNotaFinal();
            echo "Sua nota com a prova é: " . $prova->getNotaFinal() . "\n";

            array_push($notas, $prova);

            break;
        case 3:
            $trabalho = new Trabalho;
            $trabalho->setNota(readline("Informe a sua nota no trabalho: \n"));
            $trabalho->getNotaFinal();
            echo "Sua nota com o trabalho é: " . $trabalho->getNotaFinal() . "\n";

            array_push($notas, $trabalho);

            break;
        case 4:
            $participacao = new Participacao;
            $participacao->setNota(readline("\n Informe a sua nota: "));
            $participacao->getNotaFinal();
            echo "Sua nota de participação é: " . $participacao->getNotaFinal() . "\n";

            array_push($notas, $participacao);

            break;
    }
} while ($opcao != 0);
