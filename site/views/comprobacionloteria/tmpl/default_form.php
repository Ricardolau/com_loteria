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
	<form id="codigorecibo-form" action="<?php echo JRoute::_('index.php'); ?>" method="get" class="form-validate form well">
		<fieldset>
			<legend><?php  // opc config del componente PROBLEMA: solo tiene acceso el administrador
				if ($this->params->get('texto_secundario')!='')
				{	
							echo $this->params->get('texto_secundario');  
				}else{
							//~ echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_CONFIG_TEXTO_SECUNDARIO_LABEL');
				}
				?></legend>
			<div class="control-group">
			<?php foreach($this->form->getFieldset() as $field): ?>
                <div class="control-label">
                    <?php echo $field->label;?>
                </div>
                <div class="controls">
                    <?php echo $field->input;?></div>
                </div>
			<?php  endforeach; ?>
				
				<div class="controls">
                    <button class="btn btn-primary" type="submit"><?php echo JText::_('COM_COMPROBACIONLOTERIA_CODIGORECIBO_SEND'); ?></button>
					<input type="hidden" name="option" value="com_comprobacionloteria" />
					<?php // El siguiente input, añade task a objeto controller y indica la controlador expecifico y funcion ;?>
					<input type="hidden" name="task" value="submit" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</div>
			</div>
		</fieldset>
	</form>
</div>
