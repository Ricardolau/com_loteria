<?php

defined( '_JEXEC' ) or die( 'Restricted access' );
//~ jimport('joomla.application.component.controller');

class ComprobacionloteriaController extends JControllerLegacy
{	
	public $resultado; // Es donde quiero guardar el dato que envia el formulario	
	public function display($cachable = false, $urlparams = false)
	{
		/* Iniciamos variable */
		/* La variables $cachable y $ urlparams , si las imprimimos con 
		 * print_r siempre es 1 , ya que la ponemos en falso.
		 * Si le quito = false , da un error ya que no recibe parametro el display.
		 * */
		$cachable = true;
		//programar una vista por defecto si no se establece
    	$input = JFactory::getApplication()->input;
        $this->comprobarUser();
       
            
		return parent::display($this);

	}
	public function submit()
	{

		// Initialise variables.
		$input = JFactory::getApplication()->input;

		//~ // Get the data from POST
		$this->resultado = JRequest::getVar('jform', array(), 'get', 'array');
    	$this->set('view', 'vista1');
    
		return ;
    }	
		
    public function pagar()
	{

		// Initialise variables.
		$input = JFactory::getApplication()->input;

		//~ // Get the data from POST
		$this->resultado = $input->getArray($_POST);
        $this->set('view',  'vista2');
        return ;
		
	}	
	public function comprobarUser(){
        // Objetivo comprobar si el usuario tiene permiso.
        $usuario = JFactory::getUser();
       
        // Comprobamos que sea administrador y creamos en User la
        // propiedad de permisoLoteria .
        if (array_search('7',$usuario->getAuthorisedGroups())>0 || array_search('8',$usuario->getAuthorisedGroups())>0 ){
            // Indicamos que tienes permiso ver loteria.
            JFactory::getUser()->set('permisoLoteria','OK');
                      
        } else {
            // No deberíamos continuar, debería indicar que no tiene permisos.
            JFactory::getUser()->set('permisoLoteria','KO');

        }
        
        return ;
    }


}
