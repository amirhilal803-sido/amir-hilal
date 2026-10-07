<?php include 'config/connection.php';?>
<?php include 'files/head.php';?>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<style>

/* =========================================================
   THE SKY SCHOOL - PREMIUM BLUE THEME
   ========================================================= */

:root {
    --sky-navy: #061a3a;
    --sky-blue: #0d47a1;
    --sky-primary: #1769e0;
    --sky-light-blue: #eaf3ff;
    --sky-cyan: #08a6c7;
    --sky-gold: #f4c95d;
    --sky-white: #ffffff;
    --sky-text: #17345d;
    --sky-muted: #6b7f99;
    --sky-border: #dce8f7;
}


/* =========================================================
   PAGE BACKGROUND
   ========================================================= */

.app-main {
    min-height: 100vh;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(23, 105, 224, 0.10),
            transparent 28%
        ),
        radial-gradient(
            circle at 90% 90%,
            rgba(8, 166, 199, 0.10),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #f7faff 0%,
            #eef5ff 50%,
            #f9fcff 100%
        ) !important;
}


/* =========================================================
   PAGE TITLE
   ========================================================= */

.app-content-header h1 {
    color: var(--sky-navy) !important;

    font-weight: 800;

    letter-spacing: .5px;

    text-shadow:
        0 4px 15px rgba(6, 26, 58, .10);
}

.app-content-header h1::after {
    content: "";

    display: block;

    width: 70px;

    height: 4px;

    margin: 10px auto 0;

    border-radius: 20px;

    background:
        linear-gradient(
            90deg,
            var(--sky-primary),
            var(--sky-cyan)
        );

    box-shadow:
        0 4px 12px rgba(23, 105, 224, .25);
}


/* =========================================================
   PREMIUM CARD
   ========================================================= */

.app-content .card {
    border: 1px solid var(--sky-border) !important;

    border-radius: 18px !important;

    overflow: hidden;

    background: rgba(255,255,255,.98) !important;

    box-shadow:
        0 20px 50px rgba(6, 26, 58, .10),
        0 5px 20px rgba(23, 105, 224, .06) !important;

    transition: all .3s ease;
}

.app-content .card:hover {
    box-shadow:
        0 25px 60px rgba(6, 26, 58, .14),
        0 8px 25px rgba(23, 105, 224, .08) !important;
}


/* =========================================================
   PREMIUM CARD HEADER
   ========================================================= */

.app-content .card-header {
    position: relative;

    min-height: 68px;

    display: flex;

    align-items: center;

    padding: 16px 22px !important;

    border: none !important;

    color: white !important;

    background:
        linear-gradient(
            135deg,
            #04142f 0%,
            #082b63 35%,
            #0d47a1 65%,
            #087f9c 100%
        ) !important;

    box-shadow:
        0 8px 25px rgba(6, 26, 58, .20);
}


/* Gold premium line */

.app-content .card-header::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;

    height: 3px;

    background:
        linear-gradient(
            90deg,
            #f4c95d,
            #ffe8a3,
            #f4c95d
        );
}


/* Header glow */

.app-content .card-header::after {
    content: "";

    position: absolute;

    width: 220px;
    height: 220px;

    right: -70px;
    top: -110px;

    border-radius: 50%;

    background:
        rgba(255,255,255,.07);

    pointer-events: none;
}


.app-content .card-header .card-title {
    position: relative;

    z-index: 2;

    margin: 0;

    color: #ffffff !important;

    font-size: 18px;

    font-weight: 700;

    letter-spacing: .3px;
}


.app-content .card-header .card-title::before {
    content: "✦";

    color: var(--sky-gold);

    font-size: 20px;

    margin-right: 10px;
}


/* =========================================================
   CARD BODY
   ========================================================= */

.app-content .card-body {
    padding: 22px !important;
}


/* =========================================================
   TABLE
   ========================================================= */

#myTable {
    width: 100% !important;

    margin: 0 !important;

    border-collapse: separate;

    border-spacing: 0;

    color: var(--sky-text);

    font-size: 13px;
}


/* =========================================================
   TABLE HEADER
   ========================================================= */

#myTable thead th {
    padding: 15px 12px !important;

    background:
        linear-gradient(
            135deg,
            #09285d,
            #0d47a1
        ) !important;

    color: #ffffff !important;

    border: none !important;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: .5px;

    text-transform: uppercase;

    white-space: nowrap;
}


#myTable thead th:first-child {
    border-top-left-radius: 10px;
}


#myTable thead th:last-child {
    border-top-right-radius: 10px;
}


/* =========================================================
   TABLE ROWS
   ========================================================= */

#myTable tbody tr {
    background: #ffffff;

    transition:
        all .2s ease;
}


#myTable tbody tr:nth-child(even) {
    background: #f7faff;
}


#myTable tbody tr:hover {
    background:
        linear-gradient(
            90deg,
            #edf5ff,
            #f0fbff
        ) !important;

    transform: scale(1.002);

    box-shadow:
        0 5px 18px rgba(23,105,224,.08);
}


