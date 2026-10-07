<?php
include 'config/connection.php';

$selProgram = $pdo->query("SELECT * FROM program ORDER BY program_id DESC");
$Program = $selProgram->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include 'files/head.php'; ?>

<style>

/* =========================================================
   PREMIUM SCHOOL MANAGEMENT SYSTEM THEME
   ========================================================= */

:root {
    --school-primary: #123c69;
    --school-secondary: #1d5fa7;
    --school-blue: #2563eb;
    --school-light: #eef5ff;
    --school-dark: #0b1f3a;
    --school-gold: #d4af37;
    --school-white: #ffffff;
    --school-border: #dce6f2;
    --school-shadow: 0 10px 30px rgba(18, 60, 105, 0.10);
}


/* =========================================================
   PAGE
   ========================================================= */

body {
    background:
        linear-gradient(
            135deg,
            #f7faff 0%,
            #edf4fc 50%,
            #f9fbff 100%
        );

    color: #1e293b;
    font-family: "Segoe UI", Arial, sans-serif;
}


/* =========================================================
   MAIN CONTENT
   ========================================================= */

.app-main {
    background: transparent;
}

.app-content {
    padding-bottom: 40px;
}

.app-content-header {
    padding-top: 24px;
    padding-bottom: 10px;
}

.app-content-header h1 {
    color: var(--school-dark);
    font-weight: 700;
    letter-spacing: -0.3px;
}


/* =========================================================
   PREMIUM CARD
   ========================================================= */

.card {
    border: 1px solid rgba(37, 99, 235, 0.10) !important;
    border-radius: 18px !important;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.96);
    box-shadow: var(--school-shadow) !important;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0 15px 40px rgba(18, 60, 105, 0.15) !important;
}

.card-header {
    min-height: 72px;
    padding: 18px 22px !important;

    display: flex;
    align-items: center;
    justify-content: space-between;

    background:
        linear-gradient(
            135deg,
            #123c69 0%,
            #1d5fa7 55%,
            #2563eb 100%
        ) !important;

    color: white !important;
    border-bottom: none !important;
}

.card-title {
    margin: 0 !important;
    font-size: 18px !important;
    font-weight: 700 !important;
    color: white !important;
    letter-spacing: 0.2px;
}

.card-body {
    padding: 22px !important;
    background: #ffffff;
}


/* =========================================================
   ADD CLASS BUTTON
   ========================================================= */

.card-tools .btn-primary {
    background:
        linear-gradient(
            135deg,
            #d4af37,
            #f0c75e
        ) !important;

    border: none !important;
    color: #172033 !important;
    font-weight: 700;

    border-radius: 10px !important;
    padding: 10px 18px;

    box-shadow:
        0 5px 15px rgba(212, 175, 55, 0.25);

    transition: all 0.25s ease;
}

.card-tools .btn-primary:hover {
    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(212, 175, 55, 0.35);

    background:
        linear-gradient(
            135deg,
            #e0b93f,
            #ffd970
        ) !important;
}


/* =========================================================
   PREMIUM TABLE
   ========================================================= */

.table-responsive {
    border-radius: 14px;
    overflow-x: auto;
    overflow-y: hidden;
}

#myTable {
    width: 100% !important;
    margin: 0 !important;

    border-collapse: separate !important;
    border-spacing: 0;

    background: #ffffff;
    font-size: 14px;
}


/* =========================================================
   TABLE HEADER
   ========================================================= */

#myTable thead th {
    background:
        linear-gradient(
            135deg,
            #102f52,
            #174f83
        ) !important;

    color: #ffffff !important;
    border: none !important;

    padding: 16px 14px !important;

    font-weight: 700 !important;
    font-size: 13px;

    white-space: nowrap;
    vertical-align: middle;
}

#myTable thead th:first-child {
    border-top-left-radius: 10px;
}

#myTable thead th:last-child {
    border-top-right-radius: 10px;
}


/* =========================================================
   TABLE BODY
   ========================================================= */

#myTable tbody tr {
    background: #ffffff;
    transition: all 0.2s ease;
}

#myTable tbody tr:nth-child(even) {
    background: #f7faff;
}

#myTable tbody tr:hover {
    background: #eaf3ff !important;
    transform: scale(1.002);
    box-shadow: inset 4px 0 0 #2563eb;
}

#myTable tbody td {
    padding: 14px !important;
    vertical-align: middle !important;

    border-bottom: 1px solid #e8eef6 !important;

    color: #334155;
    white-space: nowrap;
}


/* =========================================================
   STRENGTH BADGE
   ========================================================= */

