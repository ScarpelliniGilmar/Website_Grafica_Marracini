<?php

$empresa .= $_POST['empresa'];
$nome .= $_POST['nome'];
$email.= $_POST['email'];
$telefone .= $_POST['telefone'];
$quantidade .= $_POST['quantidade'];
$formato .= $_POST['formato'];
$papel .= $_POST['papel'];
$cores .= $_POST['cores'];
$acabamento .= $_POST['acabamento'];
$msg .= $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$assunto = "Solicitação de Orçamento";

$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';





 


	  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: grafica@graficamarracini.com.br';           
  //$headers .= "Bcc: $EmailPadrao\r\n";



// Compo E-mail
  $corpo_mensagem = "

  <style type='text/css'>
  body {s
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
  <html>
        <table width='510' border='1' cellpadding='2' cellspacing='2' bgcolor='#FFFFFF'>
          <tr>
              <td>
               <tr>
					<td width='500'>Empresa: <b>$empresa<b></td>
                </tr>
                <tr>
                  <td width='320'>Nome: <b>$nome</b></td>
				  </tr>
				  <tr>
                  <td width='320'>E-mail: <b>$email</b></td>
                </tr>
				<tr>
                  <td width='320'>Telefone: $telefone</td>
                </tr>                
                <tr>
                  <td width='320'>Quantidade: $quantidade</td>
                </tr>
                <tr>
                  <td width='320'>Formato: $formato</td>
                </tr>
                <tr>
                  <td width='320'>Papel: $papel</td>
                </tr>
                <tr>
                  <td width='320'>Cores: $cores</td>
                </tr>
                <tr>
                  <td width='320'>Acabamento: $acabamento</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem: $msg</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> - <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";


$retorno = "Sua Solicitação foi enviada com sucesso, em breve você será respondido!";




    
    


mail("gilmar.trindade@hotmail.com", $assunto, $corpo_mensagem, $headers);



mail($email, $assunto, $retorno, $headers);

echo "<script>location.href='../index.html'</script>";

