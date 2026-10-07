<?php 

// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

include 'config/connection.php';

if (!isset($_SESSION['studentmangment']['admin_id'])) {
    header("Location: index.php?error=please_login");
    exit;
}

$admin_id = $_SESSION['studentmangment']['admin_id'];

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
    die("Admin not found!");
}

?>

<?php include 'files/head.php'; ?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    <?php include 'files/topbar.php'; ?>

    <?php include 'files/sidebar.php'; ?>

    <main class="app-main">

        <div class="app-content-header">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-6">
                        <h3 class="mb-0">
                            <i class="bi bi-person-circle"></i>
                            My Profile
                        </h3>
                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-end">

                            <li class="breadcrumb-item">
                                <a href="Dashboard.php">Home</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Profile
                            </li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>


        <div class="app-content">

            <div class="container-fluid">

                <?php if (isset($_GET['success'])) { ?>

                    <div class="alert alert-success">
                        Profile updated successfully.
                    </div>

                <?php } ?>


                <?php if (isset($_GET['error'])) { ?>

                    <div class="alert alert-danger">
                        <?= htmlspecialchars($_GET['error']); ?>
                    </div>

                <?php } ?>


                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="card card-primary shadow-sm">

                            <div class="card-header">

                                <h3 class="card-title">
                                    <i class="bi bi-person-circle me-2"></i>
                                    Edit Profile
                                </h3>

                            </div>


                            <form
                                action="models/update_profile.php"
                                method="POST"
                            >

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-3">

                                            <label
                                                for="full_name"
                                                class="form-label"
                                            >
                                                Full Name
                                            </label>

                                            <input
                                                type="text"
                                                class="form-control"
                                                id="full_name"
                                                name="full_name"
                                                value="<?= htmlspecialchars($adminData['full_name']); ?>"
                                                required
                                            >

                                        </div>


                                        <div class="col-md-6 mb-3">

                                            <label
                                                for="usersname"
                                                class="form-label"
                                            >
                                                Username
                                            </label>

                                            <input
                                                type="text"
                                                class="form-control"
                                                id="usersname"
                                                name="usersname"
                                                value="<?= htmlspecialchars($adminData['usersname']); ?>"
                                                required
                                            >

                                        </div>


                                        <div class="col-12">

                                            <hr>

                                            <h5>
                                                Change Password
                                            </h5>

                                        </div>


                                        <div class="col-md-4 mb-3">

                                            <label
                                                for="current_password"
                                                class="form-label"
                                            >
                                                Current Password
                                            </label>

                                            <input
                                                type="password"
                                                class="form-control"
                                                id="current_password"
                                                name="current_password"
                                                required
                                            >

                                        </div>


                                        <div class="col-md-4 mb-3">

                                            <label
                                                for="new_password"
                                                class="form-label"
                                            >
                                                New Password
                                            </label>

                                            <input
                                                type="password"
                                                class="form-control"
                                                id="new_password"
                                                name="new_password"
                                            >

                                        </div>


                                        <div class="col-md-4 mb-3">

                                            <label
                                                for="confirm_password"
                                                class="form-label"
                                            >
                                                Confirm Password
                                            </label>

                                            <input
                                                type="password"
                                                class="form-control"
                                                id="confirm_password"
                                                name="confirm_password"
                                            >

                                        </div>

                                    </div>

                                </div>


                                <div class="card-footer">

                                    <button
                                        type="submit"
                                        name="update_profile"
                                        class="btn btn-primary"
                                    >
                                        <i class="bi bi-save"></i>
                                        Save Changes
                                    </button>

                                    <a
                                        href="Dashboard.php"
                                        class="btn btn-secondary"
                                    >
                                        <i class="bi bi-arrow-left"></i>
                                        Cancel
                                    </a>

                                    <button
                                        type="reset"
                                        class="btn btn-warning"
                                    >
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                        Reset
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>

</html>
