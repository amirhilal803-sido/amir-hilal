<?php
include 'config/connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'update') {

    $teacher_id = $_GET['teacher_id'];

    $selteacher = $pdo->prepare(
        "SELECT * FROM teachers WHERE teacher_id = :id"
    );

    $selteacher->execute([
        ':id' => $teacher_id
    ]);

    $teacherRow = $selteacher->fetch(PDO::FETCH_ASSOC);
}
?>

<?php include 'files/head.php'; ?>


<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

  <!--begin::App Wrapper-->
  <div class="app-wrapper">

    <!--begin::Header-->
    <?php include 'files/topbar.php'; ?>
    <!--end::Header-->


    <!--begin::Sidebar-->
    <?php include 'files/sidebar.php'; ?>
    <!--end::Sidebar-->


    <!--begin::App Main-->
    <main class="app-main">

      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->


      <!--begin::App Content-->
      <div class="app-content">

        <!--begin::Container-->
        <div class="container-fluid">

          <!--begin::Row-->
          <div class="row">

            <div class="container mt-5 mb-5">

              <style>
                * {
                  padding: 2px;
                }
              </style>


              <div class="card shadow">

                <div class="card-header bg-primary text-white">

                  <h4 class="mb-0">
                    Teacher Update Form
                  </h4>

                </div>


                <div class="card-body">


                  <form action="models/manage_teacher.php" method="POST">


                    <!-- Teacher ID -->

                    <div class="form-group">

                      <label for="teacher_id">
                        Teacher ID
                      </label>

                      <input
                        type="text"
                        class="form-control"
                        id="teacher_id"
                        name="teacher_id"
                        placeholder="Enter teacher ID"
                        value="<?= $teacherRow['teacher_id'] ?>"
                        readonly
                        required
                      >

                    </div>


                    <!-- Full Name -->

                    <div class="form-group">

                      <label for="full_name">
                        Full Name
                      </label>

                      <input
                        type="text"
                        class="form-control"
                        id="full_name"
                        name="full_name"
                        placeholder="Enter full name"
                        value="<?= $teacherRow['full_name'] ?>"
                        required
                      >

                    </div>


                    <!-- Father Name -->

                    <div class="form-group">

                      <label for="father_name">
                        Father Name
                      </label>

                      <input
                        type="text"
                        class="form-control"
                        id="father_name"
                        name="father_name"
                        placeholder="Enter father's name"
                        value="<?= $teacherRow['father_name'] ?>"
                        required
                      >

                    </div>


                    <!-- Email -->

                    <div class="form-group">

                      <label for="email">
                        Email
                      </label>

                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="<?= $teacherRow['email'] ?>"
                        placeholder="example@email.com"
                        required
                      >

                    </div>


                    <!-- Phone -->

                    <div class="form-group">

                      <label for="phone">
                        Phone
                      </label>

                      <input
                        type="tel"
                        class="form-control"
                        id="phone"
                        value="<?= $teacherRow['phone'] ?>"
                        name="phone"
                        placeholder="03XXXXXXXXX"
                        required
                      >

                    </div>


                    <!-- Address -->

                    <div class="form-group">

                      <label for="address">
                        Address
                      </label>

                      <textarea
                        class="form-control"
                        id="address"
                        name="address"
                        rows="3"
                        placeholder="Enter complete address"
                        required><?= $teacherRow['address'] ?></textarea>

                    </div>


                    <!-- Status -->

                    <div class="form-group">

                      <label for="status">
                        Status
                      </label>

                      <select
                        class="form-control"
                        id="status"
                        name="status"
                        required
                      >

                        <option value="active"
                          <?= ($teacherRow['status'] == 'active') ? 'selected' : '' ?>>
                          Active
                        </option>

                        <option value="Inactive"
                          <?= ($teacherRow['status'] == 'Inactive') ? 'selected' : '' ?>>
                          Inactive
                        </option>

                      </select>

                    </div>


                    <!-- Buttons -->

                    <div class="form-group text-right mb-0">

                      <button
                        type="reset"
                        class="btn btn-secondary"
                      >
                        Reset
                      </button>


                      <input
                        type="submit"
                        name="Update_teacher_form"
                        class="btn btn-primary"
                        value="Update teacher"
                      >


                      <input
                        type="hidden"
                        value="<?= $teacher_id ?>"
                        name="teacher_id"
                      >

                    </div>


                  </form>


                </div>

              </div>

            </div>

          </div>
          <!--end::Row-->

        </div>
        <!--end::Container-->

      </div>
      <!--end::App Content-->

    </main>
    <!--end::App Main-->


  </div>
  <!--end::App Wrapper-->


  <!--begin::Script-->

  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous">
  </script>


  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous">
  </script>


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous">
  </script>


  <script src="../js/adminlte.js"></script>


</body>
<!--end::Body-->

</html>
