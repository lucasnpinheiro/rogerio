var cake = {};
cake.util = {};
cake.util.numero = function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
};
cake.util.mascaras = function () {
    $('.numero').keypress(cake.util.numero);
    $('.cep').mask('99999-999');
    $('.cpf').mask('999.999.999-99');
    $('.cnpj').mask('99.999.999/9999-99');
    $('.data').mask('99/99/9999');
    $('.telefone').mask('(99) 99999-9999');
    $('.date .input-group .data').datepicker('remove').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
    $(".moeda").maskMoney({
        prefix: 'R$ ',
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });
    $(".juros").maskMoney({
        suffix: ' %',
        allowNegative: false,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });

};

$(function () {
    cake.util.mascaras();


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