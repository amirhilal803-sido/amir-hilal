<?php include 'config/connection.php';?>

<?php 

    $selStudentId =$pdo->query("SELECT max(student_id) AS studentid  FROM students");
    $StudentRow = $selStudentId->fetch();

if (isset($StudentRow['studentid']) && $StudentRow['studentid'] != '' ){
  $student_id = $StudentRow['studentid'] + 1;


}else{

  $student_id = 1;

}


$selProgram = $pdo->query("SELECT title,program_id FROM program");
$rowProgram =$selProgram->fetchall();



?>

<?php include 'files/head.php';?>



  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <!-- =========================================================
         PREMIUM SCHOOL DESIGN CSS
         ========================================================= -->
    <style>

      /* ===============================
         MAIN PAGE
         =============================== */

      .app-main {
        background:
          radial-gradient(
            circle at 10% 10%,
            rgba(37, 99, 235, 0.08),
            transparent 30%
          ),
          radial-gradient(
            circle at 90% 90%,
            rgba(6, 182, 212, 0.08),
            transparent 30%
          ),
          linear-gradient(
            135deg,
            #f4f8ff 0%,
            #eef5ff 50%,
            #f9fcff 100%
          ) !important;
      }


      /* ===============================
         SCHOOL PAGE TITLE
         =============================== */

      .app-content h1 {
        color: #12366b;
        font-weight: 800;
        letter-spacing: 1px;
        text-shadow:
          0 3px 12px rgba(15, 76, 129, 0.12);
      }


      /* ===============================
         STUDENT REGISTRATION CARD
         =============================== */

      .app-content .card {
        max-width: 950px;
        margin: 25px auto 40px auto;

        border: 1px solid rgba(37, 99, 235, 0.12) !important;

        border-radius: 20px !important;

        background:
          rgba(255, 255, 255, 0.97) !important;

        box-shadow:
          0 20px 50px rgba(15, 45, 90, 0.12),
          0 5px 15px rgba(37, 99, 235, 0.06) !important;

        overflow: hidden;

        transition: all .3s ease;
      }


      .app-content .card:hover {
        box-shadow:
          0 25px 60px rgba(15, 45, 90, 0.17),
          0 8px 20px rgba(37, 99, 235, 0.08) !important;
      }


      /* ===============================
         PREMIUM CARD HEADER
         =============================== */

      .app-content .card-header {
        position: relative;

        padding: 21px 28px !important;

        border: none !important;

        background:
          linear-gradient(
            135deg,
            #062c68 0%,
            #0f4cbd 40%,
            #1769d1 70%,
            #0891b2 100%
          ) !important;

        box-shadow:
          0 7px 22px rgba(15, 76, 189, .20);
      }


      /* Gold accent line */

      .app-content .card-header::before {
        content: "";

        position: absolute;

        left: 0;
        top: 0;

        width: 100%;
        height: 3px;

        background:
          linear-gradient(
            90deg,
            #fbbf24,
            #fde68a,
            #fbbf24
          );
      }


      /* Header shine */

      .app-content .card-header::after {
        content: "";

        position: absolute;

        right: -40px;
        top: -80px;

        width: 220px;
        height: 220px;

        border-radius: 50%;

        background:
          rgba(255,255,255,.08);

        pointer-events: none;
      }


      .app-content .card-header h4 {
        position: relative;

        z-index: 2;

        margin: 0;

        color: #ffffff !important;

        font-size: 20px;

        font-weight: 700;

        letter-spacing: .5px;
      }


      /* Small premium star */

      .app-content .card-header h4::before {
        content: "✦";

        color: #fbbf24;

        margin-right: 10px;

        font-size: 19px;
      }


      /* ===============================
         CARD BODY
         =============================== */

      .app-content .card-body {
        padding:
          32px 35px 35px 35px !important;
      }


      /* ===============================
         FORM GROUP
         =============================== */

      .form-group {
        margin-bottom: 21px !important;
      }


      /* ===============================
         LABELS
         =============================== */

      .form-group label {
        display: block;

        margin-bottom: 8px;

        color: #183b68;

        font-size: 14px;

        font-weight: 700;

        letter-spacing: .2px;
      }


      /* ===============================
         INPUTS
         =============================== */

      .form-control {
        min-height: 47px;

        border:
          1px solid #d6e3f3 !important;

        border-radius:
          11px !important;

        background:
          #fbfdff !important;

        color:
          #17365f !important;

        font-size:
          14px;

        padding:
          10px 14px;

        box-shadow:
          0 3px 12px rgba(30,64,120,.035);

        transition:
          all .25s ease;
      }


      /* ===============================
         TEXTAREA
         =============================== */

      textarea.form-control {
        min-height: 105px;

        resize: vertical;
      }


      /* ===============================
         PLACEHOLDER
         =============================== */

      .form-control::placeholder {
        color: #94a3b8;

        opacity: 1;
      }


      /* ===============================
         INPUT FOCUS
         =============================== */

      .form-control:focus {
        border-color:
          #2563eb !important;

        background:
          #ffffff !important;

        box-shadow:
          0 0 0 4px rgba(37,99,235,.10),
          0 7px 20px rgba(37,99,235,.08) !important;

        outline:
          none;
      }


      /* ===============================
         STUDENT ID
         =============================== */

      #student_id {
        background:
          linear-gradient(
            135deg,
            #edf5ff,
            #f7fbff
          ) !important;

        color:
          #174ea6 !important;

        font-weight:
          800;

        letter-spacing:
          1px;

        border-color:
          #b9d1f5 !important;
      }


      /* ===============================
         SELECT BOX
         =============================== */

      select.form-control {
        cursor:
          pointer;
      }


      select.form-control option {
        color:
          #17365f;

        background:
          #ffffff;
      }


      /* ===============================
         RADIO BUTTONS
         =============================== */

      .custom-control {
        margin:
          9px 0;
      }


      .custom-control-input {
        accent-color:
          #2563eb;
      }


      .custom-control-label {
        display:
          inline-block !important;

        margin-left:
          5px;

        margin-bottom:
          0 !important;

        color:
          #475569 !important;

        font-weight:
          500 !important;

        cursor:
          pointer;
      }


      /* ===============================
         BUTTON AREA
         =============================== */

      .form-group.text-right {
        padding-top:
          15px;

        margin-top:
          15px;

        border-top:
          1px solid #edf2f8;
      }


      /* ===============================
         RESET BUTTON
         =============================== */

      .btn-secondary {
        min-width:
          110px;

        min-height:
          45px;

        margin-right:
          8px;

        border:
          none !important;

        border-radius:
          10px !important;

        background:
          linear-gradient(
            135deg,
            #64748b,
            #475569
          ) !important;

        color:
          #ffffff !important;

        font-weight:
          600;

        box-shadow:
          0 7px 17px rgba(71,85,105,.18);

        transition:
          all .25s ease;
      }


      .btn-secondary:hover {
        transform:
          translateY(-2px);

        background:
          linear-gradient(
            135deg,
            #475569,
            #334155
          ) !important;

        box-shadow:
          0 10px 23px rgba(71,85,105,.25);
      }


      /* ===============================
         REGISTER BUTTON
         =============================== */

      .btn-primary {
        min-width:
          190px;

        min-height:
          45px;

        border:
          none !important;

        border-radius:
          10px !important;

        background:
          linear-gradient(
            135deg,
            #082f70 0%,
            #1769d1 50%,
            #0891b2 100%
          ) !important;

        color:
          #ffffff !important;

        font-weight:
          700;

        letter-spacing:
          .3px;

        box-shadow:
          0 9px 22px rgba(23,105,209,.28);

        transition:
          all .3s ease;
      }


      .btn-primary:hover {
        transform:
          translateY(-3px);

        background:
          linear-gradient(
            135deg,
            #06275c,
            #1259bb,
            #07819d
          ) !important;

        box-shadow:
          0 13px 30px rgba(23,105,209,.38);
      }


      .btn-primary:active,
      .btn-secondary:active {
        transform:
          translateY(0);
      }


      /* ===============================
         PREMIUM FORM SEPARATOR
         =============================== */

      .form-group.text-right::before {
        content: "";

        display: block;

        width: 55px;

        height: 3px;

        margin:
          -16px auto 18px auto;

        border-radius:
          20px;

        background:
          linear-gradient(
            90deg,
            #2563eb,
            #06b6d4
          );
      }


      /* ===============================
         DARK MODE
         =============================== */

      [data-bs-theme="dark"] .app-main {
        background:
          radial-gradient(
            circle at 10% 10%,
            rgba(37,99,235,.12),
            transparent 30%
          ),
          linear-gradient(
            135deg,
            #071426,
            #0b1d35,
            #07182d
          ) !important;
      }


      [data-bs-theme="dark"] .app-content h1 {
        color:
          #dbeafe !important;
      }


      [data-bs-theme="dark"] .app-content .card {
        background:
          #0d2039 !important;

        border-color:
          rgba(96,165,250,.13) !important;

        box-shadow:
          0 20px 50px rgba(0,0,0,.30) !important;
      }


      [data-bs-theme="dark"] .form-group label {
        color:
          #dbeafe;
      }


      [data-bs-theme="dark"] .form-control {
        background:
          #102945 !important;

        border-color:
          #29476a !important;

        color:
          #e2e8f0 !important;
      }


      [data-bs-theme="dark"] .form-control:focus {
        background:
          #132f4d !important;

        border-color:
          #60a5fa !important;

        box-shadow:
          0 0 0 4px rgba(96,165,250,.12) !important;
      }


      [data-bs-theme="dark"] #student_id {
        background:
          #102b4d !important;

        color:
          #93c5fd !important;
      }


      [data-bs-theme="dark"] .custom-control-label {
        color:
          #cbd5e1 !important;
      }


      [data-bs-theme="dark"] .form-group.text-right {
        border-top-color:
          rgba(148,163,184,.12);
      }


      /* ===============================
         RESPONSIVE
         =============================== */

      @media (max-width: 768px) {

        .app-content .card {
          margin:
            15px 8px 30px 8px;

          border-radius:
            15px !important;
        }


        .app-content .card-body {
          padding:
            23px 18px 27px 18px !important;
        }


        .app-content .card-header {
          padding:
            18px 20px !important;
        }


        .app-content h1 {
          font-size:
            26px !important;
        }


        .btn-primary {
          min-width:
            165px;
        }

      }


      @media (max-width: 480px) {

        .app-content h1 {
          font-size:
            22px !important;

          letter-spacing:
            .5px;
        }


        .app-content .card-body {
          padding:
            20px 15px !important;
        }


        .app-content .card-header h4 {
          font-size:
            17px;
        }


        .form-group.text-right {
          display:
            flex;

          flex-direction:
            column;

          gap:
            10px;
        }


        .btn-secondary,
        .btn-primary {
          width:
            100%;

          margin:
            0;
        }

      }


      /* ===============================
         PREMIUM SCROLLBAR
         =============================== */

      ::-webkit-scrollbar {
        width:
          8px;
      }


      ::-webkit-scrollbar-track {
        background:
          #edf3fa;
      }


      ::-webkit-scrollbar-thumb {
        background:
          linear-gradient(
            #2563eb,
            #0891b2
          );

        border-radius:
          20px;
      }


      ::-webkit-scrollbar-thumb:hover {
        background:
          #174ea6;
      }


      /* ===============================
         SELECTION
         =============================== */

      ::selection {
        background:
          #2563eb;

        color:
          #ffffff;
      }

    </style>


    <!--begin::App Wrapper-->
    <div class="app-wrapper">

      <!--begin::Header-->
      <?php include'files/topbar.php'?>
      <!--end::Header-->

      <!--begin::Sidebar-->
      <?php include'files/sidebar.php'?>
      <!--end::Sidebar-->


      <!--begin::App Main-->
      <main class="app-main">

        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
        </div>
        <!--end::App Content Header-->


        <!--begin::App Content-->
        <div class="app-content">

          <!--begin::Container-->
          <div class="container-fluid">


            <style>
              * {
                padding: 0;
              }
            </style>


            <div style="text-align: center;">
              <b>
                <i>
                  <H1>ADD NEW STUDENTS</H1>
                </i>
              </b>
            </div>


            <div class="card shadow">

              <div class="card-header bg-primary text-white">

                <h4 class="mb-0">
                  Student Registration Form
                </h4>

              </div>


              <div class="card-body">

                <form action="models/Student_save.php" method="POST">


                  <!-- student id in this form -->

                  <div class="form-group">

                    <label for="student_id">
                      Student ID
                    </label>

                    <input
                      type="text"
                      class="form-control"
                      id="student_id"
                      name="student_id"
                      placeholder="Enter student ID"
                      value="<?= $student_id?>"
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
                      required
                    >

                  </div>


                  <!-- DOB -->

                  <div class="form-group">

                    <label for="dob">
                      Date of Birth
                    </label>

                    <input
                      type="date"
                      class="form-control"
                      id="dob"
                      name="dob"
                      required
                    >

                  </div>


                  <!-- Email -->

                  <div class="form-group">

                    <label for="email">
                      Email Address
                    </label>

                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
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
                      required
                    ></textarea>

                  </div>


                  <!-- Gender -->

                  <div class="form-group">

                    <label>
                      Gender
                    </label>


                    <div class="custom-control custom-radio">

                      <input
                        type="radio"
                        id="male"
                        name="gender"
                        value="Male"
                        class="custom-control-input"
                        required
                      >

                      <label
                        class="custom-control-label"
                        for="male"
                      >
                        Male
                      </label>

                    </div>


                    <div class="custom-control custom-radio">

                      <input
                        type="radio"
                        id="female"
                        name="gender"
                        value="Female"
                        class="custom-control-input"
                      >

                      <label
                        class="custom-control-label"
                        for="female"
                      >
                        Female
                      </label>

                    </div>

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

                      <option value="active">
                        Active
                      </option>

                      <option value="Inactive">
                        Inactive
                      </option>

                    </select>

                  </div>


                  <!-- Program -->

                  <div class="form-group">

                    <label for="status">
                      Select program
                    </label>

                    <select
                      class="form-control"
                      id="status"
                      name="program_id"
                      required
                    >

                      <option selected disabled>
                        Select program
                      </option>

                      <?php
                      foreach ($rowProgram as $key => $value) {
                      ?>

                        <option value="<?= $value['program_id'];?>">
                          <?= $value['title']?>
                        </option>

                      <?php
                      }
                      ?>

                    </select>

                  </div>


                  <!-- Buttons -->

                  <div
                    class="form-group text-right mb-0"
                    style="text-align: center;"
                  >

                    <button
                      type="reset"
                      class="btn btn-secondary"
                    >
                      Reset
                    </button>


                    <input
                      type="submit"
                      name="Submit"
                      class="btn btn-primary"
                      value="Register Student"
                      style="text-align:center";
                    >

                  </div>


                </form>

              </div>

            </div>


          </div>

        </div>

      </main>
      <!--end::App Main-->


    </div>
    <!--end::App Wrapper-->


    <!--begin::Script-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->

    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>

    <!--end::Third Party Plugin(OverlayScrollbars)-->


    <!--begin::Required Plugin(popperjs for Bootstrap 5)-->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>

    <!--end::Required Plugin(popperjs for Bootstrap 5)-->


    <!--begin::Required Plugin(Bootstrap 5)-->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>

    <!--end::Required Plugin(Bootstrap 5)-->


    <!--begin::Required Plugin(AdminLTE)-->

    <script src="./js/adminlte.js"></script>

    <!--end::Required Plugin(AdminLTE)-->


    <!--begin::OverlayScrollbars Configure-->

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
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {

          OverlayScrollbarsGlobal.OverlayScrollbars(
            sidebarWrapper,
            {
              scrollbars: {
                theme:
                  Default.scrollbarTheme,

                autoHide:
                  Default.scrollbarAutoHide,

                clickScroll:
                  Default.scrollbarClickScroll,
              },
            }
          );

        }

      });

    </script>

    <!--end::OverlayScrollbars Configure-->


    <!--begin::Charts follow the colour mode-->

    <script>

      (() => {

        'use strict';

        const mode = () =>
          document.documentElement.getAttribute('data-bs-theme') === 'dark'
            ? 'dark'
            : 'light';

        globalThis.Apex ||= {};

        const apex = globalThis.Apex;

        apex.theme = {
          mode: mode()
        };

        apex.chart = Object.assign(
          apex.chart || {},
          {
            background:
              'transparent'
          }
        );

        new MutationObserver(() => {

          const next = mode();

          apex.theme = {
            mode: next
          };

          const instances =
            apex._chartInstances || [];

          for (const { chart } of instances) {

            chart.updateOptions(
              {
                theme: {
                  mode: next
                }
              },
              false,
              false
            );

          }

        }).observe(
          document.documentElement,
          {
            attributes: true,
            attributeFilter: [
              'data-bs-theme'
            ],
          }
        );

      })();

    </script>

    <!--end::Charts follow the colour mode-->


    <!--begin::Color Mode Toggle-->

    <!-- The light/dark/auto switcher ships in adminlte.js as the ColorMode
     module (since 4.1) — no page script needed. Only the no-flash snippet
     in <head> stays inline, because it must run before first paint. -->

    <!--end::Color Mode Toggle-->

    <!--end::Script-->

  </body>
  <!--end::Body-->

</html>
