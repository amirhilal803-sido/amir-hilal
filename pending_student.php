<?php

include 'config/connection.php';

/*
|--------------------------------------------------------------------------
| Get Available Classes
|--------------------------------------------------------------------------
*/

$selClass = $pdo->query("
    SELECT
        c.class_id,
        c.start_time,
        p.title
    FROM classes c
    LEFT JOIN program p
        ON p.program_id = c.program_id
    ORDER BY c.start_time ASC
");

$Class = $selClass->fetchAll(PDO::FETCH_ASSOC);


/*
|--------------------------------------------------------------------------
| Get Students Without Class
|--------------------------------------------------------------------------
|
| Instead of running a separate COUNT query for every student,
| we use NOT EXISTS to directly fetch students who do not have
| any record in student_class.
|
*/

$selStud = $pdo->query("
    SELECT
        s.*,
        p.title AS program_title
    FROM students s
    LEFT JOIN program p
        ON p.program_id = s.program_id
    WHERE NOT EXISTS (
        SELECT 1
        FROM student_class sc
        WHERE sc.student_id = s.student_id
    )
    ORDER BY s.student_id ASC
");

?>

<?php include 'files/head.php'; ?>

<style>

/* =========================================================
   PREMIUM SCHOOL MANAGEMENT
   NAVY / ROYAL BLUE THEME
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

    --premium-shadow:
        0 10px 35px rgba(7, 26, 53, 0.10);

    --premium-shadow-hover:
        0 18px 45px rgba(11, 77, 187, 0.18);
}


/* =========================================================
   PAGE BACKGROUND
   ========================================================= */

body {
    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(34, 211, 238, 0.08),
            transparent 25%
        ),
        radial-gradient(
            circle at 90% 20%,
            rgba(23, 105, 224, 0.08),
            transparent 25%
        ),
        #f3f7fc !important;

    color: var(--premium-text);

    font-family:
        "Source Sans 3",
        sans-serif;
}


/* =========================================================
   MAIN CONTENT
   ========================================================= */

.app-main {
    background: transparent !important;
    min-height: 100vh;
}

.app-content {
    padding-top: 10px;
}


/* =========================================================
   PAGE TITLE
   ========================================================= */

.app-content-header {
    padding-top: 20px;
    padding-bottom: 15px;
}

.app-content-header h1 {
    color: var(--premium-navy);

    font-weight: 800 !important;

    letter-spacing: -0.4px;

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
   MAIN CARD
   ========================================================= */

.app-content .card {
    border: 1px solid rgba(11, 77, 187, 0.10) !important;

    border-radius: 18px !important;

    background:
        rgba(255, 255, 255, 0.96) !important;

    box-shadow:
        var(--premium-shadow) !important;

    overflow: hidden;

    /*
     * Removed transform hover effect from the entire card.
     * This prevents the DataTable/modal layout from jumping.
     */

    transition:
        box-shadow 0.3s ease;
}

.app-content .card:hover {
    box-shadow:
        var(--premium-shadow-hover) !important;

    transform: none;
}


/* =========================================================
   CARD HEADER
   ========================================================= */

.app-content .card-header {
    min-height: 70px;

    padding:
        18px 24px !important;

    background:
        linear-gradient(
            135deg,
            #071a35 0%,
            #0b4dbb 58%,
            #1769e0 100%
        ) !important;

    color: #ffffff !important;

    border: none !important;

    position: relative;

    overflow: hidden;
}

.app-content .card-header::after {
    content: "";

    position: absolute;

    right: 25px;
    top: -40px;

    width: 130px;
    height: 130px;

    border-radius: 50%;

    background:
        rgba(34, 211, 238, 0.14);
}

.app-content .card-title {
    color: #ffffff !important;

    font-size: 20px;

    font-weight: 700;

    letter-spacing: 0.2px;

    position: relative;

    z-index: 2;
}


/* =========================================================
   CARD HEADER LIGHT SHINE
   ========================================================= */

.app-content .card-header::before {
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

    transform:
        skewX(-20deg);

    transition:
        0.6s;
}

.app-content .card-header:hover::before {
    left: 140%;
}


/* =========================================================
   CARD BODY
   ========================================================= */

.app-content .card-body {
    padding: 20px !important;

    background: #ffffff;
}


/* =========================================================
   TABLE CONTAINER
   ========================================================= */

.table-responsive {
    border-radius: 12px;

    overflow-x: auto;
}


/* =========================================================
   TABLE
   ========================================================= */

#myTable {
    width: 100% !important;

    border-collapse:
        separate;

    border-spacing:
        0 7px;

    margin-top:
        5px !important;
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

    color:
        #ffffff !important;

    border:
        none !important;

    padding:
        16px 12px !important;

    font-size:
        13px;

    font-weight:
        700;

    text-transform:
        uppercase;

    letter-spacing:
        0.45px;

    white-space:
        nowrap;
}

#myTable thead th:first-child {
    border-radius:
        10px 0 0 10px;
}

