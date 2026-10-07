<?php include 'config/connection.php'; ?>
<?php include 'files/head.php'; ?>

<style>

/* =========================================================
   PREMIUM SCHOOL MANAGEMENT THEME
   ========================================================= */

:root {
    --school-blue: #2563eb;
    --school-blue-dark: #1e3a8a;
    --school-blue-light: #eff6ff;
    --school-cyan: #06b6d4;
    --school-navy: #0f172a;
    --school-text: #334155;
    --school-border: #e2e8f0;
    --school-white: #ffffff;
    --school-success: #10b981;
    --school-danger: #ef4444;
}


/* =========================================================
   PAGE
   ========================================================= */

body {
    background: #f4f7fb !important;
    color: var(--school-text);
    font-family: "Source Sans 3", sans-serif;
}


/* =========================================================
   PAGE HEADER
   ========================================================= */

.app-content-header {
    padding: 25px 0 15px;
}

.app-content-header h1 {
    color: var(--school-navy);
    font-weight: 700;
    letter-spacing: .3px;
}


/* =========================================================
   PREMIUM CARD
   ========================================================= */

.card {
    border: 1px solid rgba(37, 99, 235, .10) !important;
    border-radius: 16px !important;
    overflow: hidden;
    background: var(--school-white);
    box-shadow:
        0 10px 30px rgba(15, 23, 42, .07),
        0 2px 8px rgba(37, 99, 235, .04) !important;
}


/* =========================================================
   CARD HEADER
   ========================================================= */

.card-header {
    min-height: 70px;
    padding: 16px 20px !important;

    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #f8fbff 55%,
            #eef6ff 100%
        ) !important;

    border-bottom: 1px solid var(--school-border) !important;

    display: flex;
    align-items: center;
    justify-content: space-between;
}

.card-title {
    color: var(--school-navy) !important;
    font-size: 20px;
    font-weight: 700;
    margin: 0;
}


/* =========================================================
   ADD TEACHER BUTTON
   ========================================================= */

.btn-primary {
    background: linear-gradient(
        135deg,
        #2563eb,
        #1d4ed8
    ) !important;

    border: none !important;

    color: white !important;

    font-weight: 600;

    border-radius: 9px !important;

    padding: 9px 18px;

    box-shadow:
        0 5px 15px rgba(37, 99, 235, .25);

    transition: all .25s ease;
}

.btn-primary:hover {
    background: linear-gradient(
        135deg,
        #1d4ed8,
        #1e40af
    ) !important;

    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(37, 99, 235, .35);
}


/* =========================================================
   TABLE CONTAINER
   ========================================================= */

.table-responsive {
    border-radius: 12px;
    overflow-x: auto;
    overflow-y: hidden;
}


/* =========================================================
   MAIN TABLE
   ========================================================= */

#myTable {
    width: 100% !important;
    min-width: 1100px;

    margin: 0 !important;

    border-collapse: separate;
    border-spacing: 0;

    color: #334155;

    font-size: 14px;
}


/* =========================================================
   TABLE HEADER
   ========================================================= */

#myTable thead th {
    background:
        linear-gradient(
            135deg,
            #172554,
            #1e40af
        ) !important;

    color: #ffffff !important;

    border: none !important;

    font-weight: 700;

    font-size: 13px;

    letter-spacing: .4px;

    text-transform: uppercase;

    padding: 15px 12px !important;

    white-space: nowrap;

    vertical-align: middle;
}


/* First header corner */

#myTable thead th:first-child {
    border-top-left-radius: 10px;
}


/* Last header corner */

#myTable thead th:last-child {
    border-top-right-radius: 10px;
}


/* =========================================================
   TABLE BODY
   ========================================================= */

#myTable tbody tr {
    background: #ffffff;

    transition:
        background .2s ease,
        transform .2s ease;
}


/* Alternate rows */

#myTable tbody tr:nth-child(even) {
    background: #f8fbff;
}


/* Hover */

#myTable tbody tr:hover {
    background: #eff6ff !important;
}


/* =========================================================
   TABLE CELLS
   ========================================================= */

