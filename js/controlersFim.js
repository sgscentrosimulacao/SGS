
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
            if(result == 'Erro') {

                $('#fieldDataInicio').css('background-color', 'red');
                $('#fieldDataFim').css('background-color', 'red');
                $('#fieldHoraInicio').css('background-color', 'red');
                $('#fieldHoraFim').css('background-color', 'red');

            }else{

                $('#fieldDataInicio').css('background-color', 'none');
                $('#fieldDataFim').css('background-color', 'none');
                $('#fieldHoraInicio').css('background-color', 'none');
                $('#fieldHoraFim').css('background-color', 'none');

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
