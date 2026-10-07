<?php include 'config/connection.php';?>
<?php include 'files/head.php';?>

<style>

/* =========================================================
   PREMIUM SCHOOL MANAGEMENT - NAVY / ROYAL BLUE THEME
   CSS ONLY - NO HTML/PHP/JS CHANGES
   ========================================================= */

:root {
    --premium-navy: #071a35;
    --premium-blue: #0b4dbb;
    --premium-blue-light: #1769e0;
    --premium-cyan: #22d3ee;
    --premium-white: #ffffff;
    --premium-bg: #f3f7fc;
    --premium-border: #dbe7f5;
    --premium-text: #17233c;
    --premium-muted: #6b7a90;
    --premium-shadow: 0 10px 35px rgba(7, 26, 53, 0.10);
    --premium-shadow-hover: 0 18px 45px rgba(11, 77, 187, 0.18);
}


/* =========================================================
   PAGE BACKGROUND
   ========================================================= */

body {
    background:
        radial-gradient(circle at 10% 10%, rgba(34, 211, 238, 0.08), transparent 25%),
        radial-gradient(circle at 90% 20%, rgba(23, 105, 224, 0.08), transparent 25%),
        #f3f7fc !important;

    color: var(--premium-text);
    font-family: "Source Sans 3", sans-serif;
}


/* =========================================================
   MAIN CONTENT
   ========================================================= */

.app-main {
    background: transparent !important;
}

.app-content {
    padding-top: 10px;
}

.app-content-header h1 {
    color: var(--premium-navy);
    font-weight: 800;
    letter-spacing: -0.4px;
}


/* =========================================================
   PREMIUM CARD
   ========================================================= */

.card {
    border: 1px solid rgba(11, 77, 187, 0.10) !important;
    border-radius: 18px !important;
    background: rgba(255, 255, 255, 0.96) !important;
    box-shadow: var(--premium-shadow) !important;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: var(--premium-shadow-hover) !important;
    transform: translateY(-2px);
}


/* =========================================================
   CARD HEADER
   ========================================================= */

.card-header {
    min-height: 70px;
    padding: 18px 24px !important;

    background:
        linear-gradient(
            135deg,
            #071a35 0%,
            #0b4dbb 58%,
            #1769e0 100%
        ) !important;

    color: #fff !important;

    border: none !important;

    position: relative;
}

.card-header::after {
    content: "";
    position: absolute;
    right: 25px;
    top: -40px;

    width: 130px;
    height: 130px;

    border-radius: 50%;

    background: rgba(34, 211, 238, 0.14);
}

.card-title {
    color: #fff !important;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 0.2px;
    position: relative;
    z-index: 2;
}


/* =========================================================
   TABLE CONTAINER
   ========================================================= */

.table-responsive {
    border-radius: 12px;
}


/* =========================================================
   TABLE
   ========================================================= */

#myTable {
    width: 100% !important;
    border-collapse: separate;
    border-spacing: 0 7px;
    margin-top: 5px !important;
}


/* =========================================================
   TABLE HEADER
   ========================================================= */

#myTable thead th {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb
        ) !important;

    color: #ffffff !important;

    border: none !important;

    padding: 16px 12px !important;

    font-size: 13px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: 0.45px;

    white-space: nowrap;
}

#myTable thead th:first-child {
    border-radius: 10px 0 0 10px;
}

#myTable thead th:last-child {
    border-radius: 0 10px 10px 0;
}


/* =========================================================
   TABLE BODY
   ========================================================= */

#myTable tbody tr {
    background: #ffffff !important;
    box-shadow: 0 3px 12px rgba(7, 26, 53, 0.05);
    transition: all 0.25s ease;
}

#myTable tbody tr:hover {
    background: #f0f7ff !important;
    transform: scale(1.002);
    box-shadow: 0 7px 22px rgba(11, 77, 187, 0.11);
}

#myTable tbody td {
    padding: 14px 12px !important;

    border-top: 1px solid #edf2f8 !important;
    border-bottom: 1px solid #edf2f8 !important;

    color: #34435b;

    font-size: 14px;
    vertical-align: middle;

    white-space: nowrap;
}

