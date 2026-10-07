<?php
include '../config/connection.php';
 

// Add class in the table

if (isset($_POST['add_class'])) {

    $program    = $_POST['program'];
    $starttime      = $_POST['start_time'];


$insertClass = $pdo->prepare("
    INSERT INTO classes(program_id, start_time)
    VALUES (:program, :start_time)
");

    if ($insertClass->execute([
        ":program"    => $program,
        ":start_time" => $starttime
    ])) {

        $msg = base64_encode("class has been added successfully");
        header("Location: ../classes.php?success=$msg");
        exit;
    }
} 


// assign class to the Teacher 

if (isset($_POST['assign_teacher'])) {

    $teacher_id    = $_POST['teacher_id'];
    $class_id      = $_POST['class_id'];


$updateClass = $pdo->prepare("
    UPDATE   classes SET teacher_id =:teach_id WHERE class_id = :class_id
    
");

    $updateClass->execute([
        ":teach_id"    => $teacher_id,
        ":class_id" => $class_id
    ]); {

        $msg = base64_encode("Teacher  has been assign successfully");
        header("Location: ../classes.php?success=$msg");
        exit;
    }
}

// for the class data 

if (isset($_POST['AssignClass'])) {

    $class_id    = $_POST['class_id'];
    $student_id      = $_POST['student_id'];


$inClass = $pdo->prepare("
    INSERT   INTO student_class(student_id,class_id)VALUES(:std_id,:class_id)
    
");

    $inClass->execute([
        ":std_id"    =>$student_id,
        ":class_id" => $class_id
    ]); {

        $msg = base64_encode("Class  has been assign successfully");
        header("Location: ../pending_student.php?success=$msg");
        exit;
    }
} 

?>
