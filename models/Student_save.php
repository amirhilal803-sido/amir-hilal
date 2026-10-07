<?php 
include '../config/connection.php';


////  insert the new student of the  form  

  if (isset($_POST['Submit'])){


    $full_name    = $_POST['full_name'];
    $father_name  = $_POST['father_name'];
    $dob          = $_POST['dob'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $address      = $_POST['address'];    
    $gender       = $_POST['gender'];
    $status       = $_POST['status'];
    $program_id   = $_POST['program_id'];
    $student_id   = $_POST['student_id'];



    /// GET the program fee from the programs table 
 
    $selFee = $pdo->prepare("SELECT program_fee FROM program WHERE program_id = :id");

    $selFee->execute([
        ":id" => $program_id   
    ]);

    $rowFee = $selFee->fetch();
    $program_fee = $rowFee['program_fee'];


  


   $insertStudent = $pdo->prepare("
        INSERT INTO students
        (
            full_name,
            father_name,
            dob,
            email,
            phone,
            address,
            gender,
            program_id,
            status
        )
        VALUE
        (
            :name,
            :fname,
            :dob,
            :email,
            :phone,
            :address,
            :gender,
            :program_id,
            :status
        )
   ");

   $insertStudent->execute([
    
       ":name"        => $full_name,
       ":fname"       => $father_name,
       ":dob"         => $dob,
       ":email"       => $email,
       ":phone"       => $phone,
       ":address"     => $address,
       ":gender"      => $gender,
       ":program_id"  => $program_id,
       ":status"      => $status

   ]);

   if ($insertStudent){

  
   // get the student id after inserting the student

   $student_id = $pdo->lastInsertId();

   // remaining amount is the program fee

   $remainning_amount = $program_fee;


   $insertFee = $pdo->prepare("
        INSERT INTO student_fee
        (
            student_id,
            fee_amount,
            remainning_amount
        )
        VALUE
        (
            :id,
            :fee_amount,
            :remainning_amount
        )
   ");

   $insertFee->execute([
    
       ":id"                  => $student_id,
       ":fee_amount"          => $program_fee,
       ":remainning_amount"   => $remainning_amount
   ]);

 

     
     $msg = base64_encode("student has been added  successfully ");
     header("Location:../Students.php?success=$msg");
     exit;

   }




}

///  Update student form is use this one  

 if (isset($_POST['Update_Student_form'])){


    $full_name    = $_POST['full_name'];
    $father_name  = $_POST['father_name'];
    $dob          = $_POST['dob'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $address      = $_POST['address'];    
    // $gender       = $_POST['gender'];
    $student_id   = $_POST['student_id'];

   $updateStudent = $pdo->prepare("
    UPDATE students SET 
     
         full_name     = :name ,
         father_name   = :fname,
         dob           = :dob,
         email         = :email,
         phone         = :phone,
         address       = :address
         WHERE
         student_id    =  :student_id
");

   $updateStudent->execute([
    
       ":name"       => $full_name,
       ":fname"      => $father_name,
       ":dob"        => $dob,
       ":email"      => $email,
       ":phone"      => $phone,
       ":address"    => $address,
       // ":gender"  =>$gender,
       ":student_id" => $student_id

   ]);

   if ($updateStudent){
     
     $msg = base64_encode("student has been updated  successfully ");
     header("Location:../Students.php?success=$msg");
     exit;

   }

};


?>
