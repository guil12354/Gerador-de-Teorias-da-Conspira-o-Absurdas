<?php

header("Content-Type: application/json; charset=UTF-8");

require_once "../model/GerarModel.php";

$assunto = $_GET["assunto"] ?? "";

$model = new GerarModel();

$frase = $model->gerarFrase($assunto);

$resposta = [
    "gerador" => "Teorias da Conspiração Absurdas",
    "modo" => "predefinido",
    "assunto" => $assunto,
    "frase" => $frase
];

echo json_encode($resposta, JSON_UNESCAPED_UNICODE);