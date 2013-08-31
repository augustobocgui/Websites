<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/conteudo.css" type="text/css" rel="stylesheet"/>
<title>Rebocar Auto Socorro - Guincho 24 horas - Contato</title>
</head>
<body>
  <?php
      if(isset($_POST['nome'])){
  //1 – Definimos Para quem vai ser enviado o email
  $para = "contato@rebocarautosocorro.com.br";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = "Contato - site Rebocar.com.br";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<br>  <strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>E-mail:  </strong>".$email;
  $mensagem .= "<br>  <strong>Telefone:  </strong>".$telefone;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: rebocarautosocorro.com.br<contato@rebocarautosocorro.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@rebocarautosocorro.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@rebocarautosocorro.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
  
if($nome == "" || $email == "" || $telefone == "" || $mensagem == ""){        
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Sua mensagem não pode ser enviada. Existem campos não preenchidos!\")</SCRIPT>";	          
}else{
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Mensagem Enviada com sucesso!\")</SCRIPT>";	
}
	  }
  ?>
<div id="menu">
		<?php include("Page Menu.htm"); ?>
</div>
<div id="titulo">Contato</div><br/>
<form action="?pg=contato" method="post">
    <table width="300" border="0" id="texto">
  <tr>
  </tr>
  <tr>
    <td width="166" align="right" valign="middle"><font size="2px">Nome:</font></td>
    <td><input name="nome" type="text" id="campo" size="50" maxlength="150" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><font size="2px">E-mail:</font></td>
    <td><input name="email" type="text" id="campo" size="50" maxlength="100" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><font size="2px">Telefone:</font></td>
    <td><input name="telefone" type="text" id="campo" size="20" maxlength="15" /></td>
  </tr>
  <tr valign="top">
    <td align="right"><font size="2px">Mensagem:</font></td>
    <td><textarea name="mensagem" id="campo" cols="60" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="Submit" type="submit" value="Enviar" /><input name="Submit2" type="reset" id="Submit2" value="Limpar" />
    <p>Obs: todos os campos são obrigatórios.</p>
    </td>
  </tr>
</table>

</form>
</body>
</html>