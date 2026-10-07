<?php include 'config/connection.php';?>
<?php include 'files/head.php';?>

<style>

/* =========================================================
   PREMIUM SCHOOL PROGRAM PAGE
   ========================================================= */

:root {
    --premium-blue: #2563eb;
    --premium-blue-dark: #172554;
    --premium-blue-deep: #0f1f4b;
    --premium-cyan: #06b6d4;
    --premium-light: #f4f8ff;
    --premium-border: #dbe5f1;
    --premium-text: #334155;
    --premium-white: #ffffff;
}


/* =========================
   PAGE BACKGROUND
   ========================= */

body {
    background:
        linear-gradient(
            135deg,
            #f8fbff 0%,
            #eef5ff 50%,
            #f8fbff 100%
        ) !important;

    color: var(--premium-text);
}


/* =========================
   PAGE TITLE
   ========================= */

.app-content-header {
    padding: 25px 0 15px;
}

.app-content-header h1 {
    color: var(--premium-blue-deep);
    font-weight: 700;
    letter-spacing: .3px;
}


/* =========================
   PREMIUM CARD
   ========================= */

.card {
    border: 1px solid rgba(37, 99, 235, .10) !important;

    border-radius: 16px !important;

    overflow: hidden;

    background: #ffffff !important;

    box-shadow:
        0 12px 35px rgba(15, 23, 42, .08),
        0 3px 10px rgba(37, 99, 235, .05) !important;
}


/* =========================
   CARD HEADER
   ========================= */

.card-header {
    min-height: 70px;

    padding: 16px 20px !important;

    display: flex;

    align-items: center;

    justify-content: space-between;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #f3f8ff
        ) !important;

    border-bottom: 1px solid var(--premium-border) !important;
}

.card-title {
    margin: 0;

    color: var(--premium-blue-deep) !important;

    font-size: 20px;

    font-weight: 700;
}


/* =========================
   ADD PROGRAM BUTTON
   ========================= */

.card-header .btn-primary {
    border: none !important;

    border-radius: 9px !important;

    padding: 9px 18px;

    font-weight: 600;

    color: #ffffff !important;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        ) !important;

    box-shadow:
        0 6px 16px rgba(37, 99, 235, .25);

    transition: all .25s ease;
}

.card-header .btn-primary:hover {
    transform: translateY(-2px);

    background:
        linear-gradient(
            135deg,
            #1d4ed8,
            #1e40af
        ) !important;

    box-shadow:
        0 9px 22px rgba(37, 99, 235, .35);
}


/* =========================
   TABLE
   ========================= */

.table-responsive {
    border-radius: 12px;

    overflow-x: auto;
}

#myTable {
    width: 100% !important;

    margin: 0 !important;

    border-collapse: separate;

    border-spacing: 0;

    font-size: 14px;
}


/* =========================
   TABLE HEADER
   ========================= */

#myTable thead th {
    background:
        linear-gradient(
            135deg,
            #172554,
            #1e40af
        ) !important;

    color: #ffffff !important;

    border: none !important;

    padding: 15px 14px !important;

    font-size: 13px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .4px;

    white-space: nowrap;

    vertical-align: middle;
}

#myTable thead th:first-child {
    border-top-left-radius: 10px;
}

#myTable thead th:last-child {
    border-top-right-radius: 10px;
}


/* =========================
   TABLE BODY
   ========================= */

#myTable tbody tr {
    background: #ffffff;

    transition: all .2s ease;
}

#myTable tbody tr:nth-child(even) {
    background: #f8fbff;
}

#myTable tbody tr:hover {
    background: #edf5ff !important;
}


/* =========================
   TABLE CELLS
   ========================= */

#myTable tbody td {
    padding: 14px !important;

    vertical-align: middle;

    color: #334155;

    border-bottom: 1px solid #e7edf5 !important;

    white-space: nowrap;
}


/* Serial number */

#myTable tbody td:first-child {
    color: #64748b;

    font-weight: 600;

    width: 70px;
}


/* Program title */

#myTable tbody td:nth-child(2) {
    color: #172554;

    font-weight: 700;

    min-width: 220px;
}


/* Duration */

#myTable tbody td:nth-child(3) {
    color: #2563eb;

    font-weight: 600;
}


/* Program fee */

#myTable tbody td:nth-child(4) {
    color: #0f766e;

    font-weight: 700;
}


/* Status */

#myTable tbody td:nth-child(5) {
    font-weight: 700;

    text-transform: capitalize;
}


/* =========================
   STATUS BADGE STYLE
   ========================= */

