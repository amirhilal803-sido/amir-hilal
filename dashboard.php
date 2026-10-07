<?php
include 'config/connection.php';
include 'files/head.php';
?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    <!-- TOPBAR -->
    <?php include 'files/topbar.php'; ?>

    <!-- SIDEBAR -->
    <?php include 'files/sidebar.php'; ?>


    <!-- MAIN CONTENT -->
    <main class="app-main">

        <!-- PAGE HEADER -->
        <div class="app-content-header">
            <div class="container-fluid">

                <div class="text-center py-3">

                    <h1 class="fw-bold mb-1"
                        style="
                        color:#173b70;
                        letter-spacing:1px;
                        font-family:Georgia,serif;
                        ">

                        THE SKY SCHOOL SYSTEM

                    </h1>

                    <p class="text-secondary mb-0"
                       style="letter-spacing:2px;">

                        KNOWLEDGE • CHARACTER • EXCELLENCE

                    </p>

                </div>

            </div>
        </div>


        <!-- CONTENT -->
        <div class="app-content">
            <div class="container-fluid">


                <!-- =====================================================
                     HERO SECTION
                ====================================================== -->

                <div class="card border-0 shadow-lg overflow-hidden mb-5"
                     style="border-radius:20px;">

                    <div class="row g-0 align-items-center">


                        <!-- SCHOOL IMAGE -->

                        <div class="col-lg-6">

                            <div style="
                                height:430px;
                                position:relative;
                                overflow:hidden;
                            ">

                                <img
                                    src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1200&q=85"
                                    alt="School Building"
                                    style="
                                    width:100%;
                                    height:100%;
                                    object-fit:cover;
                                    "
                                >

                                <!-- IMAGE OVERLAY -->

                                <div style="
                                    position:absolute;
                                    inset:0;
                                    background:linear-gradient(
                                        90deg,
                                        rgba(0,0,0,.15),
                                        rgba(0,0,0,.55)
                                    );
                                "></div>


                                <div style="
                                    position:absolute;
                                    bottom:30px;
                                    left:35px;
                                    color:white;
                                ">

                                    <div class="badge bg-warning text-dark px-3 py-2 mb-2">
                                        ESTABLISHED 2020
                                    </div>

                                    <h2 class="fw-bold mb-0"
                                        style="font-family:Georgia,serif;">

                                        THE SKY SCHOOL

                                    </h2>

                                </div>

                            </div>

                        </div>


                        <!-- WELCOME CONTENT -->

                        <div class="col-lg-6">

                            <div class="p-4 p-lg-5">

                                <span class="text-primary fw-semibold">
                                    WELCOME TO
                                </span>

                                <h2 class="display-6 fw-bold mt-2 mb-4"
                                    style="
                                    color:#173b70;
                                    font-family:Georgia,serif;
                                    ">

                                    The Sky School System

                                </h2>


                                <p class="text-secondary"
                                   style="
                                   line-height:1.9;
                                   font-size:16px;
                                   ">

                                    The Sky School System is committed to
                                    providing a welcoming, disciplined and
                                    inspiring environment where every student
                                    has the opportunity to learn, grow and
                                    achieve their dreams.

                                </p>


                                <p class="text-secondary"
                                   style="
                                   line-height:1.9;
                                   font-size:16px;
                                   ">

                                    Since our establishment in 2020, we have
                                    focused on developing academic excellence,
                                    confidence, creativity, discipline and
                                    strong moral values in our students.

                                </p>


                                <!-- SCHOOL DETAILS -->

                                <div class="row mt-4 g-3">

                                    <div class="col-md-6">

                                        <div class="p-3 rounded-3 bg-light">

                                            <div class="text-primary mb-1">
                                                <i class="bi bi-geo-alt-fill me-2"></i>
                                                Location
                                            </div>

                                            <strong>
                                                Zaryab Colony, Peshawar
                                            </strong>

                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="p-3 rounded-3 bg-light">

                                            <div class="text-primary mb-1">
                                                <i class="bi bi-calendar-event-fill me-2"></i>
                                                Established
                                            </div>

                                            <strong>
                                                2020
                                            </strong>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                     ABOUT SCHOOL
                ====================================================== -->

                <div class="row align-items-center mb-5">


                    <div class="col-lg-6">

                        <div class="pe-lg-4">

                            <span class="text-primary fw-semibold">
                                ABOUT OUR SCHOOL
                            </span>

                            <h2 class="fw-bold mt-2 mb-4"
                                style="
                                font-family:Georgia,serif;
                                color:#173b70;
                                ">

                                A Place Where Students Learn, Grow & Shine

                            </h2>


                            <p class="text-secondary"
                               style="
                               line-height:2;
                               ">

                                At The Sky School System, education is more
                                than simply learning from textbooks. We believe
                                that every child has unique abilities and
                                deserves an environment where those abilities
                                can flourish.

                            </p>


                            <p class="text-secondary"
                               style="
                               line-height:2;
                               ">

                                Our educational approach encourages students
                                to ask questions, think creatively, respect
                                others and develop the confidence needed to
                                face the challenges of tomorrow.

                            </p>


                            <p class="text-secondary"
                               style="
                               line-height:2;
                               ">

                                We work together with students and families
                                to build a strong educational foundation
                                based on knowledge, character and responsibility.

                            </p>

                        </div>

                    </div>


                    <div class="col-lg-6">

                        <img
                            src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=85"
                            alt="Students in classroom"
                            class="img-fluid shadow"
                            style="
                            width:100%;
                            height:360px;
                            object-fit:cover;
                            border-radius:18px;
                            "
                        >

                    </div>

                </div>



                <!-- =====================================================
                     MISSION VISION VALUES
                ====================================================== -->

                <div class="text-center mb-4">

                    <span class="text-primary fw-semibold">
                        OUR FOUNDATION
                    </span>

                    <h2 class="fw-bold mt-2"
                        style="
                        color:#173b70;
                        font-family:Georgia,serif;
                        ">

                        What We Believe In

                    </h2>

                </div>


                <div class="row g-4 mb-5">


                    <!-- MISSION -->

                    <div class="col-lg-4">

                        <div class="card border-0 shadow-sm h-100"
                             style="
                             border-radius:18px;
                             ">

                            <div class="card-body p-4 text-center">

                                <div class="mx-auto mb-3 rounded-circle
                                            bg-primary-subtle
                                            text-primary
                                            d-flex align-items-center
                                            justify-content-center"
                                     style="
                                     width:70px;
                                     height:70px;
                                     ">

                                    <i class="bi bi-bullseye fs-2"></i>

                                </div>

                                <h4 class="fw-bold"
                                    style="font-family:Georgia,serif;">

                                    Our Mission

                                </h4>

                                <p class="text-secondary mt-3"
                                   style="line-height:1.8;">

                                    To provide quality education and create
                                    responsible, confident and knowledgeable
                                    students who can contribute positively
                                    to society.

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- VISION -->

                    <div class="col-lg-4">

                        <div class="card border-0 shadow-sm h-100"
                             style="
                             border-radius:18px;
                             ">

                            <div class="card-body p-4 text-center">

                                <div class="mx-auto mb-3 rounded-circle
                                            bg-warning-subtle
                                            text-warning
                                            d-flex align-items-center
                                            justify-content-center"
                                     style="
                                     width:70px;
                                     height:70px;
                                     ">

                                    <i class="bi bi-eye fs-2"></i>

                                </div>

                                <h4 class="fw-bold"
                                    style="font-family:Georgia,serif;">

                                    Our Vision

                                </h4>

                                <p class="text-secondary mt-3"
                                   style="line-height:1.8;">

                                    To become a center of excellence where
                                    students receive the knowledge, skills
                                    and values necessary to succeed in a
                                    changing world.

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- VALUES -->

                    <div class="col-lg-4">

                        <div class="card border-0 shadow-sm h-100"
                             style="
                             border-radius:18px;
                             ">

                            <div class="card-body p-4 text-center">

                                <div class="mx-auto mb-3 rounded-circle
                                            bg-success-subtle
                                            text-success
                                            d-flex align-items-center
                                            justify-content-center"
                                     style="
                                     width:70px;
                                     height:70px;
                                     ">

                                    <i class="bi bi-heart-fill fs-2"></i>

                                </div>

                                <h4 class="fw-bold"
                                    style="font-family:Georgia,serif;">

                                    Our Values

                                </h4>

                                <p class="text-secondary mt-3"
                                   style="line-height:1.8;">

                                    Respect, discipline, honesty, kindness,
                                    responsibility, creativity and a passion
                                    for lifelong learning.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                     SCHOOL FACILITIES
                ====================================================== -->

                <div class="card border-0 shadow-sm mb-5 overflow-hidden"
                     style="border-radius:20px;">

                    <div class="card-body p-4 p-lg-5">

                        <div class="text-center mb-5">

                            <span class="text-primary fw-semibold">
                                OUR ENVIRONMENT
                            </span>

                            <h2 class="fw-bold mt-2"
                                style="
                                color:#173b70;
                                font-family:Georgia,serif;
                                ">

                                A Complete Learning Environment

                            </h2>

                            <p class="text-secondary">

                                We aim to provide students with an environment
                                where learning is enjoyable and meaningful.

                            </p>

                        </div>


                        <div class="row g-4">


                            <div class="col-md-3">

                                <div class="text-center">

                                    <div class="rounded-circle
                                                bg-primary-subtle
                                                text-primary
                                                mx-auto mb-3
                                                d-flex align-items-center
                                                justify-content-center"
                                         style="
                                         width:65px;
                                         height:65px;
                                         ">

                                        <i class="bi bi-book fs-3"></i>

                                    </div>

                                    <h5 class="fw-bold">
                                        Library
                                    </h5>

                                    <p class="small text-secondary">
                                        A learning space that encourages
                                        reading and discovery.
                                    </p>

                                </div>

                            </div>


                            <div class="col-md-3">

                                <div class="text-center">

                                    <div class="rounded-circle
                                                bg-success-subtle
                                                text-success
                                                mx-auto mb-3
                                                d-flex align-items-center
                                                justify-content-center"
                                         style="
                                         width:65px;
                                         height:65px;
                                         ">

                                        <i class="bi bi-pc-display fs-3"></i>

                                    </div>

                                    <h5 class="fw-bold">
                                        Computer Lab
                                    </h5>

                                    <p class="small text-secondary">
                                        Helping students develop modern
                                        digital skills.
                                    </p>

                                </div>

                            </div>


                            <div class="col-md-3">

                                <div class="text-center">

                                    <div class="rounded-circle
                                                bg-warning-subtle
                                                text-warning
                                                mx-auto mb-3
                                                d-flex align-items-center
                                                justify-content-center"
                                         style="
                                         width:65px;
                                         height:65px;
                                         ">

                                        <i class="bi bi-flask fs-3"></i>

                                    </div>

                                    <h5 class="fw-bold">
                                        Science
                                    </h5>

                                    <p class="small text-secondary">
                                        Encouraging curiosity through
                                        practical learning.
                                    </p>

                                </div>

                            </div>


                            <div class="col-md-3">

                                <div class="text-center">

                                    <div class="rounded-circle
                                                bg-danger-subtle
                                                text-danger
                                                mx-auto mb-3
                                                d-flex align-items-center
                                                justify-content-center"
                                         style="
                                         width:65px;
                                         height:65px;
                                         ">

                                        <i class="bi bi-trophy fs-3"></i>

                                    </div>

                                    <h5 class="fw-bold">
                                        Activities
                                    </h5>

                                    <p class="small text-secondary">
                                        Building confidence through sports
                                        and creative activities.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =====================================================
                     PHOTO GALLERY
                ====================================================== -->

                <div class="text-center mb-4">

                    <span class="text-primary fw-semibold">
                        SCHOOL LIFE
                    </span>

                    <h2 class="fw-bold mt-2"
                        style="
                        color:#173b70;
                        font-family:Georgia,serif;
                        ">

                        Moments at The Sky School

                    </h2>

                </div>


                <div class="row g-3 mb-5">


                    <div class="col-lg-6">

                        <img
                            src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1200&q=85"
                            class="img-fluid shadow-sm"
                            alt="School campus"
                            style="
                            width:100%;
                            height:300px;
                            object-fit:cover;
                            border-radius:16px;
                            "
                        >

                    </div>


                    <div class="col-lg-3 col-md-6">

                        <img
                            src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=85"
                            class="img-fluid shadow-sm"
                            alt="Students"
                            style="
                            width:100%;
                            height:300px;
                            object-fit:cover;
                            border-radius:16px;
                            "
                        >

                    </div>


                    <div class="col-lg-3 col-md-6">

                        <img
                            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=85"
                            class="img-fluid shadow-sm"
                            alt="Classroom"
                            style="
                            width:100%;
                            height:300px;
                            object-fit:cover;
                            border-radius:16px;
                            "
                        >

                    </div>

                </div>



                <!-- =====================================================
                     SCHOOL INFORMATION
                ====================================================== -->

                <div class="card border-0 shadow-lg mb-5"
                     style="
                     border-radius:20px;
                     background:linear-gradient(
                         135deg,
                         #173b70,
                         #0d6efd
                     );
                     ">

                    <div class="card-body p-4 p-lg-5 text-white">

                        <div class="row align-items-center">


                            <div class="col-lg-7">

                                <span class="badge bg-white text-primary mb-3 px-3 py-2">

                                    THE SKY SCHOOL SYSTEM

                                </span>

                                <h2 class="fw-bold mb-3"
                                    style="font-family:Georgia,serif;">

                                    Building Bright Futures Since 2020

                                </h2>

                                <p class="opacity-75"
                                   style="
                                   line-height:1.9;
                                   max-width:650px;
                                   ">

                                    Located in Zaryab Colony, Peshawar,
                                    The Sky School System is dedicated to
                                    nurturing young minds through education,
                                    character building and meaningful learning
                                    experiences.

                                </p>

                            </div>


                            <div class="col-lg-5 mt-4 mt-lg-0">

                                <div class="row g-3">


                                    <div class="col-6">

                                        <div class="p-3 rounded-3"
                                             style="
                                             background:rgba(255,255,255,.12);
                                             ">

                                            <i class="bi bi-geo-alt fs-4"></i>

                                            <div class="small opacity-75 mt-2">
                                                Location
                                            </div>

                                            <strong>
                                                Zaryab Colony
                                            </strong>

                                        </div>

                                    </div>


                                    <div class="col-6">

                                        <div class="p-3 rounded-3"
                                             style="
                                             background:rgba(255,255,255,.12);
                                             ">

                                            <i class="bi bi-calendar3 fs-4"></i>

                                            <div class="small opacity-75 mt-2">
                                                Established
                                            </div>

                                            <strong>
                                                2020
                                            </strong>

                                        </div>

                                    </div>


                                    <div class="col-12">

                                        <div class="p-3 rounded-3"
                                             style="
                                             background:rgba(255,255,255,.12);
                                             ">

                                            <i class="bi bi-building fs-4"></i>

                                            <div class="small opacity-75 mt-2">
                                                School
                                            </div>

                                            <strong>
                                                The Sky School System
                                            </strong>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- FOOTER MESSAGE -->

                <div class="text-center py-4">

                    <div class="mb-2">

                        <i class="bi bi-stars text-warning fs-3"></i>

                    </div>

                    <h4 class="fw-bold"
                        style="
                        font-family:Georgia,serif;
                        color:#173b70;
                        ">

                        "Where Every Student Has the Sky to Dream."

                    </h4>

                    <p class="text-secondary mb-0">

                        The Sky School System • Zaryab Colony, Peshawar • Established 2020

                    </p>

                </div>


            </div>
        </div>

    </main>

</div>


<!-- =====================================================
     SCRIPTS
====================================================== -->

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

document.addEventListener('DOMContentLoaded', function () {

    const sidebarWrapper =
        document.querySelector('.sidebar-wrapper');

    const isMobile = window.innerWidth <= 992;

    if (
        sidebarWrapper &&
        typeof OverlayScrollbarsGlobal !== "undefined" &&
        OverlayScrollbarsGlobal.OverlayScrollbars &&
        !isMobile
    ) {

        OverlayScrollbarsGlobal.OverlayScrollbars(
            sidebarWrapper,
            {
                scrollbars: {
                    theme: 'os-theme-light',
                    autoHide: 'leave',
                    clickScroll: true
                }
            }
        );

    }

});

</script>


</body>
</html>
