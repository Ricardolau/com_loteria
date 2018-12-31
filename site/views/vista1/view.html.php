<?php
defined( '_JEXEC') or die( 'Restricted access');
//~ jimport( 'joomla.application.component.view');
//~ echo '<br/> ************************************************************** <br/>';
//~ echo '<br/> * Estoy en view.html.php de vista1 / Voy a crear Class 		 * <br/>';
//~ echo '<br/> ************************************************************** <br/>';

class ComprobacionloteriaViewVista1 extends JViewLegacy
{
	protected $resultado;
    protected $form;
	//protected $item;
	//	protected $state;
	
	function display($tpl = null)
	{
		
		$this->userLoteria = JFactory::getUser();
        $resultado = $this->get('Comprobar');
        if (count($resultado)>0){
            // Añadimos cuanto sería el premio. El valor 5 debería ser un parametro.. :-) 
            $resultado[0]->premio =$resultado[0]->cantidadJugada * 5;
           
            $this->resultado = $resultado[0];
            //~ echo '<pre>';
            //~ print_r($resultado[0]);
            //~ echo '</pre>';
            //~ $this->resultado->premio = $this->resultado->cantidadJugada * 5;
            // Ahora importe_pagar
        }
        $this->form = $this->get('Form');
		//display de la vista
		parent::display($tpl);
	}
	
}