#myTable tbody td {
    padding: 13px 12px !important;

    vertical-align: middle;

    border-bottom: 1px solid #e8eef7 !important;

    color: #334155;

    white-space: nowrap;
}


/* Student/Teacher ID */

#myTable tbody td:nth-child(2) {
    font-weight: 700;

    color: #2563eb;

    background: rgba(37, 99, 235, .03);
}


/* Names */

#myTable tbody td:nth-child(3),
#myTable tbody td:nth-child(4) {
    font-weight: 600;

    color: #172554;
}


/* Email */

#myTable tbody td:nth-child(5) {
    color: #475569;
}


/* Address */

#myTable tbody td:nth-child(7) {
    max-width: 220px;

    overflow: hidden;

    text-overflow: ellipsis;
}


/* =========================================================
   STATUS
   ========================================================= */

#myTable tbody td:nth-child(8) {
    font-weight: 700;
}


/* =========================================================
   CLASS COUNT
   ========================================================= */

#myTable tbody td:nth-child(9) {
    text-align: center;

    font-weight: 700;

    color: #2563eb;
}


/* =========================================================
   ACTION COLUMN
   ========================================================= */

#myTable th:last-child,
#myTable td:last-child {
    min-width: 150px;

    text-align: center;
}


/* =========================================================
   ACTION BUTTONS
   ========================================================= */

.btn-xs {
    font-size: 12px !important;

    padding: 6px 11px !important;

    border-radius: 7px !important;

    font-weight: 600;

    margin: 2px;

    border: none !important;

    transition: all .2s ease;
}


/* Delete */

.btn-danger {
    background: linear-gradient(
        135deg,
        #ef4444,
        #dc2626
    ) !important;

    color: #ffffff !important;

    box-shadow:
        0 3px 8px rgba(239, 68, 68, .18);
}

.btn-danger:hover {
    transform: translateY(-2px);

    box-shadow:
        0 6px 14px rgba(239, 68, 68, .28);
}


/* Update */

.btn-info {
    background: linear-gradient(
        135deg,
        #06b6d4,
        #0284c7
    ) !important;

    color: #ffffff !important;

    border: none !important;

    box-shadow:
        0 3px 8px rgba(6, 182, 212, .18);
}

.btn-info:hover {
    background: linear-gradient(
        135deg,
        #0891b2,
        #0369a1
    ) !important;

    color: #ffffff !important;

    transform: translateY(-2px);

    box-shadow:
        0 6px 14px rgba(6, 182, 212, .28);
}


/* =========================================================
   DATATABLE SEARCH
   ========================================================= */

.dt-search {
    margin-bottom: 15px !important;
}

.dt-search label {
    color: #475569;

    font-weight: 600;
}

.dt-search input {
    border: 1px solid #dbe4f0 !important;

    border-radius: 9px !important;

    padding: 8px 12px !important;

    margin-left: 8px !important;

    outline: none !important;

    background: #ffffff !important;

    color: #0f172a !important;

    box-shadow: 0 2px 8px rgba(15, 23, 42, .04);

    transition: all .2s ease;
}

.dt-search input:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, .10) !important;
}


/* =========================================================
   DATATABLE LENGTH
   ========================================================= */

.dt-length select {
    border: 1px solid #dbe4f0 !important;

    border-radius: 8px !important;

    padding: 6px 10px !important;

    color: #334155;

    background: white;
}


/* =========================================================
   DATATABLE PAGINATION
   ========================================================= */

.dt-paging {
    margin-top: 15px !important;
}

.dt-paging-button {
    border-radius: 7px !important;

    margin: 2px !important;

    border: 1px solid #dbe4f0 !important;

    color: #2563eb !important;

    background: #ffffff !important;
}

.dt-paging-button:hover {
    background: #eff6ff !important;

    border-color: #2563eb !important;
}

.dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        ) !important;

    color: white !important;

    border-color: #2563eb !important;
}


/* =========================================================
   DATATABLE INFO
   ========================================================= */

.dt-info {
    color: #64748b;

    font-size: 13px;

    padding-top: 12px !important;
}