#myTable tbody td:nth-child(5) {
    font-weight: 700;
    color: #123c69;
}

#myTable tbody td:nth-child(5)::before {
    content: "👥 ";
}


/* =========================================================
   CLASS TIME
   ========================================================= */

#myTable tbody td:nth-child(3) {
    font-weight: 700;
    color: #1d5fa7;
}

#myTable tbody td:nth-child(3)::before {
    content: "◷ ";
    color: #d4af37;
}


/* =========================================================
   TEACHER NAME
   ========================================================= */

#myTable tbody td:nth-child(4) {
    font-weight: 600;
    color: #334155;
}


/* =========================================================
   ACTION BUTTON
   ========================================================= */

#myTable .btn-info {
    background:
        linear-gradient(
            135deg,
            #2563eb,
            #174f9c
        ) !important;

    border: none !important;
    color: white !important;

    border-radius: 8px !important;
    padding: 7px 13px !important;

    font-size: 12px;
    font-weight: 600;

    box-shadow:
        0 4px 10px rgba(37, 99, 235, 0.20);

    transition: all 0.25s ease;
}

#myTable .btn-info:hover {
    transform: translateY(-2px);

    background:
        linear-gradient(
            135deg,
            #174f9c,
            #0f376d
        ) !important;

    box-shadow:
        0 7px 16px rgba(37, 99, 235, 0.30);
}


/* =========================================================
   MODAL
   ========================================================= */

.modal-content {
    border: none !important;
    border-radius: 18px !important;
    overflow: hidden;

    box-shadow:
        0 25px 70px rgba(8, 31, 58, 0.30) !important;
}

.modal-header {
    background:
        linear-gradient(
            135deg,
            #102f52,
            #1d5fa7,
            #2563eb
        ) !important;

    color: white !important;
    border: none !important;

    padding: 18px 22px !important;
}

.modal-title {
    color: white !important;
    font-weight: 700 !important;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.9;
}

.modal-body {
    padding: 25px !important;
    background: #f9fbff;
}

.modal-footer {
    padding: 16px 22px !important;

    background: #ffffff;

    border-top:
        1px solid #e5edf7 !important;
}


/* =========================================================
   FORM CONTROLS
   ========================================================= */

.modal-body label {
    display: block;

    margin-bottom: 7px;

    color: #173b63;

    font-weight: 700;
    font-size: 14px;
}

.modal-body .form-control,
.modal-body select {
    min-height: 46px;

    border:
        1px solid #d5e1ef !important;

    border-radius: 9px !important;

    background: #ffffff !important;

    color: #26364a;

    padding: 10px 13px;

    box-shadow:
        0 2px 7px rgba(18, 60, 105, 0.04);

    transition: all 0.2s ease;
}

.modal-body .form-control:focus,
.modal-body select:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, 0.12),
        0 4px 12px rgba(18, 60, 105, 0.08) !important;

    outline: none;
}


/* =========================================================
   MODAL BUTTONS
   ========================================================= */

.modal-footer .btn-secondary {
    border: none !important;
    border-radius: 9px !important;

    background: #64748b !important;

    padding: 9px 18px;

    font-weight: 600;
}

.modal-footer .btn-primary {
    border: none !important;
    border-radius: 9px !important;

    background:
        linear-gradient(
            135deg,
            #123c69,
            #2563eb
        ) !important;

    padding: 9px 20px;

    font-weight: 700;

    box-shadow:
        0 5px 14px rgba(37, 99, 235, 0.22);

    transition: all 0.25s ease;
}

.modal-footer .btn-primary:hover {
    transform: translateY(-2px);

    box-shadow:
        0 8px 18px rgba(37, 99, 235, 0.30);
}


/* =========================================================
   SIDEBAR PREMIUM MATCH
   ========================================================= */

.app-sidebar {
    background:
        linear-gradient(
            180deg,
            #081b33 0%,
            #0d2c50 45%,
            #123c69 100%
        ) !important;

    box-shadow:
        4px 0 25px rgba(5, 25, 50, 0.20) !important;
}

.sidebar-brand {
    background:
        linear-gradient(
            135deg,
            #07182d,
            #123c69
        ) !important;
}

.brand-text {
    color: #ffffff !important;

    font-weight: 700 !important;

    letter-spacing: 0.7px;
}

.sidebar-menu .nav-link {
    color: #dbeafe !important;

    border-radius: 9px;

    margin: 3px 10px;

    transition: all 0.2s ease;
}

.sidebar-menu .nav-link:hover {
    background:
        rgba(255,255,255,0.10) !important;

    color: #ffffff !important;

    transform: translateX(3px);
}

