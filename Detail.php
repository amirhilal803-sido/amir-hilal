<?php
include 'config/connection.php';

/*
|--------------------------------------------------------------------------
| DASHBOARD STATISTICS
|--------------------------------------------------------------------------
*/

$selStud = $pdo->query("SELECT COUNT(student_id) AS Total_student FROM students");
$rowstudent = $selStud->fetch(PDO::FETCH_ASSOC);

$selTeach = $pdo->query("SELECT COUNT(teacher_id) AS Total_teacher FROM teachers");
$rowteacher = $selTeach->fetch(PDO::FETCH_ASSOC);

$selcl = $pdo->query("SELECT COUNT(class_id) AS Total_class FROM classes");
$rowClass = $selcl->fetch(PDO::FETCH_ASSOC);

$totalStudents = (int) ($rowstudent['Total_student'] ?? 0);
$totalTeachers = (int) ($rowteacher['Total_teacher'] ?? 0);
$totalClasses  = (int) ($rowClass['Total_class'] ?? 0);

?>

<?php include 'files/head.php'; ?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    <?php include 'files/topbar.php'; ?>

    <?php include 'files/sidebar.php'; ?>

    <!-- =========================================================
         MAIN CONTENT
    ========================================================== -->

    <main class="app-main">

        <!-- =====================================================
             PREMIUM HEADER
        ====================================================== -->

        <div class="app-content-header premium-header">

            <div class="container-fluid">

                <div class="dashboard-hero">

                    <div class="hero-content">

                        <div class="hero-badge">
                            <i class="bi bi-stars"></i>
                            SCHOOL MANAGEMENT SYSTEM
                        </div>

                        <h1>
                            Welcome to
                            <span>THE SKY SCHOOL SYSTEM</span>
                        </h1>

                        <p>
                            Manage your school, teachers, students and programs
                            from one beautiful dashboard.
                        </p>

                        <div class="hero-date">
                            <i class="bi bi-calendar3"></i>
                            <span id="currentDate"></span>

                            <span class="date-divider">•</span>

                            <i class="bi bi-clock"></i>
                            <span id="currentTime"></span>
                        </div>

                    </div>

                    <div class="hero-icon">

                        <div class="hero-circle circle-one"></div>
                        <div class="hero-circle circle-two"></div>

                        <i class="bi bi-mortarboard-fill"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================================
             DASHBOARD CONTENT
        ====================================================== -->

        <div class="app-content">

            <div class="container-fluid">


                <!-- =================================================
                     SECTION TITLE
                ================================================== -->

                <div class="section-heading">

                    <div>
                        <span class="section-label">
                            DASHBOARD
                        </span>

                        <h2>
                            School Overview
                        </h2>

                        <p>
                            Here is a quick overview of your school system.
                        </p>
                    </div>

                    <div class="online-status">
                        <span class="status-dot"></span>
                        System Online
                    </div>

                </div>


                <!-- =================================================
                     STATISTICS CARDS
                ================================================== -->

                <div class="row g-4">


                    <!-- STUDENTS -->

                    <div class="col-xl-4 col-md-6">

                        <div class="premium-card student-card">

                            <div class="card-glow"></div>

                            <div class="stat-content">

                                <div class="stat-top">

                                    <div class="stat-icon">

                                        <i class="bi bi-people-fill"></i>

                                    </div>

                                    <span class="stat-label">
                                        STUDENTS
                                    </span>

                                </div>

                                <div class="stat-number">
                                    <?= number_format($totalStudents); ?>
                                </div>

                                <div class="stat-title">
                                    Total Students
                                </div>

                                <div class="stat-description">
                                    Students currently registered in the school.
                                </div>

                            </div>

                            <a href="Students.php" class="stat-footer">

                                <span>
                                    View Students
                                </span>

                                <i class="bi bi-arrow-right"></i>

                            </a>

                            <i class="background-icon bi bi-mortarboard-fill"></i>

                        </div>

                    </div>


                    <!-- TEACHERS -->

                    <div class="col-xl-4 col-md-6">

                        <div class="premium-card teacher-card">

                            <div class="card-glow"></div>

                            <div class="stat-content">

                                <div class="stat-top">

                                    <div class="stat-icon">

                                        <i class="bi bi-person-workspace"></i>

                                    </div>

                                    <span class="stat-label">
                                        STAFF
                                    </span>

                                </div>

                                <div class="stat-number">
                                    <?= number_format($totalTeachers); ?>
                                </div>

                                <div class="stat-title">
                                    Total Teachers
                                </div>

                                <div class="stat-description">
                                    Teachers and staff members registered.
                                </div>

                            </div>

                            <a href="teachers.php" class="stat-footer">

                                <span>
                                    View Teachers
                                </span>

                                <i class="bi bi-arrow-right"></i>

                            </a>

                            <i class="background-icon bi bi-person-badge-fill"></i>

                        </div>

                    </div>


                    <!-- CLASSES -->

                    <div class="col-xl-4 col-md-6">

                        <div class="premium-card class-card">

                            <div class="card-glow"></div>

                            <div class="stat-content">

                                <div class="stat-top">

                                    <div class="stat-icon">

                                        <i class="bi bi-grid-1x2-fill"></i>

                                    </div>

                                    <span class="stat-label">
                                        PROGRAMS
                                    </span>

                                </div>

                                <div class="stat-number">
                                    <?= number_format($totalClasses); ?>
                                </div>

                                <div class="stat-title">
                                    Total Programs
                                </div>

                                <div class="stat-description">
                                    Classes and academic programs available.
                                </div>

                            </div>

                            <a href="classes.php" class="stat-footer">

                                <span>
                                    View Programs
                                </span>

                                <i class="bi bi-arrow-right"></i>

                            </a>

                            <i class="background-icon bi bi-book-half"></i>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     QUICK ACTIONS
                ================================================== -->

                <div class="row mt-4">

                    <div class="col-12">

                        <div class="content-panel">

                            <div class="panel-header">

                                <div>

                                    <span class="panel-label">
                                        QUICK ACCESS
                                    </span>

                                    <h3>
                                        Manage Your School
                                    </h3>

                                </div>

                                <div class="panel-header-icon">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                </div>

                            </div>


                            <div class="row g-3 mt-1">


                                <div class="col-xl-3 col-md-6">

                                    <a href="Students.php"
                                       class="quick-action blue">

                                        <div class="quick-icon">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>

                                        <div>
                                            <strong>
                                                Students
                                            </strong>

                                            <small>
                                                Manage student records
                                            </small>
                                        </div>

                                        <i class="bi bi-chevron-right arrow"></i>

                                    </a>

                                </div>


                                <div class="col-xl-3 col-md-6">

                                    <a href="teachers.php"
                                       class="quick-action green">

                                        <div class="quick-icon">
                                            <i class="bi bi-person-video3"></i>
                                        </div>

                                        <div>
                                            <strong>
                                                Teachers
                                            </strong>

                                            <small>
                                                Manage teaching staff
                                            </small>
                                        </div>

                                        <i class="bi bi-chevron-right arrow"></i>

                                    </a>

                                </div>


                                <div class="col-xl-3 col-md-6">

                                    <a href="classes.php"
                                       class="quick-action orange">

                                        <div class="quick-icon">
                                            <i class="bi bi-journals"></i>
                                        </div>

                                        <div>
                                            <strong>
                                                Programs
                                            </strong>

                                            <small>
                                                Manage school programs
                                            </small>
                                        </div>

                                        <i class="bi bi-chevron-right arrow"></i>

                                    </a>

                                </div>


                                <div class="col-xl-3 col-md-6">

                                    <div class="quick-action purple">

                                        <div class="quick-icon">
                                            <i class="bi bi-speedometer2"></i>
                                        </div>

                                        <div>
                                            <strong>
                                                Dashboard
                                            </strong>

                                            <small>
                                                You're here
                                            </small>
                                        </div>

                                        <span class="active-badge">
                                            Active
                                        </span>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     SCHOOL SUMMARY
                ================================================== -->

                <div class="row mt-4">


                    <!-- ABOUT SCHOOL -->

                    <div class="col-lg-8">

                        <div class="content-panel welcome-panel">

                            <div class="welcome-left">

                                <div class="mini-icon">
                                    <i class="bi bi-building-fill"></i>
                                </div>

                                <div>

                                    <span class="panel-label">
                                        SCHOOL MANAGEMENT
                                    </span>

                                    <h3>
                                        Everything in one place
                                    </h3>

                                    <p>
                                        The Sky School System dashboard gives
                                        you a simple and modern way to manage
                                        your school's students, teachers and
                                        academic programs.
                                    </p>

                                </div>

                            </div>


                            <div class="feature-list">

                                <div class="feature-item">

                                    <div class="feature-check">
                                        <i class="bi bi-check-lg"></i>
                                    </div>

                                    <span>
                                        Student Management
                                    </span>

                                </div>


                                <div class="feature-item">

                                    <div class="feature-check">
                                        <i class="bi bi-check-lg"></i>
                                    </div>

                                    <span>
                                        Teacher Management
                                    </span>

                                </div>


                                <div class="feature-item">

                                    <div class="feature-check">
                                        <i class="bi bi-check-lg"></i>
                                    </div>

                                    <span>
                                        Academic Programs
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- SYSTEM STATUS -->

                    <div class="col-lg-4">

                        <div class="content-panel status-panel">

                            <div class="panel-header">

                                <div>

                                    <span class="panel-label">
                                        SYSTEM STATUS
                                    </span>

                                    <h3>
                                        All Systems
                                    </h3>

                                </div>

                                <div class="system-check">
                                    <i class="bi bi-check-lg"></i>
                                </div>

                            </div>


                            <div class="status-row">

                                <span>
                                    <i class="bi bi-database"></i>
                                    Database
                                </span>

                                <strong class="status-good">
                                    Connected
                                </strong>

                            </div>


                            <div class="status-row">

                                <span>
                                    <i class="bi bi-server"></i>
                                    Server
                                </span>

                                <strong class="status-good">
                                    Online
                                </strong>

                            </div>


                            <div class="status-row">

                                <span>
                                    <i class="bi bi-shield-check"></i>
                                    Security
                                </span>

                                <strong class="status-good">
                                    Protected
                                </strong>

                            </div>


                            <div class="status-message">

                                <i class="bi bi-stars"></i>

                                Your school dashboard is ready.

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     FOOTER MESSAGE
                ================================================== -->

                <div class="dashboard-footer">

                    <div class="footer-line"></div>

                    <div class="footer-content">

                        <i class="bi bi-mortarboard-fill"></i>

                        <span>
                            THE SKY SCHOOL SYSTEM
                        </span>

                        <small>
                            Empowering Education • Building Futures
                        </small>

                    </div>

                    <div class="footer-line"></div>

                </div>


            </div>

        </div>

    </main>


