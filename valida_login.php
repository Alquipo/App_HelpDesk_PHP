<?php

    session_start();

    print_r($_SESSION);


    $usuario_autenticado = false;


    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha'=> '123'],
        ['email' => 'user@teste.com.br', 'senha'=> '123'],
    ];

    foreach ($usuarios_app as $key => $value) {
        
        if($value['email'] == $_POST['email'] && $value['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
      
    }

    if($usuario_autenticado == true){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
        
    }


?>