#myTable tbody td:nth-child(5) {
    color: #15803d;
}

#myTable tbody tr td:nth-child(5)::before {
    content: "●";

    font-size: 9px;

    margin-right: 7px;

    color: #22c55e;
}


/* =========================
   DATATABLE SEARCH
   ========================= */

.dt-search {
    margin-bottom: 15px !important;
}

.dt-search label {
    color: #475569;

    font-weight: 600;
}

.dt-search input {
    margin-left: 8px !important;

    padding: 8px 13px !important;

    border: 1px solid #d5dfec !important;

    border-radius: 9px !important;

    outline: none !important;

    background: #ffffff !important;

    color: #0f172a !important;

    box-shadow:
        0 3px 10px rgba(15, 23, 42, .04);

    transition: all .2s ease;
}

.dt-search input:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, .10) !important;
}


/* =========================
   DATATABLE LENGTH
   ========================= */

.dt-length select {
    border: 1px solid #d5dfec !important;

    border-radius: 8px !important;

    padding: 6px 10px !important;

    background: #ffffff;

    color: #334155;
}


/* =========================
   PAGINATION
   ========================= */

.dt-paging {
    margin-top: 15px !important;
}

.dt-paging-button {
    border-radius: 7px !important;

    margin: 2px !important;

    border: 1px solid #dbe5f1 !important;

    background: #ffffff !important;

    color: #2563eb !important;
}

.dt-paging-button:hover {
    background: #eff6ff !important;

    color: #1d4ed8 !important;

    border-color: #2563eb !important;
}

.dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #2563eb,
            #1d4ed8
        ) !important;

    color: #ffffff !important;

    border-color: #2563eb !important;
}


/* =========================
   DATATABLE INFO
   ========================= */

.dt-info {
    color: #64748b;

    font-size: 13px;

    padding-top: 12px !important;
}


/* =========================
   MODAL
   ========================= */

.modal-content {
    border: none !important;

    border-radius: 16px !important;

    overflow: hidden;

    box-shadow:
        0 25px 70px rgba(15, 23, 42, .22);
}


/* Modal header */

.modal-header {
    padding: 18px 22px;

    border: none !important;

    color: #ffffff !important;

    background:
        linear-gradient(
            135deg,
            #172554,
            #2563eb
        ) !important;
}

.modal-title {
    color: #ffffff !important;

    font-weight: 700;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);

    opacity: .9;
}


/* Modal body */

.modal-body {
    padding: 25px !important;

    background: #f8fbff;
}


/* Modal footer */

.modal-footer {
    padding: 15px 22px;

    background: #ffffff;

    border-top: 1px solid #e4eaf2 !important;
}


/* =========================
   FORM
   ========================= */

.modal-body label {
    color: #172554;

    font-weight: 600;

    margin-bottom: 7px;
}

.modal-body .form-control {
    min-height: 43px;

    border: 1px solid #d6e0ed !important;

    border-radius: 9px !important;

    background: #ffffff !important;

    color: #0f172a !important;

    transition: all .2s ease;
}

.modal-body .form-control:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, .10) !important;
}


/* =========================
   MONTHS BOX
   ========================= */

.input-group-text {
    border: 1px solid #d6e0ed !important;

    background: #eff6ff !important;

    color: #2563eb !important;

    font-weight: 600;
}


/* =========================
   SECONDARY BUTTON
   ========================= */

.btn-secondary {
    border: none !important;

    border-radius: 8px !important;

    font-weight: 600;

    background: #64748b !important;

    color: #ffffff !important;
}

.btn-secondary:hover {
    background: #475569 !important;
}


/* =========================
   PREMIUM SCROLLBAR
   ========================= */

