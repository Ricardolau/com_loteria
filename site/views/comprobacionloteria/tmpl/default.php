<?php
defined('_JEXEC') or die('Restricted Access');
?>
<?php
//~ echo '<pre>';
//~ print_r($this);
//~ echo'</pre>';
?>
<div class="codigotitulo" style="text-align:center">
<h1> 
	<?php // opc del componente PROBLEMA: solo tiene acceso el administrador
		//params esta asignado en la view.html para poder recoger los parametros de opc dl componente
	//	echo '************'.$this->params->get('page_heading').'<br/>';
		
		if ($this->params->get('texto_principal')!='')
		{
				echo $this->params->get('texto_principal');
		}else{
				echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_CONFIG_TEXTO_PRINCIPAL_LABEL');
			}
		?>
</h1>

<?php echo $this->loadTemplate('form'); ?>

</div>
