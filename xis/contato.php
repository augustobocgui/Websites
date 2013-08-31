<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/conteudo.css" rel="stylesheet" type="text/css" />
<title>Contato - Xis Soluções Digitais | Montes Claros</title>
<style type="text/css">
<!--
.txtarea {
height: 30px;
margin-bottom:15px;
}
.txtarea-mensagem {
height: 230px;
width:100%;
}
-->
</style>
</head>

<body>
  <?php
      if(isset($_POST['nome'])){
  //1 – Definimos Para quem vai ser enviado o email
  $para = "contato@xsolucoes.com";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = "Contato - site xsolucoes.com";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<br>  <strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>E-mail:  </strong>".$email;
  $mensagem .= "<br>  <strong>Telefone:  </strong>".$telefone;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: www.xsolucoes.com<contato@xsolucoes.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@xsolucoes.com>>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@xsolucoes.com>>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
  
if($nome == "" || $email == "" || $telefone == "" || $mensagem == ""){        
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Sua mensagem não pode ser enviada. Existem campos não preenchidos!\")</SCRIPT>";	          
}else{
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Mensagem Enviada com sucesso!\")</SCRIPT>";	
}
	  }
  ?>

<div class="quadros-internos-contato">
<div class="quadro-interno-azul-contato">

<img src="img/barra_quadro_topo.png" alt="Título Criação de Websites" width="970" height="115"/>
<div class="titulo-interno-menor-s">E para que os heróis ajudem, basta chamá-los!</div><!-- titulo-web -->
<br /><br />
<div id="contato">

<form action="?pg=index" method="post">
<table width="615px" border="0">
  <tr>
    <td width="166" height="30px" align="center" valign="middle"><font size="2px"><input name="nome" type="text" class="txtarea" id="campo" value="Nome" size="31" maxlength="150" onfocus="if(this.value=='Nome') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Nome'; };" />
    <input name="email" type="text" class="txtarea" id="campo" value="E-mail" size="28" maxlength="100" onfocus="if(this.value=='E-mail') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'E-mail'; };" />
    <input name="telefone" type="text" class="txtarea" id="campo" value="Telefone" size="18" maxlength="15" onfocus="if(this.value=='Telefone') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Telefone'; };" />           
    </td></font>
  </tr>
  <tr valign="top"> 
    <td width="100%" align="center"><font size="2px"><textarea name="mensagem" class="txtarea-mensagem" id="campo" onfocus="if(this.value=='Mensagem') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Mensagem'; };">Mensagem</textarea> 
    </td></font>
  </tr>
  <tr>
    <td align="right"><div style=" font-size:12px; color: #5C7D9E; font-family: Verdana, Geneva, sans-serif; float:left;">*Todos campos obrigatórios.</div><input name="Submit" type="submit" value="Enviar" id="botao"/>
    </td>
  </tr>
</table>
</form>
</div><!-- contato -->
<div id="mapa">
<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Xis+Solu%C3%A7%C3%B5es+Digitais&amp;aq=&amp;sll=-16.616056,-43.938805&amp;sspn=1.497525,2.469177&amp;ie=UTF8&amp;hq=Xis+Solu%C3%A7%C3%B5es+Digitais&amp;hnear=&amp;t=m&amp;cid=6298337637796174363&amp;ll=-16.708876,-43.866949&amp;spn=0.024662,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Xis+Solu%C3%A7%C3%B5es+Digitais&amp;aq=&amp;sll=-16.616056,-43.938805&amp;sspn=1.497525,2.469177&amp;ie=UTF8&amp;hq=Xis+Solu%C3%A7%C3%B5es+Digitais&amp;hnear=&amp;t=m&amp;cid=6298337637796174363&amp;ll=-16.708876,-43.866949&amp;spn=0.024662,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
</div><!-- mapa -->

<div id="texto-contato">
<p><h4>Rua Padre Augusto, 106 - sala 401<br />
Montes Claros - MG<br />
<a href="callto://+553830844831">38 3084 4831</a><br />
<a href="mailto:contato@xsolucoes.com">contato@xsolucoes.com</a> 
</h4></p>
</div><!-- texto-contato -->

<div class="barra-inferior-contato"><img src="img/barra_quadro_inferior.jpg" alt="Barra inferior Xis - Soluções Digitais" width="970" height="100"/></div><!-- barra-inferior-contato -->

</div><!-- quadro-interno-azul-contato -->
</div><!-- quadros-internos-contato -->
</body>
</html>