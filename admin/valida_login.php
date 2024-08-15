<?php

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
    echo 'Usuário autenticado com sucesso!';
  }else{
    //echo 'Erro de Autenticação!';
    header('Location: index.php?login=erro');
  };

?>