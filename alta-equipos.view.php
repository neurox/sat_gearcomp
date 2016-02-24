<?php
	
	$page = "alta_equipos";
	$title = "Gearcomp Systems";
	$description = "Sistema de administracion de reparaciones de Gearcomp.";
	$keywords = "gearcomp, reparacion de computadoras, laptops";
  $styles = "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/forms.css\">
  ";
  $scripts = "
    <script type=\"text/javascript\" src=\"js/verifica-cliente.js\"></script>
  ";
	$header = "";

	require_once('components/mainFrameHead.php');

?>

<div class="wrap">

      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" class="form-control" name="marca" placeholder="Marca:" value="<?php if(!$registrado && isset($marca)) echo $marca ?>"></input>
        <input type="text" class="form-control" name="modelo" placeholder="Modelo:" value="<?php if(!$registrado && isset($modelo)) echo $modelo ?>"></input>
        <input type="text" class="form-control" name="no_serie" placeholder="No. de serie:" value="<?php if(!$registrado && isset($no_serie)) echo $no_serie ?>"></input>
        <input type="text" id="cliente" class="form-control" name="cliente" placeholder="ID de cliente:" value="<?php if(!$registrado && isset($cliente)) echo $cliente ?>"></input>

        <div id="info-cliente"></div>

        <?php if(!empty($errores)): ?>

        <div class="alert error">
          <?php echo $errores; ?>
        </div>

        <?php elseif($registrado): ?>

        <div class="alert success">
          <p>Registro exitoso! :) <span class="glyphicon glyphicon-ok"></span></p>
        </div>

        <?php endif ?>

        <input type="submit" name="submit" class="btn-primary" value="Registrar equipo"></input>
      </form>

</div>	

<?php
	require_once('components/mainFrameFoot.php');
?>