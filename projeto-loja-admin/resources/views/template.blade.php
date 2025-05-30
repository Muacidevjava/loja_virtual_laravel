<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto Loja Virtual</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale =1">
    <!--css-->
    <link rel="stylesheet" href="{{ asset('assets/componentes/css/style_Componente.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/datatables/css/responsive.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/auxiliar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/grade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-venda.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-m.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    <!--font icones-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        var base_url = "{{ asset('') }}";
            var _token = "{{ csrf_token() }}";
    </script>
</head>

<body>
    <!--- cabecalho -->
    @include('cabecalho')
    <!--- fim cabecalho -->

    @include('menu')

    <script>
        $("#msg_lista_um_erro");
    </script>
    <script>
        $("#msg_lista_varios_erros");
    </script>
    <div id="mostrarErros"></div>
    <div id="mostrarUmErro"></div>
    <div id="mostrarSucesso"></div>

    <div class="conteudo">
        @if (session('msg_sucesso'))
        <div class="alerta alerta-sucesso" id="msgFlash">
            {{ session('msg_sucesso') }}
        </div>
        @endif

        @if (session('msg_erro'))
        <div class="alerta alerta-erro" id="msgFlash">
            {{ session('msg_erro') }}
        </div>
        @endif

        @yield('conteudo')
        <div class="window load fechar_giragira" id="giragira">
            <span class="text-load">Carregando...</span>
        </div>
    </div>



    <script src="{{ asset('assets/js/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>

    <script src="{{ asset('assets/componentes/js/js_data_table.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_modal.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_util.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/js_mascara.js') }}"></script>
    <script src="{{ asset('assets/componentes/js/upload.js') }}"></script>
    @if (isset($clienteJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_cliente.js') }}"></script>
    @endif
    @if (isset($fornecedorJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_fornecedor.js') }}"></script>
    @endif
    @if (isset($transportadoraJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_transportadora.js') }}"></script>
    @endif
    @if (isset($produtoJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_produto.js') }}"></script>
    @endif
    @if (isset($categoriaJs))
    <script src="{{ asset('assets/js/js_categoria.js') }}"></script>
    @endif

    @if (isset($entradaJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_entrada.js') }}"></script>
    @endif
    @if (isset($saidaJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_saida.js') }}"></script>
    @endif
    @if (isset($vendaJs))
    <script type="text/javascript" src="{{ asset('assets/js/js_venda.js') }}"></script>
    @endif

    <script>
        $(function() {
                $("#tab").tabs();
            });
    </script>

    <script>
        setTimeout(() => {
                const msg = document.getElementById('msgFlash');
                if (msg) {
                    msg.style.transition = 'all 0.5s ease';
                    msg.style.opacity = '0';
                    msg.style.height = '0';
                    msg.style.padding = '0';
                    msg.style.margin = '0';
                    setTimeout(() => msg.remove(), 500);
                }
            }, 4000); // 4 segundos
    </script>


</body>

</html>