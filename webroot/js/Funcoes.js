$(document).ready(function () {
    $('.data').mask('00/00/0000');

    $('#contrato-id').change(function (e) {
        e.preventDefault();
        $.ajax({
            method: "GET",
            url: "/Rogerio/contratos/modelo/"+$(this).val(),
            dataType: "html",
            success: function(a){
                $('#modelo').val(a);
            }
        });
    })

});