@extends('template')
@section('conteudo')

<div class="rows">
    <div class="col-12">
        <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
            <svg class="icon cadastro" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.5 14.875H14.875M14.875 14.875H18.25M14.875 14.875V11.5M14.875 14.875V18.25M4 8.5H6.25C6.84674 8.5 7.41903 8.26295 7.84099 7.84099C8.26295 7.41903 8.5 6.84674 8.5 6.25V4C8.5 3.40326 8.26295 2.83097 7.84099 2.40901C7.41903 1.98705 6.84674 1.75 6.25 1.75H4C3.40326 1.75 2.83097 1.98705 2.40901 2.40901C1.98705 2.83097 1.75 3.40326 1.75 4V6.25C1.75 6.84674 1.98705 7.41903 2.40901 7.84099C2.83097 8.26295 3.40326 8.5 4 8.5ZM4 18.25H6.25C6.84674 18.25 7.41903 18.0129 7.84099 17.591C8.26295 17.169 8.5 16.5967 8.5 16V13.75C8.5 13.1533 8.26295 12.581 7.84099 12.159C7.41903 11.7371 6.84674 11.5 6.25 11.5H4C3.40326 11.5 2.83097 11.7371 2.40901 12.159C1.98705 12.581 1.75 13.1533 1.75 13.75V16C1.75 16.5967 1.98705 17.169 2.40901 17.591C2.83097 18.0129 3.40326 18.25 4 18.25ZM13.75 8.5H16C16.5967 8.5 17.169 8.26295 17.591 7.84099C18.0129 7.41903 18.25 6.84674 18.25 6.25V4C18.25 3.40326 18.0129 2.83097 17.591 2.40901C17.169 1.98705 16.5967 1.75 16 1.75H13.75C13.1533 1.75 12.581 1.98705 12.159 2.40901C11.7371 2.83097 11.5 3.40326 11.5 4V6.25C11.5 6.84674 11.7371 7.41903 12.159 7.84099C12.581 8.26295 13.1533 8.5 13.75 8.5Z"
                    stroke="#341008" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Lista de contacorrentes
        </span>

        <div class="caixa">

            <div class="px-2 py-2 w-100 d-grid">
                <form
                    action="http://localhost/metodoagora/diversos/mjailton/borrao/borrao_zeus/sistemas/zeus_erp/borrao_zeus_erp/public/contacorrente"
                    method="POST">
                    <input type="hidden" name="_token" value="tvtnp2mVXd8pddzy2IANE1RBBXPKhRKrJNRg7Ttx">
                    <div class="caixafield  p-2 radius-4 border">
                        <div class="   p-2 pt-0 radius-4">
                            <div class="rows center-middle">
                                <div class="col-6">
                                    <label class="text-label d-block text-branco">Descrição </label>
                                    <input type="text" name="descricao" required value="" class="form-campo">
                                </div>

                                <div class="col-6">
                                    <label class="text-label d-block text-branco">Banco </label>
                                    <select class="form-campo" name="banco_id">
                                        <option value='1' required>
                                            999 - Caixa Interno</option>
                                        <option value='2' required>
                                            001 - Banco do Brasil S.A.</option>
                                        <option value='3' required>
                                            004 - Banco do Nordeste do Brasil S.A.</option>
                                        <option value='4' required>
                                            033 - Banco Santander (Brasil) S.A.</option>
                                        <option value='5' required>
                                            104 - Caixa Econômica Federal</option>
                                        <option value='6' required>
                                            341 - Itaú Unibanco S.A.</option>
                                        <option value='7' required>
                                            260 - Nu Pagamentos S.A (Nubank)</option>
                                        <option value='8' required>
                                            290 - Pagseguro Internet S.A</option>
                                        <option value='9' required>
                                            237 - Banco Bradesco S.A.</option>
                                        <option value='10' required>
                                            246 - Banco ABC Brasil S.A.</option>
                                        <option value='11' required>
                                            748 - Banco Cooperativo Sicredi S.A.</option>
                                        <option value='12' required>
                                            117 - Advanced Cc Ltda</option>
                                        <option value='13' required>
                                            121 - Banco Agibank S.A.</option>
                                        <option value='14' required>
                                            172 - Albatross Ccv S.A</option>
                                        <option value='15' required>
                                            188 - Ativa Investimentos S.A</option>
                                        <option value='16' required>
                                            654 - Banco A.J.Renner S.A.</option>
                                        <option value='17' required>
                                            246 - Banco ABC Brasil S.A.</option>
                                        <option value='18' required>
                                            075 - Banco ABN AMRO S.A</option>
                                        <option value='19' required>
                                            121 - Banco Agibank S.A.</option>
                                        <option value='20' required>
                                            025 - Banco Alfa S.A.</option>
                                        <option value='21' required>
                                            641 - Banco Alvorada S.A.</option>
                                        <option value='22' required>
                                            065 - Banco Andbank (Brasil) S.A.</option>
                                        <option value='23' required>
                                            213 - Banco Arbi S.A.</option>
                                        <option value='24' required>
                                            096 - Banco B3 S.A.</option>
                                        <option value='25' required>
                                            024 - Banco BANDEPE S.A.</option>
                                        <option value='26' required>
                                            318 - Banco BMG S.A.</option>
                                        <option value='27' required>
                                            752 - Banco BNP Paribas Brasil S.A.</option>
                                        <option value='28' required>
                                            107 - Banco BOCOM BBM S.A.</option>
                                        <option value='29' required>
                                            063 - Banco Bradescard S.A.</option>
                                        <option value='30' required>
                                            036 - Banco Bradesco BBI S.A.</option>
                                        <option value='31' required>
                                            122 - Banco Bradesco BERJ S.A.</option>
                                        <option value='32' required>
                                            204 - Banco Bradesco Cartões S.A.</option>
                                        <option value='33' required>
                                            394 - Banco Bradesco Financiamentos S.A.</option>
                                        <option value='34' required>
                                            218 - Banco BS2 S.A.</option>
                                        <option value='35' required>
                                            208 - Banco BTG Pactual S.A.</option>
                                        <option value='36' required>
                                            336 - Banco C6 S.A – C6 Bank</option>
                                        <option value='37' required>
                                            473 - Banco Caixa Geral – Brasil S.A.</option>
                                        <option value='38' required>
                                            412 - Banco Capital S.A.</option>
                                        <option value='39' required>
                                            040 - Banco Cargill S.A.</option>
                                        <option value='40' required>
                                            368 - Banco Carrefour</option>
                                        <option value='41' required>
                                            266 - Banco Cédula S.A.</option>
                                        <option value='42' required>
                                            739 - Banco Cetelem S.A.</option>
                                        <option value='43' required>
                                            233 - Banco Cifra S.A.</option>
                                        <option value='44' required>
                                            745 - Banco Citibank S.A.</option>
                                        <option value='45' required>
                                            241 - Banco Clássico S.A.</option>
                                        <option value='46' required>
                                            756 - Banco Cooperativo do Brasil S.A. </option>
                                        <option value='47' required>
                                            748 - Banco Cooperativo Sicredi S.A.</option>
                                        <option value='48' required>
                                            222 - Banco Credit Agricole Brasil S.A.</option>
                                        <option value='49' required>
                                            505 - Banco Credit Suisse (Brasil) S.A.</option>
                                        <option value='50' required>
                                            069 - Banco Crefisa S.A.</option>
                                        <option value='51' required>
                                            003 - Banco da Amazônia S.A.</option>
                                        <option value='52' required>
                                            083 - Banco da China Brasil S.A.</option>
                                        <option value='53' required>
                                            707 - Banco Daycoval S.A.</option>
                                        <option value='54' required>
                                            051 - Banco de Desenvolvimento do Espírito Santo S.A.</option>
                                        <option value='55' required>
                                            300 - Banco de La Nacion Argentina</option>
                                        <option value='56' required>
                                            495 - Banco de La Provincia de Buenos Aires</option>
                                        <option value='57' required>
                                            335 - Banco Digio S.A</option>
                                        <option value='58' required>
                                            047 - Banco do Estado de Sergipe S.A.</option>
                                        <option value='59' required>
                                            037 - Banco do Estado do Pará S.A.</option>
                                        <option value='60' required>
                                            041 - Banco do Estado do Rio Grande do Sul S.A.</option>
                                        <option value='61' required>
                                            196 - Banco Fair Corretora de Câmbio S.A</option>
                                        <option value='62' required>
                                            265 - Banco Fator S.A.</option>
                                        <option value='63' required>
                                            224 - Banco Fibra S.A.</option>
                                        <option value='64' required>
                                            626 - Banco Ficsa S.A.</option>
                                        <option value='65' required>
                                            094 - Banco Finaxis S.A.</option>
                                        <option value='66' required>
                                            612 - Banco Guanabara S.A.</option>
                                        <option value='67' required>
                                            012 - Banco Inbursa S.A.</option>
                                        <option value='68' required>
                                            604 - Banco Industrial do Brasil S.A.</option>
                                        <option value='69' required>
                                            653 - Banco Indusval S.A.</option>
                                        <option value='70' required>
                                            077 - Banco Inter S.A.</option>
                                        <option value='71' required>
                                            249 - Banco Investcred Unibanco S.A.</option>
                                        <option value='72' required>
                                            184 - Banco Itaú BBA S.A.</option>
                                        <option value='73' required>
                                            029 - Banco Itaú Consignado S.A.</option>
                                        <option value='74' required>
                                            479 - Banco ItauBank S.A</option>
                                        <option value='75' required>
                                            376 - Banco J. P. Morgan S.A.</option>
                                        <option value='76' required>
                                            074 - Banco J. Safra S.A.</option>
                                        <option value='77' required>
                                            217 - Banco John Deere S.A.</option>
                                        <option value='78' required>
                                            076 - Banco KDB S.A.www.bancokdb.com.br</option>
                                        <option value='79' required>
                                            757 - Banco KEB HANA do Brasil S.A.</option>
                                        <option value='80' required>
                                            600 - Banco Luso Brasileiro S.A.</option>
                                        <option value='81' required>
                                            243 - Banco Máxima S.A.</option>
                                        <option value='82' required>
                                            720 - Banco Maxinvest S.A.</option>
                                        <option value='83' required>
                                            389 - Banco Mercantil de Investimentos S.A.</option>
                                        <option value='84' required>
                                            389 - Banco Mercantil do Brasil S.A.</option>
                                        <option value='85' required>
                                            370 - Banco Mizuho do Brasil S.A.</option>
                                        <option value='86' required>
                                            746 - Banco Modal S.A.</option>
                                        <option value='87' required>
                                            066 - Banco Morgan Stanley S.A.</option>
                                        <option value='88' required>
                                            456 - Banco MUFG Brasil S.A.www.br.bk.mufg.jp</option>
                                        <option value='89' required>
                                            007 - Banco Nacional de Desenvolvimento Econômico e Social – BNDES</option>
                                        <option value='90' required>
                                            169 - Banco Olé Bonsucesso Consignado S.A.</option>
                                        <option value='91' required>
                                            111 - Banco Oliveira Trust Dtvm S.A</option>
                                        <option value='92' required>
                                            079 - Banco Original do Agronegócio S.A.</option>
                                        <option value='93' required>
                                            212 - Banco Original S.A.</option>
                                        <option value='94' required>
                                            712 - Banco Ourinvest S.A.</option>
                                        <option value='95' required>
                                            623 - Banco PAN S.A.</option>
                                        <option value='96' required>
                                            611 - Banco Paulista S.A.</option>
                                        <option value='97' required>
                                            643 - Banco Pine S.A.</option>
                                        <option value='98' required>
                                            658 - Banco Porto Real de Investimentos S.A.</option>
                                        <option value='99' required>
                                            747 - Banco Rabobank International Brasil S.A.</option>
                                        <option value='100' required>
                                            633 - Banco Rendimento S.A.</option>
                                        <option value='101' required>
                                            741 - Banco Ribeirão Preto S.A.</option>
                                        <option value='102' required>
                                            120 - Banco Rodobens S.A.</option>
                                        <option value='103' required>
                                            422 - Banco Safra S.A.</option>
                                        <option value='104' required>
                                            630 - Banco Smartbank S.A.</option>
                                        <option value='105' required>
                                            637 - Banco Sofisa S.A.www.sofisa.com.br</option>
                                        <option value='106' required>
                                            655 - Banco Votorantim S.A.</option>
                                        <option value='107' required>
                                            610 - Banco VR S.A.</option>
                                        <option value='108' required>
                                            119 - Banco Western Union do Brasil S.A.</option>
                                        <option value='109' required>
                                            124 - Banco Woori Bank do Brasil S.A.</option>
                                        <option value='110' required>
                                            348 - Banco Xp S/A</option>
                                        <option value='111' required>
                                            081 - BancoSeguro S.A.</option>
                                        <option value='112' required>
                                            021 - BANESTES S.A. Banco do Estado do Espírito Santo</option>
                                        <option value='113' required>
                                            755 - Bank of America Merrill Lynch Banco Múltiplo S.A.</option>
                                        <option value='114' required>
                                            268 - Barigui Companhia Hipotecária</option>
                                        <option value='115' required>
                                            250 - BCV – Banco de Crédito e Varejo S.A.</option>
                                        <option value='116' required>
                                            144 - BEXS Banco de Câmbio S.A.</option>
                                        <option value='117' required>
                                            253 - Bexs Corretora de Câmbio S/A</option>
                                        <option value='118' required>
                                            134 - Bgc Liquidez Dtvm Ltda</option>
                                        <option value='119' required>
                                            017 - BNY Mellon Banco S.A.</option>
                                        <option value='120' required>
                                            301 - Bpp Instituição De Pagamentos S.A</option>
                                        <option value='121' required>
                                            126 - BR Partners Banco de Investimento S.A.</option>
                                        <option value='122' required>
                                            070 - BRB – Banco de Brasília S.A.</option>
                                        <option value='123' required>
                                            092 - Brickell S.A. Crédito, Financiamento e Investimentow</option>
                                        <option value='124' required>
                                            173 - BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.</option>
                                        <option value='125' required>
                                            142 - Broker Brasil Cc Ltda</option>
                                        <option value='126' required>
                                            292 - BS2 Distribuidora de Títulos e Valores Mobiliários S.A.</option>
                                        <option value='127' required>
                                            011 - C.Suisse Hedging-Griffo Cv S.A (Credit Suisse)</option>
                                        <option value='128' required>
                                            288 - Carol Distribuidora de Títulos e Valor Mobiliários Ltda</option>
                                        <option value='129' required>
                                            130 - Caruana Scfi</option>
                                        <option value='130' required>
                                            159 - Casa Credito S.A</option>
                                        <option value='131' required>
                                            016 - Ccm Desp Trâns Sc E Rs</option>
                                        <option value='132' required>
                                            089 - Ccr Reg Mogiana</option>
                                        <option value='133' required>
                                            114 - Central Cooperativa De Crédito No Estado Do Espírito Santo</option>
                                        <option value='134' required>
                                            320 - China Construction Bank (Brasil) Banco Múltiplo S.A.</option>
                                        <option value='135' required>
                                            477 - Citibank N.A.</option>
                                        <option value='136' required>
                                            180 - Cm Capital Markets Cctvm Ltda</option>
                                        <option value='137' required>
                                            127 - Codepe Cvc S.A</option>
                                        <option value='138' required>
                                            163 - Commerzbank Brasil S.A. – Banco Múltiplo</option>
                                        <option value='139' required>
                                            060 - Confidence Cc S.A</option>
                                        <option value='140' required>
                                            098 - Credialiança Ccr</option>
                                        <option value='141' required>
                                            010 - Credicoamo</option>
                                        <option value='142' required>
                                            133 - Cresol Confederação</option>
                                        <option value='143' required>
                                            182 - Dacasa Financeira S/A</option>
                                        <option value='144' required>
                                            707 - Banco Daycoval S.A.</option>
                                        <option value='145' required>
                                            487 - Deutsche Bank S.A. – Banco Alemão</option>
                                        <option value='146' required>
                                            140 - Easynvest – Título Cv S.A</option>
                                        <option value='147' required>
                                            149 - Facta S.A. Cfi</option>
                                        <option value='148' required>
                                            285 - Frente Corretora de Câmbio Ltda.</option>
                                        <option value='149' required>
                                            278 - Genial Investimentos Corretora de Valores Mobiliários S.A.</option>
                                        <option value='150' required>
                                            138 - Get Money Cc Ltda</option>
                                        <option value='151' required>
                                            064 - Goldman Sachs do Brasil Banco Múltiplo S.A.</option>
                                        <option value='152' required>
                                            177 - Guide Investimentos S.A. Corretora de Valores</option>
                                        <option value='153' required>
                                            146 - Guitta Corretora de Câmbio Ltda</option>
                                        <option value='154' required>
                                            078 - Haitong Banco de Investimento do Brasil S.A.</option>
                                        <option value='155' required>
                                            062 - Hipercard Banco Múltiplo S.A.www.hipercard.com.br</option>
                                        <option value='156' required>
                                            189 - HS Financeira S/A Crédito, Financiamento e Investimentos</option>
                                        <option value='157' required>
                                            269 - HSBC Brasil S.A. – Banco de Investimento</option>
                                        <option value='158' required>
                                            271 - IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.</option>
                                        <option value='159' required>
                                            157 - Icap Do Brasil Ctvm Ltda</option>
                                        <option value='160' required>
                                            132 - ICBC do Brasil Banco Múltiplo S.A.</option>
                                        <option value='161' required>
                                            492 - ING Bank N.V.www.ing.com</option>
                                        <option value='162' required>
                                            139 - Intesa Sanpaolo Brasil S.A. </option>
                                        <option value='163' required>
                                            652 - Itaú Unibanco Holding S.A.</option>
                                        <option value='164' required>
                                            488 - JPMorgan Chase Bank, National Association</option>
                                        <option value='165' required>
                                            399 - Kirton Bank S.A. – Banco Múltiplo</option>
                                        <option value='166' required>
                                            293 - Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.
                                        </option>
                                        <option value='167' required>
                                            105 - Lecca Crédito, Financiamento e Investimento S/A</option>
                                        <option value='168' required>
                                            145 - Levycam Ccv Ltda</option>
                                        <option value='169' required>
                                            113 - Magliano S.A</option>
                                        <option value='170' required>
                                            323 - Mercado Pago – Conta Do Mercado Livre</option>
                                        <option value='171' required>
                                            128 - MS Bank S.A. Banco de Câmbio</option>
                                        <option value='172' required>
                                            137 - Multimoney Cc Ltda</option>
                                        <option value='173' required>
                                            014 - Natixis Brasil S.A. Banco Múltiplo</option>
                                        <option value='174' required>
                                            191 - Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.</option>
                                        <option value='175' required>
                                            753 - Novo Banco Continental S.A.</option>
                                        <option value='176' required>
                                            613 - Omni Banco S.A.www.bancopecunia.com.br</option>
                                        <option value='177' required>
                                            613 - Omni Banco S.A.www.omni.com.br</option>
                                        <option value='178' required>
                                            254 - Paraná Banco S.A.</option>
                                        <option value='179' required>
                                            326 - Parati – Crédito Financiamento e Investimento S.A.</option>
                                        <option value='180' required>
                                            174 - Pernambucanas Financ S.A</option>
                                        <option value='181' required>
                                            100 - Planner Corretora De Valores S.A</option>
                                        <option value='182' required>
                                            125 - Plural S.A. – Banco Múltiplo</option>
                                        <option value='183' required>
                                            093 - Pólocred Scmepp Ltda</option>
                                        <option value='184' required>
                                            108 - Portocred S.A</option>
                                        <option value='185' required>
                                            283 - Rb Capital Investimentos Dtvm Ltda</option>
                                        <option value='186' required>
                                            101 - Renascenca Dtvm Ltda</option>
                                        <option value='187' required>
                                            270 - Sagitur Corretora de Câmbio Ltda.</option>
                                        <option value='188' required>
                                            751 - Scotiabank Brasil S.A. Banco Múltiplo</option>
                                        <option value='189' required>
                                            276 - Senff S.A. – Crédito, Financiamento e Investimento</option>
                                        <option value='190' required>
                                            545 - Senso Ccvm S.A</option>
                                        <option value='191' required>
                                            190 - Servicoop</option>
                                        <option value='192' required>
                                            183 - Socred S.A</option>
                                        <option value='193' required>
                                            299 - Sorocred Crédito, Financiamento e Investimento S.A.</option>
                                        <option value='194' required>
                                            118 - Standard Chartered Bank (Brasil) </option>
                                        <option value='195' required>
                                            197 - Stone Pagamentos S.A</option>
                                        <option value='196' required>
                                            095 - Travelex Banco de Câmbio S.A.</option>
                                        <option value='197' required>
                                            143 - Treviso Corretora de Câmbio S.A.</option>
                                        <option value='198' required>
                                            131 - Tullett Prebon Brasil Cvc Ltda</option>
                                        <option value='199' required>
                                            129 - UBS Brasil Banco de Investimento S.A.</option>
                                        <option value='200' required>
                                            91 - Unicred Central Rs</option>
                                        <option value='201' required>
                                            136 - Unicred Cooperativa</option>
                                        <option value='202' required>
                                            298 - Vips Cc Ltda</option>
                                        <option value='203' required>
                                            102 - Xp Investimentos S.A</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label class="text-label d-block text-branco">Agência </label>
                                    <input type="text" name="agencia" required value="" class="form-campo">
                                </div>
                                <div class="col-2">
                                    <label class="text-label d-block text-branco">Conta </label>
                                    <input type="text" name="conta" required value="" class="form-campo">
                                </div>
                                <div class="col-3">
                                    <label class="text-label d-block text-branco">Tipo Conta</label>
                                    <select class="form-campo" name="tipo_conta_corrente_id">
                                        <option value='1'>
                                            Conta Corrente</option>
                                        <option value='2'>
                                            Poupança</option>
                                        <option value='3'>
                                            Carteira/Caixa</option>
                                        <option value='4'>
                                            Investimento</option>
                                        <option value='5'>
                                            Cartão Crédito</option>
                                        <option value='6'>
                                            Outros</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="text-label d-block text-branco">Pix </label>
                                    <input type="text" name="pix" value="" class="form-campo">
                                </div>
                                <div class="col-2 mt-0 pt-4">
                                    <input type="submit" value="Salvar" class="btn btn-roxo text-uppercase w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-12">
        <div class="px-2">
            <div class="tabela-responsiva pb-4">
                <table cellpadding="0" cellspacing="0" id="dataTable" width="100%" class="table contacorrente">
                    <thead>
                        <tr>
                            <th align="center">Id</th>
                            <th align="left">Descrição</th>
                            <th align="left">Banco</th>
                            <th align="left">Agência</th>
                            <th align="left">Conta</th>
                            <th align="left">Tipo Conta</th>
                            <th align="left">Pix</th>
                            <th align="center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista as $l)
                        <tr>

                            <td align="center">{{ $l->id }}</td>
                            <td align="left">{{ $l->descricao }}</td>
                            <td align="left">{{ $l->banco_id }}</td>
                            <td align="left">{{ $l->agencia }}</td>
                            <td align="left">{{ $l->conta }}</td>
                            <td align="left">{{ $l->tipo_conta_corrente_id}}</td>
                            <td align="left">{{ $l->pix }}</td>
                            <td align="center">
                                <a href="{{ route('contacorrente.edit', $l->id) }}"
                                    class="d-inline-flex gap-3 btn btn-outline-roxo btn-pequeno"><i
                                        class="fas fa-edit"></i>
                                    Editar</a>

                                <a href="javascript:;"
                                    onclick="confirm('Tem Certeza?') ? document.getElementById('apagar{{ $l->id }}').submit() : '';"
                                    class="d-inline-flex gap-3 btn btn-outline-vermelho btn-pequeno">
                                    <i class="fas fa-trash-alt"></i>
                                    <form action="{{ route('contacorrente.destroy', $l->id) }}" method="POST"
                                        id="apagar{{ $l->id }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                    </form>

                                    Excluir
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>


        <!--
                                                                                                                                                                                                                                        <div class="caixa p-2">
                                                                                                                                                                                                                                                <div class="msg msg-verde">
                                                                                                                                                                                                                                                <p><b><i class="fas fa-check"></i> Mensagem de boas vindas</b> Parabéns seu produto foi inserido com sucesso</p>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <div class="msg msg-vermelho">
                                                                                                                                                                                                                                                <p><b><i class="fas fa-times"></i> Mensagem de Erro</b> Houve um erro</p>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                <div class="msg msg-amarelo">
                                                                                                                                                                                                                                                <p><b><i class="fas fa-exclamation-triangle"></i> Mensagem de aviso</b> Tem um aviso pra você</p>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        -->
    </div>

</div>



@endsection