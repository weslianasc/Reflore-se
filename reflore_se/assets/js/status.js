   
    $( "#fora" ).click(function(e) {
        info = e.target.id;
        conteudo = document.getElementById(info).innerHTML;
        p = document.getElementById("id_user");
        p.innerHTML = conteudo;
        $("#info_user").val(info);
    });

    function aprovar(){
        var valor = document.getElementById("aprovado").innerHTML = "Aprovado";
        $("#aprovado").val(valor);
    };

    function negar(){
        var valor2 = document.getElementById("negado").innerHTML = "Negado";
        $("#negado").val(valor2);
    };
    

    
    
    

  


    