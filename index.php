<?php
	
	$page = "index";
	$title = "Gearcomp Systems";
	$description = "Sistema de administracion de reparaciones de Gearcomp.";
	$keywords = "gearcomp, reparacion de computadoras, laptops";
	$styles = "
		<link rel=\"stylesheet\" type=\"text/css\" href=\"css/signin.css\">
	";
	$header = "";

	require_once('components/mainFrameHead.php');

?>

<div class="container">


      <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2 class="form-signin-heading">Por favor inicia sesion</h2>
        <label for="inputEmail" class="sr-only">eMail</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="eMail" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

</div>	

<?php
	require_once('components/mainFrameFoot.php');
?>
