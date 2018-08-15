<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

	//5 – agora inserimos as codificações corretas e  tudo mais.
  	$headers =  "Content-Type:text/html; charset=UTF-8\n";
  	$headers .= "From:  totescontabilidade.com.br<atendimento@totescontabilidade.com.br>\n"; //Vai ser mostrado que  o email partiu deste email e seguido do nome
  	$headers .= "X-Sender:  <atendimento@totescontabilidade.com.br>\n"; //email do servidor //que enviou
  	$headers .= "X-Mailer: PHP  v".phpversion()."\n";
  	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  	$headers .= "Return-Path:  <totes@totescontabilidade.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  	$headers .= "MIME-Version: 1.0\n";

  	mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

  	// Corpo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:18px;
  font-family:Verdane;
  font-size:20px;
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
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
     </tr>
     <tr>
                  <td width='320'>Assunto:$assunto</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> as <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "totes@totescontabilidade.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site Totes Contabilidade ";
 
  // É necessário indicar que o formato do e-mail é html
  	  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='0;URL=send_bar.html'>

  ";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }

?>