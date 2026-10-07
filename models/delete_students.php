<?php

include '../config/connection.php';

if(isset($_GET['action']) AND $_GET['action'] == 'delete'){


$studentid = $_GET['student_id'];

$deleteqry = $pdo->prepare(" DELETE FROM students WHERE student_id =  :id");

$deleteqry ->execute([
":id" =>$studentid

]);

 if ($deleteqry){
     
     $msg = base64_encode("student has been deleted  successfully ");
    header("Location:../Students.php?success=$msg");
  exit;

   }





}
?>