#myTable thead th:last-child {
    border-radius:
        0 10px 10px 0;
}


/* =========================================================
   TABLE BODY
   ========================================================= */

#myTable tbody tr {
    background:
        #ffffff !important;

    box-shadow:
        0 3px 12px
        rgba(7, 26, 53, 0.05);

    transition:
        all 0.25s ease;
}

#myTable tbody tr:hover {
    background:
        #f0f7ff !important;

    transform:
        scale(1.002);

    box-shadow:
        0 7px 22px
        rgba(11, 77, 187, 0.11);
}


/* =========================================================
   TABLE CELLS
   ========================================================= */

#myTable tbody td {
    padding:
        14px 12px !important;

    border-top:
        1px solid #edf2f8 !important;

    border-bottom:
        1px solid #edf2f8 !important;

    color:
        #34435b;

    font-size:
        14px;

    vertical-align:
        middle;

    white-space:
        nowrap;
}

#myTable tbody td:first-child {
    border-left:
        1px solid #edf2f8 !important;

    border-radius:
        10px 0 0 10px;

    color:
        var(--premium-muted);

    font-weight:
        700;
}

#myTable tbody td:last-child {
    border-right:
        1px solid #edf2f8 !important;

    border-radius:
        0 10px 10px 0;
}


/* =========================================================
   STUDENT ID
   ========================================================= */

#myTable tbody td:nth-child(2) {
    color:
        #0b4dbb;

    font-weight:
        800;
}


/* =========================================================
   STUDENT NAME
   ========================================================= */

#myTable tbody td:nth-child(3) {
    color:
        #17233c;

    font-weight:
        700;
}


/* =========================================================
   PROGRAM
   ========================================================= */

#myTable tbody td:nth-child(9) {
    color:
        #0b4dbb;

    font-weight:
        700;
}


/* =========================================================
   STATUS
   ========================================================= */

#myTable tbody td:nth-child(10) {
    color:
        #159669;

    font-weight:
        700;
}


/* =========================================================
   ASSIGN CLASS BUTTON
   ========================================================= */

#myTable .btn-info {
    background:
        linear-gradient(
            135deg,
            #0b4dbb,
            #1769e0
        ) !important;

    border:
        none !important;

    color:
        #ffffff !important;

    border-radius:
        9px !important;

    padding:
        8px 15px !important;

    font-size:
        12px;

    font-weight:
        700;

    box-shadow:
        0 5px 15px
        rgba(11, 77, 187, 0.22);

    transition:
        all 0.25s ease;

    position:
        relative;

    overflow:
        hidden;

    text-decoration:
        none;
}

#myTable .btn-info::before {
    content: "";

    position:
        absolute;

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

    transform:
        skewX(-20deg);

    transition:
        0.6s;
}

#myTable .btn-info:hover::before {
    left: 140%;
}

#myTable .btn-info:hover {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb
        ) !important;

    color:
        #ffffff !important;

    transform:
        translateY(-2px);

    box-shadow:
        0 9px 22px
        rgba(11, 77, 187, 0.30);
}


