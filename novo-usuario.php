<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>EscolarVot</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="layout" content="main"/>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>

        <script src="assets/js/jquery/jquery-1.12.0.min.js" type="text/javascript" ></script>
        <link href="assets/css/custom.css" type="text/css" media="screen, projection" rel="stylesheet" />

        <style>
        </style>
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
                                <legend>Cadastrar Novo Usuário</legend>
                                <form action='dashboard.html' method='POST' id='frm-new-user' class='form-signin' autocomplete='off'>
                                    <div class="form-inner">
                                        <div class="input-prepend">
                                            <label>Nome:</label>
                                            <input type='text' class='span4 input-focus' name="edtName" id='username' required />
                                        </div>
                                        <div class="input-prepend">
                                            <label>Login:</label>
                                            <input type='text' class='span4' name="edtLogin" id='login' required />
                                        </div>
                                        <div class="input-prepend">
                                            <label>Senha:</label>
                                            <input type='password' class='span4' name="edtPassword" id='password' required />
                                        </div>
                                        <div class="input-prepend">
                                            <label>Categoria:</label>
                                            <select class="span4" name="slcCategory" required>
                                                <option value="" selected disabled>Escolha uma categoria</option>
                                                <option value="Diretor">Diretor (a)</option>
                                                <option value="Professor">Professor (a)</option>
                                                <option value="estagiario">Estagiário</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <footer class="signin-actions">
                                        <button type='submit' class="btn btn-primary" id="btn-submit-new-user"></button>
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
                <p>EscolarVot</p>
                <div class="disclaimer">
                    <p>Criado por Agência Logge. Todos os Direito Reservados.</p>
                    <p>Copyright © EscolarVot 2016</p>
                </div>
            </div>
        </footer>
<!--        <script type="text/javascript">
            $(function () {
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            })  
        </script>-->
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
        <script src="assets/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="assets/js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <!-- Plugins -->
        <script src="assets/js/plugins/validation/jquery.validate.min.js" ></script>
        <script src="assets/js/plugins/validation/messages_pt_BR.js" ></script>
        <script src="assets/js/custom.js" type="text/javascript" ></script>
    </body>
</html>