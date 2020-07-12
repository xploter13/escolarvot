<?php
session_start();
require '../include/session/session.php';
require '../include/lib.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EscolarVot - Sistema de Votação Escolar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="layout" content="main"/>
        <script src="../../assets/js/jquery/jquery-1.12.0.min.js"></script>
        <link href="../../assets/css/custom.css" type="text/css" media="screen" rel="stylesheet" />        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="http://localhost:8080/escolarvot/app/view/dashboard" class="brand"><i class="icon-book">EscolarVOT</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav" style="margin-top: 10px;">
                            <li>Usuário: <?php echo $logado; ?></li> 
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a href="http://localhost:8080/escolarvot/logout">Sair do sistema</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="body-container">
            <div id="body-content">
                <!-- Menu -->
               <?php require '../include/main-menu/menu.php'; ?>
                <!-- ./ Menu -->
                <section class="nav nav-page">
                    <div class="container">
                        <div class="row">
                            <div class="span7">
                                <header class="page-header">
                                    <h3>Dashboard</h3>
                                </header>
                            </div>
                        </div>
                    </div>
                </section>    
                <section>
                    <div class="img-b"></div>
                </section>
            </div>
        </div>
        <?php require '../include/footer/footer.php'; ?>
    </body>
</html>