#myTable tbody td:first-child {
    border-left: 1px solid #edf2f8 !important;
    border-radius: 10px 0 0 10px;
}

#myTable tbody td:last-child {
    border-right: 1px solid #edf2f8 !important;
    border-radius: 0 10px 10px 0;
}


/* =========================================================
   STUDENT ID
   ========================================================= */

#myTable tbody td:nth-child(2) {
    color: #0b4dbb;
    font-weight: 800;
}


/* =========================================================
   FEE COLUMNS
   ========================================================= */

#myTable tbody td:nth-child(5) {
    color: #0b4dbb;
    font-weight: 700;
}

#myTable tbody td:nth-child(6) {
    color: #159669;
    font-weight: 700;
}

#myTable tbody td:nth-child(7) {
    color: #e09a00;
    font-weight: 800;
}


/* =========================================================
   STATUS
   ========================================================= */

#myTable tbody td:nth-child(8) {
    font-weight: 700;
    color: #0b4dbb;
}


/* =========================================================
   RECEIVE BUTTON
   ========================================================= */

.btn-info {
    background:
        linear-gradient(
            135deg,
            #0b4dbb,
            #1769e0
        ) !important;

    border: none !important;

    color: #ffffff !important;

    border-radius: 9px !important;

    padding: 8px 15px !important;

    font-weight: 700;

    text-transform: capitalize;

    box-shadow: 0 5px 15px rgba(11, 77, 187, 0.22);

    transition: all 0.25s ease;
}

.btn-info:hover {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb
        ) !important;

    color: #ffffff !important;

    transform: translateY(-2px);

    box-shadow: 0 9px 22px rgba(11, 77, 187, 0.30);
}


/* =========================================================
   DATATABLE SEARCH
   ========================================================= */

.dt-search input {
    border: 1px solid #d6e3f2 !important;

    border-radius: 10px !important;

    padding: 9px 14px !important;

    background: #ffffff !important;

    color: #17233c !important;

    outline: none !important;

    box-shadow: 0 3px 10px rgba(7, 26, 53, 0.04);

    transition: all 0.25s ease;
}

.dt-search input:focus {
    border-color: #1769e0 !important;

    box-shadow:
        0 0 0 3px rgba(23, 105, 224, 0.12),
        0 5px 15px rgba(23, 105, 224, 0.08) !important;
}


/* =========================================================
   DATATABLE SELECT
   ========================================================= */

.dt-length select {
    border: 1px solid #d6e3f2 !important;
    border-radius: 8px !important;
    padding: 7px 12px !important;
    color: #17233c !important;
    background: #fff !important;
}


/* =========================================================
   DATATABLE PAGINATION
   ========================================================= */

.dt-paging .dt-paging-button {
    border-radius: 8px !important;
    border: none !important;
    margin: 2px !important;
    color: #0b4dbb !important;
}

.dt-paging .dt-paging-button:hover {
    background: #eaf3ff !important;
    color: #071a35 !important;
}

.dt-paging .dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #1769e0
        ) !important;

    color: #ffffff !important;

    border: none !important;
}


/* =========================================================
   MODAL
   ========================================================= */

.modal-content {
    border: none !important;
    border-radius: 20px !important;

    overflow: hidden;

    box-shadow:
        0 25px 80px rgba(7, 26, 53, 0.28) !important;
}


/* =========================================================
   MODAL HEADER
   ========================================================= */

.modal-header {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb,
            #1769e0
        ) !important;

    color: #ffffff !important;

    border: none !important;

    padding: 20px 24px !important;
}

.modal-title {
    color: #ffffff !important;
    font-weight: 800 !important;
    letter-spacing: 0.3px;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.9;
}


/* =========================================================
   MODAL BODY
   ========================================================= */

.modal-body {
    background: #f8fbff !important;
    padding: 25px !important;
}


/* =========================================================
   FORM LABELS
   ========================================================= */

