function CriaRequest() {
    try{
        request = new XMLHttpRequest();
    }catch (IEAtual){

        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(IEAntigo){

            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(falha){
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

function executaScripts(){


    var result = document.getElementById("resultado");
    var xmlreq = CriaRequest();
    xmlreq.open('GET','../controller/index.php?',true);






    xmlreq.onreadystatechange = function(){

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)

        if (xmlreq.readyState == 4) {


            // Verifica se o arquivo foi encontrado com sucesso

            if (xmlreq.status == 200) {

                result.innerHTML =xmlreq.responseText;

            }else{


                result.innerHTML = "Erro: " + xmlreq.statusText;

            }
        }


    };
    xmlreq.send(null);





}











