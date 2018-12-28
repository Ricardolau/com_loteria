<?php
defined( '_JEXEC') or die( 'Restricted access');
//~ jimport( 'joomla.application.component.view');

class ComprobacionloteriaViewComprobacionloteria extends JViewLegacy
{
	protected $form;
	
	function display($tpl = null)
	{
		//$this->msg ='hola front-end';
		$item = $this->get('Item');
		$this->form = $this->get('Form');
		
		//Consigo los parametros de opc config (btn menu toolbar dl com_nuevo)
		$params = JComponentHelper::getParams('com_comprobacionLoteria');
			//$titul=$params->get('texto_principal');
		
		$this->assignRef('params',		$params);	
		
		//display de la vista
		parent::display($tpl);
	}
	
}