/* =========================================================
   MODAL
   ========================================================= */

.modal-content {
    border: none !important;

    border-radius: 16px !important;

    overflow: hidden;

    box-shadow:
        0 25px 60px rgba(15, 23, 42, .20);
}


/* Modal Header */

.modal-header {
    background:
        linear-gradient(
            135deg,
            #172554,
            #2563eb
        ) !important;

    color: white !important;

    border: none !important;

    padding: 18px 22px;
}

.modal-title {
    font-weight: 700;

    color: #ffffff !important;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);

    opacity: .9;
}


/* Modal Body */

.modal-body {
    background: #f8fbff;

    padding: 25px !important;
}


/* Modal Footer */

.modal-footer {
    background: #ffffff;

    border-top: 1px solid #e5eaf2 !important;

    padding: 15px 22px;
}


/* =========================================================
   FORM INPUTS
   ========================================================= */

.form-group label {
    color: #172554;

    font-weight: 600;

    margin-bottom: 7px;
}

.form-control {
    border: 1px solid #dbe4f0 !important;

    border-radius: 9px !important;

    min-height: 42px;

    color: #0f172a !important;

    background: #ffffff !important;

    transition: all .2s ease;
}

.form-control:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, .10) !important;
}


/* =========================================================
   RESPONSIVE
   ========================================================= */

@media (max-width: 768px) {

    .app-content-header {
        padding: 18px 0 10px;
    }

    .app-content-header h1 {
        font-size: 22px !important;
    }

    .card-header {
        flex-direction: column;

        align-items: flex-start;

        gap: 12px;
    }

    .card-tools {
        width: 100%;
    }

    .card-tools .btn {
        width: 100%;
    }

    .card-body {
        padding: 12px !important;
    }

}


/* =========================================================
   PREMIUM SCROLLBAR
   ========================================================= */

.table-responsive::-webkit-scrollbar {
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #eef2f7;

    border-radius: 10px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background:
        linear-gradient(
            90deg,
            #2563eb,
            #06b6d4
        );

    border-radius: 10px;
}


/* =========================================================
   DARK MODE SUPPORT
   ========================================================= */

[data-bs-theme="dark"] body {
    background: #0b1120 !important;
}

[data-bs-theme="dark"] .card {
    background: #111827 !important;

    border-color: #1e293b !important;
}

[data-bs-theme="dark"] .card-header {
    background:
        linear-gradient(
            135deg,
            #111827,
            #172554
        ) !important;

    border-color: #26344d !important;
}

[data-bs-theme="dark"] .card-title,
[data-bs-theme="dark"] .app-content-header h1 {
    color: #f8fafc !important;
}

[data-bs-theme="dark"] #myTable tbody tr,
[data-bs-theme="dark"] #myTable tbody tr:nth-child(even) {
    background: #111827 !important;
}

[data-bs-theme="dark"] #myTable tbody tr:hover {
    background: #172554 !important;
}

[data-bs-theme="dark"] #myTable tbody td {
    color: #cbd5e1 !important;

    border-color: #26344d !important;
}

[data-bs-theme="dark"] #myTable tbody td:nth-child(3),
[data-bs-theme="dark"] #myTable tbody td:nth-child(4) {
    color: #f1f5f9 !important;
}

[data-bs-theme="dark"] .dt-search input,
[data-bs-theme="dark"] .dt-length select {
    background: #111827 !important;

    color: #e2e8f0 !important;

    border-color: #334155 !important;
}

</style>


