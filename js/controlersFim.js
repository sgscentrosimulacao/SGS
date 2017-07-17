function mostrarPecas(){

    var dropSala = $('#dropSala').val();

    $.ajax({

        method: "GET",
        url: "../control/mostrarPecas.php?dropSala="+dropSala,
        dataType: "text",
        success:function (result) {
            var dropItens = JSON.parse(this.responseText);

            alert(dropItens[0]["nomePeca"]);

            for(var i = 0; i.length; i ++){
                $('#dropItem').append('<option value=1>'+dropItens[i]['nomePeca']+'</option>');
            }
            alert("TESTE");
        }

    });
}




function adicionarPecas(){

    var dropItem = $('#dropItem').val();
    var qnt = $('#fieldQnt').val();
    var dropSala = $('#dropSala').val();

    $.ajax({

        method: "GET",
        url: "../control/adicionarItem.php?dropItem="+dropItem+"&qnt="+qnt+"&dropSala="+dropSala,
        dataType: "text",
        success:function (result) {
            if (result == 'Erro') {
                $('#tabelaItens > tbody:last-child').append('<tr><td>'+dropItem+'</td><td>'+qnt+'</td></tr>');


            } else {


            }
        }

    });
}

$('#btnAdicionarItem').on('click', function (e) {

    adicionarPecas();

});




function verificarDataEHora () {

    var dataInicio = $('#fieldDataInicio').val();
    var horaInicio = $('#fieldHoraInicio').val();
    var dataFim = $('#fieldDataFim').val();
    var horaFim = $('#fieldHoraFim').val();
    var sala = $('#dropSala').val();

    $.ajax({
        method: "GET",
        url: "../control/verificarDisponibilidade.php?dataInicio="+dataInicio+"&horaInicio="+horaInicio+"&dataFim="+dataFim+"&horaFim="+horaFim+"&sala="+sala,
        dataType: "text",
        success:function (result) {
            if(result == 'Erro') {

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline has-error");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline has-error");
                $('#dropSala').attr("class","form-control dropdown-toggle has-error");
                $('#alerta').attr("class", "alert alert-danger");
                $('#cadastrarAula').attr('disabled', 'disabled');
                window.location.href += "#alerta";

            }else{

                $('#fieldGroupDataInicio').attr("class","editor-label form-inline");
                $('#fieldGroupDataFim').attr("class","editor-label form-inline");
                $('#fieldGroupHoraInicio').attr("class","editor-label form-inline");
                $('#fieldGroupHoraFim').attr("class","editor-label form-inline");
                $('#dropSala').attr("class","form-control dropdown-toggle");
                $('#alerta').attr("class", "alert alert-danger hidden");
                $('#cadastrarAula').removeAttr('disabled', 'disabled');
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

$('#dropSala').on('blur', function (e) {

    verificarDataEHora();

}).on('change', function(e) {
    mostrarPecas();
});

