<?php
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.modellist');

//nomenclatura : nombreComponente+Model+nombreVista
//JModelList 
class ComprobacionloteriaModelComprobacionloteria extends JModelList
{
	protected function getListQuery()
	{
		//Crea un nuevo objeto de consulta
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Selecciona algunos campos
		$query->select('id, created,numeroParticipacion, cantidadJugada');
		// de nuestra tabla
		$query->from('#__comprobacionLoteria');
		
		//columnas que se muestran, id  , ordenado asc...
		$orderCol	= $this->state->get('list.ordering', 'id');
		$orderDirn	= $this->state->get('list.direction', 'asc');
		//~ if ($orderCol == 'a.ordering' || $orderCol == 'category_title') {
			//~ $orderCol = 'c.title '.$orderDirn.', a.ordering';
		//~ }
		$query->order($db->escape($orderCol.' '.$orderDirn));
		
		
		
		return $query;
	}
	
}
