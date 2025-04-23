$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN': _token
	}
});
$(function () {

	$("#btnInserirItemOrdemProducao").on("click", function(){
		var id		= $("#produto_id").val();
		var ordem_producao_id	= $("#ordem_producao_id").val();
		var qtde	= $("#qtde").val();

		$.ajax({
			url: base_url + "itemordemproducao",
		   type: "POST",
		   dataType: "json",
		   data:{
			   		produto_id:id,
			   		qtde_pedido: qtde,
			   		qtde_a_produzir: 0,
			   		ordem_producao_id : ordem_producao_id
			   	},
			 success: function(data){
				 lista_item_ordem_producao(data);
				 limpar_item_ordem_producao();
			 }

		});
	});

   $("#produto").on("keyup", function(){
	   var q = $(this).val();
	   if(q==""){
		   return;
	   }
	   $.ajax({
		   url: base_url + "produto/pesquisa",
		   type: "GET",
		   dataType: "json",
		   data: {q:q},
		   success: function (data){
			   $("#produto").after('<div class="listaProdutos"></div>');
			   html="";
			   for(var i in data){
				   html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)" ' +
				   		  'data-id="'+data[i].id +
				   		  '" data-preco = "' + data[i].preco_venda +
				   		  '" data-nome = "' + data[i].nome + '">' +
				   		  data[i].nome + " - RS " + data[i].preco_venda + '</a></div>';
			   }

			   $(".listaProdutos").html(html);
			   $(".listaProdutos").show();
		   }
	   });
   })
});


function selecionarProduto(obj){
	var id= $(obj).attr('data-id');
	var nome= $(obj).attr('data-nome');
	var preco= $(obj).attr('data-preco');
	$(".listaProdutos").hide();

	$("#produto_id").val(id);
	$("#produto").val(nome);
	$("#preco").val(preco);
	$("#qtde").val(1);
	$("#qtde").focus();

}

function lista_item_ordem_producao(data){
	html = "<tr>";
	var total_item_ordem_producao = 0.00;
	for(var i in data){
		total_item_ordem_producao += parseFloat(data[i].subtotal);
		html +=
        '<td align="center">' + data[i].id + '</td>' +
        '<td align="center">' + data[i].produto.nome + '</td>' +
        '<td align="center">' + data[i].qtde_pedido + '</td>' +
		'<td align="center"><a href="javascript:;" onclick="excluir_item_ordem_producao(this)" data-id="'+data[i].id +'"  class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i></a> </td></tr>';
}
	$("#lista_item_ordem_producao").html(html);
}


function limpar_item_ordem_producao(){
	$("#produto_id").val("");
	$("#produto").val("");
	$("#preco").val("");
	$("#qtde").val(1);
	$("#produto").focus();
}


function excluir_item_ordem_producao(obj){
	var id= $(obj).attr('data-id');
	if(!confirm("Deseja Realmente excluir!!!")){
		return false;
	}
	$.ajax({
		   url: base_url + "itemordemproducao/" + id,
		   type: "DELETE",
		   dataType: "json",
		   data: {},
		   success: function (data){
			   window.location.reload();
		   }
	   });
}
