<?php

// No direct access
defined('_JEXEC') or die;

//~ //jimport('joomla.application.component.modelform');
//~ echo '<br/> Antes de entrar vista.hmtl entra en modelo de la vista. <br/>';
//~ echo '<br/> mod ->vista1.php  <br/>';
//~ echo '<br/> El objeto $controler y $this no existe... por lo que no podemos acceder  <br/>';

			
class ComprobacionloteriaModelVista2 extends JModelList
{
	
	public function getPagar()
	{
        $jinput = JFactory::getApplication()->input; 
		$data =$jinput->getArray($_POST);
        $numeroParticipacion = $data['recibo_site'];
		$cantidadJugada = $data['comprobacionloteria_codigo']; 
		$db = JFactory::getDBO();
        $usuario=JFactory::getUser()->id;
        if($usuario>0){
            $query= "UPDATE #__comprobacionLoteria SET modified=NOW(), cajero='".$usuario."' , pagada=1 
                WHERE numeroParticipacion ='".$numeroParticipacion."' AND cantidadJugada ='".$cantidadJugada."'";
                $db->setQuery($query);
                $resul = $db->execute();
             return $resul;
        }else{
             return "Usuario desconectado";
        }
           
			
            
			
	}
	
}
