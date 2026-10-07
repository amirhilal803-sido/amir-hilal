<?php
include '../config/connection.php';

// there is a big mistake from the total_paid

if (isset($_POST['add_student_fee'])) {

    $remaining_fee = $_POST['remainning_amount'];
    $recieve_amount = $_POST['recieving_amount'];
    $student_id     = $_POST['student_id'];
    $paid_amount    = $_POST['paid_amount'];


    $paymentstatus = $remaining_fee > $recieve_amount ? "partical" : "paid";

    $finalremining = $remaining_fee - $recieve_amount;

    $total_paid = $recieve_amount + $paid_amount;


    $UpdateStudFee = $pdo->prepare("
        UPDATE student_fee 
        SET     
            amount_paid       = :amount_paid,
            remainning_amount = :remainning_amount,
            payment_status    = :status
        WHERE student_id      = :student_id
    ");

    $UpdateStudFee->execute([
        ":amount_paid"       => $total_paid,
        ":remainning_amount" => $finalremining,
        ":status"            => $paymentstatus,
        ":student_id"        => $student_id
    ]);


    $insertTransition = $pdo->prepare("
        INSERT INTO fee_transactions
        (student_id, amount_recieved)
        VALUES (:student_id, :amount_recieved)
    ");

    $insertTransition->execute([
        ":student_id"      => $student_id,
        ":amount_recieved" => $recieve_amount
    ]);


    if ($insertTransition) {

        $msg = base64_encode("student fee has been added successfully");

        header("Location: ../Pending_fee.php?success=$msg");

        exit;
    }
}
?>