</div>


<!-- =============================================================
     PREMIUM DASHBOARD CSS
============================================================== -->

<style>

/* =============================================================
   GLOBAL
============================================================= */

.app-main {

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(59,130,246,.10),
            transparent 35%
        ),
        radial-gradient(
            circle at 90% 20%,
            rgba(168,85,247,.09),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #f5f8ff,
            #eef5ff 45%,
            #f8fbff
        ) !important;

    min-height: 100vh;

}


/* =============================================================
   HERO HEADER
============================================================= */

.premium-header {

    padding: 25px 0 10px !important;

    background: transparent !important;

    border: none !important;

    box-shadow: none !important;

}


.dashboard-hero {

    position: relative;

    min-height: 240px;

    padding: 40px 50px;

    border-radius: 28px;

    overflow: hidden;

    display: flex;

    align-items: center;

    justify-content: space-between;

    color: white;

    background:

        linear-gradient(
            135deg,
            #0f3fae 0%,
            #174ea6 30%,
            #2563eb 65%,
            #06b6d4 100%
        );

    box-shadow:
        0 25px 60px rgba(30,64,175,.25);

}


/* decorative circles */

.dashboard-hero::before {

    content: "";

    position: absolute;

    width: 350px;

    height: 350px;

    border-radius: 50%;

    right: -120px;

    top: -180px;

    background: rgba(255,255,255,.09);

}