.modal-body label {
    color: #071a35;
    font-weight: 700;
    margin-bottom: 7px;
}


/* =========================================================
   FORM INPUTS
   ========================================================= */

.modal-body .form-control {
    border: 1px solid #d7e4f3 !important;

    border-radius: 10px !important;

    min-height: 45px;

    background: #ffffff !important;

    color: #17233c !important;

    box-shadow: 0 3px 10px rgba(7, 26, 53, 0.04);

    transition: all 0.25s ease;
}

.modal-body .form-control:focus {
    border-color: #1769e0 !important;

    box-shadow:
        0 0 0 3px rgba(23, 105, 224, 0.12),
        0 5px 15px rgba(23, 105, 224, 0.08) !important;
}


/* =========================================================
   MODAL FOOTER
   ========================================================= */

.modal-footer {
    background: #ffffff !important;
    border-top: 1px solid #e5edf7 !important;
    padding: 16px 24px !important;
}


/* =========================================================
   PRIMARY BUTTON
   ========================================================= */

.btn-primary {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb,
            #1769e0
        ) !important;

    border: none !important;

    color: #ffffff !important;

    border-radius: 9px !important;

    font-weight: 700;

    padding: 9px 18px;

    box-shadow: 0 5px 15px rgba(11, 77, 187, 0.20);

    transition: all 0.25s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);

    box-shadow:
        0 9px 24px rgba(11, 77, 187, 0.30);
}


/* =========================================================
   SECONDARY BUTTON
   ========================================================= */

.btn-secondary {
    border-radius: 9px !important;
    font-weight: 600;
}


/* =========================================================
   PAGE TITLE PREMIUM LOOK
   ========================================================= */

.app-content-header h1 {
    position: relative;
    display: inline-block;
}

.app-content-header h1::after {
    content: "";
    display: block;

    width: 55px;
    height: 4px;

    margin-top: 6px;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            #0b4dbb,
            #22d3ee
        );
}


/* =========================================================
   SCROLLBAR
   ========================================================= */

::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: #edf3fa;
}

::-webkit-scrollbar-thumb {
    background:
        linear-gradient(
            #0b4dbb,
            #22d3ee
        );

    border-radius: 20px;
}

::-webkit-scrollbar-thumb:hover {
    background: #071a35;
}


/* =========================================================
   MOBILE RESPONSIVE
   ========================================================= */

@media (max-width: 768px) {

    .card-header {
        padding: 15px 17px !important;
    }

    .card-title {
        font-size: 17px;
    }

    #myTable thead th {
        font-size: 11px;
        padding: 12px 9px !important;
    }

    #myTable tbody td {
        font-size: 13px;
        padding: 11px 9px !important;
    }

    .modal-body {
        padding: 18px !important;
    }

}


/* =========================================================
   PREMIUM GLOW ACCENT
   ========================================================= */

.card-header,
.btn-primary,
.btn-info {
    position: relative;
    overflow: hidden;
}

.card-header::before,
.btn-primary::before,
.btn-info::before {
    content: "";

    position: absolute;

    top: 0;
    left: -120%;

    width: 60%;
    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,0.16),
            transparent
        );

    transform: skewX(-20deg);

    transition: 0.6s;
}

.card-header:hover::before,
.btn-primary:hover::before,
.btn-info:hover::before {
    left: 140%;
}

</style>


