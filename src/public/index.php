<?php

$frase = 'Entrevistas, músicas e o melhor do "Rio", a Carioquice! Apresentado pelo jornalista, historiador, crítico, radialista e musicólogo brasileiro Ricardo Cravo Albin.';

$posicao = strpos($frase, '"Rio"');

if ($posicao !== false) {
    $novaFrase = substr($frase, 0, $posicao + strlen('"Rio"'));
    echo $novaFrase;
} else {
    echo "A palavra 'Rio' não foi encontrada na frase.";
}
