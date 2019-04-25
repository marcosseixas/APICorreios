<?php

require_once 'class/Correios.php';

$cep = '07070120';
$etiquetas = 'DL61145929 BR';
$codAdministrativo = '17000190';
$numeroServico = '04162';
$cepOrigem = '05311900';
$cepDestino = '07070120';
$usuario = 'sigep';
$senha = 'n5f9t8';
$tipoDestinatario = 'C';
$identificador = '00000000000000';
$idServico = '124849';
$qtdEtiquetas = '1';

$correio = new Correios();

//$correios = $correio->geraEtiqueta($tipoDestinatario, $identificador, $idServico, $qtdEtiquetas, $usuario, $senha);

//$correios = $correio->validaEtiqueta($etiquetas, $usuario, $senha);

//$correios = $correio->verificaServico($codAdministrativo, $numeroServico, $cepOrigem, $cepDestino, $usuario, $senha);

$correios = $correio->buscaCep($cep);


echo $correios;