.dashboard-hero::after {

    content: "";

    position: absolute;

    width: 250px;

    height: 250px;

    border-radius: 50%;

    left: 40%;

    bottom: -180px;

    background: rgba(255,255,255,.06);

}


.hero-content {

    position: relative;

    z-index: 3;

    max-width: 750px;

}


.hero-badge {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 7px 14px;

    border-radius: 50px;

    background: rgba(255,255,255,.13);

    border: 1px solid rgba(255,255,255,.20);

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

    margin-bottom: 15px;

    backdrop-filter: blur(10px);

}


.dashboard-hero h1 {

    margin: 0;

    font-size: 38px;

    font-weight: 800;

    letter-spacing: -.8px;

    color: #fff;

}


.dashboard-hero h1 span {

    display: block;

    color: #dff7ff;

}


.dashboard-hero p {

    margin: 12px 0 20px;

    color: rgba(255,255,255,.83);

    font-size: 15px;

    max-width: 650px;

}


.hero-date {

    display: flex;

    align-items: center;

    gap: 9px;

    color: rgba(255,255,255,.90);

    font-size: 13px;

    font-weight: 500;

}


.date-divider {

    opacity: .5;

    margin: 0 4px;

}


/* =============================================================
   HERO ICON
============================================================= */

.hero-icon {

    position: relative;

    width: 170px;

    height: 170px;

    display: flex;

    align-items: center;

    justify-content: center;

    z-index: 2;

}


