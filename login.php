<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
</head>
<body class="body-login">
    <div class="black-fill"> <br /> <br/>
        <div class="d-flex justify-content-center
align-items-center flex-column">

        <form class="login"
        method="post"
        action="req/login.php">
            <div class="text-center">
                <img src="icon.png"
                width="100">
            </div>
            <h3>iniciar sesion </h3>
            <?php if (isset($_GET['error'])){?>
            <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
            </div>
            <?php  }?>
    <div class="mb-3">
    <label class="form-label">Usuario</label>
    <input type="text" 
    class="form-control"
    name="uname">
  </div>
  <div class="mb-3">
    <label class="form-label">Contraseña</label>
    <input type="password" 
           class="form-control"
           name="pass">
  </div>

  <div class="mb-3">
    <label class="form-label">Iniciar sesion como</label>
    <select  class="form-control"
             name="role">
        <option value="1">Administrador</option>
        <option value="2">Profesor</option>
        <option value="3">Estudiante</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">iniciar sesion</button>
  <a href="index.php" class="text-decoration-none" >principal</a>
</form>
<br/> <br/>


<div class="text-center text-light ">
 Copyright &copy; cecytem derechos reservados

</div>


    </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>