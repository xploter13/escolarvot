<?php
session_start();
require '../../include/session/session.php';
require '../../include/lib.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EscolarVot - Sistema de Votação Escolar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="layout" content="main"/>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

        <script src="<?php echo endereco ?>js/jquery/jquery-1.12.0.min.js" type="text/javascript" ></script>
        <link href="<?php echo endereco ?>css/custom.css" type="text/css" media="screen, projection" rel="stylesheet" />

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
                <?php require '../../include/main-menu/menu.php'; ?>
                <!-- ./ Menu -->
                <section class="nav-page" >
                    <div class="container">
                        <div class="row">
                            <div class="span7">
                                <header class="page-header">
                                    <h3>Turmas</h3>
                                </header>
                            </div>
                            <div class="span9">
                                <ul class="nav nav-pills">
                                    <li>
                                        <button id="vtour-button" rel="tooltip" title="Launch Virtual Tour" data-placement="bottom">
                                            <i class="icon-magic icon-large"></i>
                                        </button>
                                    </li>
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
                <section id="my-account-security-form" class="page container">
                    <div class="gap-40"></div>
                    <div class="retorno"></div>
                    <div class="gap-40"></div>
                    <form id="frm-class" class="form-horizontal">
                        <div class="container">
                            <div class="row">
                                <div class="span15">
                                    <fieldset>
                                        <legend>Cadastrar Turma</legend><br>
                                        <div class="control-group ">
                                            <label class="control-label">Turma <span class="required">*</span></label>
                                            <div class="controls">
                                                <input id="input-turma" name="edtTurma" class="span4 input-focus" type="text" value="" autocomplete="false">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>                             
                            </div>
                            <footer id="submit-actions" class="form-actions">
                                <button id="btn-submit-class" type="submit" class="btn btn-primary">Salvar</button>
<!--                                <a  href="#" class="btn" name="action">Consultar</a>-->
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </footer>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <?php require '../../include/footer/footer.php'; ?>
<!--        <script type="text/javascript">
            $(function () {
                $('.chosen').chosen();
                $("[rel=tooltip]").tooltip();

                $("#vguide-button").click(function (e) {
                    new VTour(null, $('.nav-page')).tourGuide();
                    e.preventDefault();
                });
                $("#vtour-button").click(function (e) {
                    new VTour(null, $('.nav-page')).tour();
                    e.preventDefault();
                });
            });
        </script>-->
    </body>
</html>