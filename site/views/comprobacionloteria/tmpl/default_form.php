<?php

defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>


<div class="codigorecibo-form">
	<form id="codigorecibo-form" action="<?php echo JRoute::_('index.php'); ?>" method="get" class="form-validate">
		<fieldset>
			<legend><?php  // opc config del componente PROBLEMA: solo tiene acceso el administrador
				if ($this->params->get('texto_secundario')!='')
				{	
							echo $this->params->get('texto_secundario');  
				}else{
							echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_CONFIG_TEXTO_SECUNDARIO_LABEL');
				}
				?></legend>
			<dl>
			<?php foreach($this->form->getFieldset() as $field): ?>
             <dd><?php echo $field->label;echo $field->input;?></dd>
			<?php  endforeach; ?>
				<dt></dt>
				<dd><button class="button validate" type="submit"><?php echo JText::_('COM_COMPROBACIONLOTERIA_CODIGORECIBO_SEND'); ?></button>
					<input type="hidden" name="option" value="com_comprobacionLoteria" />
					<?php // El siguiente input, añade task a objeto controller y indica la controlador expecifico y funcion ;?>
					<input type="hidden" name="task" value="submit" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</dd>
			</dl>
		</fieldset>
	</form>
</div>
