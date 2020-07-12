
$(".input-focus").focus();
$("#btn-submit-login").html('Entrar');
$("#btn-submit-new-user").html('Cadatrar');

/************************************
 LOGIN
 ************************************/
$('#btn-submit-login').on('click', function () {
    $('#frm-login').validate({
        rules: {
            firstname: {
                minlength: 3,
                maxlength: 15,
                required: true
            },
            lastname: {
                minlength: 3,
                maxlength: 15,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function () {
            var dados = 'action=login&' + $('#frm-login').serialize();
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
                data: dados,
                success: function (retorno) {
                    console.log(retorno);
                    if (retorno === 'true') {
                        $("#btn-submit-login").html('Carregando' + ' <img src="assets/images/gif/ajax-loader.gif">');
                    } else if (retorno === 'false') {
                        msg('Login ou Senha inválidos!', 'erro');
                    }
                },
                error: function (retorno) {
                    if (retorno === '') {
                        msg("Erro ao logar!", "error");
                    }
                },
                complete: function () {
                    setTimeout(function () {
                        $(location).attr('href', 'http://localhost:8080/escolarvot/app/view/dashboard');
                    }, 3000);
                }
            });
            return false;
        }
    });
});


/***********************************************
 CADASTRAR NOVO USUARIO
 ***********************************************/

$('#btn-submit-new-user').on('click', function () {
    $('#frm-new-user').validate({
        rules: {
            edtName: {required: true, minlength: 2},
            edtLogin: {required: true},
            edtPassword: {required: true},
            slcCategory: {required: true}
        },
        messages: {
            edtName: {required: 'Informe o seu nome', minlength: 'No mínimo 2 letras'},
            edtLogin: {required: 'Informe o seu login', minlength: 'No mínimo 2 letras'},
            edtPassword: {required: 'Informe a sua senha', minlength: 'No mínimo 2 letras'},
            slcCategory: {required: 'Escolha uma categoria'}
        },
        submitHandler: function () {
            var dados = 'action=newuser&' + $('#frm-new-user').serialize();
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
                data: dados,
                success: function (retorno) {
                    console.log(retorno);
                    if (retorno === 'true') {
                        msg('Usuário cadastrado com sucesso!', 'sucesso');
                    } else if (retorno === 'false') {
                        msg('Usuário nao cadastrado!', 'erro');
                    }
                },
                error: function (retorno) {
                    if (retorno === '') {
                        msg("Erro ao cadastrar!", "error");
                    }
                },
                complete: function () {
                    setTimeout(function () {
                        $(location).attr('href', 'http://localhost:8080/escolarvot/');
                    }, 3000);
                }
            });
            return false;
        }
    });
});


/***********************************************
 CADASTRAR TURMA
 ***********************************************/

$('#btn-submit-class').on('click', function () {
    $('#frm-class').validate({
        rules: {
            edtTurma: {required: true, minlength: 2}
        },
        messages: {
            edtTurma: {required: 'Informe a turma', minlength: 'No mínimo 2 letras'}
        },
        submitHandler: function () {
            var dados = 'action=class&' + $('#frm-class').serialize();
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
                data: dados,
                success: function (retorno) {
                    console.log(retorno);
                    if (retorno === 'true') {
                        msg('Turma cadastrada com sucesso!', 'sucesso');
                    } else if (retorno === 'false') {
                        msg('Turma nao cadastrada!', 'erro');
                    }
                },
                error: function (retorno) {
                    if (retorno === '') {
                        msg("Erro ao cadastrar!", "error");
                    }
                },
                complete: function () {
                    setTimeout(function () {
                        $(location).attr('href', 'http://localhost:8080/escolarvot/app/view/inserir/turma');
                    }, 3000);
                }
            });
            return false;
        }
    });
});


/***********************************************
 CADASTRAR REPRESENTANTE
 ***********************************************/

$('#btn-submit-representative').on('click', function () {
    $('#frm-representative').validate({
        rules: {
            edtNomeRepre: {required: true, minlength: 2},
            edtNomeViceRepre: {required: true, minlength: 2},
            edtNumInsc: {required: true}
            
        },
        messages: {
            edtNomeRepre: {required: 'Informe o nome do representante', minlength: 'No mínimo 2 letras'},
            edtNomeViceRepre: {required: 'Informe o nome do vice representante', minlength: 'No mínimo 2 letras'},
            edtNumInsc: {required: 'Informe o número da inscrição', minlength: 'No mínimo 2 dígitos'}
        },
        submitHandler: function () {
            var dados = 'action=representative&' + $('#frm-representative').serialize();
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
                data: dados,
                success: function (retorno) {
                    console.log(retorno);
                    if (retorno === 'true') {
                        msg('Representante cadastrado com sucesso!', 'sucesso');
                    } else if (retorno === 'false') {
                        msg('Representante nao cadastrado!', 'erro');
                    }
                },
                error: function (retorno) {
                    if (retorno === '') {
                        msg("Erro ao cadastrar!", "error");
                    }
                },
                complete: function () {
                    setTimeout(function () {
                        $(location).attr('href', 'http://localhost:8080/escolarvot/app/view/inserir/representante');
                    }, 3000);
                }
            });
            return false;
        }
    });
});



//validacao
function msg(msg, tipo) {
    var retorno = $(".retorno");
    var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert('INFORME MENSAGENS DE SUCESSO, ALERTA, ERRO E INFO');

    retorno.empty().fadeOut('fast', function () {
        return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
    });

    //esconde a div depois de 5 segundos
    setTimeout(function () {
        retorno.fadeOut('slow');
    }, 5000);
}