.hero-icon > i {

    position: relative;

    z-index: 4;

    font-size: 78px;

    color: rgba(255,255,255,.92);

    filter:
        drop-shadow(
            0 10px 20px rgba(0,0,0,.20)
        );

}


.hero-circle {

    position: absolute;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.18);

}


.circle-one {

    width: 160px;

    height: 160px;

    animation: rotateCircle 15s linear infinite;

}


.circle-two {

    width: 110px;

    height: 110px;

    border-style: dashed;

    animation: rotateCircleReverse 10s linear infinite;

}


@keyframes rotateCircle {

    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }

}


@keyframes rotateCircleReverse {

    from {
        transform: rotate(360deg);
    }

    to {
        transform: rotate(0deg);
    }

}


/* =============================================================
   SECTION HEADING
============================================================= */

.section-heading {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    margin:
        30px 0 20px;

}


.section-label,
.panel-label {

    display: block;

    color: #2563eb;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 1.8px;

    margin-bottom: 5px;

}


.section-heading h2 {

    margin: 0;

    color: #102a56;

    font-size: 25px;

    font-weight: 800;

}


.section-heading p {

    margin: 5px 0 0;

    color: #718096;

    font-size: 13px;

}


.online-status {

    display: flex;

    align-items: center;

    gap: 8px;

    padding: 8px 13px;

    border-radius: 50px;

    background: rgba(16,185,129,.09);

    color: #047857;

    font-size: 12px;

    font-weight: 700;

}


.status-dot {

    width: 8px;

    height: 8px;

    background: #10b981;

    border-radius: 50%;

    box-shadow:
        0 0 0 4px rgba(16,185,129,.12);

    animation: pulse 2s infinite;

}


@keyframes pulse {

    0%,100% {
        opacity: 1;
    }

    50% {
        opacity: .45;
    }

}


/* =============================================================
   PREMIUM STAT CARDS
============================================================= */

.premium-card {

    position: relative;

    min-height: 245px;

    overflow: hidden;

    border-radius: 24px;

    color: white;

    box-shadow:
        0 18px 40px rgba(15,45,90,.13);

    transition:
        transform .35s ease,
        box-shadow .35s ease;

}


.premium-card:hover {

    transform:
        translateY(-9px);

    box-shadow:
        0 28px 55px rgba(15,45,90,.22);

}


.student-card {

    background:
        linear-gradient(
            135deg,
            #0f3fae,
            #2563eb,
            #06b6d4
        );

}


.teacher-card {

    background:
        linear-gradient(
            135deg,
            #047857,
            #059669,
            #14b8a6
        );

}


.class-card {

    background:
        linear-gradient(
            135deg,
            #9a3412,
            #d97706,
            #f59e0b
        );

}


