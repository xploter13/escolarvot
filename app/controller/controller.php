<?php

session_start();
require '../model/model.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
    case 'login' :
        $user = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $data = getLogin($user, $pass);

        if (getLogin($user, $pass)) :
            $_SESSION['usuario'] = $data->id;
            $_SESSION['nome'] = $data->nome;
            $_SESSION['login'] = $data->login;
            $_SESSION['senha'] = $data->senha;
            $_SESSION['categoria'] = $data->categoria;
            echo 'true';
        elseif (!$data) :
            echo 'false';
        endif;
        break;

    case 'newuser' :
        $name = filter_input(INPUT_POST, 'edtName', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'edtLogin', FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'edtPassword', FILTER_SANITIZE_STRING);
        $category = filter_input(INPUT_POST, 'slcCategory', FILTER_SANITIZE_STRING);

        if (insertNewUser($name, $login, $pass, $category)) :
            echo 'true';
        else :
            echo 'false';
        endif;
        break;

    case 'class' :
        $turma = filter_input(INPUT_POST, 'edtTurma', FILTER_SANITIZE_STRING);

        if (insertClass($turma)) :
            echo 'true';
        else :
            echo 'false';
        endif;
        break;

    case 'representative' :
        $idTurma = filter_input(INPUT_POST, 'slcTurma', FILTER_SANITIZE_STRING);
        $chapa = filter_input(INPUT_POST, 'edtNomeChapa', FILTER_SANITIZE_STRING);
        $nomeRepre = filter_input(INPUT_POST, 'edtNomeRepre', FILTER_SANITIZE_STRING);
        $nomeViceRepre = filter_input(INPUT_POST, 'edtNomeViceRepre', FILTER_SANITIZE_STRING);
        $numInsc = filter_input(INPUT_POST, 'edtNumInsc', FILTER_SANITIZE_STRING);

        if (insertRepresentative($idTurma, $chapa, $nomeRepre, $nomeViceRepre, $numInsc)) :
            echo 'true';
        else:
            echo 'false';
        endif;
        break;

    case 'numInsc' :        
        $data = getRepresentative(filter_input(INPUT_POST, 'edtNumInsc', FILTER_SANITIZE_STRING));

        $obj = array('idRepre' => "$data->id_representante", 'nomeChapa' => "$data->nome_chapa", 'turma' => "$data->turma", 'nomeRepre' => "$data->nome_repre", 'nomeViceRepre' => "$data->nome_vice_repre");

        $myJson = json_encode($obj);

        if (isset($myJson)) :
            echo $myJson;
        elseif (!$data) :
            echo 'false';
        endif;
        break;
        
    case 'confirmVot' :
        $votChapa = filter_input(INPUT_POST, 'edtHiddenLblChapa', FILTER_SANITIZE_STRING);
        $votTurma = filter_input(INPUT_POST, 'edtHiddenLblTurma', FILTER_SANITIZE_STRING);
        $idRepre = filter_input(INPUT_POST, 'edtHiddenLblIdRepre', FILTER_SANITIZE_STRING);
        
        if (Votation($votTurma, $votChapa, $idRepre)) :
            echo 'true';
        else :
            echo 'false';
        endif;        
        break;    
        
}