<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

  <!--begin::App Wrapper-->
  <div class="app-wrapper">

    <!--begin::Header-->
    <?php include 'files/topbar.php';?>

    <!--begin::Sidebar-->
    <?php include 'files/sidebar.php'?>
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
                Pending Fee Of the Student
              </h1>

            </div>

            <div class="col-sm-6">
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

          <div class="card">

            <div class="card-header">

              <h3 class="card-title">
                Collect Student Fee
              </h3>

            </div>


            <!-- /.card-header -->

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-striped" id="myTable">

                  <thead>

                    <tr>
                      <th>Sr#</th>
                      <th>studentId</th>
                      <th>Full Name</th>
                      <th>Father Name</th>
                      <th>Student Fee</th>
                      <th>Fee Paid</th>
                      <th>Remaning Fee</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>

                  </thead>


                  <tbody>

                    <?php

                    $i = 1;

                    $selStud = $pdo->query("
                      SELECT
                        sf.student_id,
                        sf.fee_amount,
                        sf.amount_paid,
                        sf.remainning_amount,
                        sf.payment_status,
                        s.full_name,
                        s.father_name
                      FROM student_fee sf
                      INNER JOIN students s
                        ON s.student_id = sf.student_id
                    ");

                    while ($rowstudent = $selStud->fetch()) {

                    ?>

                    <tr>

                      <td>
                        <?= $i++; ?>
                      </td>


                      <td>
                        <?= $rowstudent['student_id']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['full_name']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['father_name']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['fee_amount']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['amount_paid']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['remainning_amount']; ?>
                      </td>


                      <td>
                        <?= $rowstudent['payment_status']; ?>
                      </td>


                      <td>

                        <input
                          type="hidden"
                          value="<?= htmlspecialchars($rowstudent['full_name'], ENT_QUOTES); ?>"
                          id="name_<?= $rowstudent['student_id']; ?>"
                        >


                        <input
                          type="hidden"
                          value="<?= htmlspecialchars($rowstudent['remainning_amount'], ENT_QUOTES); ?>"
                          id="remin_<?= $rowstudent['student_id']; ?>"
                        >


                        <input
                          type="hidden"
                          value="<?= htmlspecialchars($rowstudent['amount_paid'], ENT_QUOTES); ?>"
                          id="paid_<?= $rowstudent['student_id']; ?>"
                        >


                        <a
                          href="javascript:void(0);"
                          onclick="recieveModel('<?= $rowstudent['student_id']; ?>')"
                          class="btn btn-sm btn-info"
                        >
                          recieve amount
                        </a>

                      </td>

                    </tr>

                    <?php

                    }

                    ?>

                  </tbody>

                </table>

              </div>
              <!-- /.table-responsive -->

            </div>
            <!-- /.card-body -->

          </div>
          <!--end::Card-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!--end::App Content-->

    </main>
    <!--end::App Main-->

  </div>
  <!--end::App Wrapper-->


  <!-- =====================================================
       MODAL WINDOW
       ===================================================== -->

  <div
    class="modal fade"
    id="demoModalDefault"
    tabindex="-1"
    aria-labelledby="demoModalDefaultLabel"
    aria-hidden="true"
  >

    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">


        <!-- =================================================
             MODAL HEADER
             ================================================= -->

        <div class="modal-header">

          <h1
            class="modal-title fs-5"
            id="demoModalDefaultLabel"
          >
            Collect Fee
          </h1>


          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>

        </div>


        <!-- =================================================
             MODAL FORM
             ================================================= -->

        <form
          action="models/student_fee_mgm.php"
          method="POST"
        >


          <!-- =================================================
               MODAL BODY
               ================================================= -->

          <div class="modal-body">


            <!-- Student Name -->

            <div class="col-12">

              <div class="form-group">

                <label>
                  Student Name
                </label>

                <input
                  type="text"
                  readonly
                  id="student_name"
                  class="form-control"
                >

              </div>

            </div>


            <!-- Remaining Amount -->

            <div class="col-12 mt-3">

              <div class="form-group">

                <label>
                  Remining amount
                </label>

                <input
                  type="text"
                  readonly
                  id="remainning_amount"
                  class="form-control"
                  name="remainning_amount"
                >

              </div>

            </div>


            <!-- Receive Amount -->

            <div class="col-12 mt-3">

              <div class="form-group">

                <label>
                  Recive Amount
                </label>

                <input
                  type="number"
                  id="recieving_amount"
                  class="form-control"
                  name="recieving_amount"
                  min="1"
                  required
                >

              </div>

            </div>


          </div>
          <!-- End Modal Body -->


          <!-- =================================================
               MODAL FOOTER
               ================================================= -->

          <div class="modal-footer">


            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>


            <input
              type="hidden"
              name="student_id"
              id="student_id"
            >


            <input
              type="hidden"
              name="paid_amount"
              id="paid_amount"
            >


            <input
              type="submit"
              class="btn btn-primary"
              value="submit Fee"
              name="add_student_fee"
            >

          </div>
          <!-- End Modal Footer -->


        </form>

      </div>

    </div>

  </div>
  <!-- End Modal -->


  <!-- =====================================================
       SCRIPTS
       ===================================================== -->


  <!-- OverlayScrollbars -->

  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
  ></script>


  <!-- Bootstrap Bundle
       Includes Popper -->

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
  ></script>


  <!-- AdminLTE -->

  <script src="./js/adminlte.js"></script>


  <!-- jQuery -->

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"
    integrity="sha512-8LENNbXmzI/Gbj+OwXmqR6V4QaUAw0/porPzy1+dQoC0JPHedWoe0DDOTL2uHA5XXJyIsPtiMHH86vPlay6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>


  <!-- DataTables -->

  <script
    src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"
  ></script>


  <!-- =====================================================
       ADMINLTE SIDEBAR
       ===================================================== -->

  <script>

    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';

    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };


    document.addEventListener('DOMContentLoaded', function () {

      const sidebarWrapper =
        document.querySelector(SELECTOR_SIDEBAR_WRAPPER);


      const isMobile =
        window.innerWidth <= 992;


      if (
        sidebarWrapper &&
        typeof OverlayScrollbarsGlobal !== 'undefined' &&
        OverlayScrollbarsGlobal.OverlayScrollbars !== undefined &&
        !isMobile
      ) {

        OverlayScrollbarsGlobal.OverlayScrollbars(
          sidebarWrapper,
          {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          }
        );

      }

    });

  </script>


  <!-- =====================================================
       DATATABLE
       ===================================================== -->

  <script>

    $(document).ready(function () {

      $('#myTable').DataTable();

    });

  </script>


  <!-- =====================================================
       RECEIVE FEE MODAL
       ===================================================== -->

  <script>

    function recieveModel(student_id) {


      /* ============================================
         GET STUDENT NAME
         ============================================ */

      const nameElement =
        document.getElementById('name_' + student_id);


      /* ============================================
         GET REMAINING AMOUNT
         ============================================ */

      const remainingElement =
        document.getElementById('remin_' + student_id);


      /* ============================================
         GET PAID AMOUNT
         ============================================ */

      const paidElement =
        document.getElementById('paid_' + student_id);


      /* ============================================
         CHECK ELEMENTS
         ============================================ */

      if (!nameElement) {

        console.error(
          'Student name element not found for ID:',
          student_id
        );

        return;

      }


      if (!remainingElement) {

        console.error(
          'Remaining amount element not found for ID:',
          student_id
        );

        return;

      }


      if (!paidElement) {

        console.error(
          'Paid amount element not found for ID:',
          student_id
        );

        return;

      }


      /* ============================================
         GET VALUES
         ============================================ */

      const full_name =
        nameElement.value;


      const remaining =
        remainingElement.value;


      const paid_amount =
        paidElement.value;


      /* ============================================
         PUT VALUES INTO MODAL
         ============================================ */

      document.getElementById('student_name').value =
        full_name;


      document.getElementById('remainning_amount').value =
        remaining;


      document.getElementById('recieving_amount').value =
        remaining;


      document.getElementById('student_id').value =
        student_id;


      document.getElementById('paid_amount').value =
        paid_amount;


      /* ============================================
         OPEN BOOTSTRAP MODAL
         ============================================ */

      const modalElement =
        document.getElementById('demoModalDefault');


      if (!modalElement) {

        console.error(
          'Modal element #demoModalDefault was not found.'
        );

        return;

      }


      const modal =
        bootstrap.Modal.getOrCreateInstance(
          modalElement
        );


      modal.show();

    }

  </script>


</body>
<!--end::Body-->

</html>
