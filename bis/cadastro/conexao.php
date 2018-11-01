<?php  
$servidor= ""
$user = "";
$senha= "";
$bd = "";

$conec = mysqliconect($servidor,$user,$senha,$bd);
if(!$canec){
    die('Falaha na conexão, consulte o suporte evesonaqw@gmail.com');
}else{
    echo "Conexão realizada com sucesso!";
}

?>

