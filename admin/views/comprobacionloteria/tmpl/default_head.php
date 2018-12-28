<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
// Definimos texto de cabeceras vista listado 
$campo1 = JText::_( 'COM_COMPROBACIONLOTERIA_FIELD_NUMEROPARTICIPACION_LABEL');
$campo2 = JText::_( 'COM_COMPROBACIONLOTERIA_FIELD_CANTIDADJUGADA_LABEL');
?>

<tr>

	<th width="1%">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>
	<th width="2%">
		<?php echo  JHTML::_('grid.sort', 'Id', 'id', $listDirn, $listOrder); ?>
	</th>			
	<th width="2%">
		<?php echo  JHTML::_('grid.sort', 'Fecha', 'created', $listDirn, $listOrder); ?>
	</th>			
	<th width="5%">
		<?php echo  JHTML::_('grid.sort', $campo2, 'numeroParticipacion', $listDirn, $listOrder); ?>
	</th>
	<th width="5%">
<!--
		<?php echo  JHTML::_('grid.sort', $campo1, 'cantidadJugada', $listDirn, $listOrder); ?>
-->
<?php echo $campo1;?>
	</th>
	
	
</tr>
