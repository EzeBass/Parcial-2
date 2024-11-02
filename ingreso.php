<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><Page Title>Saponara labs.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src='main.js'></script>
</head>
<body>
    <main>
        <header>
          <div class="box">
            <ul class="nav">
                <li class="nav-item">
                        <a class="nav-link active" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="listado.php">Listado</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="ingreso.php">Ingresar</a>
                </li>
              </ul>
        </div>
        </header>
        <section>
    <form action="ingr.php" method="POST"> <!-- Cambia aquí -->
        <div class="form-group">
            <label for="legajo">Legajo</label>
            <input type="text" class="form-control" id="legajo" name="legajo" required placeholder="Ingrese su legajo"> <!-- Cambia el id y agrega name -->
            <small class="form-text text-muted">Si no recuerda su legajo o contraseña, comuníquese con administración.</small>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" required placeholder="Ingrese su contraseña"> <!-- Cambia el id y agrega name -->
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</section>

        <footer class="">
            <div class="card">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Sitio Oficial</h5>
                  <p class="card-text">Web site: www.saponaralabs.com</p>
                  <a class="nav-link" href="google.com">soporte@servicios.com</a>
                  <p class="card-text">desarrollado por EL SAPO</p>
                </div>
              </div>
        </footer>
    </main>
</body>
</html>