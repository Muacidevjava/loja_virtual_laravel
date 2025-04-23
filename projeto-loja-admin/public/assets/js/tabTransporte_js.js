
function listarTransportadora(){
    $.ajax({
         url: base_url + "transportadora/lista/",
         type: "GET",
         dataType: "json",
         data:{},
         success: function (data){
             fecharGiraGira(0);
                 html = "<tr>";
               for(var i in data){
                   html += '<td align="center">' + data[i].id + '</td>' +
                       '<td align="center">' + data[i].razao_social + '</td>' +
                       '<td align="center">' + data[i].cnpj + '</td>' +
                          '<td><a href="javascript:;" onclick="selecionar_transportadora('+ data[i].id +')"  class="d-inline-block btn btn-verde btn-pequeno" title="Selecionar">Selecionar</a></td></tr>'

               }

             $("#lista_de_transoportadoras").html(html);
             abrirModal('#janela_transportadora');
         },
         beforeSend: function () {
           giraGira();
        },
     });

   }

function selecionar_transportadora(id_transportadora){
    $.ajax({
         url: base_url + "transportadora/selecionarTransportadora/"+ id_transportadora + "/"+ nfe_id ,
         type: "get",
         dataType:"Json",
         success: function(data){
            populaFornecedor(data);
            fecharModal();
         },
         beforeSend: function(){
            giraGira();
        }
     });
 }


function populaFornecedor(data){
 $("#transp_xNome").val(data.razao_social);
 $("#transp_CNPJ").val(data.cnpj);
 $("#transp_IE").val(data.ie);
 $("#transp_xEnder").val(data.logradouro);
 $("#transp_xMun").val(data.cidade);
 $("#transp_UF").val(data.uf) ;

}

function salvarTransporte(){
    var frmTransporte = $("#frmTransporte").serializeArray();
    frmTransporte.push({ name: "nfe_id", value: nfe_id });

    $.ajax({
            url: base_url + "notafiscal/salvarTransporte",
            type: "post",
            dataType:"Json",
            data:frmTransporte,
            success: function(data){
                fecharGiraGira();
                if(data.tem_erro ==true){
                    $("#mostrarUmErro").html(MostrarUmaMsgErro(" Erro: " + data.erro));
                }else{
                    $("#mostrarSucesso").html(MostrarUmaMsgSucesso("Sucesso : " + "Dados da Aba Transporte atualizado com sucesso"));
                }
            },
            beforeSend: function(){
            giraGira();
        }, error: function (e) {
            fecharModal();
            var response = JSON.parse(e.responseText);
            $("#mostrarErros").html(MostrarMsgErros(response.errors));
        }
    });
}