<!-- begin::Body -->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

  <!-- begin::App Wrapper -->
  <div class="app-wrapper">

    <!-- begin::Header -->
    <?php include 'files/topbar.php'; ?>
    <!-- end::Header -->


    <!-- begin::Sidebar -->
    <?php include 'files/sidebar.php'; ?>
    <!-- end::Sidebar -->


    <!-- begin::App Main -->
    <main class="app-main">


      <!-- begin::App Content Header -->
      <div class="app-content-header">

        <div class="container-fluid">

          <div class="row">

            <div class="col-sm-6">

              <h1 class="mb-0 fs-3">
                ALL Teacher
              </h1>

            </div>

            <div class="col-sm-6">

              <nav aria-label="breadcrumb">

                <ol class="breadcrumb float-sm-end">

                </ol>

              </nav>

            </div>

          </div>

        </div>

      </div>
      <!-- end::App Content Header -->


      <!-- begin::App Content -->
      <div class="app-content">

        <div class="container-fluid">

          <div class="row">

            <div class="col-12">


              <!-- begin::Card -->
              <div class="card">


                <!-- Card Header -->
                <div class="card-header">

                  <h3 class="card-title">
                    <i class="bi bi-person-badge-fill me-2 text-primary"></i>
                    Teacher Data
                  </h3>


                  <div class="card-tools">

                    <!-- Add New Teacher -->
                    <button
                      type="button"
                      class="btn btn-primary me-1"
                      data-bs-toggle="modal"
                      data-bs-target="#demoModalDefault"
                    >
                      <i class="bi bi-person-plus-fill me-1"></i>
                      ADD NEW Teacher
                    </button>


                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="demoModalDefault"
                      tabindex="-1"
                      aria-labelledby="demoModalDefaultLabel"
                      aria-hidden="true"
                    >

                      <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">


                          <!-- Modal Header -->
                          <div class="modal-header">

                            <h1
                              class="modal-title fs-5"
                              id="demoModalDefaultLabel"
                            >
                              <i class="bi bi-person-plus-fill me-2"></i>
                              Add Teacher
                            </h1>

                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>

                          </div>


                          <!-- Form -->
                          <form
                            action="models/manage_teacher.php"
                            method="POST"
                          >

                            <!-- Modal Body -->
                            <div class="modal-body">

                              <div class="row">


                                <!-- Full Name -->
                                <div class="col-12">

                                  <div class="form-group mb-3">

                                    <label>
                                      <i class="bi bi-person-fill me-1 text-primary"></i>
                                      Full Name
                                    </label>

                                    <input
                                      type="text"
                                      name="full_name"
                                      placeholder="Teacher Name...."
                                      class="form-control"
                                      required
                                    >

                                  </div>

                                </div>


                                <!-- Father Name -->
                                <div class="col-12">

                                  <div class="form-group mb-3">

                                    <label>
                                      <i class="bi bi-person-vcard-fill me-1 text-primary"></i>
                                      Father Name
                                    </label>

                                    <input
                                      type="text"
                                      name="father_name"
                                      class="form-control"
                                      placeholder="Father Name"
                                      required
                                    >

                                  </div>

                                </div>


                                <!-- Email -->
                                <div class="col-12">

                                  <div class="form-group mb-3">

                                    <label>
                                      <i class="bi bi-envelope-fill me-1 text-primary"></i>
                                      Email
                                    </label>

                                    <input
                                      type="email"
                                      name="email"
                                      class="form-control"
                                      required
                                      placeholder="Email Address"
                                    >

                                  </div>

                                </div>


                                <!-- Phone -->
                                <div class="col-12">

                                  <div class="form-group mb-3">

                                    <label>
                                      <i class="bi bi-telephone-fill me-1 text-primary"></i>
                                      Phone
                                    </label>

                                    <input
                                      type="text"
                                      name="phone"
                                      class="form-control"
                                      required
                                      placeholder="Phone Number"
                                    >

                                  </div>

                                </div>


                                <!-- Address -->
                                <div class="col-12">

                                  <div class="form-group mb-3">

                                    <label>
                                      <i class="bi bi-geo-alt-fill me-1 text-primary"></i>
                                      Address
                                    </label>

                                    <textarea
                                      class="form-control"
                                      name="address"
                                      required
                                      placeholder="Teacher Address"
                                      rows="3"
                                    ></textarea>

                                  </div>

                                </div>


                              </div>

                            </div>


                            <!-- Modal Footer -->
                            <div class="modal-footer">

                              <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                              >
                                <i class="bi bi-x-circle me-1"></i>
                                Close
                              </button>

                              <input
                                type="submit"
                                class="btn btn-primary"
                                value="ADD New teacher"
                                name="add_teacher"
                              >

                            </div>

                          </form>

                        </div>

                      </div>

                    </div>
                    <!-- End Modal -->

                  </div>

                </div>
                <!-- End Card Header -->


                <!-- Card Body -->
                <div class="card-body">

                  <div class="table-responsive">

                    <table
                      class="table table-striped"
                      id="myTable"
                    >

                      <thead>

                        <tr>

                          <th>
                            #
                          </th>

                          <th>
                            Teacher ID
                          </th>

                          <th>
                            Full Name
                          </th>

                          <th>
                            Father Name
                          </th>

                          <th>
                            Email
                          </th>

                          <th>
                            Phone
                          </th>

                          <th>
                            Address
                          </th>

                          <th>
                            Status
                          </th>

                          <th>
                            Teacher Class
                          </th>

                          <th>
                            Action
                          </th>

                        </tr>

                      </thead>


                      <tbody>

                        <?php

                        $i = 1;

                        $selTeacher = $pdo->query(
                          "SELECT * FROM teachers"
                        );

                        while ($rowteach = $selTeacher->fetch()) {

                          $Classcount = $pdo->query(
                            "SELECT count(teacher_id) as TotalCLass
                             FROM classes
                             WHERE teacher_id =" . $rowteach['teacher_id']
                          );

                          $ClassRow = $Classcount->fetch();

                        ?>


                        <tr>

                          <td>
                            <?= $i++; ?>
                          </td>


                          <td>
                            <span>
                              <?= $rowteach['teacher_id']; ?>
                            </span>
                          </td>


                          <td>
                            <?= $rowteach['full_name']; ?>
                          </td>


                          <td>
                            <?= $rowteach['father_name']; ?>
                          </td>


                          <td>
                            <?= $rowteach['email']; ?>
                          </td>


                          <td>
                            <?= $rowteach['phone']; ?>
                          </td>


                          <td
                            title="<?= htmlspecialchars($rowteach['address']); ?>"
                          >
                            <?= $rowteach['address']; ?>
                          </td>


                          <td>

                            <?= $rowteach['status']; ?>

                          </td>


                          <td>

                            <span>
                              <?= $ClassRow['TotalCLass']; ?>
                            </span>

                          </td>


                          <td>

                            <a
                              onclick="return confirm('Do you want to delete?');"
                              href="models/delete_teacher.php?teacher_id=<?= $rowteach['teacher_id']; ?>&action=delete"
                              class="btn btn-danger btn-xs"
                            >
                              <i class="bi bi-trash3-fill me-1"></i>
                              Delete
                            </a>


                            <a
                              href="Update_teacher.php?teacher_id=<?php echo $rowteach['teacher_id']; ?>&action=update"
                              class="btn btn-info btn-xs"
                            >
                              <i class="bi bi-pencil-square me-1"></i>
                              Update
                            </a>

                          </td>

                        </tr>


                        <?php

                        }

                        ?>

                      </tbody>

                    </table>

                  </div>

                </div>
                <!-- End Card Body -->


              </div>
              <!-- end::Card -->


            </div>

          </div>

        </div>

      </div>
      <!-- end::App Content -->


    </main>
    <!-- end::App Main -->


  </div>
  <!-- end::App Wrapper -->


  <!-- begin::Script -->


  <!-- OverlayScrollbars -->
  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
  ></script>


  <!-- Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"
  ></script>


  <!-- Bootstrap 5 -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
  ></script>


  <!-- AdminLTE -->
  <script src="./js/adminlte.js"></script>


  <!-- DataTable -->
  <script>

    const table = new DataTable('#myTable', {

      pageLength: 10,

      order: [[0, 'asc']],

      responsive: false,

      language: {
        search: "Search Teacher:",
        lengthMenu: "Show _MENU_ teachers",
        info: "Showing _START_ to _END_ of _TOTAL_ teachers",
        emptyTable: "No teacher records found",
        zeroRecords: "No matching teacher found"
      }

    });

  </script>


</body>
<!-- end::Body -->

</html>
