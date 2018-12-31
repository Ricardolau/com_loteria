<?php

// No direct access
defined('_JEXEC') or die;
//~ jimport('joomla.application.component.modelform');
//~ echo '<br/>Entro en modelo codigorecibo.php<br/>';

class ComprobacionloteriaModelComprobacionloteria extends JModelForm
{
		protected $view_item = 'comprobacionloteria';
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_comprobacionloteria.comprobacionLoteria', 'comprobacionLoteria', array('control' => 'jform', 'load_data' => true));
		if (empty($form)) {
			return false;
		}
		// Ahora deberíamos tener nos datos para cargar el formulario.
		//~ echo '<pre>';
		//~ print_r($form);
		//~ echo '</pre>';
		
		return $form;
	}
	
	protected function loadFormData()
	{
		$data = (array)JFactory::getApplication()->getUserState('com_comprobacionloteria.comprobacionLoteria.data', array());
		// Llegamos aquí al antes de mostrar el formulario.
		// realmente no se que hace, o que sentido tiene... 
		// ya $data esta vació siempre.
		//~ echo '<pre>';
		//~ print_r($data);
		//~ echo '</pre>';

		return $data;
	}

    public function getTotales(){
        // Consultamos cuanto llevamos pagados.
        $dia = date("Y-m-d");
        $undiamas = strtotime ( '+1 day' , strtotime ( $dia ) ) ;
        $undiamas = date ( 'Y-m-j' , $undiamas );
        $db = JFactory::getDBO();
        $query = "SELECT * FROM #__comprobacionLoteria "
                .' WHERE pagada = "1" AND (modified >= "'.$dia.'" and modified <"'.$undiamas.'" )';
        $db->setQuery($query);
        $resul =  $db->loadObjectList();
        $respuesta = array();
        foreach ($resul as $participacion){
            $cajero = $participacion->cajero;
            if ( !isset($respuesta[$cajero])){
                $respuesta[$cajero] = array();
            }
            if (!isset($respuesta[$cajero][$participacion->cantidadJugada])){
                $respuesta[$cajero][$participacion->cantidadJugada] = 1;
            } else {
                $respuesta[$cajero][$participacion->cantidadJugada] ++;

            }
        }


        return $respuesta;
    }
	
	
}