/* =========================================================
   DATATABLE WRAPPER
   ========================================================= */

.dataTables_wrapper {
    padding:
        10px 5px 5px;
}


/* =========================================================
   DATATABLE TOP CONTROLS
   ========================================================= */

.dataTables_wrapper .dt-search {
    margin-bottom:
        15px;
}

.dataTables_wrapper .dt-search label {
    color:
        #6b7a90;

    font-weight:
        600;
}

.dataTables_wrapper .dt-search input {
    margin-left:
        8px !important;

    min-width:
        230px;

    border:
        1px solid #d6e3f2 !important;

    border-radius:
        10px !important;

    padding:
        9px 14px !important;

    background:
        #ffffff !important;

    color:
        #17233c !important;

    outline:
        none !important;

    box-shadow:
        0 3px 10px
        rgba(7, 26, 53, 0.04);

    transition:
        all 0.25s ease;
}

.dataTables_wrapper .dt-search input:focus {
    border-color:
        #1769e0 !important;

    box-shadow:
        0 0 0 3px
        rgba(23, 105, 224, 0.12),
        0 5px 15px
        rgba(23, 105, 224, 0.08) !important;
}


/* =========================================================
   DATATABLE LENGTH
   ========================================================= */

.dataTables_wrapper .dt-length select {
    border:
        1px solid #d6e3f2 !important;

    border-radius:
        8px !important;

    padding:
        7px 12px !important;

    color:
        #17233c !important;

    background:
        #ffffff !important;

    outline:
        none;
}


/* =========================================================
   DATATABLE INFO
   ========================================================= */

.dataTables_wrapper .dt-info {
    padding-top:
        15px;

    color:
        #6b7a90;

    font-size:
        13px;
}


/* =========================================================
   DATATABLE PAGINATION
   ========================================================= */

.dataTables_wrapper .dt-paging {
    padding-top:
        12px;
}

.dataTables_wrapper .dt-paging .dt-paging-button {
    min-width:
        35px;

    margin:
        2px !important;

    padding:
        7px 11px !important;

    border:
        none !important;

    border-radius:
        8px !important;

    color:
        #0b4dbb !important;

    background:
        transparent !important;

    font-weight:
        600;
}

.dataTables_wrapper .dt-paging .dt-paging-button:hover {
    background:
        #eaf3ff !important;

    color:
        #071a35 !important;
}

.dataTables_wrapper .dt-paging .dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #1769e0
        ) !important;

    color:
        #ffffff !important;

    border:
        none !important;

    box-shadow:
        0 5px 12px
        rgba(11, 77, 187, 0.22);
}


/* =========================================================
   MODAL
   ========================================================= */

#demoModalDefault .modal-dialog {
    max-width:
        500px;
}

#demoModalDefault .modal-content {
    border:
        none !important;

    border-radius:
        20px !important;

    overflow:
        hidden;

    box-shadow:
        0 25px 80px
        rgba(7, 26, 53, 0.28) !important;
}


/* =========================================================
   MODAL HEADER
   ========================================================= */

#demoModalDefault .modal-header {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb,
            #1769e0
        ) !important;

    color:
        #ffffff !important;

    border:
        none !important;

    padding:
        20px 24px !important;

    position:
        relative;

    overflow:
        hidden;
}

#demoModalDefault .modal-header::after {
    content: "";

    position:
        absolute;

    right:
        -30px;

    top:
        -50px;

    width:
        140px;

    height:
        140px;

    border-radius:
        50%;

    background:
        rgba(34, 211, 238, 0.14);
}

#demoModalDefault .modal-title {
    color:
        #ffffff !important;

    font-weight:
        800 !important;

    letter-spacing:
        0.3px;

    position:
        relative;

    z-index:
        2;
}

#demoModalDefault .btn-close {
    filter:
        brightness(0) invert(1);

    opacity:
        0.9;

    position:
        relative;

    z-index:
        3;
}


/* =========================================================
   MODAL BODY
   ========================================================= */

