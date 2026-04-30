<?php

function lerDados ($arquivo){
    $conteudo = file_get_contents($arquivo);
    return json_decode($conteudo,true);
}

function salvarDados($arquivo, $dados) {
    $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents($arquivo, $conteudo);
}

function limparDados($dados){
    return trim(htmlspecialchars($dados));
}