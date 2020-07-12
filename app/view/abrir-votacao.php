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
        <link href="../../assets/css/keypad.css" type="text/css" media="screen" rel="stylesheet" />        
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
                <?php require '../include/main-menu/menu.php'; ?>              

                <section class="nav-page" >
                    <div class="container">
                        <div class="row">
                            <div class="span7">
                                <header class="page-header">
                                    <h3>Votação Para Representante</h3>
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

                <!-- Teclado -->
                <div class="container">
                    <div class="row">
                        <form id="frm-vot-number">
                            <div class="pull-left" style="margin-left: 150px;">
                                <div class="col-md-6">                                
                                    <div class="gap-100 leg">
                                        <p>Turma: <span class="lblTurma"></span></p>
                                        <input type="hidden" name="edtHiddenLblTurma" value="" id="input-hidden-turma" />
                                        <br />                                    
                                        <p>Partido: <span class="lblChapa"></span></p>
                                        <input type="hidden" name="edtHiddenLblChapa" value="" id="input-hidden-chapa" />
                                        <br />
                                        <p>Representante: <span class="lblRepre"></span></p>
                                        <br />
                                        <p>Vice-representante: <span class="lblViceRepre"></span></p>
                                    </div>                                
                                    <div class="gap-20"></div>
                                    <input type="text" name="edtNumInsc" id="telNumber" maxlength="2" class="form-control tel input-focus" value="" />
                                    <input type="hidden" name="edtHiddenLblIdRepre" value="" id="input-hidden-id-repre" />
                                    <div class="gap-10"></div>
                                    <p>Eleição de Representante - Escola Marcelo Drablle</p>
                                    <p>Profº Responsável: Diogo Costa | Tânia Regina | Mácia</p>
                                </div>
                            </div>
                            <div class="phone gap-40 pull-right" style="margin-right: 150px;">
                                <div class="row1">
                                    <div class="col-md-4 col-md-offset-4 phone">

                                        <div class="num-pad" id="num-pad">
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        2 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        3 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        4 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        5 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        6 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        7 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        8 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4">
                                                <div class="num">
                                                    <div class="txt">
                                                        9 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4" style="margin-left: 100px;">
                                                <div class="num">
                                                    <div class="txt">
                                                        0 <span class="small"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div  style="margin-left: 40px; margin-top: 30px;">
                                            <button type="button" class="btn btn-danger flatbtn" id="btn-corrige" style="margin-right: 20px;">CORRIGE</button>
                                            <button type="button" class="btn btn-success flatbtn" id="btn-confirm">CONFIRMA</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.Teclado -->
            </div>
        </div>
        <div class="gap-50"></div>
        <?php require '../include/footer/footer.php'; ?>
    </body>
</html>
