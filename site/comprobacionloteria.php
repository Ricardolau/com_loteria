<?php
defined('_JEXEC') or die;
//print_r("hola componente site");

// importar librería de controladores de Joomla
//~ jimport('joomla.application.component.controller');
 // codigorecibo esta en la nomenclatura de la class en controller.php 

/* Instancia objecto controller , pero no entra dentro de funciones 
 * de controlador controller.php
 * */
$controller = JControllerLegacy::getInstance('Comprobacionloteria');

$controller->execute(JFactory::getApplication()->input->get('task'));

// Si envio datos en el formulario existe  $controller->data
// por lo que podemos redireccionar a la vista1

//~ $app= JFactory::getApplication();
//~ echo '<pre>';
//~ print_r($controller->resultado);
//~ echo '</pre>';

if  (isset($controller->resultado)){


//~ $controller->prueba= $recibo;
//~ $resultado = "Algo";
//~ 
$view="vista1"; 
//~ $controller->execute(JFactory::getApplication()->input->set('resultado', $resultado));

$controller->execute(JFactory::getApplication()->input->set('view', $view));
//~ echo '+++++++++++++++++++++++++++++++++++++++++++++++++++';
//~ echo '<pre>';
//~ print_r($resultado);
//~ echo '</pre>';
//~ echo '+++++++++++++++++++++++++++++++++++++++++++++++++++';
//~ $controller->setRedirect(JRoute::_('index.php?option=com_codigorecibo&view=vista1&id='.$codigo.'&recibo='.$recibo),false);
//~ echo '<pre>';
//~ print_r($controller->resultado );
//~ echo '</pre>';
	//~ 

}

// Pienso que está lines suelta el componente, es decir continua montando la pagina.. pie pagina por ejemplo
$controller->redirect();