#demoModalDefault .modal-body {
    background:
        #f8fbff !important;

    padding:
        25px !important;
}

#demoModalDefault .form-group {
    margin-bottom:
        5px;
}


/* =========================================================
   MODAL LABEL
   ========================================================= */

#demoModalDefault label {
    color:
        #071a35;

    font-weight:
        700;

    margin-bottom:
        8px;

    display:
        block;
}


/* =========================================================
   MODAL SELECT
   ========================================================= */

#demoModalDefault .form-control {
    border:
        1px solid #d7e4f3 !important;

    border-radius:
        10px !important;

    min-height:
        45px;

    background:
        #ffffff !important;

    color:
        #17233c !important;

    box-shadow:
        0 3px 10px
        rgba(7, 26, 53, 0.04);

    transition:
        all 0.25s ease;
}

#demoModalDefault .form-control:focus {
    border-color:
        #1769e0 !important;

    box-shadow:
        0 0 0 3px
        rgba(23, 105, 224, 0.12),
        0 5px 15px
        rgba(23, 105, 224, 0.08) !important;
}


/* =========================================================
   MODAL FOOTER
   ========================================================= */

#demoModalDefault .modal-footer {
    background:
        #ffffff !important;

    border-top:
        1px solid #e5edf7 !important;

    padding:
        16px 24px !important;
}


/* =========================================================
   MODAL BUTTONS
   ========================================================= */

#demoModalDefault .btn {
    border-radius:
        9px !important;

    font-weight:
        700;

    padding:
        9px 18px;

    transition:
        all 0.25s ease;
}

#demoModalDefault .btn-secondary {
    background:
        #edf3fa;

    color:
        #475569;

    border:
        none;
}

#demoModalDefault .btn-secondary:hover {
    background:
        #dce8f5;

    transform:
        translateY(-1px);
}

#demoModalDefault .btn-primary {
    background:
        linear-gradient(
            135deg,
            #071a35,
            #0b4dbb,
            #1769e0
        ) !important;

    border:
        none !important;

    color:
        #ffffff !important;

    box-shadow:
        0 5px 15px
        rgba(11, 77, 187, 0.20);

    position:
        relative;

    overflow:
        hidden;
}

#demoModalDefault .btn-primary:hover {
    transform:
        translateY(-2px);

    box-shadow:
        0 9px 24px
        rgba(11, 77, 187, 0.30);
}


/* =========================================================
   MODAL BACKDROP
   ========================================================= */

.modal-backdrop.show {
    opacity:
        0.65;
}


/* =========================================================
   SCROLLBAR
   ========================================================= */

::-webkit-scrollbar {
    width:
        8px;

    height:
        8px;
}

::-webkit-scrollbar-track {
    background:
        #edf3fa;
}

::-webkit-scrollbar-thumb {
    background:
        linear-gradient(
            #0b4dbb,
            #22d3ee
        );

    border-radius:
        20px;
}

::-webkit-scrollbar-thumb:hover {
    background:
        #071a35;
}


/* =========================================================
   MOBILE RESPONSIVE
   ========================================================= */

@media (max-width: 768px) {

    .app-content-header {
        padding:
            18px 0 12px;
    }

    .app-content-header h1 {
        font-size:
            22px !important;
    }

    .app-content .card-header {
        padding:
            15px 17px !important;
    }

    .app-content .card-title {
        font-size:
            17px;
    }

    .app-content .card-body {
        padding:
            15px !important;
    }

    .dataTables_wrapper {
        padding:
            10px 0;
    }

    .dataTables_wrapper .dt-search input {
        width:
            100%;

        min-width:
            0;

        margin:
            8px 0 0 !important;
    }

    #myTable thead th {
        font-size:
            11px;

        padding:
            12px 9px !important;
    }

    #myTable tbody td {
        font-size:
            13px;

        padding:
            11px 9px !important;
    }

    #demoModalDefault .modal-body {
        padding:
            18px !important;
    }

}


/* =========================================================
   DARK MODE SUPPORT
   ========================================================= */

