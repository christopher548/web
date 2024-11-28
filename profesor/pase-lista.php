<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Asistencia</title>
</head>
<body>
    <h1>Lista de Asistencia</h1>
    <form action="registrar_asistencia.php" method="post">
        <table border="1">
            <tr>
                <th>ID del Estudiante</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Asistencia</th>
            </tr>
            <?php
            // Conectar a la base de datos
            $conn = new mysqli('localhost', 'root', '', 'proyectof');

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Obtener datos de los estudiantes
            $sql = "SELECT student_id, fname, lname, grade, section FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar los datos de cada fila
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['student_id']}</td>
                            <td>{$row['fname']}</td>
                            <td>{$row['lname']}</td>
                            <td>{$row['grade']}</td>
                            <td>{$row['section']}</td>
                            <td>
                                <input type='radio' name='attendance[{$row['student_id']}][status]' value='Presente'> Presente
                                <input type='radio' name='attendance[{$row['student_id']}][status]' value='Ausente'> Ausente
                                <input type='hidden' name='attendance[{$row['student_id']}][grade]' value='{$row['grade']}'>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No se encontraron estudiantes</td></tr>";
            }

            $conn->close();
            ?>
        </table>
        <input type="submit" value="Enviar Asistencia">
    </form>
</body>
</html>