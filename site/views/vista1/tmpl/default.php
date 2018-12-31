<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');

?>


<div class="vista1" style="text-align:center; display: table; margin: 0px auto;">
        <h1><?php echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_CONFIG_TEXTO_PRINCIPAL_LABEL');?></h1>
        
               
        	<?php
            // Si no esta pagada y el usuario tiene permisos , mostramos cuanto tiene pagar y opcion marcar como
            // pagada.
            if(isset($this->resultado) and $this->userLoteria->permisoLoteria === 'OK'){
                
                if ($this->resultado->pagada ==='1' ){
                    echo $this->loadTemplate('pagada');
                } else {
                    echo $this->loadTemplate('form');
                }
            }else {
                if ($this->userLoteria->permisoLoteria !=='OK'){
                    // Si el motivo de por el que no muestra es porque no tiene permisos, mostrarmos mensaje.
                    $aviso = array( 'type' => 'warning',
                                'texto'  => 'No esta logueado o no tienes permiso para poder pagarla'
                        );
                    JFactory::getApplication()->enqueueMessage($aviso['texto'], $aviso['type']);
                }
                if (!isset($this->resultado)){
                    // Algo salio mal, ya que no encontro la participacio para esa cantidad jugada.
                    $aviso = array( 'type' => 'warning',
                                'texto'  => 'No se encuentra esa participacion'
                        );
                     JFactory::getApplication()->enqueueMessage($aviso['texto'], $aviso['type']);
                }
            }
            ?>
</div>

