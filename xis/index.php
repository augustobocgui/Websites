<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-language" content="pt-PT" />
<meta name="description" content="Xis Soluções Digitais é uma Empresa especializada em Criação de Sites Personalizados e Otimizados para Buscadores. Conheça mais sobre nossos clientes." /> 
<meta name="keywords" content="Xis Soluções Digitais, website, comprar site, montes claros, criação de sites, criar meu site, site, divulgar minha marca, xis soluções, xis video, soluçoes, solução, xis, seo, criação de sites montes claros" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/conteudo.css" rel="stylesheet" type="text/css" />
<link href='img/Xis-logo-marca.png' rel='shortcut icon' type='image/png'/>
<title>Xis Soluções Digitais - websites | criar sites Montes Claros</title>
</head>
<style type="text/css">
<!--
body {
margin:0;
padding:0;
background:url(img/layoutquerys.jpg); background-repeat:repeat-y; background-repeat:repeat-x;
background-position: position:absolute;
overflow-x: hidden;
}
-->
</style>
<body><?php include_once("analyticstracking.php") ?>
<script type="text/javascript">
//pega a largura da resolução da tela
var width = screen.width;
//pega a altura da resolução da tela
var height = screen.height;
//verifica se a resolução dará uma boa visão do site - Sendo a resolução pequena redireciona para a versão mobile.
if (width < 800 || height < 600)
location.href="/mobile/index.html";
</script>

<table width="100%" border="0">
  <tr>
    <td>
    	<?php 
	switch(@$_GET['pg']) {

                case '':
		include "cabecalho.php";
		break;        
                case 'index':
		include "cabecalho.php";
		break;
            
		default:
		include "cabecalhos.php";
		break;
}		
		 ?>

    </td>
  </tr>
</table>
<!-- verifica se a resolução dará uma boa visão do site - Sendo a resolução pequena redireciona para a versão mobile. -->
<table width="100%" border="0">
  <tr>
    <td>
    <?php include "paginas.php"; ?>
    </td>
  </tr>
</table>

<table width="100%" border="0">
  <tr>
    <td>
    
<table width="100%" border="0"><!-- Segunda tabela - tabela dentro da tabela de rodape - inicio -->
  <tr>
    <td>
           <?php include "rodape.php"; ?>
    </td>
  </tr>
</table><!-- Segunda tabela - tabela dentro da tabela de rodape - fim -->
 
    </td>
  </tr>
</table>

</body>
</html>