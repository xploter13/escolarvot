
$(document).ready(function () {
    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var len = $('#telNumber').val().length;

        var telNumber = $('#telNumber');
        $(telNumber).val(telNumber.val() + text);

        if (len > 0) {
            var dados = 'action=numInsc&' + $("#frm-vot-number").serialize();
            //console.log(dados);
            $.ajax({
                type: 'POST',
                url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
                data: dados,
                dataType: 'json',
                success: function (retorno) {
                    //console.log(retorno);
                    if (retorno) {
                        $(".lblChapa").html(retorno.nomeChapa);
                        $(".lblTurma").html(retorno.turma);
                        $(".lblRepre").html(retorno.nomeRepre);
                        $(".lblViceRepre").html(retorno.nomeViceRepre);

                        $("#input-hidden-chapa").val(retorno.nomeChapa);
                        $("#input-hidden-turma").val(retorno.turma);
                        $("#input-hidden-id-repre").val(retorno.idRepre);
                    }
                    else if (retorno === 'false') {
                        alert('Este representante não existe!');
                    }
                }
            });
        }
    });


    $("#btn-confirm").on('click', function () {
        var dados = 'action=confirmVot&' + $("#frm-vot-number").serialize();
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8080/escolarvot/app/controller/controller.php',
            data: dados,
            success: function (retorno) {
                console.log(retorno);
                if (retorno === 'true') {
                    alert('Votação Realizada com sucesso!');
                    $("#telNumber").val("");
                    $("#telNumber").focus();
                    $(".lblRepre").html('');
                    $(".lblViceRepre").html('');
                    $(".lblChapa").html('');
                    $(".lblTurma").html('');
                }
                else if (retorno === 'false') {
                    alert('Error ao confirmar votação');
                }
            }
        });
    });

    $("#btn-corrige").on('click', function () {
        $("#telNumber").val("");
        $("#telNumber").focus();
        $(".lblRepre").html('');
        $(".lblViceRepre").html('');
        $(".lblChapa").html('');
        $(".lblTurma").html('');
    });
});

