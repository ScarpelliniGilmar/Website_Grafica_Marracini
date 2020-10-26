<?php
$empresa = $_POST['empresa'];
$nome .= $_POST['nome'];
$email.= $_POST['email'];
$telefone .= $_POST['telefone'];
$msg .= $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$assunto = "Contato";




// Compo E-mail
  $arquivo = "
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
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#ffffff'>
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



      
	  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: servidor@graficamarracini.com.br <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";






$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';






if (mail("gilmar.trindade@hotmail.com", $assunto, $arquivo, $headers)){
    
    echo "<script>location.href='../index.html'</script>";
    
    
}else{
    
    
    echo "<script>location.href='../index.html'</script>";
    
};


?>