.sidebar-menu .nav-link.active {
    background:
        linear-gradient(
            135deg,
            #2563eb,
            #174f9c
        ) !important;

    color: #ffffff !important;

    box-shadow:
        0 6px 15px rgba(37, 99, 235, 0.25);
}

.sidebar-menu .nav-icon {
    color: #8ec5ff !important;
}

.sidebar-menu .nav-link.active .nav-icon {
    color: #ffffff !important;
}


/* =========================================================
   PAGE TITLE
   ========================================================= */

.app-content-header h1 {
    position: relative;
}

.app-content-header h1::after {
    content: "";

    display: block;

    width: 45px;
    height: 3px;

    margin-top: 7px;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            #2563eb,
            #d4af37
        );
}


/* =========================================================
   DATATABLE SEARCH
   ========================================================= */

.dataTables_wrapper {
    color: #334155;
}

.dataTables_wrapper .dt-search input,
.dt-search input {
    border:
        1px solid #d6e2ef !important;

    border-radius: 8px !important;

    padding: 8px 12px !important;

    outline: none !important;

    transition: 0.2s ease;
}

.dataTables_wrapper .dt-search input:focus,
.dt-search input:focus {
    border-color: #2563eb !important;

    box-shadow:
        0 0 0 3px rgba(37, 99, 235, 0.10) !important;
}


/* =========================================================
   DATATABLE PAGINATION
   ========================================================= */

.dt-paging .dt-paging-button {
    border-radius: 7px !important;

    border: none !important;

    margin: 2px !important;
}

.dt-paging .dt-paging-button.current {
    background:
        linear-gradient(
            135deg,
            #123c69,
            #2563eb
        ) !important;

    color: white !important;

    border: none !important;
}


/* =========================================================
   MOBILE RESPONSIVE
   ========================================================= */

@media (max-width: 768px) {

    .app-content-header {
        padding-top: 15px;
    }

    .app-content-header h1 {
        font-size: 22px !important;
    }

    .card-header {
        padding: 15px !important;

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

    #myTable {
        font-size: 13px;
    }

    #myTable thead th,
    #myTable tbody td {
        padding: 11px 10px !important;
    }

    .modal-dialog {
        margin: 10px;
    }
}


