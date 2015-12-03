$(document).ready(function () {
    $('.data').mask('00/00/0000');
    $('.cpf').mask('000.000.000-00');
    $('.cep').mask('00000-000');
    $('.moeda').maskMoney({prefix: '', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false});

    $('#contrato-id').change(function (e) {
        e.preventDefault();
        $.ajax({
            method: "GET",
            url: url + "contratos/modelo/" + $(this).val(),
            dataType: "html",
            success: function (a) {
                $('#modelo').val(a);
            }
        });
    });

    $('.cep').change(function () {
        var obj = this;
        $.ajax({
            url: 'http://cep.agenciavoxel.com.br/' + $(obj).val() + '.json',
            dataType: "json",
            async: true,
            beforeSend: function () {
                $(obj).closest('div').find('.control-label').append(loadImage());
            },
            success: function (a) {
                if (a.result.status == 'OK') {
                    $('#endereco').val(a.result.Cep.logradouro);
                    $('#bairro').val(a.result.Cep.bairro);
                    $('#cidade').val(a.result.Cep.cidade);
                    $('#estado').val(a.result.Cep.uf);
                    $('#numero').focus();
                } else {
                    $('#endereco').val('');
                    $('#bairro').val('');
                    $('#cidade').val('');
                    $('#estado').val('');
                    $(obj).focus();
                    alert('CEP não localizado.');
                }
                $('.loadImg').hide();
            },
            error: function () {
                $('#endereco').val('');
                $('#bairro').val('');
                $('#cidade').val('');
                $('#estado').val('');
                $(obj).focus();
                alert('CEP não localizado.');
                $('.loadImg').hide();
            }
        });
    });

});

function loadImage() {
    return '<span class="loadImg">&nbsp;&nbsp;&nbsp;<img src="' + url + 'img/carregando.gif" /></span>';
}