<div class="menu-lateral">
    <a href="" class="logo d-block" style="background:none"></a>
    <img src="{{ asset('assets/img/logomin-zeus.svg') }}">
    </a>
    <div class="logo-text">Projeto ERP</div>
    <nav class="menuprincipal" id="principal">
        <ul class="menu-ul icones">
            <li><a href="">
                    <svg class="icon" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.25 11L10.204 2.04499C10.644 1.60599 11.356 1.60599 11.795 2.04499L20.75 11M3.5 8.74999V18.875C3.5 19.496 4.004 20 4.625 20H8.75V15.125C8.75 14.504 9.254 14 9.875 14H12.125C12.746 14 13.25 14.504 13.25 15.125V20H17.375C17.996 20 18.5 19.496 18.5 18.875V8.74999M7.25 20H15.5"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Home</span>
                </a>
            </li>
            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Cadastro</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Tabelas Auxiliares</a>
                        <ul>
                            <li><a href="{{ route('status.index') }}">Status</a></li>
                            <li><a href="{{ route('categoria.index') }}">Categoria</a></li>
                            <li><a href="{{ route('unidade.index') }}">Unidade</a></li>
                            <li><a href="{{ route('banco.index') }}">Banco</a></li>
                            <li><a href="{{ route('tipocontacorrente.index') }}">Tipo Conta Corrente</a></li>

                            <li><a href="formapagto">Forma Pagto</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Produto</a>
                        <ul>
                            <li><a href="{{ route('produto.index') }}">Lista de produto</a></li>
                            <li><a href="{{ route('produto.create') }}">Cadastro de produto</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Cliente</a>
                        <ul>
                            <li><a href="{{ route('cliente.index') }}">Lista de Cliente</a></li>
                            <li><a href="{{ route('cliente.create') }}">Cadastro de Cliente</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Fornecedor</a>
                        <ul>
                            <li><a href="{{ route('fornecedor.index') }}">Lista de Fornecedor</a></li>
                            <li><a href="{{ route('fornecedor.create') }}">Cadastro de Fornecedor</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Transportadora</a>
                        <ul>
                            <li><a href="{{ route('transportadora.index') }}">Lista de Transportadora</a></li>
                            <li><a href="{{ route('transportadora.create') }}">Cadastro de Transportadora</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Vendedor</a>
                        <ul>
                            <li><a href="{{ route('vendedor.index') }}">Lista de vendedor</a></li>
                            <li><a href="{{ route('vendedor.create') }}">Cadastro de Vendedor</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Conta Corrente</a>
                        <ul>
                            <li><a href="{{ route('contacorrente.index') }}">Lista de Conta Corrente</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Imagens</a>
                        <ul>
                            <li><a href="{{ route('imagem.index') }}">Lista de Imagens</a></li>
                            <li><a href="{{ route('imagemproduto.index') }}">Lista de Imagem Produto</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Grade Produto</a>
                        <ul>
                            <li><a href="{{ route('variacaograde.index') }}">Lista de Variação</a></li>
                            <li><a href="{{ route('itemvariacaograde.index') }}">Item da Variação</a></li>
                        </ul>
                    </li>


                    <li class="subcat">
                        <a href="">Cupom Desconto</a>
                        <ul>
                            <li><a href="cupomdesconto">Lista de Cupom Desconto</a></li>
                        </ul>
                    </li>

                </ul>
            </li>






            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 98 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 19.64V15.25C19 12.2663 20.1853 9.40483 22.295 7.29505C24.4048 5.18527 27.2663 4 30.25 4H67.75C70.7337 4 73.5952 5.18527 75.705 7.29505C77.8147 9.40483 79 12.2663 79 15.25V19.64M19 19.64C20.175 19.225 21.435 19 22.75 19H75.25C76.565 19 77.825 19.225 79 19.64M19 19.64C16.8061 20.4157 14.9066 21.8526 13.5634 23.7528C12.2202 25.653 11.4993 27.923 11.5 30.25V34.64M79 19.64C81.1939 20.4157 83.0933 21.8526 84.4366 23.7528C85.7798 25.653 86.5007 27.923 86.5 30.25V34.64M11.5 34.64C12.675 34.225 13.935 34 15.25 34H82.75C84.0273 33.9985 85.2955 34.215 86.5 34.64M11.5 34.64C7.13 36.185 4 40.35 4 45.25V75.25C4 78.2337 5.18526 81.0952 7.29505 83.205C9.40483 85.3147 12.2663 86.5 15.25 86.5H82.75C85.7337 86.5 88.5952 85.3147 90.705 83.205C92.8147 81.0952 94 78.2337 94 75.25V45.25C94.0007 42.923 93.2798 40.653 91.9366 38.7528C90.5933 36.8526 88.6939 35.4157 86.5 34.64"
                            stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span>Estoque</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Entradas</a>
                        <ul>
                            <li><a href="{{ route('entrada.index') }}">Entradas avulsa</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Saídas</a>
                        <ul>
                            <li><a href="{{ route('saida.index') }}">Saídas Avulsas</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Movimentações</a>
                        <ul>
                            <li><a href="lst-historico-movimento.html">Histórico de movimento</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    <span>NFE</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Emitente</a>
                        <ul>
                            <li><a href="emitente">Lista de Emitente</a></li>
                            <li><a href="emitente/create">Cadastro de Emitente</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Natureza da Operação</a>
                        <ul>
                            <li><a href="naturezaoperacao">Lista de Natureza Operação</a></li>
                            <li><a href="naturezaoperacao/create">Cadastro de Natureza de Operação</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Certificado Digital</a>
                        <ul>
                            <li><a href="certificadodigital">Lista de Certificado Digital</a></li>
                            <li><a href="certificadodigital/create">Cadastro de Certificado Digital</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Notas Fiscais</a>
                        <ul>
                            <li><a href="notafiscal">Lista de Notas Fiscais</a></li>
                            <li><a href="notafiscal/create">Cadastro de Nota Fiscal</a></li>
                        </ul>
                    </li>


                </ul>
            </li>




            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 98 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 22.0446H10.4325C12.7995 22.0446 14.8648 23.6364 15.4774 25.9199L17.2549 32.5891M17.2549 32.5891L28.3657 74.2568M17.2549 32.5891C23.2836 32.4201 23.7246 32.5891 30.6863 32.5891H17.2549ZM17.2549 32.5891L23.0777 54.4259L28.3657 74.2568M28.3657 74.2568C24.673 74.2568 21.1316 75.7239 18.5205 78.3349C15.9094 80.946 14.4425 84.4876 14.4425 88.1801H87.5396M28.3657 74.2568H80.4295M28.3657 74.2568C35.3129 74.9785 73.5523 74.1241 80.4295 74.2568M80.4295 74.2568C85.6321 63.5823 90.1757 52.5179 94 41.1287C93.7243 41.945 81.7382 73.0965 80.4295 74.2568ZM48.0903 29.526L62.0136 41.1287M62.0136 41.1287L75.9369 29.526M62.0136 41.1287V9.80136V4M21.4041 102.103C21.4041 103.026 21.0373 103.912 20.3846 104.565C19.7318 105.218 18.8464 105.584 17.9233 105.584C17.0001 105.584 16.1147 105.218 15.462 104.565C14.8092 103.912 14.4425 103.026 14.4425 102.103C14.4425 101.18 14.8092 100.295 15.462 99.6422C16.1147 98.9892 17.0001 98.6225 17.9233 98.6225C18.8464 98.6225 19.7318 98.9892 20.3846 99.6422C21.0373 100.295 21.4041 101.18 21.4041 102.103ZM80.578 102.103C80.578 103.026 80.2113 103.912 79.5583 104.565C78.9058 105.218 78.0203 105.584 77.0972 105.584C76.174 105.584 75.2885 105.218 74.636 104.565C73.983 103.912 73.6163 103.026 73.6163 102.103C73.6163 101.18 73.983 100.295 74.636 99.6422C75.2885 98.9892 76.174 98.6225 77.0972 98.6225C78.0203 98.6225 78.9058 98.9892 79.5583 99.6422C80.2113 100.295 80.578 101.18 80.578 102.103Z"
                            stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span>Vendas</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Venda</a>
                        <ul>
                            <li><a href="venda">Lista de Vendas</a></li>
                            <li><a href="venda/create">Cadastro de Venda</a></li>
                        </ul>
                    </li>


                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 98 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M68.0147 45.8274V23.0124C68.0147 17.97 66.0116 13.1341 62.4461 9.56862C58.8805 6.00309 54.0446 4 49.0022 4C43.9598 4 39.1239 6.00309 35.5584 9.56862C31.9929 13.1341 29.9898 17.97 29.9898 23.0124V45.8274M87.5645 35.7229L93.9679 96.5627C94.3228 99.9343 91.6864 102.865 88.2946 102.865H9.70985C8.90984 102.866 8.1186 102.698 7.38753 102.373C6.65646 102.048 6.0019 101.573 5.46639 100.979C4.93087 100.385 4.52636 99.6844 4.27915 98.9235C4.03194 98.1627 3.94755 97.3583 4.03146 96.5627L10.4399 35.7229C10.5877 34.3213 11.2492 33.0242 12.2968 32.0814C13.3444 31.1387 14.7039 30.6172 16.1132 30.6174H81.8912C84.8115 30.6174 87.2603 32.8229 87.5645 35.7229ZM31.891 45.8274C31.891 46.3316 31.6907 46.8152 31.3342 47.1718C30.9776 47.5283 30.494 47.7286 29.9898 47.7286C29.4855 47.7286 29.002 47.5283 28.6454 47.1718C28.2889 46.8152 28.0885 46.3316 28.0885 45.8274C28.0885 45.3231 28.2889 44.8395 28.6454 44.483C29.002 44.1264 29.4855 43.9261 29.9898 43.9261C30.494 43.9261 30.9776 44.1264 31.3342 44.483C31.6907 44.8395 31.891 45.3231 31.891 45.8274ZM69.9159 45.8274C69.9159 46.3316 69.7156 46.8152 69.3591 47.1718C69.0025 47.5283 68.5189 47.7286 68.0147 47.7286C67.5104 47.7286 67.0268 47.5283 66.6703 47.1718C66.3137 46.8152 66.1134 46.3316 66.1134 45.8274C66.1134 45.3231 66.3137 44.8395 66.6703 44.483C67.0268 44.1264 67.5104 43.9261 68.0147 43.9261C68.5189 43.9261 69.0025 44.1264 69.3591 44.483C69.7156 44.8395 69.9159 45.3231 69.9159 45.8274Z"
                            stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span>Compras</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Compra Manual</a>
                        <ul>
                            <li><a href="compra">Lista de Compras</a></li>
                            <li><a href="compra/create">Nova Compra</a></li>
                        </ul>
                    </li>
                    <li class="subcat">
                        <a href="">Importação de XML</a>
                        <ul>
                            <li><a href="compra">Lista de Compras</a></li>
                            <li><a href="compra/create">Nova Compra</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Manifesto</a>
                        <ul>
                            <li><a href="compra">Lista de Compras</a></li>
                            <li><a href="compra/create">Nova Compra</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Ordem de Compra</a>
                        <ul>
                            <li><a href="solicitacao">Solicitacao</a></li>
                            <li><a href="cotacao">Cotação</a></li>
                            <li><a href="ordemcompra">Ordem de Compra</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 98 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M68.0147 45.8274V23.0124C68.0147 17.97 66.0116 13.1341 62.4461 9.56862C58.8805 6.00309 54.0446 4 49.0022 4C43.9598 4 39.1239 6.00309 35.5584 9.56862C31.9929 13.1341 29.9898 17.97 29.9898 23.0124V45.8274M87.5645 35.7229L93.9679 96.5627C94.3228 99.9343 91.6864 102.865 88.2946 102.865H9.70985C8.90984 102.866 8.1186 102.698 7.38753 102.373C6.65646 102.048 6.0019 101.573 5.46639 100.979C4.93087 100.385 4.52636 99.6844 4.27915 98.9235C4.03194 98.1627 3.94755 97.3583 4.03146 96.5627L10.4399 35.7229C10.5877 34.3213 11.2492 33.0242 12.2968 32.0814C13.3444 31.1387 14.7039 30.6172 16.1132 30.6174H81.8912C84.8115 30.6174 87.2603 32.8229 87.5645 35.7229ZM31.891 45.8274C31.891 46.3316 31.6907 46.8152 31.3342 47.1718C30.9776 47.5283 30.494 47.7286 29.9898 47.7286C29.4855 47.7286 29.002 47.5283 28.6454 47.1718C28.2889 46.8152 28.0885 46.3316 28.0885 45.8274C28.0885 45.3231 28.2889 44.8395 28.6454 44.483C29.002 44.1264 29.4855 43.9261 29.9898 43.9261C30.494 43.9261 30.9776 44.1264 31.3342 44.483C31.6907 44.8395 31.891 45.3231 31.891 45.8274ZM69.9159 45.8274C69.9159 46.3316 69.7156 46.8152 69.3591 47.1718C69.0025 47.5283 68.5189 47.7286 68.0147 47.7286C67.5104 47.7286 67.0268 47.5283 66.6703 47.1718C66.3137 46.8152 66.1134 46.3316 66.1134 45.8274C66.1134 45.3231 66.3137 44.8395 66.6703 44.483C67.0268 44.1264 67.5104 43.9261 68.0147 43.9261C68.5189 43.9261 69.0025 44.1264 69.3591 44.483C69.7156 44.8395 69.9159 45.3231 69.9159 45.8274Z"
                            stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span>Produção</span>
                </a>
                <ul>

                    <li><a href="processoprodutivo">Processo Produtivo</a></li>
                    <li><a href="etapaproducao">Etapa de Produção</a></li>
                    <li><a href="produtocomposicao">Engenharia do Produto</a></li>
                    <li><a href="ordemproducao">Ordem de Produção</a></li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <svg class="icon" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                            stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Financeiro</span>
                </a>
                <ul>
                    <li class="subcat">
                        <a href="">Plano de Conta</a>
                        <ul>
                            <li><a href="planoconta">Plano de Conta</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Centro de Custo</a>
                        <ul>
                            <li><a href="centrocusto">Centro de Custo</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Despesas Fixas</a>
                        <ul>
                            <li><a href="despesafixa">Despesas Fixas</a></li>
                        </ul>
                    </li>


                    <li class="subcat">
                        <a href="">Contas a Receber</a>
                        <ul>
                            <li><a href="contareceber">Contas a Receber</a></li>
                            <li><a href="recebimento">Recebimento</a></li>
                        </ul>
                    </li>

                    <li class="subcat">
                        <a href="">Contas a Pagar</a>
                        <ul>
                            <li><a href="contapagar">Contas a Pagar</a></li>
                            <li><a href="pagamento">Pagamentos</a></li>
                        </ul>
                    </li>

                </ul>
            </li>


        </ul>
    </nav>

</div>