/* =========================================================
   SMOOTH SCROLLBAR
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
            180deg,
            #123c69,
            #2563eb
        );

    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #0d3768;
}

</style>


<!-- =========================================================
     BODY
     ========================================================= -->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <!-- =====================================================
         APP WRAPPER
         ===================================================== -->

    <div class="app-wrapper">


        <!-- =================================================
             HEADER
             ================================================= -->

        <?php include 'files/topbar.php'; ?>


        <!-- =================================================
             SIDEBAR
             ================================================= -->

        <?php include 'files/sidebar.php'; ?>


        <!-- =================================================
             APP MAIN
             ================================================= -->

        <main class="app-main">


            <!-- =================================================
                 PAGE HEADER
                 ================================================= -->

            <div class="app-content-header">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-sm-6">

                            <h1 class="mb-0 fs-3">
                                ALL Classes
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
                 APP CONTENT
                 ================================================= -->

            <div class="app-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-12">


                            <!-- =================================================
                                 CARD
                                 ================================================= -->

                            <div class="card">


                                <!-- =================================================
                                     CARD HEADER
                                     ================================================= -->

                                <div class="card-header">

                                    <h3 class="card-title">
                                        Active Classes
                                    </h3>


                                    <div class="card-tools">

                                        <!-- ADD CLASS BUTTON -->

                                        <button
                                            type="button"
                                            class="btn btn-primary me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#demoModalDefault"
                                        >

                                            <i class="bi bi-plus-circle me-1"></i>

                                            ADD Class

                                        </button>


                                        <!-- =================================================
                                             ADD CLASS MODAL
                                             ================================================= -->

                                        <div
                                            class="modal fade"
                                            id="demoModalDefault"
                                            tabindex="-1"
                                            aria-labelledby="demoModalDefaultLabel"
                                            aria-hidden="true"
                                        >

                                            <div class="modal-dialog modal-dialog-centered">

                                                <div class="modal-content">


                                                    <!-- MODAL HEADER -->

                                                    <div class="modal-header">

                                                        <h1
                                                            class="modal-title fs-5"
                                                            id="demoModalDefaultLabel"
                                                        >
                                                            Add Class
                                                        </h1>

                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>

                                                    </div>


                                                    <!-- FORM -->

                                                    <form
                                                        action="models/manage_class.php"
                                                        method="POST"
                                                    >

                                                        <div class="modal-body">


                                                            <!-- PROGRAM -->

                                                            <div class="form-group">

                                                                <label for="program">
                                                                    Program
                                                                </label>

                                                                <select
                                                                    class="form-control"
                                                                    name="program"
                                                                    id="program"
                                                                    required
                                                                >

                                                                    <option
                                                                        value=""
                                                                        selected
                                                                        disabled
                                                                    >
                                                                        Select program
                                                                    </option>


                                                                    <?php foreach ($Program as $row) { ?>

                                                                        <option
                                                                            value="<?= htmlspecialchars($row['program_id']); ?>"
                                                                        >

                                                                            <?= htmlspecialchars($row['title']); ?>

                                                                        </option>

                                                                    <?php } ?>

                                                                </select>

                                                            </div>


                                                            <br>


                                                            <!-- START TIME -->

                                                            <div class="form-group">

                                                                <label for="start_time">
                                                                    Start Time
                                                                </label>

                                                                <input
                                                                    type="time"
                                                                    name="start_time"
                                                                    id="start_time"
                                                                    class="form-control"
                                                                    required
                                                                >

                                                            </div>

                                                        </div>


                                                        <!-- MODAL FOOTER -->

                                                        <div class="modal-footer">

                                                            <button
                                                                type="button"
                                                                class="btn btn-secondary"
                                                                data-bs-dismiss="modal"
                                                            >
                                                                Close
                                                            </button>


                                                            <input
                                                                type="submit"
                                                                class="btn btn-primary"
                                                                value="ADD Class"
                                                                name="add_class"
                                                            >

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <!-- =================================================
                                     CARD BODY
                                     ================================================= -->

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
                                                        Class Time
                                                    </th>

                                                    <th>
                                                        Teacher Name
                                                    </th>

                                                    <th>
                                                        Strength
                                                    </th>

                                                    <th>
                                                        Action
                                                    </th>

                                                </tr>

                                            </thead>


                                            <tbody>

                                                <?php

                                                $i = 1;

                                                $selClass = $pdo->query("
                                                    SELECT
                                                        c.class_id,
                                                        c.start_time,
                                                        p.title,
                                                        t.full_name AS teacher_name,
                                                        COUNT(sc.student_id) AS totalStrent

                                                    FROM classes c

                                                    LEFT JOIN program p
                                                        ON p.program_id = c.program_id

                                                    LEFT JOIN teachers t
                                                        ON t.teacher_id = c.teacher_id

                                                    LEFT JOIN student_class sc
                                                        ON sc.class_id = c.class_id

                                                    GROUP BY
                                                        c.class_id,
                                                        c.start_time,
                                                        p.title,
                                                        t.full_name

                                                    ORDER BY
                                                        c.class_id DESC
                                                ");

                                                $classes = $selClass->fetchAll(PDO::FETCH_ASSOC);


                                                foreach ($classes as $rowClasses) {

                                                    $classId = $rowClasses['class_id'];

                                                    $startTime = $rowClasses['start_time'];

                                                    /*
                                                     * TIME FIX
                                                     *
                                                     * Database time should normally be:
                                                     * 08:30:00
                                                     *
                                                     * We display:
                                                     * 08:30 AM
                                                     */

                                                    if (
                                                        !empty($startTime) &&
                                                        $startTime !== '00:00:00'
                                                    ) {

                                                        $formattedTime = date(
                                                            "h:i A",
                                                            strtotime($startTime)
                                                        );

                                                    } else {

                                                        $formattedTime = "Not Set";

                                                    }


                                                    $programTitle =
                                                        !empty($rowClasses['title'])
                                                        ? $rowClasses['title']
                                                        : "No Program";


                                                    $teacherName =
                                                        !empty($rowClasses['teacher_name'])
                                                        ? $rowClasses['teacher_name']
                                                        : "Not Assigned";


                                                    $strength =
                                                        !empty($rowClasses['totalStrent'])
                                                        ? $rowClasses['totalStrent']
                                                        : 0;

                                                ?>

                                                    <!-- =================================================
                                                         TABLE ROW
                                                         ================================================= -->

                                                    <tr>


                                                        <!-- SR -->

                                                        <td>
                                                            <?= $i++; ?>
                                                        </td>


                                                        <!-- PROGRAM -->

                                                        <td>

                                                            <strong>
                                                                <?= htmlspecialchars($programTitle); ?>
                                                            </strong>

                                                        </td>


                                                        <!-- TIME -->

                                                        <td>

                                                            <?= htmlspecialchars($formattedTime); ?>

                                                        </td>


                                                        <!-- TEACHER -->

                                                        <td>

                                                            <?= htmlspecialchars($teacherName); ?>

                                                        </td>


                                                        <!-- STRENGTH -->

                                                        <td>

                                                            <span>
                                                                <?= htmlspecialchars($strength); ?>
                                                            </span>

                                                        </td>


                                                        <!-- ACTION -->

                                                        <td>

                                                            <button
                                                                type="button"
                                                                class="btn btn-sm btn-info"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#AssignTeacher<?= $classId; ?>"
                                                            >

                                                                <i class="bi bi-person-plus-fill me-1"></i>

                                                                Assign Teacher

                                                            </button>

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

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>


    <!-- =====================================================
         ASSIGN TEACHER MODALS

         IMPORTANT:
         These modals are OUTSIDE the table.
         This fixes the Bootstrap modal problem.
         ===================================================== -->


    <?php foreach ($classes as $rowClasses) {

        $classId = $rowClasses['class_id'];

        $startTime = $rowClasses['start_time'];

        if (
            !empty($startTime) &&
            $startTime !== '00:00:00'
        ) {

            $formattedTime = date(
                "h:i A",
                strtotime($startTime)
            );

        } else {

            $formattedTime = "Not Set";

        }


        $programTitle =
            !empty($rowClasses['title'])
            ? $rowClasses['title']
            : "No Program";

    ?>

        <!-- =================================================
             ASSIGN TEACHER MODAL
             ================================================= -->

        <div
            class="modal fade"
            id="AssignTeacher<?= $classId; ?>"
            tabindex="-1"
            aria-labelledby="AssignTeacherLabel<?= $classId; ?>"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">


                    <!-- MODAL HEADER -->

                    <div class="modal-header">

                        <h1
                            class="modal-title fs-5"
                            id="AssignTeacherLabel<?= $classId; ?>"
                        >

                            <i class="bi bi-person-check-fill me-2"></i>

                            Assign Teacher

                        </h1>


                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>


                    <!-- FORM -->

                    <form
                        action="models/manage_class.php"
                        method="POST"
                    >

                        <div class="modal-body">


                            <!-- PROGRAM -->

                            <div class="form-group">

                                <label for="program<?= $classId; ?>">
                                    Program
                                </label>

                                <input
                                    type="text"
                                    readonly
                                    id="program<?= $classId; ?>"
                                    class="form-control"
                                    value="<?= htmlspecialchars($programTitle); ?>"
                                >

                            </div>


                            <br>


                            <!-- CLASS TIME -->

                            <div class="form-group">

                                <label for="time<?= $classId; ?>">
                                    Class Time
                                </label>

                                <input
                                    type="text"
                                    readonly
                                    id="time<?= $classId; ?>"
                                    class="form-control"
                                    value="<?= htmlspecialchars($formattedTime); ?>"
                                >

                            </div>


                            <br>


                            <!-- TEACHER -->

                            <div class="form-group">

                                <label for="teacher<?= $classId; ?>">
                                    Select Teacher
                                </label>

                                <select
                                    class="form-control"
                                    name="teacher_id"
                                    id="teacher<?= $classId; ?>"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        selected
                                    >
                                        Select teacher
                                    </option>


                                    <?php

                                    $selTeacher = $pdo->query("
                                        SELECT
                                            full_name,
                                            teacher_id
                                        FROM teachers
                                        ORDER BY full_name ASC
                                    ");

                                    while ($rowteach = $selTeacher->fetch(PDO::FETCH_ASSOC)) {

                                    ?>

                                        <option
                                            value="<?= htmlspecialchars($rowteach['teacher_id']); ?>"
                                        >

                                            <?= htmlspecialchars($rowteach['full_name']); ?>

                                        </option>

                                    <?php } ?>

                                </select>

                            </div>

                        </div>


                        <!-- MODAL FOOTER -->

                        <div class="modal-footer">

                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>


                            <!-- CLASS ID -->

                            <input
                                type="hidden"
                                name="class_id"
                                value="<?= htmlspecialchars($classId); ?>"
                            >


                            <!-- SUBMIT -->

                            <input
                                type="submit"
                                class="btn btn-primary"
                                value="Assign Teacher"
                                name="assign_teacher"
                            >

                        </div>

                    </form>

                </div>

            </div>

        </div>


    <?php } ?>


    <!-- =====================================================
         SCRIPTS
         ===================================================== -->


    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"
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


    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const tableElement = document.querySelector("#myTable");

            if (tableElement) {

                new DataTable("#myTable", {
                    responsive: true,
                    pageLength: 10
                });

            }

        });

    </script>


</body>

</html>
