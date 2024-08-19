<?php

session_start();

$usuarios_authenticado = false;

  $usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '1234'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
  );

    foreach($usuarios_app as $user){
      if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_authenticado = true;
    };
  };

  if($usuarios_authenticado){
    //echo 'Usuário autenticado com sucesso!';
    $_SESSION['authenticado'] = 'SIM';
    header('Location:home.php');
  }else{
    //echo 'Erro de Autenticação!';
    $_SESSION['authenticado'] = 'NAO';
    header('Location:index.php?login=erro');
  };

?>