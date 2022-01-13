<!DOCTYPE html>
<html>
      <head>
            <style>
                  @font-face {
                  font-family: Coolvetica;
                  src: url('assets/font/coolvetica\ rg.ttf');
                  }
              </style>
              <meta name="msapplication-TileColor" content="#660099">
              <meta name="theme-color" content="#660099">
              <meta charset="utf-8">
              <meta content="width=device-width, initial-scale=1.0" name="viewport">
              <!--------------------------------------------------->
              <title> Agencia  </title>
              <!--css-->
              <link rel="stylesheet" href="/home/pacotes/css/pacote.css" >
              <!--bootstrap-->
              <link rel="stylesheet"  href="/home/assets/styles/css/bootstrap/css/bootstrap.min.css">
      </head>
      <body>
            <div class="container-fluid enviando">
                  <div class="row">
                        <div class="d-flex justify-content-center">
                              <div>
                                    <img  class="col-12" style="max-width: 350px;" src="/home/pacotes/img/enviando email.svg">
                              </div>
                        </div>
                  </div>
            </div>
            <div class="container-fluid">
                  <div class="row">
                        <div class="d-flex justify-content-center">
                              <div>
                                    <p class="title">Um minuto estamos enviando o seu e-mail.</p>
                              </div>
                        </div>
                  </div>
            </div>
            <script src="/home/assets/styles/css/bootstrap/js/bootstrap.bundle.min.js"></script>
      </body>
</html>
<?php
//Variáveis
$numero = $_POST['text'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$text = $_POST['text'];


// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Coolvetica;
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
                <td width='320'>numero:<b>$numero</b></td>
              </tr>
              <tr>
                <td width='320'>text:<b>$text</b></td>
                
              </tr>
          </td>
        </tr>
      </table>
  </html>
";

//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "algum@email.com";
  $destino = $emailenviar;
  $assunto = "Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> logo entraremos em contato";
  echo " <meta http-equiv='refresh' content='10;URL=/home/pacotes/enviado.html'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>