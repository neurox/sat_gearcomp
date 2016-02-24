    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SAT Gearcomp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($page==="index")echo "class=\"active\""?>>
            	<a href="index.php">Home</a>
            </li>
            <li <?php if($page==="acerca")echo "class=\"active\""?>>
            	<a href="acerca.php">Acerca</a>
            </li>
            <li <?php if($page==="contacto")echo "class=\"active\""?>>
            	<a href="contacto.php">Contacto</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>