

//selecionar qual interface de cadastro deve ser mostrada na tela patrimônio
function selecionar(){
    var value = document.getElementById("selecionado").value;
    if(value == 1){
        document.getElementById("ativoDeRede").style.display = "block";
        document.getElementById("outros").style.display = "none";
        document.getElementById("movel").style.display = "none";
    }else if(value == 2){
        document.getElementById("movel").style.display = "block";          //alternar entre as telas de cadastro
        document.getElementById("ativoDeRede").style.display = "none";
        document.getElementById("outros").style.display = "none";
    }else if (value == 3){
        document.getElementById("outros").style.display = "block";
        document.getElementById("movel").style.display = "none";
        document.getElementById("ativoDeRede").style.display = "none";
    }else if(value == 0){
        document.getElementById("outros").style.display = "none";
        document.getElementById("movel").style.display = "none";
        document.getElementById("ativoDeRede").style.display = "none";
    }
}


//mostrar ou não menu superior e lateral, dependendo do tipo de tela 
function confMenus(){
    
    var value = document.getElementById("tipoTela").value;
    switch(value) {
        case "principal":
            document.getElementById("main").style.display = "none";
            document.getElementById("mySidebar").style.width = "15%";
            document.getElementById("btInicio").style.color = "rgb(0, 80, 255)";
            break;
        case "cadastrar":
            document.getElementById("btCadastrar").style.color = "rgb(0, 80, 255)";

            break;
        case "alterar":
            document.getElementById("btAlterar").style.color = "rgb(0, 80, 255)";
            break;
        case "consultar":
            document.getElementById("btConsultar").style.color = "rgb(0, 80, 255)";
            break;
        case "sobre":
            document.getElementById("main").style.display = "none";
            document.getElementById("mySidebar").style.width = "15%";
            document.getElementById("btSobre").style.color = "rgb(0, 80, 255)";
            break;

        default:
          // code block
    } 
    value = document.getElementById("tela").value;
    switch(value) {
        case "patrimonio":
            document.getElementById("btPatrimonio").style.color = "rgb(0, 80, 255)";
            break;
        case "usuario":
            document.getElementById("btUsuario").style.color = "rgb(0, 80, 255)";
            break;
        case "local":
            document.getElementById("btLocal").style.color = "rgb(0, 80, 255)";
            break;
        case "responsavel":
            document.getElementById("btResponsavel").style.color = "rgb(0, 80, 255)";
            break;
    } 
    
    
}

