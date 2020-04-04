<?php

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

   //abrir arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    
    //escrever no arquivo
    fwrite($arquivo, $texto);

    //fechar arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php')

?>
