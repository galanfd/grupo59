<?php include('templates/header.html');   ?>

<body class="is-preload">
  <div id="wrapper">
    <header id="header">
      <div class="logo">
        <span class="icon fa-hdd"></span>
      </div>

      <div class="content">
        <div class="inner">
          <h1>Entrega 3 - Proyecto Bases de Datos</h1>
          <h2>Grupo 92 y Grupo 59</h2>
          <p>Elija una opcion para continuar<p>
        </div>
      </div>
      <nav>
        <ul>
          <li><!--a href="#uno">Consulta 1</a></li>
          <li><a href="#dos">Consulta 2</a></li>
          <li><a href="#tres">Consulta 3</a></li>
          <li><a href="#cuatro">Consulta 4</a></li>
          <li><a href="#cinco">Consulta 5</a></li>
          <li><a href="#seis">Consulta 6</a></li -->
          <li><a href="#register">Registrarte</a></li>
          <li><a href="#login">Iniciar sesion</a></li>
        </ul>
      </nav>
    </header>
    <div id="main">
      <article id="register">
        <h2 class="major">Registrarse</h2>
        <form action="" method="post">
        <div class="fields">
            <div class="field">
              <label for="nombre_usuario">Nombre Usuario</label>
              <input type="text" name="nombre_usuario" id="nombre_usuario">
            </div>
            <div class="field">
              <label for="contrasena">Contraseña</label>
              <input type="text" name="contrasena" id="contrasena">
            </div>
            <div class="field">
              <label for="pasaporte">Numero de pasaporte</label>
              <input type="text" name="pasaporte" id="pasaporte">
            </div>
            <div class="field">
              <label for="nacionalidad">Nacionalidad</label>
              <input type="text" name="nacionalidad" id="nacionalidad">
            </div>
            <div class="field half">
              <label for="sexo">Sexo</label>
              <select name="sexo" id="sexo">
                <option value="">-</option>
								<option value="hombre">Hombre</option>
								<option value="mujer">Mujer</option>
              </select>
            </div>
            <div class="field half">
              <label for="edad">Edad</label>
              <input type="text" name="edad" id="edad">
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Aceptar" class="primary"></li>
          </ul>
        </form>
      </article>

      <article id="login">
        <h2 class="major">Iniciar Sesion</h2>
        <form action="paginas/autentificacion.php" method="post">
        <div class="fields">
            <div class="field">
              <label for="nombre_usuario">Nombre Usuario</label>
              <input type="text" name="nombre_usuario" id="nombre_usuario">
            </div>
            <div class="field">
              <label for="contrasena">Contraseña</label>
              <input type="text" name="contrasena" id="contrasena">
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Aceptar" class="primary"></li>
          </ul>
        </form>
      </article>



      <article id="uno">
        <h2 class="major">Consulta N°1</h2>
        <p>Mostrar el nombre de todas las navieras presentes en la base de datos.</p>
        <form action="consultas/consulta_navieras.php" method="post">
          <input type="submit" value="Consultar">
        </form>
      </article>

      <article id="dos">
        <h2 class="major">Consulta N°2</h2>
        <p>Mostrar todos los buques de una naviera específica.</p>
        <form action="consultas/consulta_buques_naviera.php" method="post">
          <div class="fields">
            <div class="field">
              <label for="nombre_naviera">Nombre Naviera</label>
              <input type="text" name="nombre_naviera" id="nombre_naviera">
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Buscar" class="primary" /></li>
          </ul>
        </form>
      </article>

      <article id="tres">
        <h2 class="major">Consulta N°3</h2>
        <p>Mostrar todos los buques que hayan atracado en un puerto específico, en un año específico.</p>
        <form action="consultas/consulta_atraques_plcdate.php" method="post">
          <div class="fields">
            <div class="field">
              <label for="nombre_puerto">Nombre Puerto</label>
              <input type="text" name="nombre_puerto" id="nombre_puerto">
            </div>
            <div class="field">
              <label for="fecha">Fecha (formato: 20XX)</label>
              <input type="text" name="fecha" id="fecha">
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Buscar" class="primary" /></li>
          </ul>
        </form>
      </article>

      <article id="cuatro">
        <h2 class="major">Consulta N°4</h2>
        <p>Mostrar los buques que hayan estado en un puerto específico, al mismo tiempo que otro buque determinado.</p>
        <form action="consultas/consulta_puerto_buque.php" method="post">
          <div class="fields">
              <div class="field">
                <label for="nombre_puerto">Nombre Puerto</label>
                <input type="text" name="nombre_puerto" id="nombre_puerto">
              </div>
              <div class="field">
                <label for="nombre_buque">Nombre Buque</label>
                <input type="text" name="nombre_buque" id="nombre_buque">
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Buscar" class="primary" /></li>
            </ul>
        </form>
      </article>
      
      <article id="cinco">
        <h2 class="major">Consulta N°5</h2>
        <p>Mostrar todas las capitanes mujeres que han pasado por un puerto específico.</p>
        <form action="consultas/consulta_capitanes_mujeres.php" method="post">
          <div class="fields">
            <div class="field">
              <label for="nombre_puerto">Nombre Puerto</label>
              <input type="text" name="nombre_puerto" id="nombre_puerto">
            </div>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Buscar" class="primary" /></li>
          </ul>
        </form>
      </article>


      <article id="seis">
        <h2 class="major">Consulta N°6</h2>
        <p>Mostrar el buque pesquero en la base de datos que tiene más personas trabajando.</p>
        <form action="consultas/consulta_pesqueros_ctdpersonas.php" method="post">
          <input type="submit" value="Consultar">
        </form>
      </article>
    </div>
    <form action="consultas2/migracion_usuarios.php" method="post">
      <input type="submit" value="Migrar usuarios">
    </form>

    <footer id="footer">
		  <p class="copyright">Integrantes: María Piedad Gonthier Rishmagüe - Pablo Kipreos Palau</p>
    </footer>
    
  </div>
  

  <div id="bg"></div>

  

  <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
