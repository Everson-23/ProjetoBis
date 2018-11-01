<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Automação Industrial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icon2.png">
    <script type='text/javascript'>
        (function(){ var widget_id = 'XWo0R4O36p';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>

<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}


.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #0B3861;
    width: 25%;
    text-align: center;
    margin-left: 340px;
    margin-top:-14px;
    
}


.tab button {
    display: block;
    background-color: inherit;
    color: white;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}


.tab button:hover {
    background-color:#F7D358;
}

.tab button.active {
    background-color: rgb(243, 126, 30);
}

.tabcontent {
    float: left;
    padding: 0px 12px ;
    border: 2px solid #0B3861;
    width: 25%;
    border-left: none;
    height: 684px;
    margin-top:-14px;
}
</style>
</head>

<body>
<?php require_once('header.php');?>
        <br>
    <div style="color:#151515;background-color:whitch;text-align:center;padding:50px 110px;text-align: justify;">
        <h3 style="text-align:center;">Automação Industrial</h3>
        <p>A BIS  utiliza o <b>ERP (Enterprise Resource Planning)</b> ou Sistema Integrado de Gestão Empresarial, 
            um software que melhora a gestão das empresas, automatizando os processos e integrando as atividades 
            de Vendas, Finanças, Contabilidade, Fiscal, Estoque, Compras, Recursos Humanos, Produção e Logística.
            Além de haver sistemas já prontos, a BIS torna o sistema adaptável para qualquer cliente.</p>
    </div>
  
    <div class="tab" >
        <button class="tablinks" onclick="openCity(event, 'autoin1')" id="defaultOpen">Cadastro</button>
        <button class="tablinks" onclick="openCity(event, 'autoin2')">Estoque</button>  
        <button class="tablinks" onclick="openCity(event, 'autoin3')">Produção</button> 
        <button class="tablinks" onclick="openCity(event, 'autoin4')">Relatórios</button> 
        <button class="tablinks" onclick="openCity(event, 'autoin5')">Logística</button> 
        <button class="tablinks" onclick="openCity(event, 'autoin6')">Faturamento</button>  
        <button class="tablinks" onclick="openCity(event, 'autoin7')">Financeiro</button>
        <button class="tablinks" onclick="openCity(event, 'autoin8')">Supervisão</button>
        <button class="tablinks" onclick="openCity(event, 'autoin9')"> Integração com outros Softwares</button>
        <button class="tablinks" onclick="openCity(event, 'autoin10')"> Suporte</button>
        
        </div>

        <div id="autoin1" class="tabcontent">
                <div style=" line-height: 1.7; font-size:16px;margin-top:20px;">
                        <ul>
                                <li>Cadastro de Clientes</li>
                                <li>Cadastro de Funcionários</li>
                                <li>Cadastro de Fornecedores</li>
                              </ul>
                    </div>   
        </div>

        <div id="autoin2" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                        <ul>
                                <li>Cadastro de Produtos</li>
                                <li>Controle de Atualização de grade</li>
                                <li>Controle de Grupos e Subgrupos</li>
                                <li>Controle de Reposição de Estoque</li>
                                <li>Entrada de Produtos</li>
                                <li>Tabela de Preços</li>
                              </ul>
                </div>
        </div>

        <div id="autoin3" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                        <ul>
                                <li>Baixa de material de Consumo</li>
                                <li>Controle de lote</li>
                                <li>Entrada de Produto acabado</li>
                                <li>Ficha técnica do Produto</li>
                                <li>Ordem de Produção</li>
                              </ul>
                </div>
        </div>

        <div id="autoin4" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                        <li>Relatórios gerenciais</li>
                        <li>Relatórios de Produção</li>
                        <li>Relatórios de Estoque</li>
                    </ul>
                </div>
        </div>

        <div id="autoin5" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                            <li>Análise de Cargas Emitidas</li>
                            <li>Atualização de Rotas</li>
                            <li>Cadastramento de Veículos</li>
                            <li>Relatório de Rotas Faturadas</li>
                    </ul>
                </div>
        </div>

        <div id="autoin6" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                            <li>Controle de Carregamento</li>
                            <li>Emissão de Duplicatas</li>
                            <li>Faturamento</li>
                            <li>Faturamento Direto</li>
                            <li>Geração de arquivo Palm</li>
                            <li>Pedidos</li>
                            <li>Planejamento de Carga</li>
                            <li>Posição de Faturamento Diário</li>
                            <li>Rastreamento de Pedidos</li>
                    </ul>
                </div>
        </div>

        <div id="autoin7" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                            <li>Análise de Contas</li>
                            <li>Consulta de Comissão dos Vendedores</li>
                            <li>Consulta de Saldo de Contas</li>
                            <li>Contas a Receber</li>
                            <li>Contas Atrasadas por Vendedor</li>
                            <li>Contas a Pagar</li>
                            <li>Controle de emissão de Cheques</li>
                            <li>Despesas por Cento de Custo</li>
                            <li>Elaboração de Borderôs</li>
                            <li>Fluxo de Caixa</li>
                            <li>Pretação de Contas de Cargas</li>
                    </ul>
                </div>
        </div>

        <div id="autoin8" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                            <li>Ajuste de Àrea do Vendedor</li>
                            <li>Relatório de análise de Vendas</li>
                            <li>Cotrole de metas por vendedor</li>
                    </ul>
                </div>
        </div>

        <div id="autoin9" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                  <li>Exportação de Arquivos Fiscais</li>
                  <li>Importação de pedidos de Palm</li>
                  <li>SPED Fiscal</li>
                  <li>SPED PIS/COnfins</li>
                    </ul>
                </div>
        </div>

        <div id="autoin10" class="tabcontent">
                <div style=" line-height: 1.7;font-size:16px;margin-top:20px">
                    <ul>
                            <li>Atendimento Online e Telefônico</li>
                            <li>Treinamento de Usuários dp Sistema</li>
                            <li>Manutenção Corretiva e Evolutiva do Sitema</li>
                            <li>Consultoria Tecnológica</li>
                    </ul>
                </div>
        </div>

    </div>
 
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
        </script>

        <div style="margin-top: 780px;">
                <?php require_once('footer.php'); ?>
         </div>
       
</body>
</html> 