<?php

switch(@$_GET['pg']) {

                case 'consultoria':
		include "consultoria.php";
		break;
		
                case 'governo':
		include "governo.php";
		break;
                case 'marketing-online':
		include "marketing_online.php";
		break;
		
                case 'clientes':
		include "clientes.php";
		break;


                case 'servicos':
		include "servicos.php";
		break;
		
                case 'contato':
		include "contato.php";
		break;

                case 'portfolio':
		include "portfolio.php";
		break;
		
		        case 'portfolio-web':
		include "portfolio_web.php";
		break;
		
		        case 'portfolio-consultoria':
		include "portfolio_consultoria.php";
		break;
		
				case 'portfolio-governo':
		include "portfolio_governo.php";
		break;
		
			    case 'portfolio-marketing-online':
		include "portfolio_marketing_online.php";
		break;
		
                case 'web':
		include "web.php";
		break;
		            
                case 'index':
		include "home.php";
		break;
            
		default:
		include "home.php";
		break;
}

?>