.card-glow {

    position: absolute;

    width: 200px;

    height: 200px;

    right: -70px;

    top: -70px;

    border-radius: 50%;

    background:
        rgba(255,255,255,.11);

}


.stat-content {

    position: relative;

    z-index: 3;

    padding: 25px;

}


.stat-top {

    display: flex;

    align-items: center;

    justify-content: space-between;

}


.stat-icon {

    width: 52px;

    height: 52px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    background:
        rgba(255,255,255,.14);

    border:
        1px solid rgba(255,255,255,.17);

    backdrop-filter: blur(10px);

}


.stat-icon i {

    font-size: 24px;

}


.stat-label {

    font-size: 10px;

    letter-spacing: 1.5px;

    font-weight: 800;

    opacity: .75;

}


.stat-number {

    margin-top: 22px;

    font-size: 43px;

    line-height: 1;

    font-weight: 850;

    letter-spacing: -1px;

}


.stat-title {

    margin-top: 8px;

    font-size: 16px;

    font-weight: 700;

}


.stat-description {

    margin-top: 5px;

    color: rgba(255,255,255,.72);

    font-size: 12px;

}


.background-icon {

    position: absolute;

    right: 20px;

    bottom: 38px;

    font-size: 115px;

    opacity: .07;

    transform: rotate(-12deg);

}


/* =============================================================
   STAT FOOTER
============================================================= */

.stat-footer {

    position: absolute;

    bottom: 0;

    left: 0;

    right: 0;

    z-index: 5;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 12px 20px;

    color: white;

    text-decoration: none;

    background:
        rgba(0,0,0,.12);

    font-size: 12px;

    font-weight: 700;

    transition: .25s ease;

}


.stat-footer:hover {

    color: white;

    background:
        rgba(0,0,0,.22);

    padding-left: 25px;

}


.stat-footer i {

    transition: .25s ease;

}


.stat-footer:hover i {

    transform:
        translateX(5px);

}


/* =============================================================
   CONTENT PANEL
============================================================= */

.content-panel {

    background:
        rgba(255,255,255,.90);

    border:
        1px solid rgba(37,99,235,.07);

    border-radius: 22px;

    padding: 25px;

    box-shadow:
        0 12px 35px rgba(15,45,90,.08);

    backdrop-filter: blur(10px);

}


.panel-header {

    display: flex;

    justify-content: space-between;

    align-items: center;

}


.panel-header h3 {

    margin: 0;

    color: #142d52;

    font-size: 20px;

    font-weight: 800;

}


.panel-header-icon {

    width: 43px;

    height: 43px;

    border-radius: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #2563eb;

    background: #eff6ff;

}


.panel-header-icon i {

    font-size: 19px;

}


/* =============================================================
   QUICK ACTIONS
============================================================= */

.quick-action {

    min-height: 75px;

    display: flex;

    align-items: center;

    gap: 13px;

    padding: 13px;

    border-radius: 15px;

    color: #172b4d;

    text-decoration: none;

    background: #f8fafc;

    border: 1px solid #edf2f7;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        background .25s ease;

}


.quick-action:hover {

    color: #172b4d;

    transform:
        translateY(-4px);

    background: white;

    box-shadow:
        0 10px 25px rgba(15,45,90,.10);

}


.quick-icon {

    width: 43px;

    height: 43px;

    flex-shrink: 0;

    border-radius: 12px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 18px;

}


.quick-action.blue .quick-icon {

    color: #2563eb;

    background: #dbeafe;

}


.quick-action.green .quick-icon {

    color: #059669;

    background: #d1fae5;

}


.quick-action.orange .quick-icon {

    color: #d97706;

    background: #fef3c7;

}


.quick-action.purple .quick-icon {

    color: #7c3aed;

    background: #ede9fe;

}


.quick-action strong {

    display: block;

    font-size: 13px;

}


.quick-action small {

    display: block;

    margin-top: 2px;

    color: #718096;

    font-size: 10px;

}


.quick-action .arrow {

    margin-left: auto;

    color: #94a3b8;

}


