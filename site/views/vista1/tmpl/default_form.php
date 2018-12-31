<?php

defined('_JEXEC') or die;
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
$resultado = $this->resultado;
$numeroParticpación=$resultado->numeroParticipacion;
$cantidadJugada=$resultado->cantidadJugada;
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
<div class="codigorecibo-form">
    <p>El numero participacion:
        <b><?php echo $resultado->numeroParticipacion;?></b> que jugo
        <b><?php echo $resultado->cantidadJugada;?></b> le pertenece de premio</b>
    </p>
    <div class="Precio">
        <?php echo $resultado->premio;?>
        <span>€</span>
    </div>
    <form id="codigorecibo-form" action="<?php echo JRoute::_('index.php'); ?>" method="get" class="form-validate">
		<fieldset>
			<dl>
				<dt></dt>
                <input type="hidden" name="recibo_site" value=<?php echo $numeroParticpación;?> name="numeroParticipacion" >
                <input type="hidden" name="comprobacionloteria_codigo" value=<?php echo $cantidadJugada;?> name="numeroParticipacion">
            
				<dd><button class="button validate" type="submit"><?php echo JText::_('COM_COMPROBACIONLOTERIA_PAGARLOTERIA_SEND'); ?></button>
					<input type="hidden" name="option" value="com_comprobacionloteria" />
					<?php // El siguiente input, añade task a objeto controller y indica la controlador expecifico y funcion ;?>
					<input type="hidden" name="task" value="pagar" />
					<?php echo JHtml::_( 'form.token' ); ?>
				</dd>
			</dl>
		</fieldset>
	</form>
</div>
