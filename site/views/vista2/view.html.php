<?php
defined( '_JEXEC') or die( 'Restricted access');
//~ jimport( 'joomla.application.component.view');
//~ echo '<br/> ************************************************************** <br/>';
//~ echo '<br/> * Estoy en view.html.php de vista1 / Voy a crear Class 		 * <br/>';
//~ echo '<br/> ************************************************************** <br/>';

class ComprobacionloteriaViewVista2 extends JViewLegacy
{
	protected $resultado;
	//protected $item;
	//	protected $state;
	
	function display($tpl = null)
	{
		
		//~ $app   = JFactory::getApplication();
		//~ $resultado = JRequest::getVar('jform', array(), 'get', 'array');
		//~ echo '<br/> ************************************************************** <br/>';
		//~ echo '<br/> * vista1-> view.html.php y funcion display					 * <br/>';
		//~ echo '<br/> ************************************************************** <br/>';
        $this->userLoteria = JFactory::getUser();
        $jinput = JFactory::getApplication()->input; 
		$data =$jinput->getArray($_POST);

        if ($this->userLoteria->permisoLoteria === 'OK'){
         
            $actualizo = $this->get('Pagar');
        }
       
        if ($actualizo === true){
            $aviso = array( 'type' => 'info',
                        'texto'  => 'Grabado con existo un registro'
                );
            JFactory::getApplication()->enqueueMessage($aviso['texto'], $aviso['type']);
            $this->resultado = $data;
       
        }
        

        if ($this->userLoteria->permisoLoteria !=='OK'){
            // Si el motivo de por el que no muestra es porque no tiene permisos, mostrarmos mensaje.
            $aviso = array( 'type' => 'warning',
                        'texto'  => 'No esta logueado o no tienes permiso para poder pagarla'
                );
            JFactory::getApplication()->enqueueMessage($aviso['texto'], $aviso['type']);
        }
		//display de la vista
		parent::display($tpl);
	}
	
}
