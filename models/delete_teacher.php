<?php

include '../config/connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'delete') {

    $teacherid = $_GET['teacher_id'];

    $deleteqry = $pdo->prepare("
        DELETE FROM teachers 
        WHERE teacher_id = :id
    ");

    $deleteqry->execute([
        ":id" => $teacherid
    ]);

    if ($deleteqry->rowCount() > 0) {

        $msg = base64_encode("teacher has been deleted successfully");

        header("Location: ../teachers.php?success=$msg");
        exit;

    }
}

?>
