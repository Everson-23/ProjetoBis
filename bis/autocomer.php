<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Automação Comercial</title>
    <link rel="shortcut icon" href="img/icon2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    margin-left: 140px;
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
    width: 55%;
    border-left: none;
    height: 300px;
    margin-top:-14px;
}
</style>
</head>
<body>
        <?php require_once('header.php');?>
        <br>
    <div style="color:#151515;background-color:whitch;text-align:center;padding:50px 110px;text-align: justify;">
        <h3 style="text-align:center;">Automação Comercial</h3>
        <p> A automatização comercial é imprescindível para qualquer negócio ou Sistema. A BIS oferece softwares que integram processos comerciais que
            vão desde procedimentos operacionais de gestão de estoque e aquisições até a venda e geração de notas fiscais, com geração de informações
            financeiras que serão essenciais para a gestão da sua empresa.</p>
    </div>

        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'autocom1')" id="defaultOpen">Aplicativos comerciais</button>
        <button class="tablinks" onclick="openCity(event, 'autocom2')">Order de serviço</button>  
        </div>

        <div id="autocom1" class="tabcontent">
        <div style=" line-height: 1.7; font-size:16px;margin-top:20px;">
                    <ul>
                        <li>Histórico de Clientes e Fornecedores </li>
                        <li>Romaneio de Carga e Entrega</li>
                        <li>NF-e (Nota Fiscal Eletrônica)</li>
                        <li>Comissão de Vendedores</li>
                        <li>Composição de Produtos</li>
                        <li>Histórico das Vendas</li>
                        <li>Controle de Estoque</li>
                        <li>Lista de Preços</li>
                        <li>Inventário</li>
                    </ul>
                    </div>   
        </div>

        <div id="autocom2" class="tabcontent">
        <div style=" line-height: 1.7; font-size:16px;margin-top:20px;">
                        <ul>    
                                <li>Tributação de ISS, INSS, PIS/CONFINS, IRRF, CFPS</li>
                                <li>E-mail para clientes e Fornecedores</li>
                                <li>Nota Fiscal Eletrônica de Serviços </li>
                                <li>Livro de Caixa e Fluxo de Caixa</li>
                                <li>Faturamento com Nota Fiscal </li>
                                <li>Agendamento de Serviços </li>
                                <li>Controle de Garantia</li>
                <div style="float:right;margin-top:-190px;position: absolute;margin-left: 470px">
                                <li>Sangria e Suplimento</li>
                                <li>SPED PIS/COFINS</li>
                                <li>Contas a Receber</li>
                                <li>Limite de Crédito</li>
                                <li>Contas a Pagar </li>
                                <li>SPED FISCAL</li>
                                <li>Inadiplência</li>
                                
                            </ul>
                
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

        <div style="margin-top: 400px;">
                <?php require_once('footer.php'); ?>
         </div>
     
</body>
</html> 