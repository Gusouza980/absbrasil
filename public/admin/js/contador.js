$(document).ready(function(){
    
    $(".contador").each(function(){
        calcula_restante(this);
    });

    $(".contador").keypress(function(){;
        calcula_restante(this);
    });

    function calcula_restante(element){
        var max = $(element).attr("maxlength");
        var atual = $(element).val().length;
        var restante = max - atual;

        if(restante == 0){
            $(element).next().css("color", "red");
        }else if(restante * 100 / max <= 20){
            $(element).next().css("color", "#FF5E13");
        }else{
            $(element).next().css("color", "black");
        }

        $(element).next().html("<b>("+restante+")</b>");
    }
});