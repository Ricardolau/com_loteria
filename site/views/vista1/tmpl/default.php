<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>

<?php 
$resultado = $this->resultado;
if (count($resultado) >0){
    $codigo = $resultado['0']->codigo;
    $recibo = $resultado['0']->recibo;
    $tonelada = $resultado['0']->tonelada;


?>
<div class="vista1" style="text-align:center; display: table; margin: 0px auto;">
        <h1><?php echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_PARAM1_CODIGO_CORRECTO_LABEL');?></h1>
        
        <div class="adminform" style="text-align:center">
					 <p><?php echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_PARAM2_CODIGO_CORRECTO_LABEL'); ?></p>
           <ul class="adminformlist">
							<li> <?php echo 'Código = '.$codigo; ?> </li>
							<li> <?php 	echo 'Recibo = '.$recibo.'<br/>'; ?></li>
							<li> <?php 	echo 'Tonelada = '.$tonelada.'<br/>'; ?></li>
           </ul>
        </div>	
</div>
<?php 
}else
{
	//	echo 'meter parametros error codigo';
?>
		<div class='vista_error' style="text-align:center; display: table; margin: 0px auto;">
			<h1><?php echo 'Algo'. JText::_('COM_COMPROBACIONLOTERIA_FIELD_PARAM1_CODIGO_ERRONEO_LABEL');?></h1>
			<h6><?php echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_PARAM2_CODIGO_ERRONEO_LABEL');?></h6>
            <?php   echo '<pre>';
                echo 'Contar resultado'. count($resultado);
                echo '</pre>';
        ?>
		
		</div>
<?php 
} //fin de else
?>