/* =========================================================
   TABLE CELLS
   ========================================================= */

#myTable tbody td {
    padding: 13px 12px !important;

    vertical-align: middle;

    border-bottom:
        1px solid #e5edf7 !important;

    color: #355477;

    white-space: nowrap;
}


/* Student ID */

#myTable tbody td:nth-child(2) {
    color: #1260c9;

    font-weight: 800;
}


/* Student name */

#myTable tbody td:nth-child(3) {
    color: #102f59;

    font-weight: 700;
}


/* Father name */

#myTable tbody td:nth-child(4) {
    font-weight: 600;
}


/* =========================================================
   STATUS
   ========================================================= */

#myTable tbody td:nth-child(11) {
    font-weight: 700;

    text-transform: capitalize;
}


/* =========================================================
   ACTION BUTTONS
   ========================================================= */

#myTable .btn {
    border: none !important;

    border-radius: 7px !important;

    padding: 6px 12px !important;

    font-size: 11px;

    font-weight: 700;

    transition: all .25s ease;

    box-shadow:
        0 4px 10px rgba(6,26,58,.08);
}


/* Delete button */

#myTable .btn-danger {
    background:
        linear-gradient(
            135deg,
            #c62828,
            #ef4444
        ) !important;

    color: #ffffff !important;
}


#myTable .btn-danger:hover {
    transform: translateY(-2px);

    background:
        linear-gradient(
            135deg,
            #a91f1f,
            #dc2626
        ) !important;

    box-shadow:
        0 8px 18px rgba(220,38,38,.25);
}


/* Update button */

#myTable .btn-primary {
    background:
        linear-gradient(
            135deg,
            #0b3d91,
            #1769e0
        ) !important;

    color: #ffffff !important;

    margin-left: 4px;
}


#myTable .btn-primary:hover {
    transform: translateY(-2px);

    background:
        linear-gradient(
            135deg,
            #062d6b,
            #1258c4
        ) !important;

    box-shadow:
        0 8px 18px rgba(23,105,224,.25);
}


/* =========================================================
   DATATABLE SEARCH
   ========================================================= */

.dt-search {
    margin-bottom: 16px;
}


.dt-search label {
    color: #355477;

    font-weight: 700;

    margin-right: 8px;
}


.dt-search input {
    border:
        1px solid #d5e2f2 !important;

    border-radius:
        9px !important;

    padding:
        8px 13px !important;

    background:
        #ffffff !important;

    color:
        #17345d;

    box-shadow:
        0 3px 12px rgba(23,105,224,.05);

    transition:
        all .25s ease;
}


.dt-search input:focus {
    border-color:
        #1769e0 !important;

    outline:
        none !important;

    box-shadow:
        0 0 0 4px rgba(23,105,224,.10) !important;
}


/* =========================================================
   DATATABLE LENGTH
   ========================================================= */

.dt-length select {
    border:
        1px solid #d5e2f2 !important;

    border-radius:
        8px !important;

    padding:
        6px 25px 6px 10px;

    background:
        #ffffff;

    color:
        #17345d;
}


.dt-length label {
    color:
        #355477;

    font-weight:
        600;
}


/* =========================================================
   DATATABLE PAGINATION
   ========================================================= */

.dt-paging .dt-paging-button {
    border:
        1px solid #dce7f4 !important;

    border-radius:
        7px !important;

    color:
        #24528a !important;

    background:
        #ffffff !important;

    margin:
        2px !important;

    transition:
        all .2s ease;
}


.dt-paging .dt-paging-button:hover {
    background:
        #eaf3ff !important;

    color:
        #0d47a1 !important;

    border-color:
        #b8d0ef !important;
}


.dt-paging .dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #0b357c,
            #1769e0
        ) !important;

    color:
        #ffffff !important;

    border-color:
        #1769e0 !important;

    box-shadow:
        0 5px 12px rgba(23,105,224,.22);
}


/* =========================================================
   DATATABLE INFORMATION
   ========================================================= */

.dt-info {
    color:
        #71839a !important;

    font-size:
        13px;

    padding-top:
        10px !important;
}


/* =========================================================
   DARK MODE
   ========================================================= */

[data-bs-theme="dark"] .app-main {
    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(23,105,224,.15),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #051226,
            #081b34,
            #06152a
        ) !important;
}


[data-bs-theme="dark"] .app-content-header h1 {
    color:
        #dbeafe !important;
}


[data-bs-theme="dark"] .app-content .card {
    background:
        #0c2038 !important;

    border-color:
        #203c5c !important;

    box-shadow:
        0 20px 55px rgba(0,0,0,.35) !important;
}


[data-bs-theme="dark"] #myTable tbody tr {
    background:
        #0c2038 !important;
}


[data-bs-theme="dark"] #myTable tbody tr:nth-child(even) {
    background:
        #102945 !important;
}


[data-bs-theme="dark"] #myTable tbody tr:hover {
    background:
        #17395d !important;
}


[data-bs-theme="dark"] #myTable tbody td {
    color:
        #cbd5e1;

    border-bottom-color:
        #244361 !important;
}


