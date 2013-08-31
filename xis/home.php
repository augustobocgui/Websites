<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/conteudo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.txtarea {
height: 35px;
margin-bottom:15px;
}
.txtarea-mensagem {
margin-left:5px;
height: 110px;
width:220px;
}
-->
</style>
<style type="text/css">
#carosel img{width:193px; height:190px; padding:5px; margin:0 5px; border:#CCC 1px solid;}
.next{float:right; background:url(img/seta-direita.png); width:55px; height:202px; background-repeat:no-repeat; padding: 3px 10px 10px 10px; border-style:none; background-position:center; cursor:pointer;}
.prev{float:left; background:url(img/seta-esquerda.png); width:55px; height:202px; background-repeat:no-repeat; padding: 3px 10px 10px 10px; border-style:none; background-position:center; cursor:pointer;}
</style>

<script type="text/javascript" src="js/jcarousellite_1.0.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".carosel").jCarouselLite({
			btnNext: ".next",
			btnPrev: ".prev",
			visible: 4,
			auto: 5000, <!-- /faz girar-->
			speed: 1000,
		})
	})

</script>
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
  $headers .= "From: www.xsolucoes.com<contato@xsolucoes.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
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



<div class="quadros">
<div id="asas"><center><img src="img/comumgifcentral.gif" alt="Comunicação" width="823" height="95" /></center></div><!-- asas -->

<div id="qualidade-texto"></div><!-- qualidade-texto -->
<div id="orcamento-texto"></div><!-- orcamento-texto -->

<div id="qualidade-quadro">
<div class="texto-quadro">

<div id="web">
<a href="?pg=web"><img src="img/ico1.png" alt="Websites" width="87" height="69" border : 0px;/></a>
</div><!-- web -->
<div id="web-texto-icon"><a href="?pg=web"><img src="img/web_ico.png" alt="Web" width="41" height="23"  border : 0px;/></a></div><!-- web-texto-icon -->


<div id="texto-webs"><!-- WEB -->
Desenvolvemos Websites que unem inovação, design arrojado, navegabilidade e usabilidade com foco no objetivo do cliente. Aplicamos as tecnologias que mais se enquadram nas perspectivas do seu negócio.<a href="?pg=web"><span class="estilo"> Saiba mais...</span></a>
</div><!-- texto-webs -->

<div id="governo">
<a href="?pg=governo"><img src="img/ico2.png" alt="Governo" width="86" height="76" border : 0px;/></a>
</div><!-- governo -->
<div id="governo-texto-icon"><a href="?pg=governo"><img src="img/governo_ico.png" alt="Governo" width="98" height="27"  border : 0px;/></a></div><!-- governo-texto-icon -->

<div id="texto-governo"><!-- IDENTIDADE VISUAL -->
A Xis Soluções Digitais atua com soluções para o Setor Público da esfera municipal. Fornecemos soluções especializadas para Prefeituras e Secretarias.<a href="?pg=governo"><span class="estilo"> Saiba mais...</span></a>
</div><!-- texto-governo -->

<div id="marketing-online">
<a href="?pg=marketing-online"><img src="img/ico3.png" alt="#MktDigital" width="120" height="66" border : 0px;/></a>
</div><!-- marketing-online -->
<div id="marketing-texto-icon"><a href="?pg=marketing-online"><img src="img/marketing_ico.png" alt="Marketing Online" width="186" height="25"  border : 0px;/></a></div><!-- marketing-texto-icon -->

<div id="texto-marketing-online">
Precisa de ajuda para promover sua empresa na web? Podemos ajudar sua empresa através de SEO, SEM e SMO!<a href="?pg=marketing-online"><span class="estilo"> Saiba mais...</span></a>
</div><!-- texto-marketing-online -->

<div id="consultoria">
<a href="?pg=consultoria"><img src="img/ico4.png" alt="Consultoria" width="42" height="77" border : 0px;/></a>
</div><!-- consultoria -->
<div id="consultoria-texto-icon"><a href="?pg=consultoria"><img src="img/consultoria_ico.png" alt="Consultoria" width="129" height="25"  border : 0px;/></a></div><!-- consultoria-texto-icon -->

<div id="texto-consultoria">
Sua empresa anda fora dos trilhos? Precisa organizar seu marketing digital, tecnologia e processos? Nós conhecemos os atalhos e as soluções!<a href="?pg=consultoria"><span class="estilo"> Saiba mais...</span></a>
</div><!-- texto-consultoria -->

</div><!-- class texto-quadro -->
</div><!-- qualidade-quadro -->


<div id="orcamento-quadro">
<div id="balao-orcamento"></div><!-- balao-orcamento -->
<div id="titulo-orcamento">Peça o seu orçamento<br />agora mesmo:</div><!-- titulo-orcamento -->

<div id="orcamento">
<form action="?pg=index" method="post">
<table width="100%" border="0">
  <tr>
    <td width="166" height="40px" align="center" valign="middle"><font size="2px"></font>
    <input name="nome" type="text" class="txtarea" id="campo" value="Nome" size="30" maxlength="150" onfocus="if(this.value=='Nome') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Nome'; };" />
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><font size="2px"></font>
    <input name="email" type="text" class="txtarea" id="campo" value="E-mail" size="30" maxlength="100" onfocus="if(this.value=='E-mail') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'E-mail'; };" />
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><font size="2px"></font>
    <input name="telefone" type="text" class="txtarea" id="campo" value="Telefone" size="30" maxlength="15" onfocus="if(this.value=='Telefone') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Telefone'; };" />
  <tr valign="top">
    <td width="100%" align="center"><font size="2px"></font>
    <textarea name="mensagem" class="txtarea-mensagem" id="campo-mensagem" cols="21" rows="5" onfocus="if(this.value=='Mensagem') { this.value = this.value=''; };" onblur="if(this.value=='') { this.value = 'Mensagem'; };">Mensagem</textarea>
    </td>
  </tr>
  <tr>
    <td align="right"><input name="Submit" type="submit" value="Enviar" id="botao"/>
    </td>
  </tr>
</table>
</form>
</div><!-- orcamento -->
</div><!-- orcamento-quadro -->

<div id="clientes-texto"></div><!-- cliente-texto -->

<div id="clientes-quadro">
<div id="carosel">
<button class="prev"></button><button class="next"></button>
<div class="carosel">
		<ul>
        <li><a href="http://montesclarosfutebolclube.com.br" target="_blank"><img src="img/xis-cliente8.png" alt="Montes Claros F.C." width="183" height="180" /></a></li>          
        <li><a href="http://www.rebocarautosocorro.com.br" target="_blank"><img src="img/xis-cliente1.png" alt="Rebocar Auto Socorro" width="183" height="180" /></a></li>
        <li><a href="http://www.saraiseventos.com.br" target="_blank"><img src="img/xis-cliente2.png.png" alt="Sarais Eventos" width="183" height="180" /></a></li>
        <li><a href="http://www.vassouraminas.com" target="_blank"><img src="img/xis-cliente3.png" alt="Vassoura Minas" width="183" height="183" /></a></li>      
        <li><a href="http://www.coracaodejesusmg.com.br" target="_blank"><img src="img/xis-cliente4.png" alt="Coração de Jesus MG" width="183" height="180" /></a></li>                 
        </ul>
</div><!-- class carosel -->
</div><!-- carosel -->
</div><!-- cliente-quadro -->



</div><!-- quadros -->
</body>
</html>