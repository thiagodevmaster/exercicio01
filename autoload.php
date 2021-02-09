<?php

spl_autoload_register(function (string $nomecompletoDaClasse){
    $caminhoArquivo = str_replace('Thiago\\Animal', 'src', $nomecompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }

});