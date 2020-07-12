<?php
if (!isset($_SESSION['login']) === true && (!isset($_SESSION['password']) === true)) :
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location: http://localhost:8080/escolarvot/');
else :
    $logado = $_SESSION['nome'];
endif;
