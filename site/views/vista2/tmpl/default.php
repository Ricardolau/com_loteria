<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');

?>
<div class="vista2" style="text-align:center; display: table; margin: 0px auto;">
    <h1><?php echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_PARAM1_CODIGO_CORRECTO_LABEL');?></h1>

<?php
//~ echo '<pre>';
//~ print_r($this->resultado);
//~ echo '</pre>';
if (count($this->resultado)>0){
?>
    <div class="alert alert-info">
        <?php
            echo ' La participacion con nº:'.$this->resultado['recibo_site']
                .' con la cantidad Jugada de '.$this->resultado['comprobacionloteria_codigo']. ' <b>PAGADA</b>';
        ?>
    </div>

<?php
} else{
?>
<div class="alert alert-danger">
        <?php
            echo ' <b>ALGO SALIO MAL!!!</b><br/>';
                
        ?>
    </div>
<?php
}
?>
</div>
