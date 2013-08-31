<?php

switch(@$_GET['pg']) {


                case 'pecas':
		include "pecas.php";
		break; 
                
                case 'seguranca':
		include "seguro.php";
		break; 
                	
                case 'oficina':
		include "oficina.php";
		break; 
                		                                    
                case 'produtos':
		include "produtos.php";
		break; 
                
                case 'contato':
		include "contato.php";
		break;

                case 'mapa':
		include "mapa.php";
		break;
		
		         case 'frota':
		include "frota.php";
		break;
		
				case 'servicos':
		include "servicos.php";
		break;
		
		        case 'quem_somos':
		include "quem_somos.php";
		break;
		
		        case 'parceiros':
		include "parceiros.php";
		break;  
		
                case 'index':
		include "home.php";
		break;
            
		default:
		include "home.php";
		break;
}

?>