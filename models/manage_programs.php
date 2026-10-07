<?php
include '../config/connection.php';

if (isset($_POST['add_program'])) {

    $title    = $_POST['title'];
    $Fee      = $_POST['Fee'];
    $duration = $_POST['Duration'];

    $insertPrograms = $pdo->prepare("
        INSERT INTO program(title, duration, program_fee)
        VALUES (:title, :duration, :fee)
    ");

    if ($insertPrograms->execute([
        ":title"    => $title,
        ":duration" => $duration,
        ":fee"      => $Fee
    ])) {

        $msg = base64_encode("Program has been added successfully");
        header("Location: ../Program.php?success=$msg");
        exit;
    }
}
?>
