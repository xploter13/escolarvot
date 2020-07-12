<?php
session_start();
require '../include/session/session.php';
require '../database/connect.php';
require '../include/lib.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EscolarVot - Sistema de Votação Escolar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="layout" content="main"/>
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

        <script src="../../assets/js/jquery/jquery-1.12.0.min.js" type="text/javascript" ></script>
        <link href="../../assets/css/custom.css" type="text/css" media="screen, projection" rel="stylesheet" />

        <style>
        </style>
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
                    <a href="<?php echo baseUrl; ?>view/dashboard" class="brand"><i class="icon-book">EscolarVOT</i></a>
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
                <section class="nav-page">
                    <div class="container">
                        <div class="row">
                            <div class="span7">
                                <header class="page-header">
                                    <h3>Resultado</h3>
                                </header>
                            </div>
                            <div class="span9">
                                <ul class="nav nav-pills">
                                    <li>
                                        <button id="vguide-button" rel="tooltip" title="Launch Guide" data-placement="bottom">
                                            <i class="icon-question-sign icon-large"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="page container">
                    <div class="row">
                        <div class="span4">
                            <div class="blockoff-right">
                                <ul id="person-list" class="nav nav-list">
                                    <li class="nav-header">Turmas</li>
                                    <li class="active">
                                        <a id="view-all" href="#">
                                            <i class="icon-chevron-right pull-right"></i>
                                            <b>Todas</b>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-1">
                                            <i class="icon-chevron-right pull-right"></i>
                                            601
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-2">
                                            <i class="icon-chevron-right pull-right"></i>
                                            602
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-3">
                                            <i class="icon-chevron-right pull-right"></i>
                                            603
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-4">
                                            <i class="icon-chevron-right pull-right"></i>
                                            604
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-5">
                                            <i class="icon-chevron-right pull-right"></i>
                                            605
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-6">
                                            <i class="icon-chevron-right pull-right"></i>
                                            606
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-7">
                                            <i class="icon-chevron-right pull-right"></i>
                                            701
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-8">
                                            <i class="icon-chevron-right pull-right"></i>
                                            702
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-9">
                                            <i class="icon-chevron-right pull-right"></i>
                                            703
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-10">
                                            <i class="icon-chevron-right pull-right"></i>
                                            704
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-11">
                                            <i class="icon-chevron-right pull-right"></i>
                                            705
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-12">
                                            <i class="icon-chevron-right pull-right"></i>
                                            706
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-13">
                                            <i class="icon-chevron-right pull-right"></i>
                                            801
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-14">
                                            <i class="icon-chevron-right pull-right"></i>
                                            802
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-15">
                                            <i class="icon-chevron-right pull-right"></i>
                                            803
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-16">
                                            <i class="icon-chevron-right pull-right"></i>
                                            804
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-17">
                                            <i class="icon-chevron-right pull-right"></i>
                                            805
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-18">
                                            <i class="icon-chevron-right pull-right"></i>
                                            807
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-19">
                                            <i class="icon-chevron-right pull-right"></i>
                                            901
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-20">
                                            <i class="icon-chevron-right pull-right"></i>
                                            902
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-21">
                                            <i class="icon-chevron-right pull-right"></i>
                                            903
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-22">
                                            <i class="icon-chevron-right pull-right"></i>
                                            904
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-23">
                                            <i class="icon-chevron-right pull-right"></i>
                                            905
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#class-24">
                                            <i class="icon-chevron-right pull-right"></i>
                                            906
                                        </a>
                                    </li>                                    

                                </ul>
                            </div>
                        </div>
                        <div class="span12">
                            <div id="class-1" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 601</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '601';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-2" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 602</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '602';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div id="class-3" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 603</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '603';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?>                                   
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div id="class-4" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 604</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '604';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div id="class-5" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 605</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '605';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-6" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 606</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '606';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-7" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 701</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '701';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div id="class-8" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 702</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '702';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div id="class-9" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 703</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '703';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-10" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 704</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '704';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-11" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 705</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '705';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-12" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 706</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '706';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-13" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 801</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '801';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-14" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 802</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '802';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-15" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 803</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '803';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-16" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 804</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '804';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-17" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 805</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '805';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-18" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 807</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '807';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-19" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 901</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '901';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-20" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 902</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '902';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-21" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 903</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '903';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-22" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 904</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '904';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="class-23" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 905</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '905';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="class-24" class="box">
                                <div class="box-header">
                                    <i class="icon-user icon-large"></i>
                                    <h5>Turma 906</h5>
                                </div>
                                <div class="box-content box-table">
                                    <table class="table table-hover tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Turma</th>
                                                <th>Representante</th>
                                                <th>Vice Representante</th>
                                                <th>Chapa</th>
                                                <th>Votos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $pdo = connect();
                                            $turma = '906';
                                            $query = $pdo->prepare(
                                                    "SELECT T1.nome_repre, T1.nome_vice_repre, T2.turma, T2.chapa, T2.id_representante, T2.qtd_votos FROM representante AS T1
                                                        INNER JOIN votos AS T2 WHERE T2.turma = {$turma} AND T2.id_representante = T1.id;");
                                            $query->execute();
                                            foreach ($query as $row)
                                            {
                                                echo "<tr>";
                                                echo "<td>$row[turma]</td>";
                                                echo "<td>$row[nome_repre]</td>";
                                                echo "<td>$row[nome_vice_repre]</td>";
                                                echo "<td>$row[chapa]</td>";
                                                echo "<td>$row[qtd_votos]</td>";
                                                echo "</tr>";
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="gap-80"></div>
        <?php require '../include/footer/footer.php'; ?>
        <script type="text/javascript">
            $(function () {
                $('#person-list.nav > li > a').click(function (e) {
                    if ($(this).attr('id') == "view-all") {
                        $('div[id*="Person-"]').fadeIn('fast');
                    } else {
                        var aRef = $(this);
                        var tablesToHide = $('div[id*="Person-"]:visible').length > 1
                                ? $('div[id*="Person-"]:visible') : $($('#person-list > li[class="active"] > a').attr('href'));

                        tablesToHide.hide();
                        $(aRef.attr('href')).fadeIn('fast');
                    }
                    $('#person-list > li[class="active"]').removeClass('active');
                    $(this).parent().addClass('active');
                    e.preventDefault();
                });

                $(function () {
                    $('table').tablesorter();
                    $("[rel=tooltip]").tooltip();
                });
            });
        </script>

    </body>
</html>