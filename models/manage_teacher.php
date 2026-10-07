<?php 
include '../config/connection.php';


////  insert the new Teacher in this form

  if (isset($_POST['add_teacher'])){


    $full_name    = $_POST['full_name'];
    $father_name  = $_POST['father_name'];
     $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $address      = $_POST['address'];    
 


   $insertTeacher = $pdo->prepare("
        INSERT INTO Teachers
        (
            full_name,
            father_name,
            
            email,
            phone,
            address
           )
        VALUES
        (
            :name,
            :fname,
          
            :email,
            :phone,
            :address
        )
   ");

   $insertTeacher->execute([
    
       ":name"        => $full_name,
       ":fname"       => $father_name,
       // ":dob"         => $dob,
       ":email"       => $email,
       ":phone"       => $phone,
       ":address"     => $address,
       // ":gender"      => $gender,
       // ":program_id"  => $program_id,
       // ":status"      => $status

   ]);

   if ($insertTeacher){

 

     
     $msg = base64_encode("Teacher  has been added  successfully ");
     header("Location:../teachers.php?success=$msg");
     exit;

   }




}

///  Update student form is use this one  

if (isset($_POST['Update_teacher_form'])){


    $full_name    = $_POST['full_name'];
    $father_name  = $_POST['father_name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $address      = $_POST['address'];    
    $status       = $_POST['status'];
    $teacher_id   = $_POST['teacher_id'];


    $updateTeacher = $pdo->prepare("
        UPDATE teachers SET 
     
            full_name     = :name,
            father_name   = :fname,
            email         = :email,
            phone         = :phone,
            address       = :address,
            status        = :status

        WHERE teacher_id = :id
    ");


    $result = $updateTeacher->execute([
    
        ":name"       => $full_name,
        ":fname"      => $father_name,
        ":email"      => $email,
        ":phone"      => $phone,
        ":address"    => $address,
        ":status"     => $status,
        ":id"         => $teacher_id

    ]);


    if ($result){
     
        $msg = base64_encode("Teacher has been updated successfully");

        header("Location:../teachers.php?success=$msg");
        exit;

    } else {

        echo "Update failed!";
        echo "<pre>";
        print_r($updateTeacher->errorInfo());
        echo "</pre>";
    }


} else {

    echo "Update_teacher_form was not submitted!";
}


?>


?>