.active-badge {

    margin-left: auto;

    padding: 4px 8px;

    border-radius: 50px;

    color: #047857;

    background: #d1fae5;

    font-size: 9px;

    font-weight: 800;

}


/* =============================================================
   WELCOME PANEL
============================================================= */

.welcome-panel {

    min-height: 230px;

}


.welcome-left {

    display: flex;

    gap: 17px;

}


.mini-icon {

    width: 50px;

    height: 50px;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 15px;

    color: white;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #06b6d4
        );

    box-shadow:
        0 8px 20px rgba(37,99,235,.22);

}


.mini-icon i {

    font-size: 21px;

}


.welcome-panel h3 {

    margin: 0;

    color: #142d52;

    font-size: 21px;

    font-weight: 800;

}


.welcome-panel p {

    max-width: 700px;

    margin: 8px 0 0;

    color: #718096;

    line-height: 1.7;

    font-size: 13px;

}


.feature-list {

    display: flex;

    flex-wrap: wrap;

    gap: 10px;

    margin-top: 25px;

}


.feature-item {

    display: flex;

    align-items: center;

    gap: 7px;

    padding: 8px 11px;

    border-radius: 9px;

    color: #475569;

    background: #f8fafc;

    font-size: 11px;

    font-weight: 600;

}


.feature-check {

    width: 18px;

    height: 18px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #059669;

    background: #d1fae5;

}


.feature-check i {

    font-size: 10px;

}


/* =============================================================
   SYSTEM STATUS
============================================================= */

.status-panel {

    height: 100%;

}


.system-check {

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: white;

    background: #10b981;

    box-shadow:
        0 0 0 6px rgba(16,185,129,.10);

}


.status-row {

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 13px 0;

    border-bottom:
        1px solid #edf2f7;

    font-size: 12px;

}


.status-row span {

    color: #64748b;

}


.status-row span i {

    width: 20px;

    margin-right: 5px;

    color: #64748b;

}


.status-good {

    color: #059669;

    font-size: 11px;

}


.status-message {

    display: flex;

    align-items: center;

    gap: 8px;

    margin-top: 15px;

    padding: 10px;

    border-radius: 10px;

    color: #2563eb;

    background: #eff6ff;

    font-size: 10px;

    font-weight: 600;

}


/* =============================================================
   DASHBOARD FOOTER
============================================================= */

.dashboard-footer {

    display: flex;

    align-items: center;

    gap: 20px;

    margin: 35px 0 20px;

}


.footer-line {

    height: 1px;

    flex: 1;

    background:
        linear-gradient(
            90deg,
            transparent,
            #dbe5f2,
            transparent
        );

}


.footer-content {

    display: flex;

    align-items: center;

    gap: 8px;

    color: #64748b;

    white-space: nowrap;

}


.footer-content i {

    color: #2563eb;

}


.footer-content span {

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1px;

}


.footer-content small {

    color: #94a3b8;

    font-size: 9px;

}


/* =============================================================
   DARK MODE
============================================================= */

[data-bs-theme="dark"] .app-main {

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(37,99,235,.13),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #071426,
            #0a1d36,
            #07182d
        ) !important;

}


[data-bs-theme="dark"] .section-heading h2 {

    color: #e2e8f0;

}


[data-bs-theme="dark"] .section-heading p {

    color: #94a3b8;

}


[data-bs-theme="dark"] .content-panel {

    background:
        rgba(15,31,53,.88);

    border-color:
        rgba(148,163,184,.08);

}


[data-bs-theme="dark"] .panel-header h3,
[data-bs-theme="dark"] .welcome-panel h3 {

    color: #e2e8f0;

}


[data-bs-theme="dark"] .quick-action {

    color: #e2e8f0;

    background:
        rgba(255,255,255,.04);

    border-color:
        rgba(255,255,255,.06);

}


[data-bs-theme="dark"] .quick-action:hover {

    color: #fff;

    background:
        rgba(255,255,255,.07);

}


[data-bs-theme="dark"] .quick-action small {

    color: #94a3b8;

}


[data-bs-theme="dark"] .welcome-panel p {

    color: #94a3b8;

}