[data-bs-theme="dark"] #myTable tbody td:nth-child(2),
[data-bs-theme="dark"] #myTable tbody td:nth-child(3) {
    color:
        #93c5fd;
}


[data-bs-theme="dark"] .dt-search label,
[data-bs-theme="dark"] .dt-length label {
    color:
        #cbd5e1;
}


[data-bs-theme="dark"] .dt-search input,
[data-bs-theme="dark"] .dt-length select {
    background:
        #102945 !important;

    border-color:
        #2c4b6d !important;

    color:
        #e2e8f0;
}


[data-bs-theme="dark"] .dt-paging .dt-paging-button {
    background:
        #102945 !important;

    border-color:
        #2c4b6d !important;

    color:
        #cbd5e1 !important;
}


/* =========================================================
   PREMIUM SCROLLBAR
   ========================================================= */

::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}


::-webkit-scrollbar-track {
    background:
        #edf3fa;
}


::-webkit-scrollbar-thumb {
    background:
        linear-gradient(
            180deg,
            #1769e0,
            #08a6c7
        );

    border-radius:
        20px;
}


::-webkit-scrollbar-thumb:hover {
    background:
        linear-gradient(
            180deg,
            #0d47a1,
            #087f9c
        );
}


/* =========================================================
   SELECTION
   ========================================================= */

::selection {
    background:
        #1769e0;

    color:
        #ffffff;
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 768px) {

    .app-content-header h1 {
        font-size: 25px;
    }

    .app-content .card-body {
        padding: 14px !important;
    }

    .app-content .card-header {
        padding: 15px !important;
    }

    .app-content .card-header .card-title {
        font-size: 16px;
    }

}

</style>


<!--begin::App Wrapper-->
<div class="app-wrapper">

    <!--begin::Header-->
    <?php include'files/topbar.php';?>
    <!--end::Header-->


    <!--begin::Sidebar-->
    <?php include'files/sidebar.php';?>
    <!--end::Sidebar-->


    <!--begin::App Main-->
    <main class="app-main">

        <!--begin::App Content Header-->
        <div class="app-content-header">

            <!--begin::Container-->
            <div class="container-fluid">

                <!--begin::Row-->
                <div class="row">

                    <div class="col-sm-12">

                        <h1
                            class="mb-0 fs-3"
                            style="text-align:center;"
                        >
                            <b>Student Data</b>
                        </h1>

                    </div>

                    <div class="col-sm-">

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

                            <div class="card-header">

                                <h3 class="card-title">
                                    Register Student In The School
                                </h3>

                                <div class="card-tools">
                                </div>

                            </div>

                            <!-- /.card-header -->

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table
                                        class="table table-striped"
                                        id="myTable"
                                    >

                                        <thead>

                                            <tr>

                                                <th>Sr#</th>

                                                <th>studentId</th>

                                                <th>Full Name</th>

                                                <th>Father Name</th>

                                                <th>dob</th>

                                                <th>Gender</th>

                                                <th>Email</th>

                                                <th>Phone</th>

                                                <th>Class</th>

                                                <th>CLass Time</th>

                                                <th>Status</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>


                                        <tbody>

                                            <?php 

                                            $i=1;

                                            $selStud = $pdo->query(
                                                "SELECT s.*,
                                                        c.start_time,
                                                        p.title 
                                                 FROM students s
                                                 LEFT JOIN student_class st
                                                 ON st.student_id = s.student_id
                                                 LEFT JOIN classes c
                                                 ON c.class_id = st.class_id
                                                 LEFT JOIN program p
                                                 ON p.program_id = c.program_id"
                                            );

                                            while ($rowstudent = $selStud->fetch()) {

                                            ?>

                                            <tr>

                                                <td>
                                                    <?= $i++ ;?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['student_id'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['full_name'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['father_name'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['dob'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['gender'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['email'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['phone'];?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['title'] != ''
                                                        ? $rowstudent['title']
                                                        : 'Class has not assign';?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['start_time'] != ''
                                                        ? $rowstudent['start_time']
                                                        : 'Not Assigned';;?>
                                                </td>

                                                <td>
                                                    <?= $rowstudent['status'];?>
                                                </td>

                                                <td>

                                                    <a
                                                        onclick="return confirm('Do you want to delete?');"
                                                        href="models/delete_students.php?student_id=<?= $rowstudent['student_id']; ?>&action=delete"
                                                        class="btn btn-danger btn-xs"
                                                    >
                                                        Delete
                                                    </a>


                                                    <a
                                                        href="Update_Student.php?student_id=<?php echo $rowstudent['student_id']; ?>&action=update"
                                                        class="btn btn-primary btn-xs"
                                                    >
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

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sidebarWrapper =
            document.querySelector(
                SELECTOR_SIDEBAR_WRAPPER
            );

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

    }
);

</script>

<!--end::OverlayScrollbars Configure-->


<!--begin::Charts follow the colour mode-->

<script>

const table = new DataTable('#myTable', {

});

</script>

<!--end::Charts follow the colour mode-->


</body>
<!--end::Body-->

</html>
