<?php

session_start();





//variavel que verifica se a autenticação foi realizada
$usuario_autenticado = false;


//usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);
// echo '<pre>';
// print_r($usuarios_app);
// echo '</pre>';

foreach ($usuarios_app as $user) {
    // echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
    // echo '<br>';
    // echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }

    if ($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    echo '<hr>';




    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];
    // echo '<br>';
}












// print_r($_POST);
// echo '<br>';
// echo $_POST['email'];
// echo '<br>';
// echo $_POST['senha'];
