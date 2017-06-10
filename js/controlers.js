function mascaraData( campo, e )
{
    var kC = (document.all) ? event.keyCode : e.keyCode;
    var data = campo.value;

    if( kC!=8 && kC!=46 )
    {
        if( data.length==2 )
        {
            campo.value = data += '/';
        }
        else if( data.length==5)
        {
            campo.value = data += '/';
        }
        else
            campo.value = data;
    }
}

function mascaraHorario( campo, e )
{
    var kC = (document.all) ? event.keyCode : e.keyCode;
    var hora = campo.value;

    if( kC!=8 && kC!=46 )
    {
        if( hora.length==2 )
        {
            campo.value = hora += ':';
        }
        else
            campo.value = hora;
    }
}


function mostraSenha(field ,campo){
    if (field.checked){
        document.getElementById(campo).type = "text";
    }else{
        document.getElementById(campo).type = "password";
    }
}


$(function(){
    var data = new Date();
    var mesAtual = data.getMonth()+1;
    var diaAtual = data.getDate();

    $('#mes_'+mesAtual).show().find('.dia_'+diaAtual).addClass('atual');

    function hideShow(){
        if(mesAtual > 12){
            mesAtual = 1;
        }else if(mesAtual < 1){
            mesAtual = 12;
        }

        $('.mes').hide();
        $('#mes_'+mesAtual).show();
    }

    $('#vai').on('click', function(e){
        e.preventDefault();
        mesAtual++;
        hideShow();

        return false;
    });

    $('#volta').on('click', function(e){
        e.preventDefault();
        mesAtual--;
        hideShow();

        return false;
    });
});