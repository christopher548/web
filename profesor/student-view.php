<?php
session_start ();
if (isset($_SESSION['teacher_id']) && 
 isset($_SESSION['role'])) {
    
    if ($_SESSION['role'] == 'Profesor') {
      include "../DB_connection.php";
    include "data/student.php";
    include "data/subject.php";
    include "data/grade.php";
    include "data/section.php";

    if (isset($_GET['student_id'])) { 
    $student_id = $_GET['student_id'];

    $student= getStudentById($student_id,$conn);
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes - Y Maestros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="admin/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

<?php
include "inc/navbar.php";
if ($student != 0) {
    
?>
<div class="container mt-5">
    <div class="card" style="width: 22rem;">
  <img src="../student-<?php echo $student['gender']; ?>.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">@<?=$student['username']?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nombre: <?php echo $student['fname']; ?></li>
    <li class="list-group-item">Apellido: <?php echo $student['lname']; ?></li>
    <li class="list-group-item">Usuario: <?php echo $student['username']; ?></li>

  <li class="list-group-item">Direccion: <?php echo $student['address']; ?></li>
  <li class="list-group-item">Fecha de Nacimiento: <?php echo $student['date_of_birth']; ?></li>
  <li class="list-group-item">Correo Electronico: <?php echo $student['email_address']; ?></li>
  <li class="list-group-item">Genero: <?php echo $student['gender']; ?></li>
  <li class="list-group-item">Fecha de Ingreso: <?php echo $student['date_of_joined']; ?></li>


  <li class="list-group-item">Grado: 
  <?php 
        $grade = $student['grade'];
      $g = getGradeById($grade, $conn);
      echo $g['grade_code'].'-'.$g['grade']; 
      ?>
  </li>

  <li class="list-group-item">Seccion: 
  <?php 
        $section = $student['section'];
      $s = getSectionById( $section, $conn); 
      echo $s['section'];
      ?>
  </li><br><hr>
  <li class="list-group-item">Nombre del Tutor: <?php echo $student['parent_fname']; ?></li>
  <li class="list-group-item">Apellido del Tutor: <?php echo $student['parent_lname']; ?></li>
  <li class="list-group-item">Numero del Tutor: <?php echo $student['parent_phone_number']; ?></li>

  <div class="card-body">
    <a href="student.php" class="card-link">Volver</a>
  </div>
</div>
</div>
<?php
}else{
    header("Location: teacher.php");
    exit;
}
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <script>
$(document).ready(function(){
 $("#navLinks li:nth-child(3) a") .addClass ('active');
});

  </script>
</body>
</html>
<?php
 }else{
    header("Location: student.php");
    exit;
}
 }else{
    header("Location:../login.php");
    exit;
    }

 }else{
    header("Location:../login.php");
    exit;
    }

    ?>