[data-bs-theme="dark"] body {
    background:
        #0b1220 !important;

    color:
        #e5edf8;
}

[data-bs-theme="dark"] .app-main {
    background:
        #0b1220 !important;
}

[data-bs-theme="dark"] .app-content-header h1 {
    color:
        #f3f8ff;
}

[data-bs-theme="dark"] .app-content .card {
    background:
        #172033 !important;

    border-color:
        #293850 !important;

    box-shadow:
        0 10px 35px
        rgba(0, 0, 0, 0.25) !important;
}

[data-bs-theme="dark"] .app-content .card:hover {
    transform:
        none;
}

[data-bs-theme="dark"] .app-content .card-body {
    background:
        #172033 !important;
}

[data-bs-theme="dark"] #myTable {
    color:
        #e5edf8;
}

[data-bs-theme="dark"] #myTable thead th {
    background:
        #071a35 !important;

    color:
        #ffffff !important;
}

[data-bs-theme="dark"] #myTable tbody tr {
    background:
        #172033 !important;
}

[data-bs-theme="dark"] #myTable tbody tr:hover {
    background:
        #1d2a40 !important;
}

[data-bs-theme="dark"] #myTable tbody td {
    border-color:
        #293850 !important;

    color:
        #dbe7f5;
}

[data-bs-theme="dark"] #myTable tbody td:nth-child(2) {
    color:
        #60a5fa;
}

[data-bs-theme="dark"] #myTable tbody td:nth-child(3) {
    color:
        #ffffff;
}

[data-bs-theme="dark"] #myTable tbody td:nth-child(9) {
    color:
        #60a5fa;
}

[data-bs-theme="dark"] #myTable tbody td:nth-child(10) {
    color:
        #34d399;
}

[data-bs-theme="dark"] .dataTables_wrapper .dt-search label {
    color:
        #a9b9cf;
}

[data-bs-theme="dark"] .dataTables_wrapper .dt-search input,
[data-bs-theme="dark"] .dataTables_wrapper .dt-length select {
    background:
        #111a2c !important;

    color:
        #ffffff !important;

    border-color:
        #293850 !important;
}

[data-bs-theme="dark"] .dataTables_wrapper .dt-info {
    color:
        #a9b9cf;
}

[data-bs-theme="dark"] .dataTables_wrapper .dt-paging .dt-paging-button {
    color:
        #60a5fa !important;
}

[data-bs-theme="dark"] #demoModalDefault .modal-content {
    background:
        #172033;
}

[data-bs-theme="dark"] #demoModalDefault .modal-body {
    background:
        #172033 !important;
}

[data-bs-theme="dark"] #demoModalDefault label {
    color:
        #e5edf8;
}

[data-bs-theme="dark"] #demoModalDefault .form-control {
    background:
        #0b1220 !important;

    color:
        #ffffff !important;

    border-color:
        #293850 !important;
}

[data-bs-theme="dark"] #demoModalDefault .modal-footer {
    background:
        #111a2c !important;

    border-top-color:
        #293850 !important;
}

</style>


