<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO A CECYTEM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png">
</head>
<body class="body-home">
    <div class="black-fill"> <br /> <br/>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-light"
        id= "homeNav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="icon.png" width="38">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">PRINCIPAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">SOBRE DE</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contact">CONTACTO</a>
        </li>

      </ul>
      <ul class="navbar-nav me-right mb-2 mb-lg-0">
<li class="nav-item">
          <a class="nav-link" href="login.php">INICIO DE SESION</a>
        </li>

</ul>
  </div>
    </div>

</nav>
<section class=" Welcome-text  d-flex justify-content-center
align-items-center flex-column">
<img src="icon.png" >
    <h4>BIENVENIDO A CECYTEM</h4>
    <p>PLANTEL ZINACANTEPEC </p>

</section>

<section id="about"
 class="  d-flex justify-content-center
align-items-center flex-column">

<div class="card mb-3 card-1">
  <div class="row g-0">
    <div class="col-md-4">
      <img  class="b" src="icon.png" class="img-fluid rounded-start" >
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SOBRE DE</h5>
        <p class="card-text">Hola bienvenido a cecytem.</p>
        <p class="card-text"><small class="text-body-secondary">Plantel Zinacantepec</small></p>
      </div>
    </div>
  </div>
</div>

</section>

<section id="contact"
 class="  d-flex justify-content-center
align-items-center flex-column">

<form>
    <h3>Contacto</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CORREO ELECTRONICO</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Este espacio no puede estar vacio.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <textarea  class="form-control" rows="4"  > </textarea >
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</section>
<div class="text-center text-light ">
 Copyright &copy; 2022 CECYTEM. Derechos Reservados.

</div>


    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>