<?php 
function getAllSubjects($conn){
    $sql = "SELECT * FROM subjects";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $subjects = $stmt->fetchAll();
        return $subjects;
    }else {
        return 0;
    }
}

function getSubjectById($materia_id, $conn){
    $sql = "SELECT * FROM subjects
            WHERE materia_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$materia_id]);

    if ($stmt->rowCount() == 1) {
        $materia = $stmt->fetch();
        return $materia;
    }else {
        return 0;
    }
}
?>