[data-bs-theme="dark"] .feature-item {

    color: #cbd5e1;

    background:
        rgba(255,255,255,.04);

}


[data-bs-theme="dark"] .status-row {

    border-color:
        rgba(255,255,255,.07);

}


[data-bs-theme="dark"] .status-row span {

    color: #94a3b8;

}


/* =============================================================
   MOBILE
============================================================= */

@media (max-width: 991px) {

    .dashboard-hero {

        padding: 30px;

    }

    .dashboard-hero h1 {

        font-size: 30px;

    }

    .hero-icon {

        width: 130px;
        height: 130px;

    }

    .hero-icon > i {

        font-size: 60px;

    }

    .circle-one {

        width: 125px;
        height: 125px;

    }

    .circle-two {

        width: 85px;
        height: 85px;

    }

}


@media (max-width: 767px) {

    .premium-header {

        padding-top: 15px !important;

    }

    .dashboard-hero {

        min-height: auto;

        padding: 27px 23px;

    }

    .hero-icon {

        display: none;

    }

    .dashboard-hero h1 {

        font-size: 27px;

    }

    .dashboard-hero h1 span {

        margin-top: 3px;

    }

    .dashboard-hero p {

        font-size: 12px;

    }

    .hero-date {

        flex-wrap: wrap;

        font-size: 11px;

    }

    .section-heading {

        align-items: flex-start;

        flex-direction: column;

        gap: 12px;

    }

    .online-status {

        align-self: flex-start;

    }

    .stat-number {

        font-size: 38px;

    }

    .dashboard-footer {

        gap: 10px;

    }

    .footer-content {

        flex-direction: column;

        gap: 3px;

        text-align: center;

    }

    .footer-content small {

        display: none;

    }

}


@media (max-width: 575px) {

    .dashboard-hero {

        border-radius: 20px;

    }

    .dashboard-hero h1 {

        font-size: 23px;

    }

    .dashboard-hero p {

        line-height: 1.6;

    }

    .premium-card {

        min-height: 225px;

        border-radius: 19px;

    }

    .content-panel {

        border-radius: 18px;

        padding: 20px;

    }

    .welcome-left {

        gap: 12px;

    }

    .feature-list {

        flex-direction: column;

        align-items: stretch;

    }

}


/* =============================================================
   SELECTION
============================================================= */

::selection {

    background: #2563eb;

    color: white;

}

</style>


<!-- =============================================================
     JAVASCRIPT
============================================================= -->

<script>

/*
|--------------------------------------------------------------------------
| LIVE DATE AND TIME
|--------------------------------------------------------------------------
*/

function updateDateTime() {

    const now = new Date();

    const dateElement =
        document.getElementById("currentDate");

    const timeElement =
        document.getElementById("currentTime");


    if (dateElement) {

        dateElement.textContent =
            now.toLocaleDateString(
                "en-US",
                {
                    weekday: "long",
                    year: "numeric",
                    month: "long",
                    day: "numeric"
                }
            );

    }


    if (timeElement) {

        timeElement.textContent =
            now.toLocaleTimeString(
                "en-US",
                {
                    hour: "2-digit",
                    minute: "2-digit",
                    second: "2-digit"
                }
            );

    }

}


updateDateTime();

setInterval(
    updateDateTime,
    1000
);

</script>


<!-- =============================================================
     THIRD PARTY SCRIPTS
============================================================= -->

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


<script src="./js/adminlte.js"></script>


<script>

/*
|--------------------------------------------------------------------------
| OVERLAY SCROLLBAR
|--------------------------------------------------------------------------
*/

const SELECTOR_SIDEBAR_WRAPPER =
    '.sidebar-wrapper';

const Default = {

    scrollbarTheme:
        'os-theme-light',

    scrollbarAutoHide:
        'leave',

    scrollbarClickScroll:
        true,

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
                            Default.scrollbarClickScroll,

                    },

                }

            );

        }

    }

);

</script>


<script
    src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
    crossorigin="anonymous">
</script>


<script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    crossorigin="anonymous">
</script>


<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
    crossorigin="anonymous">
</script>


<script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
    crossorigin="anonymous">
</script>


</body>

</html>
