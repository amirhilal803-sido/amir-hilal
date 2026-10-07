<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../config/connection.php';

if (!isset($_SESSION['studentmangment']['admin_id'])) {
    header("Location: ../index.php?error=please_login");
    exit;
}

if (!isset($_POST['update_profile'])) {
    header("Location: ../profile.php");
    exit;
}

$admin_id = $_SESSION['studentmangment']['admin_id'];

$full_name = trim($_POST['full_name']);
$usersname = trim($_POST['usersname']);

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if (
    empty($full_name) ||
    empty($usersname) ||
    empty($current_password)
) {
    header("Location: ../profile.php?error=Please fill all required fields");
    exit;
}

$selAdmin = $pdo->prepare("
    SELECT *
    FROM admin
    WHERE admin_id = :admin_id
    LIMIT 1
");

$selAdmin->execute([
    ':admin_id' => $admin_id
]);

$adminData = $selAdmin->fetch(PDO::FETCH_ASSOC);

if (!$adminData) {
    header("Location: ../index.php?error=admin_not_found");
    exit;
}

if (!password_verify($current_password, $adminData['password'])) {
    header("Location: ../profile.php?error=Current password is incorrect");
    exit;
}

$checkUsername = $pdo->prepare("
    SELECT admin_id
    FROM admin
    WHERE usersname = :usersname
    AND admin_id != :admin_id
    LIMIT 1
");

$checkUsername->execute([
    ':usersname' => $usersname,
    ':admin_id' => $admin_id
]);

if ($checkUsername->fetch()) {
    header("Location: ../profile.php?error=Username already exists");
    exit;
}

if (empty($new_password) && empty($confirm_password)) {

    $updateAdmin = $pdo->prepare("
        UPDATE admin
        SET
            full_name = :full_name,
            usersname = :usersname
        WHERE admin_id = :admin_id
    ");

    $updateAdmin->execute([
        ':full_name' => $full_name,
        ':usersname' => $usersname,
        ':admin_id' => $admin_id
    ]);

} else {

    if ($new_password !== $confirm_password) {
        header("Location: ../profile.php?error=New passwords do not match");
        exit;
    }

    if (strlen($new_password) < 6) {
        header("Location: ../profile.php?error=Password must be at least 6 characters");
        exit;
    }

    $hashedPassword = password_hash(
        $new_password,
        PASSWORD_DEFAULT
    );

    $updateAdmin = $pdo->prepare("
        UPDATE admin
        SET
            full_name = :full_name,
            usersname = :usersname,
            password = :password
        WHERE admin_id = :admin_id
    ");

    $updateAdmin->execute([
        ':full_name' => $full_name,
        ':usersname' => $usersname,
        ':password' => $hashedPassword,
        ':admin_id' => $admin_id
    ]);
}

$_SESSION['studentmangment']['fullname'] = $full_name;
$_SESSION['studentmangment']['usersname'] = $usersname;

header("Location: ../profile.php?success=updated");
exit;

?>
