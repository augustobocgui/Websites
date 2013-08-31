<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/conteudo.css" rel="stylesheet" type="text/css" />
<title>Portfólio - Xis Soluções Digitais | Montes Claros</title>
<style type="text/css">
#carosel img{width:122px; height:122px; padding:5px; margin:0 10px 25px 15px; border:#CCC 1px solid;}
.next{float:right; background:url(img/seta-direita-mini.png); width:45px; height:90px; background-repeat:no-repeat; padding: 3px 10px 10px 10px; border-style:none; background-position:center; margin-top:-91px; margin-right:16px; cursor:pointer;}
.prev{float:right; background:url(img/seta-esquerda-mini.png); width:45px; height:90px; background-repeat:no-repeat; padding: 3px 10px 10px 10px; border-style:none; background-position:center; margin-top:-91px; margin-right:61px; cursor:pointer;}
</style>
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".carosel").jCarouselLite({
			btnNext: ".next", //Próximo
			btnPrev: ".prev", //Anterior
			visible: 5, //Quantidade de itens que vão aparecer
			//auto: 5000, Mover
			speed: 1000, //Velocidade
		})
	})
</script>
</head>

<body>
<div class="quadros-internos">

<div class="quadro-interno-azul">
<img src="img/barra_quadro_topo.png" alt="Título Criação de Websites" width="970" height="115"/>
<div class="titulo-interno-menor-s">Portfólio - Marketing Digital</div><!-- titulo-web -->
<br /><br /><br /><br /><br />
<?php include("portfolio_menu.htm"); ?>
<img src="img/clientes_barra1.png" border="0" alt="Botões avançar" width="864" height="90" />
<button class="next"></button><button class="prev"></button>
<div id="carosel-quadro">
<div id="carosel">
<div class="carosel">	
        <ul>
        <li><a href="http://www.facebook.com/xistecnologia" target="_blank"><img src="img/f_logo.png" alt="Xis Soluções Digitais" width="122" height="122" /></a></li> 
        <li><a href="https://plus.google.com/115957835389925782449/about?gl=br&hl=pt-BR" target="_blank"><img src="img/Web-Google-Places-Metro.png" alt="Xis Soluções Digitais - Google Places" width="122" height="122" /></a></li>
        <li><a href="https://twitter.com/Xis_Tecnologia" target="_blank"><img src="img/twitter-bird-white-on-blue.png" alt="Xis Soluções Digitais" width="122" height="122" /></a></li>   
        <li><a href="https://plus.google.com/u/0/b/103707560916817362906/103707560916817362906/posts" target="_blank"><img src="img/gplus-64.png" alt="Xis Soluções Digitais" width="122" height="122" /></a></li>  
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>
        </ul>  
</div><!-- class carosel -->
</div><!-- carosel -->

<div id="carosel">
<div class="carosel">
        <ul>
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>                   
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>           
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>       
        <li><img src="img/img7.png" alt="Xis Soluções Digitais" width="122" height="122" /></li>
        </ul>    
</div><!-- class carosel -->
</div><!-- carosel -->

</div><!-- carosel-quadro -->

<div class="barra-inferior"><img src="img/barra_quadro_inferior.jpg" alt="Barra inferior Xis - Soluções Digitais" width="970" height="100"/></div><!-- barra-inferior-->

</div><!-- quadro-interno-azul -->
</div><!-- quadros-internos -->

</body>
</html>