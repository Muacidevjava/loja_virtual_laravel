@extends('template')
@section('conteudo')


<div class="rows">
    <div class="col-12">
        <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
            <svg class="icon cadastro" viewBox="0 0 98 91" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 19.64V15.25C19 12.2663 20.1853 9.40483 22.295 7.29505C24.4048 5.18527 27.2663 4 30.25 4H67.75C70.7337 4 73.5952 5.18527 75.705 7.29505C77.8147 9.40483 79 12.2663 79 15.25V19.64M19 19.64C20.175 19.225 21.435 19 22.75 19H75.25C76.565 19 77.825 19.225 79 19.64M19 19.64C16.8061 20.4157 14.9066 21.8526 13.5634 23.7528C12.2202 25.653 11.4993 27.923 11.5 30.25V34.64M79 19.64C81.1939 20.4157 83.0933 21.8526 84.4366 23.7528C85.7798 25.653 86.5007 27.923 86.5 30.25V34.64M11.5 34.64C12.675 34.225 13.935 34 15.25 34H82.75C84.0273 33.9985 85.2955 34.215 86.5 34.64M11.5 34.64C7.13 36.185 4 40.35 4 45.25V75.25C4 78.2337 5.18526 81.0952 7.29505 83.205C9.40483 85.3147 12.2663 86.5 15.25 86.5H82.75C85.7337 86.5 88.5952 85.3147 90.705 83.205C92.8147 81.0952 94 78.2337 94 75.25V45.25C94.0007 42.923 93.2798 40.653 91.9366 38.7528C90.5933 36.8526 88.6939 35.4157 86.5 34.64" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
            SAIDA AVULSA
        </span>
    </div>

    <div class="col-12">
        <div class="caixa">
            <form name="busca" action="" method="GET">
                <div class="px-0 w-100 d-grid">
                    <div class="d-flex text-end">
                        <div class="d-flex center-middle">
                            <a href="" class="btn btn-laranja filtro mx-1" title="Filtrar saida"><i
                                    class="fas fa-filter"></i></a>
                        </div>
                    </div>

                    <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4 border">
                        <div class="rows center-middle">
                            <div class="col-3">
                                <label class="text-label d-block text-branco">Data 1</label>
                                <input type="date" name="data1" value="" class="form-campo">
                            </div>
                            <div class="col-3">
                                <label class="text-label d-block text-branco">Data 2</label>
                                <input type="date" name="data2" value="" class="form-campo">
                            </div>
                            <div class="col-3">
                                <label class="text-label d-block text-branco">Produtos</label>
                                <select class="form-campo">
                                    <option>Opção</option>
                                </select>
                            </div>
                            <div class="col-2 mt-4">
                                <input type="submit" value="Pesquisar" class="w-100 btn btn-roxo text-uppercase">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="caixa mb-3 border mt-3">
            <div class="h5 bg-estoque d-inline-block width-100 py-1 px-3 text-branco text-uppercase mb-0">
                <span class="d-inline-block"><i class="fas fa-arrow-right"></i> Lista de Saidas </span>
            </div>
            <div class="col-12 mb-3">
                <div class="border p-3 radius-4 pb-4 caixafield">
                    <div class="rows center-middle">
                        <div class="col-6 position-relative">
                            <label class="text-label">Produto</label>
                            <div class="grupo-form-btn">
                                <input type="text" name="produtosaida" id="produtosaida" class="form-campo">
                                <a href="{{ route('produto.create') }}" class="border radius-50 p-1 fas fa-plus"
                                    title="Inserir novo Produto"></a>
                            </div>

                        </div>
                        <div class="col-2">
                            <label class="text-label">Valor</label>
                            <input type="text" id="preco" name="preco" value=""
                                class="form-campo mascara-float">
                        </div>
                        <div class="col-2">
                            <label class="text-label">Qtde</label>
                            <input type="text" name="qtde" id="qtde" value=""
                                class="form-campo mascara-float">
                        </div>

                        <div class="col-2 mt-4">
                            <input type="hidden" id="produto_id" name="produto_id">
                            <a href="javascript:;" onclick="inserirSaidaEstoque()" class="btn btn-roxo width-100">
                                Inserir</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 mb-3">
                <div class="">
                    <div class="tabela-responsiva sm tborder tborder pb-3">
                        <table cellpadding="0" cellspacing="0" class="mb-0 table categoria">
                            <thead>
                                <tr>
                                    <th align="center">Item</th>
                                    <th align="center">Data</th>
                                    <th align="left" width="390">Produto</th>
                                    <th align="center">Qtde</th>
                                    <th align="center">Valor</th>
                                    <th align="center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="lista_solicitacao">
                                @foreach ($lista as $l)
                                <tr>
                                    <td align="center">{{ $l->id }}</td>
                                    <td align="center">{{ databr($l->data_saida) }}</td>
                                    <td align="left">{{ $l->produto->nome }}</td>
                                    <td align="center">{{ $l->qtde_saida }}</td>
                                    <td align="center">{{ $l->valor_saida }}</td>
                                    <td align="center">{{ $l->subtotal_saida }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection