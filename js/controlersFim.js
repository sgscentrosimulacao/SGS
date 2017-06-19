
function verificarDataEHora () {

    var dataInicio = $('#fieldDataInicio').val();
    var horaInicio = $('#fieldHoraInicio').val();
    var dataFim = $('#fieldDataFim').val();
    var horaFim = $('#fieldHoraFim').val();

    $.ajax({
        method: "GET",
        url: "../Control/verificarDisponibilidade.php?dataInicio="+dataInicio+"&horaInicio="+horaInicio+"&dataFim="+dataFim+"&horaFim="+horaFim,
        dataType: "text",
        success:function (result) {
            if(result == 'true') {

                alert('Datas indisponiveis');
            }
        }
    });
}


$('#fieldDataInicio').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldHoraInicio').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldDataFim').on('blur', function (e) {

    verificarDataEHora();

});

$('#fieldHoraFim').on('blur', function (e) {

    verificarDataEHora();

});
