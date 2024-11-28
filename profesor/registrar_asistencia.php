<?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'proyectof');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar datos de asistencia
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $attendance = $_POST['attendance'];

    foreach ($attendance as $student_id => $data) {
        $status = $data['status'];
        $grade = $data['grade'];

        $sql = "INSERT INTO asistencias (student_id, asistencia, fecha, grade) VALUES ('$student_id', '$status', NOW(), '$grade')";
        if ($conn->query($sql) === TRUE) {
            echo "Asistencia registrada correctamente para el ID del estudiante: $student_id<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>