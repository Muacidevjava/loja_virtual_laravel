function inserirEtapa(){
	$.ajax({
		url: base_url + "etapaproducao/salvarJs",
	   type: "POST",
	   dataType: "json",
	   data:{
			produto_id: $("#produto_id").val(),
			processo_produtivo_id: $("#processo_produtivo_id").val()
		},
		 success: function(data){
			if(data.tem_erro ==true){
				alert(data.erro);
			}else{
			   lista_etapa_producao(data.lista);
			}
		 },
		  beforeSend: function () {
	     },
         error: function (data) {
            var errors = $.parseJSON(data.responseText);
            alert(errors);
        }
	});
}

function lista_etapa_producao(data){
	html = "<tr>";
	for(var i in data){
		html += '<td align="center" class="text-escuro">' + data[i].id + '</td>' +
        '<td align="left" class="text-escuro">' + data[i].etapa + '</td>' +
       	'<td align="center" class="text-escuro">'+
        '<a href="javascript:;" onclick="excluirProdutoComposicao('+ data[i].id +')"  class="btn btn-pequeno btn-outline-vermelho  d-inline-block" title="Excluir">' +
        '<i class="fas fa fa-trash"></i></a></td></tr>'
	}
	$("#lista_etapa_producao").html(html);
}


function abrirModalProcesso(id_etapa){
    $("#etapa_id").val(id_etapa);
    $.ajax({
		url: base_url + "composicaoproduto/listaPorEtapa/" + id_etapa ,
	   type: "GET",
	   dataType: "json",
	   data:{},
		 success: function(data){
			if(data.tem_erro ==true){
				alert(data.erro);
			}else{
			   lista_produto_composicao(data.lista);
			}
		 },
		  beforeSend: function () {
	     },
         error: function (data) {
			var errors = $.parseJSON(data.responseText);
            alert(errors);
		}
	});
    abrirModal('#addProcessoProdutivo')
}

function inserirComposicaoProduto(){
	$.ajax({
		url: base_url + "composicaoproduto/salvarJs",
	   type: "POST",
	   dataType: "json",
	   data:{
            etapa_id: $("#etapa_id").val(),
			produto_pai_id: $("#produto_pai_id").val(),
			produto_filho_id: $("#produto_filho_id").val(),
			qtde_necessaria: $("#qtde_necessaria").val(),
		},
		 success: function(data){
			if(data.tem_erro ==true){
				alert(data.erro);
			}else{
			   lista_produto_composicao(data.lista);
			}
		 },
		  beforeSend: function () {
	     },
         error: function (data) {
			var errors = $.parseJSON(data.responseText);
            alert(errors);
		}
	});
}

function lista_produto_composicao(data){
	html = "<tr>";
	for(var i in data){
		html += '<td align="center">' + data[i].id + '</td>' +
        '<td align="left">' + data[i].nome_insumo + '</td>' +
		'<td align="left">' + data[i].qtde_necessaria  + '</td>' +
		'<td align="left">' + data[i].valor  + '</td>' +
		'<td align="left">' + data[i].subtotal  + '</td>' +
       	'<td align="center"><a href="javascript:;" onclick="excluirProdutoComposicao('+ data[i].id +')"  class="btn btn-outline-vermelho btn-pequeno fas fa-trash" title="Excluir"></a></td></tr>'
	}
	$("#lista_produto_composicao").html(html);
}


function excluirProdutoComposicao(id){
       $.ajax({
         url: base_url + "composicaoproduto/"  + id ,
         type: "DELETE",
         data: {  },
         dataType:"Json",
         success: function(data){
             window.location.reload();
         }

     });
}


