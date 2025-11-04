<?php

require_once("modelo/Instrumento.php");
require_once("modelo/Prova.php");
require_once("modelo/Participacao.php");
require_once("modelo/Trabalho.php");

$instrumento = new Instrumento;
$instrumento -> setNota(60);
$notas = array();

do{

echo "-------MENU------- \n";
echo "1- Ver média final \n";
echo "2- Fazer prova \n";
echo "3- Fazer trabalho \n";
echo "4- Ver nota de participação \n";
echo "0- Sair \n";
echo "------------------ \n";

$opcao = readline("Escolha uma opção: \n");

switch ($opcao) {
    case 1:
       
        echo "Sua média final é";

        break;
    case 2:
        $prova = new Prova;
        $prova->setNota(readline("\n Informe a sua nota na prova: "));
        $prova->getNotaFinal();  
        echo "Sua nota com a prova é: " . $prova->getNotaFinal();

        array_push($notas, $prova);

      break;
    case 3:
        $trabalho = new Trabalho;
        $trabalho->setNota(readline("\n Informe a sua nota no trabalho: "));
        $trabalho->getNotaFinal();
        echo "Sua nota com o trabalho é: " . $trabalho->getNotaFinal();

        array_push($notas, $trabalho);

        break;
    case 4:
        $participacao = new Participacao;
        $participacao->setNota(readline("\n Informe a sua nota na prova: "));
        $participacao->getNotaFinal();
        echo "Sua nota de participação é: " . $participacao->getNotaFinal();

        array_push($notas, $participacao);

        break;
}
}while ($opcao != 0);