<?php

    session_start();

    print_r($_SESSION);

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [
        1=>'Administrativo',
        2=>'Usuario',
    ];


    $usuarios_app = [
        ['id'=> '1', 'email'=> 'adm@teste.com.br', 'senha'=> '123', 'perfil_id'=> 1],
        ['id'=> '2', 'email' => 'user@teste.com.br', 'senha'=> '123', 'perfil_id'=> 1],
        ['id'=> '3', 'email' => 'jose@teste.com.br', 'senha'=> '123', 'perfil_id'=> 2],
        ['id'=> '4', 'email' => 'maria@teste.com.br', 'senha'=> '123', 'perfil_id'=> 2],
    ];

    foreach ($usuarios_app as $value) {
        
        if($value['email'] == $_POST['email'] && $value['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $value['id'];
            $usuario_perfil_id = $value['perfil_id'];
        }
      
    }

    if($usuario_autenticado == true){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
        
    }


?>