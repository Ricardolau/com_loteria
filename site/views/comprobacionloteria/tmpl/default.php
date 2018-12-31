<?php
defined('_JEXEC') or die('Restricted Access');
?>

<div class="codigotitulo" style="text-align:center">
<h1> 
	<?php // opc del componente PROBLEMA: solo tiene acceso el administrador
		//params esta asignado en la view.html para poder recoger los parametros de opc dl componente
	//	echo '************'.$this->params->get('page_heading').'<br/>';
		echo JText::_('COM_COMPROBACIONLOTERIA_FIELD_CONFIG_TEXTO_PRINCIPAL_LABEL');
		
		?>
</h1>
<div class="col-md-6">
    <h3>PARTICIPACIONES PAGADAS HOY</h3>
    <?php
        foreach ($this->resultado as $resumen){
            echo '<h6>'.$resumen['usuario'].'</h3>';
            $subtotal = 0 ;
            $totalusuario= 0;
            foreach ($resumen['participaciones'] as $key=>$n_participacion){
                $subtotal = $key*$n_participacion*5;
                echo 'De '.$key.' pago '.$n_participacion.' total de '.$subtotal.'<br/>';
                $totalusuario  = $totalusuario + $subtotal;
            }
            echo '<b>TOTAL USUARIO:'.$totalusuario.'</b>';
                
        }
        
    ?>
</div>
<div class="col-md-6">
    <h3>Introduce Numero participacion y cantidad jugada</h3>
<?php
    if ($this->userLoteria->permisoLoteria === 'OK'){
        echo $this->loadTemplate('form');
    } else {
        echo '<div class="alert alert-danger">No esta logueado, no puedes consultar loteria</div>';

    }

?>
</div>
</div>
