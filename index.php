<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EscolarVot - Sistema de Votação Escolar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="layout" content="main"/>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

        <script src="assets/js/jquery/jquery-1.12.0.min.js" type="text/javascript" ></script>
        <link href="assets/css/custom.css" type="text/css" media="screen, projection" rel="stylesheet" />
    </head>
    <body>
        <div id="body-container">
            <div id="body-content">
                <div class='container'>
                    <div class="signin-row row">
                        <div class="span4"></div>
                        <div class="span8">
                            <div class="container-signin">
                                <div class="retorno"></div>
                                <legend>Entrar no sistema</legend>
                                <form method='POST' id='frm-login' class='form-signin' autocomplete='off'>
                                    <div class="form-inner">
                                        <div class="input-prepend">
                                            <span class="add-on" rel="tooltip" title="Nome de usuário" data-placement="top"><i class="icon-user"></i></span>
                                            <input type='text' class='span4 input-focus' name="login" id='username' required />
                                        </div>
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-key"></i></span>
                                            <input type='password' class='span4' name="password" id='password' required/>
                                        </div>
                                    </div>
                                    <footer class="signin-actions">
                                        <button class="btn btn-primary" type='submit' id="btn-submit-login"></button>
                                        <a class="btn btn-primary" href="novo-usuario" >Novo Usuário</a>
                                    </footer>
                                </form>
                            </div>
                        </div>
                        <div class="span3"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="application-footer">
    <div class="container">
        <p>EscolarVot - Sistema de Votação Escolar</p>
        <div class="disclaimer">
            <p>Criado por <a href="http://www.logge.com.br" target="_blank">Agência Logge</a>. Todos os Direito Reservados.</p>
            <p>Copyright © EscolarVot 2016</p>
        </div>
    </div>
</footer>

<!-- componentes -->
<script src="assets/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
<script src="assets/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
<script src="assets/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
<script src="assets/js/plugins/validation/jquery.validate.min.js" type="text/javascript" ></script>
<script src="assets/js/plugins/validation/messages_pt_BR.js" type="text/javascript" ></script>
<script src="assets/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
<script src="assets/js/jquery/virtual-tour.js" type="text/javascript" ></script>
<script src="assets/js/custom.js" type="text/javascript" ></script>
<script src="assets/js/keypad.js" type="text/javascript" ></script>
    </body>
</html>