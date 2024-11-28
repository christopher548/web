<?php
session_start ();
if (isset($_SESSION['admin_id']) && 
 isset($_SESSION['role'])) {
    
    if ($_SESSION['role'] == 'Admin') {
      include "../DB_connection.php";
    include "data/teacher.php";
    include "data/subject.php";
    include "data/grade.php";
  $teachers= getAllTeachers($conn);
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador-Maestros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="admin/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

<?php
include "inc/navbar.php";
if ($teachers != 0) {
?>
<div class="container mt-5">
  <a href="teacher-add.php" class="btn btn-dark">Agregar nuevo maestro</a>
<form action="teacher-search.php"
class="mt-3 n-table"
method="get">
<div class="input-group mb-3">
    <input type="text" 
    class="form-control"
    name="searchKey" 
    placeholder="Buscar...">
    <button class="btn btn-primary">
    <i class="fa fa-search" aria-hidden="true"></i>
     </button>
    </div>
</form>

  <?php if (isset($_GET['error'])){?>
   <div class="alert alert-danger mt-3 n-table" role="alert">
   <?=$_GET['error']?>
  </div>
  <?php }?>
  
  <?php if (isset($_GET['success'])){?>
<div class="alert alert-info  mt-3 n-table" role="alert">
<?=$_GET['success']?>
  </div> 
  <?php }?>
  
  <div class="table-responsive">
  <table class="table table-bordered mt-3 n-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Usuario</th>
      <th scope="col">Materia</th>
      <th scope="col">Grado</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php  $i= 0; foreach ($teachers as  $teacher) {
      $i++; ?>
      

    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$teacher['teacher_id']?></td>
      <td><a href="teacher-view.php?teacher_id=<?=$teacher['teacher_id']?>">
        <?=$teacher['fname']?></a></td>
      <td><?=$teacher['lname']?></td>
      <td><?=$teacher['username']?></td>

      <td>
        <?php 
        $s='';
        $subjects = str_split (trim($teacher['subjects']));
        foreach ($subjects as $subject) {
      $s_temp= getSubjectById($subject, $conn);
      if ($s_temp != 0) 
   $s .=$s_temp['materia_code']. ' , ';
     
      } 
      echo $s; 
      ?>
      </td>
      <td>
      <?php 
        $g='';
        $grades = str_split (trim($teacher['grades']));
        foreach ( $grades as  $grade) {
      $g_temp= getGradeById( $grade, $conn);
      if ($g_temp != 0) 
   $g .=$g_temp['grade_code']. ' - '.
   $g_temp['grade'].' ,';
     
      } 
      echo $g; 
      ?>
      </td>
  
        <td>
          <a href="teacher-edit.php?teacher_id=<?=$teacher['teacher_id']?>"
           class="btn btn-warning">Edit</a>
          <a href="teacher-delete.php?teacher_id=<?=$teacher['teacher_id']?>"
           class="btn btn-danger">Delete</a>
           <a href="" class="btn btn-dark">Pase de lista</a>
      
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

  </div>
  <?php }else{?>
    <div class="alert alert-info .w-450 m-5" role="alert">
  Empty!
</div>
    <?php }?>
</div>

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <script>
$(document).ready(function(){
 $("#navLinks li:nth-child(2) a") .addClass ('active');
});

  </script>
</body>
</html>
<?php
 
 }else{
    header("Location:../login.php");
    exit;
    }

 }else{
    header("Location:../login.php");
    exit;
    }

    ?>