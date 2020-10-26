<?php
$msg ="Empresa: ".$_POST['empresa']."\n";
$msg .= "Nome: ".$_POST['nome']."\n";
$msg .=  "E-mail: ".$_POST['email']."\n";
$msg .= "Telefone: " .$_POST['telefone']."\n";
$msg .="Orçamento:  " .$_POST['mensagem']."\n";

mail("grafica@graficamarracini.com.br","Contato", $msg);

echo 'Sua mensagem foi enviada. <a href=orcamento.htm>Clique aqui</a> para voltar ';
?>