.table-responsive::-webkit-scrollbar {
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #edf2f7;

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


/* =========================
   DARK MODE
   ========================= */

[data-bs-theme="dark"] body {
    background:
        linear-gradient(
            135deg,
            #080f20,
            #0f172a
        ) !important;
}

[data-bs-theme="dark"] .card {
    background: #111827 !important;

    border-color: #26344d !important;
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

[data-bs-theme="dark"] #myTable tbody td:nth-child(2) {
    color: #93c5fd !important;
}

[data-bs-theme="dark"] .dt-search input,
[data-bs-theme="dark"] .dt-length select {
    background: #111827 !important;

    color: #e2e8f0 !important;

    border-color: #334155 !important;
}


/* =========================
   MOBILE
   ========================= */

@media (max-width: 768px) {

    .app-content-header {
        padding: 18px 0 12px;
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

</style>


<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

  <!--begin::App Wrapper-->
  <div class="app-wrapper">

    <!--begin::Header-->
    <?php include'files/topbar.php';?>
    <!--end::Header-->


    <!--begin::Sidebar-->
    <?php include'files/sidebar.php'?>
    <!--end::Sidebar-->


    <!--begin::App Main-->
    <main class="app-main">

      <!--begin::App Content Header-->
      <div class="app-content-header">

        <!--begin::Container-->
        <div class="container-fluid">

          <!--begin::Row-->
          <div class="row">

            <div class="col-sm-6">

              <h1 class="mb-0 fs-3">
                ALL Program
              </h1>

            </div>

            <div class="col-sm-6">

              <nav aria-label="breadcrumb">

                <ol class="breadcrumb float-sm-end">

                </ol>

              </nav>

            </div>

          </div>
          <!--end::Row-->

        </div>
        <!--end::Container-->

      </div>
      <!--end::App Content Header-->


      <!--begin::App Content-->
      <div class="app-content">

        <!--begin::Container-->
        <div class="container-fluid">

          <!--begin::Row-->
          <div class="row">

            <div class="col-12">

              <!--begin::Card-->
              <div class="card">


                <!-- Card Header -->
                <div class="card-header">

                  <h3 class="card-title">

                    <i class="bi bi-mortarboard-fill me-2 text-primary"></i>

                    Program System

                  </h3>


                  <div class="card-tools">


                    <button
                      type="button"
                      class="btn btn-primary me-1"
                      data-bs-toggle="modal"
                      data-bs-target="#demoModalDefault"
                    >

                      <i class="bi bi-plus-circle-fill me-1"></i>

                      ADD Program

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


                          <div class="modal-header">

                            <h1
                              class="modal-title fs-5"
                              id="demoModalDefaultLabel"
                            >

                              <i class="bi bi-mortarboard-fill me-2"></i>

                              Add New Program

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
                            action="models/manage_programs.php"
                            method="POST"
                          >

                            <div class="modal-body">

                              <div class="form-group">

                                <label>
                                  <i class="bi bi-book-fill me-1 text-primary"></i>
                                  Program Title
                                </label>

                                <input
                                  type="text"
                                  name="title"
                                  placeholder="Program Name ...."
                                  class="form-control"
                                  required
                                >

                              </div>


                              <br>


                              <div class="form-group">

                                <label>
                                  <i class="bi bi-cash-stack me-1 text-primary"></i>
                                  Total Fee
                                </label>

                                <input
                                  type="number"
                                  name="Fee"
                                  class="form-control"
                                  placeholder="Enter total fee"
                                  required
                                >

                              </div>


                              <br>


                              <div class="form-group">

                                <label>
                                  <i class="bi bi-calendar3 me-1 text-primary"></i>
                                  Duration
                                </label>

                                <div class="input-group">

                                  <input
                                    type="number"
                                    name="Duration"
                                    class="form-control"
                                    placeholder="Duration"
                                    required
                                  >

                                  <span
                                    class="input-group-text"
                                    id="basic-addon2"
                                  >
                                    months
                                  </span>

                                </div>

                              </div>

                            </div>


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
                                value="ADD program"
                                name="add_program"
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
                            Sr#
                          </th>

                          <th>
                            Program Title
                          </th>

                          <th>
                            Duration
                          </th>

                          <th>
                            Program Fee
                          </th>

                          <th>
                            Status
                          </th>

                        </tr>

                      </thead>


                      <tbody>

                        <?php

                        $i=1;

                        $selProgram = $pdo->query(
                          "SELECT * FROM program"
                        );

                        while ($rowProgram = $selProgram->fetch()) {

                        ?>

                        <tr>

                          <td>
                            <?= $i++; ?>
                          </td>


                          <td>
                            <?= htmlspecialchars($rowProgram['title']); ?>
                          </td>


                          <td>
                            <?= htmlspecialchars($rowProgram['duration']); ?>
                            Months
                          </td>


                          <td>
                            <?= htmlspecialchars($rowProgram['program_fee']); ?>
                          </td>


                          <td>
                            <?= $rowProgram['status'] == 1 ? 'active' : 'inactive'; ?>
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
              <!--end::Card-->

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


  <!-- Bootstrap -->
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

      language: {

        search: "Search Program:",

        lengthMenu: "Show _MENU_ programs",

        info: "Showing _START_ to _END_ of _TOTAL_ programs",

        emptyTable: "No programs found",

        zeroRecords: "No matching programs found"

      }

    });

  </script>


</body>
<!--end::Body-->

</html>
