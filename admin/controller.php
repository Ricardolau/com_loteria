<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
//~ jimport('joomla.application.component.controller');

//es obligatorio que herede JController
class ComprobacionloteriaController extends JControllerLegacy
{	
	//~ protected $view = 'CodigoRecibo';
	
	public function display($cachable = false, $urlparams = false) 
	{
	
		//programar una vista por defecto si no se establece
		$input = JFactory::getApplication()->input;
		//set establece y get toma
		$input->set('view', $input->getCmd('view', 'comprobacionloteria'));
		
		
		//ESTO NO ME HACE NADA
			// Compruebe formulario de edición .
		if ($view == 'vista' && $layout == 'edit' && !$this->checkEditId('com_comprobacionLoteria.edit.vista', $id)) 
		{
			
			$this->setRedirect(JRoute::_('index.php?option=com_comprobacionLoteria&view=comprobacionloteria', false));
			return false;
		}
		
		
		
		// call parent behavior
//		parent::display($cachable);
	
		parent::display();
	}
}
