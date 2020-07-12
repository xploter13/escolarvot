<?php
session_start();
require '../../include/session/session.php';
require '../../database/connect.php';
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
        <script src="<?php echo endereco; ?>js/jquery/jquery-1.12.0.min.js" type="text/javascript" ></script>
        <link href="<?php echo endereco; ?>css/custom.css" type="text/css" media="screen, projection" rel="stylesheet" />
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
                <section class="nav-page">
                    <div class="container">
                        <div class="row">
                            <div class="span7">
                                <header class="page-header">
                                    <h3>Representante</h3>
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
                    <form id="frm-representative" class="form-horizontal">
                        <div class="container">
                            <div class="row">
                                <div class="span15">
                                    <fieldset>
                                        <legend>Cadastrar Representante</legend><br>
                                        <div class="control-group">
                                            <label class="control-label">Turma <span class="required">*</span></label>
                                            <div class="controls">
                                                <select class="chosen span4" name="slcTurma" required>
                                                    <option value="" selected disabled>Escolha uma opção</option>
                                                    <?php
                                                    $pdo = connect();
                                                    $query = $pdo->prepare("SELECT * FROM turma");
                                                    $query->execute();
                                                    foreach ($query as $row) {
                                                        echo "<option value='$row[id]'>$row[turma]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Nome da Chapa</label>
                                            <div class="controls">
                                                <input name="edtNomeChapa" class="span4" maxlength="50" type="text" value="" autocomplete="false" >
                                            </div>
                                        </div>
                                        <div class="control-group ">
                                            <label class="control-label">Representante <span class="required">*</span></label>
                                            <div class="controls">
                                                <input name="edtNomeRepre" class="span4" type="text" value="" autocomplete="false" required>
                                            </div>
                                        </div>
                                        <div class="control-group ">
                                            <label class="control-label">Vice Representante <span class="required">*</span></label>
                                            <div class="controls">
                                                <input name="edtNomeViceRepre" class="span4" type="text" value="" autocomplete="false" required>
                                            </div>
                                        </div>
                                        <div class="control-group ">
                                            <label class="control-label">Número de Inscrição <span class="required">*</span></label>
                                            <div class="controls">
                                                <input name="edtNumInsc" class="span4" type="text" value="" maxlength="2" autocomplete="false" required>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>                             
                            </div>
                            <footer id="submit-actions" class="form-actions">
                                <button id="btn-submit-representative" type="submit" class="btn btn-primary">Salvar</button>
                                <!--                                <a  href="#" class="btn" name="action">Consultar</a>-->
                                <button type="reset" class="btn btn-danger">Cancelar</button>
                            </footer>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <?php require '../../include/footer/footer.php'; ?>
        <script>
            $(function () {
                //$('.chosen').chosen();
            });
        </script>

    </body>
</html>