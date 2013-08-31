<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/global.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jqueryslidemenu.js"></script>
<title>Orçamento - Xis Soluções Digitais | Montes Claros</title>
<style type="text/css">
<!--
body {
margin:1%;
padding:0;
background:url(img/bg-backgrounds.jpg); background-position:center; background-repeat:repeat-x; background-repeat:repeat-y;

}
-->
</style>
<style type="text/css">
<!--
.txtarea {
height: 30px;
margin-bottom:15px;
float:left;
}
.txtarea-mensagem {
height: 120px;
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
  $assunto = "Orçamento - site xsolucoes.com";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<br>  <strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>E-mail:  </strong>".$email;
  $mensagem .= "<br>  <strong>Telefone:  </strong>".$telefone;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: contato@xsolucoes.com<contato@xsolucoes.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@xsolucoes.com>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@xsolucoes.com>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
  
if($nome == "Nome" || $email == "E-mail" || $telefone == "Telefone" || $mensagem == "Mensagem"){        
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Sua mensagem não pode ser enviada. Existem campos não preenchidos!\")</SCRIPT>";	          
}else{
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"Mensagem Enviada com sucesso!\")</SCRIPT>";	
}
	  }
  ?>

<div class="quadro-interno-azul-shadowbox">

<img src="img/barra_quadro_topo_2.png" alt="Título Criação de Websites" width="370" height="58"/>
<div class="titulo-interno-orcamento"><h1>Peça o seu orçamento<br />agora mesmo!</h1></div><!-- titulo-web -->

<div id="contato">

<form action="?pg=index" method="post">
<table width="360px" border="0">
  <tr>
    <td width="166" height="30px" align="center" valign="middle"><font size="2px"><input name="nome" type="text" class="txtarea" id="campo" value="Nome" size="15" maxlength="150" onfocus="if(this.value=='Nome') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Nome'; };" />
    <input name="email" type="text" class="txtarea" id="campo" value="E-mail" size="15" maxlength="100" onfocus="if(this.value=='E-mail') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'E-mail'; };" />
    <input name="telefone" type="text" class="txtarea" id="campo" value="Telefone" size="14" maxlength="15" onfocus="if(this.value=='Telefone') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Telefone'; };" />           
    </td></font>
  </tr>
  <tr valign="top"> 
    <td width="100%" align="center"><font size="2px"><textarea name="mensagem" class="txtarea-mensagem" id="campo" onfocus="if(this.value=='Mensagem') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Mensagem'; };">Mensagem</textarea> 
    </td></font>
  </tr>
  <tr>
    <td align="left"><div style=" font-size:10px; color: #5C7D9E; font-family: Verdana, Geneva, sans-serif; float:left;">*Todos campos obrigatórios.</div><div align="right"><input name="Submit" type="submit" value="Enviar" id="botao"/></div></div><!-- campo -->
    </td>
  </tr>
</table>
</form>
</div><!-- contato -->

</div><!-- quadro-interno-azul -->

<div class="quadros-rodape-paginas">
    <div class="quadros-rodape-paginas">
    <div id="logo-xis-rodape-paginas"></div><!-- logo-xis-rodape-paginas -->
    <div id="separador-xis-rodape-paginas"></div><!-- separador-xis-rodape-paginass -->
    
<div id="menu-rodape-paginas">
<a href="index.html">Home</a><br />
<a href="servicos.php">Serviços</a><br />
<a href="portfolio.php">Portfólio</a><br />
<a href="clientes.php">Clientes</a><br />
<a href="contato.php">Contato</a>

</div><!-- menu rodape -->

<div id="separador-xis-rodape"></div><!-- separador-xis-rodape -->
<div id="redes-sociais"></div><!-- redes-sociais -->
<div id="redes-sociais-icones">
<a href="http://www.facebook.com/xistecnologia?fref=ts" target="_blank"><img src="img/rodape-facebook.png" alt="Facebook" width="35" height="37" /></a>
<a href="https://twitter.com/Xis_Tecnologia" target="_blank"><img src="img/rodape-twitter.png" alt="Twitter" width="35" height="37" /></a><br />
<a href="https://plus.google.com/u/0/103707560916817362906/posts" target="_blank"><img src="img/rodape-google+.png" alt="Twitter" width="35" height="37" /></a>
</div><!-- redes-sociais-icones -->
    <div id="copy">   
<center>Copyright Xis Soluções Digitais 2013 <br /> Todos os direitos reservados</center>
</div><!-- copy -->
</div><!-- quadros-rodape-paginas -->

</body>
</html>