<!-- =========================================================
     BODY
     ========================================================= -->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">


    <!-- =====================================================
         HEADER
         ===================================================== -->

    <?php include 'files/topbar.php'; ?>


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <?php include 'files/sidebar.php'; ?>


    <!-- =====================================================
         MAIN CONTENT
         ===================================================== -->

    <main class="app-main">


        <!-- =================================================
             PAGE HEADER
             ================================================= -->

        <div class="app-content-header">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-6">

                        <h1 class="mb-0 fs-3">
                            Student Without Class
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


        <!-- =================================================
             PAGE CONTENT
             ================================================= -->

        <div class="app-content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">


                        <!-- =====================================
                             CARD
                             ===================================== -->

                        <div class="card">


                            <!-- =================================
                                 CARD HEADER
                                 ================================= -->

                            <div class="card-header">

                                <h3 class="card-title">
                                    Students Waiting for Class Assignment
                                </h3>

                                <div class="card-tools">
                                </div>

                            </div>


                            <!-- =================================
                                 CARD BODY
                                 ================================= -->

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
                                                    Student ID
                                                </th>

                                                <th>
                                                    Full Name
                                                </th>

                                                <th>
                                                    Father Name
                                                </th>

                                                <th>
                                                    DOB
                                                </th>

                                                <th>
                                                    Gender
                                                </th>

                                                <th>
                                                    Email
                                                </th>

                                                <th>
                                                    Phone
                                                </th>

                                                <th>
                                                    Program
                                                </th>

                                                <th>
                                                    Status
                                                </th>

                                                <th>
                                                    Action
                                                </th>

                                            </tr>

                                        </thead>


                                        <tbody>

                                        <?php

                                        $i = 1;

                                        while ($rowstudent = $selStud->fetch(PDO::FETCH_ASSOC)):

                                            $studentId = (int) $rowstudent['student_id'];

                                            $fullName = htmlspecialchars(
                                                $rowstudent['full_name'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $fatherName = htmlspecialchars(
                                                $rowstudent['father_name'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $dob = htmlspecialchars(
                                                $rowstudent['dob'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $gender = htmlspecialchars(
                                                $rowstudent['gender'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $email = htmlspecialchars(
                                                $rowstudent['email'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $phone = htmlspecialchars(
                                                $rowstudent['phone'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $programTitle = htmlspecialchars(
                                                $rowstudent['program_title'] ?? 'N/A',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                            $status = htmlspecialchars(
                                                $rowstudent['status'] ?? '',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            );

                                        ?>

                                            <tr>

                                                <td>
                                                    <?= $i++; ?>
                                                </td>

                                                <td>
                                                    <?= $studentId; ?>
                                                </td>

                                                <td>
                                                    <?= $fullName; ?>
                                                </td>

                                                <td>
                                                    <?= $fatherName; ?>
                                                </td>

                                                <td>
                                                    <?= $dob; ?>
                                                </td>

                                                <td>
                                                    <?= $gender; ?>
                                                </td>

                                                <td>
                                                    <?= $email; ?>
                                                </td>

                                                <td>
                                                    <?= $phone; ?>
                                                </td>

                                                <td>
                                                    <?= $programTitle; ?>
                                                </td>

                                                <td>
                                                    <?= $status; ?>
                                                </td>

                                                <td>

                                                    <button
                                                        type="button"
                                                        class="btn btn-info btn-xs"
                                                        onclick="AssignClass(<?= $studentId; ?>)"
                                                    >
                                                        Assign Class
                                                    </button>

                                                </td>

                                            </tr>

                                        <?php endwhile; ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>
                            <!-- end::Card Body -->


                        </div>
                        <!-- end::Card -->


                    </div>

                </div>

            </div>

        </div>
        <!-- end::App Content -->


    </main>
    <!-- end::App Main -->


    <!-- =====================================================
         ASSIGN CLASS MODAL
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


                <!-- =========================================
                     MODAL HEADER
                     ========================================= -->

                <div class="modal-header">

                    <h1
                        class="modal-title fs-5"
                        id="demoModalDefaultLabel"
                    >
                        Assign Class
                    </h1>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>

                </div>


                <!-- =========================================
                     MODAL FORM
                     ========================================= -->

                <form
                    action="models/manage_class.php"
                    method="POST"
                >

                    <div class="modal-body">

                        <div class="form-group">

                            <label for="class_id">
                                Select Class
                            </label>

                            <select
                                class="form-control"
                                name="class_id"
                                id="class_id"
                                required
                            >

                                <option
                                    selected
                                    disabled
                                    value=""
                                >
                                    Select Class
                                </option>


                                <?php foreach ($Class as $row): ?>

                                    <option
                                        value="<?= (int) $row['class_id']; ?>"
                                    >

                                        <?= htmlspecialchars(
                                            $row['title'] ?? 'Class',
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ); ?>

                                        -

                                        <?= !empty($row['start_time'])
                                            ? date(
                                                "h:i A",
                                                strtotime($row['start_time'])
                                            )
                                            : 'Time not set';
                                        ?>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                    </div>


                    <!-- =========================================
                         MODAL FOOTER
                         ========================================= -->

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
                            value=""
                        >


                        <button
                            type="submit"
                            class="btn btn-primary"
                            name="AssignClass"
                            value="Assign Class"
                        >
                            Assign Class
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


</div>
<!-- end::App Wrapper -->


<!-- =========================================================
     JAVASCRIPT
     ========================================================= -->


<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
></script>


<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"
    integrity="sha512-8LENNbXmzI/Gbj+OwXmqR6V4QaUAw0/porPzy1+dQoJqC0JPHedWoe0DDOTL2uHA5XXJyIsPtiMHH86vPlay6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>


<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"
></script>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
></script>


<script src="./js/adminlte.js"></script>


<script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>


<!-- =========================================================
     OVERLAY SCROLLBARS
     ========================================================= -->

<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const SELECTOR_SIDEBAR_WRAPPER =
            '.sidebar-wrapper';

        const Default = {

            scrollbarTheme:
                'os-theme-light',

            scrollbarAutoHide:
                'leave',

            scrollbarClickScroll:
                true

        };


        const sidebarWrapper =
            document.querySelector(
                SELECTOR_SIDEBAR_WRAPPER
            );


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

                        theme:
                            Default.scrollbarTheme,

                        autoHide:
                            Default.scrollbarAutoHide,

                        clickScroll:
                            Default.scrollbarClickScroll

                    }
                }
            );

        }

    }
);

</script>


<!-- =========================================================
     DATATABLE
     ========================================================= -->

<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {

        new DataTable(
            '#myTable',
            {

                pageLength:
                    10,

                lengthMenu: [
                    [10, 25, 50, 100],
                    [10, 25, 50, 100]
                ],

                order: [
                    [0, 'asc']
                ],

                language: {

                    search:
                        "Search Students:",

                    lengthMenu:
                        "Show _MENU_ students",

                    info:
                        "Showing _START_ to _END_ of _TOTAL_ students",

                    infoEmpty:
                        "Showing 0 to 0 of 0 students",

                    zeroRecords:
                        "No matching students found",

                    emptyTable:
                        "No students are waiting for class assignment",

                    paginate: {

                        first:
                            "First",

                        last:
                            "Last",

                        next:
                            "Next",

                        previous:
                            "Previous"

                    }

                }

            }
        );

    }
);


/* =========================================================
   ASSIGN CLASS
   ========================================================= */

function AssignClass(student_id) {

    const studentInput =
        document.getElementById(
            'student_id'
        );


    const classSelect =
        document.getElementById(
            'class_id'
        );


    const modalElement =
        document.getElementById(
            'demoModalDefault'
        );


    if (!studentInput || !modalElement) {

        console.error(
            'Assign Class modal elements not found.'
        );

        return;

    }


    /*
     * Set student ID.
     */

    studentInput.value =
        student_id;


    /*
     * Reset class selection every time
     * the modal opens.
     */

    if (classSelect) {

        classSelect.value = "";

    }


    /*
     * Open Bootstrap modal.
     */

    if (
        typeof bootstrap !== 'undefined' &&
        bootstrap.Modal
    ) {

        const modal =
            bootstrap.Modal.getOrCreateInstance(
                modalElement
            );

        modal.show();

    }

}


/* =========================================================
   CLEAR MODAL WHEN CLOSED
   ========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const modalElement =
            document.getElementById(
                'demoModalDefault'
            );


        if (!modalElement) {

            return;

        }


        modalElement.addEventListener(
            'hidden.bs.modal',
            function () {

                const studentInput =
                    document.getElementById(
                        'student_id'
                    );

                const classSelect =
                    document.getElementById(
                        'class_id'
                    );


                if (studentInput) {

                    studentInput.value = "";

                }


                if (classSelect) {

                    classSelect.value = "";

                }

            }
        );

    }
);

</script>


</body>

</html>