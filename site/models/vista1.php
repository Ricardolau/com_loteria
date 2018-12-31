<?php

// No direct access
defined('_JEXEC') or die;

//~ //jimport('joomla.application.component.modelform');
//~ echo '<br/> Antes de entrar vista.hmtl entra en modelo de la vista. <br/>';
//~ echo '<br/> mod ->vista1.php  <br/>';
//~ echo '<br/> El objeto $controler y $this no existe... por lo que no podemos acceder  <br/>';

			
class ComprobacionloteriaModelVista1 extends JModelList
{
	
	public function getComprobar()
	{
			
			//~ $envio = JRequest::getVar('jform', array(), 'get', 'array');
			// JRequest en las versiones superiores de 3.3 se dejaron... 
			$jinput = JFactory::getApplication()->input; 
			$data =$jinput->getArray($_POST);;
			$envio = $data['jform'];
			$numeroParticipacion = $envio['recibo_site'];
			$cantidadJugada = $envio['comprobacionloteria_codigo']; 
			//~ echo '<pre>';
            //~ print_r($data);
            //~ echo '</pre>';
			$db = JFactory::getDBO();
			$query = "SELECT * FROM #__comprobacionLoteria "
					."WHERE numeroParticipacion ='".$numeroParticipacion."' AND cantidadJugada ='".$cantidadJugada."'";
			$db->setQuery($query);
			$resul =  $db->loadObjectList();
			//~ $resul['Busqueda'] = $query;
			//~ $resul['DATA'] = $form;

			
			$this->resultado = $resul;
			return $this->resultado;
			
	}
	
}
