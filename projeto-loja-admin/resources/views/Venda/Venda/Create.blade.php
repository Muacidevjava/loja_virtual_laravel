@extends('template')
@section('conteudo')


<div class="rows">
    <div class="col-12">
        <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
            <svg class="icon venda" width="23" height="24" viewBox="0 0 23 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 4.25H3.386C3.896 4.25 4.341 4.593 4.473 5.085L4.856 6.522M4.856 6.522L7.25 15.5M4.856 6.522C6.15497 6.4856 6.25 6.522 7.75 6.522H4.856ZM4.856 6.522L6.11061 11.2271L7.25 15.5M7.25 15.5C6.45435 15.5 5.69129 15.8161 5.12868 16.3787C4.56607 16.9413 4.25 17.7044 4.25 18.5H20M7.25 15.5H18.468M7.25 15.5C8.74689 15.6555 16.9862 15.4714 18.468 15.5M18.468 15.5C19.589 13.2 20.568 10.816 21.392 8.362C21.3326 8.53789 18.75 15.25 18.468 15.5ZM12 4L14.5 1.5M14.5 1.5L17 4M14.5 1.5V9.5M5.75 21.5C5.75 21.6989 5.67098 21.8897 5.53033 22.0303C5.38968 22.171 5.19891 22.25 5 22.25C4.80109 22.25 4.61032 22.171 4.46967 22.0303C4.32902 21.8897 4.25 21.6989 4.25 21.5C4.25 21.3011 4.32902 21.1103 4.46967 20.9697C4.61032 20.829 4.80109 20.75 5 20.75C5.19891 20.75 5.38968 20.829 5.53033 20.9697C5.67098 21.1103 5.75 21.3011 5.75 21.5ZM18.5 21.5C18.5 21.6989 18.421 21.8897 18.2803 22.0303C18.1397 22.171 17.9489 22.25 17.75 22.25C17.5511 22.25 17.3603 22.171 17.2197 22.0303C17.079 21.8897 17 21.6989 17 21.5C17 21.3011 17.079 21.1103 17.2197 20.9697C17.3603 20.829 17.5511 20.75 17.75 20.75C17.9489 20.75 18.1397 20.829 18.2803 20.9697C18.421 21.1103 18.5 21.3011 18.5 21.5Z"
                    stroke="white" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            VENDA
        </span>
    </div>

    <div class="col-6 m-auto">
        <div class="caixa">
            <form action="{{ route('venda.store') }}" method="POST" >
                @csrf
                <div class="px-2 py-2 w-100 d-grid">

                    <div class=" mt-2 p-4 radius-4 border">
                        <div class="rows center-middle">
                            <div class="col-12">
                                <label class="text-label d-block text-branco">Data </label>
                                <input type="date" name="categoria" value="{{ hoje() }}" class="form-campo">
                            </div>
                            <div class="col-12">
                                <label class="text-label d-block text-branco">Cliente</label>
                                <div class="grupo-form-btn">
                                    <input type="text" name="desc_cliente" id="desc_cliente" class="form-campo">
                                    <input type="hidden" name="cliente_id" id="cliente_id">
                                    <a href="#" target="_blank"
                                        class="text-verde border radius-50 p-1 fas fa-plus" title="Inserir novo Cliente"></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="text-label d-block text-branco">Vendedor</label>
                                <div class="grupo-form-btn">
                                    <input type="text" name="desc_vendedor" id="desc_vendedor" class="form-campo">
                                    <input type="hidden" name="vendedor_id" id="vendedor_id">
                                    <a href="#" target="_blank"
                                        class="text-verde border radius-50 p-1 fas fa-plus" title="Inserir novo Vendedor"></a>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <a href="javascript:;" onclick="inserirVenda()" class="btn btn-roxo text-uppercase">
                                    Inserir</a>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>



@endsection