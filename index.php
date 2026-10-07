<?php
include 'config/connection.php';
?>


<?php

if (isset($_POST['adminLogin'])) {

    $usersname = trim($_POST['usersname']);
    $pass = $_POST['password'];

    $selAdmin = $pdo->prepare("
        SELECT *
        FROM admin
        WHERE usersname = :usersname
        LIMIT 1
    ");

    $selAdmin->execute([
        ':usersname' => $usersname
    ]);

    $AdminData = $selAdmin->fetch(PDO::FETCH_ASSOC);

    if ($AdminData) {

        if (password_verify($pass, $AdminData['password'])) {

            $_SESSION['studentmangment']['admin_id'] =
                $AdminData['admin_id'];

            $_SESSION['studentmangment']['fullname'] =
                $AdminData['full_name'];

            $_SESSION['studentmangment']['usersname'] =
                $AdminData['usersname'];

            header("Location: Dashboard.php?success=welcome");
            exit;

        } else {

            header("Location: index.php?error=wrong_password");
            exit;
        }

    } else {

        header("Location: index.php?error=admin_not_found");
        exit;
    }
}

?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <?php include 'files/title.php'; ?>

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=yes"
    >

    <meta
        name="color-scheme"
        content="light dark"
    >

    <meta
        name="title"
        content="Student Management | Admin Login"
    >

    <meta
        name="author"
        content="Student Management"
    >

    <meta
        name="supported-color-schemes"
        content="light dark"
    >


    <!-- =========================================================
         SWEET ALERT
         ========================================================= -->

    <script
        src="https://cdn.jsdelivr.net/npm/sweetalert2@11"
    ></script>


    <!-- =========================================================
         FONTS
         ========================================================= -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        crossorigin="anonymous"
    >


    <!-- =========================================================
         OVERLAY SCROLLBARS
         ========================================================= -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous"
    >


    <!-- =========================================================
         BOOTSTRAP ICONS
         ========================================================= -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
    >


    <!-- =========================================================
         ADMINLTE
         ========================================================= -->

    <link
        rel="stylesheet"
        href="css/adminlte.css"
    >


    <!-- =========================================================
         LOGIN DESIGN
         ========================================================= -->

    <style>

        /* =====================================================
           SCHOOL COLORS
           ===================================================== */

        :root {

            --school-navy: #10233f;
            --school-blue: #1d4ed8;
            --school-blue-light: #3b82f6;
            --school-sky: #60a5fa;

            --school-gold: #d4a84f;
            --school-gold-light: #f1d58a;

            --school-white: #ffffff;

            --school-text: #1e293b;
            --school-muted: #64748b;

            --school-border: #e2e8f0;

            --school-bg: #eef3f9;

        }


        /* =====================================================
           BODY
           ===================================================== */

        body.login-page {

            min-height: 100vh;
            min-height: 100dvh;

            margin: 0;

            padding: 30px 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;

            overflow: hidden;

            font-family:
                "Source Sans 3",
                sans-serif;

            background:

                linear-gradient(
                    135deg,
                    #0b1b32 0%,
                    #102d50 45%,
                    #173b65 100%
                );

        }


        /* =====================================================
           DECORATIVE BACKGROUND
           ===================================================== */

        body.login-page::before {

            content: "";

            position: fixed;

            width: 500px;

            height: 500px;

            top: -280px;

            left: -220px;

            border-radius: 50%;

            background:

                radial-gradient(
                    circle,
                    rgba(96,165,250,0.25),
                    rgba(96,165,250,0.04) 55%,
                    transparent 72%
                );

            pointer-events: none;

        }


        body.login-page::after {

            content: "";

            position: fixed;

            width: 600px;

            height: 600px;

            right: -350px;

            bottom: -380px;

            border-radius: 50%;

            background:

                radial-gradient(
                    circle,
                    rgba(212,168,79,0.17),
                    rgba(212,168,79,0.03) 55%,
                    transparent 72%
                );

            pointer-events: none;

        }


        /* =====================================================
           BACKGROUND PATTERN
           ===================================================== */

        body.login-page {

            background-image:

                linear-gradient(
                    135deg,
                    rgba(255,255,255,0.025) 25%,
                    transparent 25%
                ),

                linear-gradient(
                    225deg,
                    rgba(255,255,255,0.025) 25%,
                    transparent 25%
                ),

                linear-gradient(
                    45deg,
                    rgba(255,255,255,0.015) 25%,
                    transparent 25%
                ),

                linear-gradient(
                    315deg,
                    rgba(255,255,255,0.015) 25%,
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #0b1b32 0%,
                    #102d50 45%,
                    #173b65 100%
                );

            background-size:
                80px 80px,
                80px 80px,
                80px 80px,
                80px 80px,
                auto;

        }


        /* =====================================================
           LOGIN BOX
           ===================================================== */

        .login-box {

            width: 100%;

            max-width: 440px;

            position: relative;

            z-index: 5;

            margin: 0 auto;

            animation:
                schoolEntrance
                0.7s
                ease-out;

        }


        /* =====================================================
           LOGO
           ===================================================== */

        .login-logo {

            text-align: center;

            margin:
                0 0 25px;

        }


        .login-logo a {

            color:
                #ffffff;

            text-decoration:
                none;

            font-size:
                31px;

            font-weight:
                300;

            letter-spacing:
                -0.5px;

            text-shadow:
                0 4px 18px rgba(0,0,0,0.25);

        }


        .login-logo a b {

            font-weight:
                800;

            color:
                var(--school-gold-light);

        }


        /* =====================================================
           GOLD LINE
           ===================================================== */

        .login-logo::after {

            content:
                "";

            display:
                block;

            width:
                65px;

            height:
                3px;

            margin:
                11px auto 0;

            border-radius:
                10px;

            background:

                linear-gradient(
                    90deg,
                    transparent,
                    var(--school-gold),
                    var(--school-gold-light),
                    var(--school-gold),
                    transparent
                );

        }


        /* =====================================================
           CARD
           ===================================================== */

        .login-box .card {

            position:
                relative;

            border:
                none;

            border-radius:
                18px;

            overflow:
                hidden;

            background:
                rgba(255,255,255,0.98);

            box-shadow:

                0 30px 70px
                rgba(0,0,0,0.32),

                0 10px 25px
                rgba(0,0,0,0.12);

            transition:
                transform 0.3s ease,
                box-shadow 0.3s ease;

        }


        /* =====================================================
           CARD HOVER
           ===================================================== */

        .login-box .card:hover {

            transform:
                translateY(-4px);

            box-shadow:

                0 40px 85px
                rgba(0,0,0,0.38),

                0 15px 35px
                rgba(0,0,0,0.14);

        }


        /* =====================================================
           CARD TOP STRIPE
           ===================================================== */

        .login-box .card::before {

            content:
                "";

            display:
                block;

            height:
                5px;

            background:

                linear-gradient(
                    90deg,
                    var(--school-navy),
                    var(--school-blue),
                    var(--school-blue-light),
                    var(--school-gold)
                );

        }


        /* =====================================================
           CARD BODY
           ===================================================== */

        .login-card-body {

            padding:
                38px 38px 35px
                !important;

            background:
                #ffffff !important;

        }


        /* =====================================================
           LOGIN MESSAGE
           ===================================================== */

        .login-box-msg {

            color:
                var(--school-navy)
                !important;

            font-size:
                19px;

            font-weight:
                600;

            margin-bottom:
                28px !important;

            text-align:
                center;

            letter-spacing:
                0.1px;

        }


        .login-box-msg::after {

            content:
                "";

            display:
                block;

            width:
                35px;

            height:
                2px;

            margin:
                9px auto 0;

            border-radius:
                10px;

            background:
                var(--school-gold);

        }


        /* =====================================================
           INPUT GROUP
           ===================================================== */

        .login-box .input-group {

            margin-bottom:
                18px !important;

        }


        /* =====================================================
           INPUT
           ===================================================== */

        .login-box .form-control {

            height:
                55px;

            border:
                1px solid
                var(--school-border);

            border-right:
                none;

            background:
                #f8fafc !important;

            color:
                var(--school-text)
                !important;

            border-radius:
                11px 0 0 11px;

            font-size:
                15px;

            padding:
                0 16px;

            box-shadow:
                none !important;

            transition:
                all 0.25s ease;

        }


        /* =====================================================
           PLACEHOLDER
           ===================================================== */

        .login-box .form-control::placeholder {

            color:
                #94a3b8;

        }


        /* =====================================================
           INPUT HOVER
           ===================================================== */

        .login-box .form-control:hover {

            background:
                #f1f5f9 !important;

            border-color:
                #cbd5e1;

        }


        /* =====================================================
           INPUT FOCUS
           ===================================================== */

        .login-box .form-control:focus {

            background:
                #ffffff !important;

            border-color:
                var(--school-blue-light);

            box-shadow:

                0 0 0 3px
                rgba(59,130,246,0.10)
                !important;

        }


        /* =====================================================
           INPUT ICON
           ===================================================== */

        .login-box .input-group-text {

            width:
                55px;

            height:
                55px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border:
                1px solid
                var(--school-border);

            border-left:
                none;

            background:
                #f8fafc !important;

            color:
                var(--school-blue)
                !important;

            border-radius:
                0 11px 11px 0;

            font-size:
                18px;

            transition:
                all 0.25s ease;

        }


        /* =====================================================
           ICON FOCUS
           ===================================================== */

        .login-box
        .input-group:focus-within
        .input-group-text {

            color:
                var(--school-gold)
                !important;

            background:
                #ffffff !important;

            border-color:
                var(--school-blue-light);

        }


        /* =====================================================
           SIGN IN BUTTON
           ===================================================== */

        .login-box .btn-primary {

            width:
                100%;

            height:
                55px;

            border:
                none;

            border-radius:
                11px;

            background:

                linear-gradient(
                    135deg,
                    #1749a5 0%,
                    #1d4ed8 55%,
                    #2563eb 100%
                )
                !important;

            color:
                #ffffff;

            font-size:
                16px;

            font-weight:
                700;

            letter-spacing:
                0.4px;

            box-shadow:

                0 8px 20px
                rgba(29,78,216,0.25);

            transition:
                all 0.25s ease;

        }


        /* =====================================================
           BUTTON HOVER
           ===================================================== */

        .login-box .btn-primary:hover {

            transform:
                translateY(-2px);

            background:

                linear-gradient(
                    135deg,
                    #1d4ed8 0%,
                    #2563eb 55%,
                    #3b82f6 100%
                )
                !important;

            box-shadow:

                0 12px 27px
                rgba(29,78,216,0.34);

        }


        /* =====================================================
           BUTTON ACTIVE
           ===================================================== */

        .login-box .btn-primary:active {

            transform:
                translateY(0);

            box-shadow:
                0 5px 12px
                rgba(29,78,216,0.20);

        }


        /* =====================================================
           BUTTON ROW
           ===================================================== */

        .login-box .row {

            margin-top:
                10px;

        }


        .login-box .row .col-4 {

            width:
                100%;

        }


        .login-box .row .col-8 {

            display:
                none;

        }


        /* =====================================================
           ACCESSIBILITY
           ===================================================== */

        .login-box input:focus-visible,
        .login-box button:focus-visible {

            outline:
                2px solid
                var(--school-blue-light);

            outline-offset:
                3px;

        }


        /* =====================================================
           SWEET ALERT
           ===================================================== */

        .swal2-popup {

            border-radius:
                15px !important;

            box-shadow:

                0 20px 60px
                rgba(0,0,0,0.25)
                !important;

        }


        .swal2-title {

            color:
                var(--school-navy)
                !important;

        }


        /* =====================================================
           ANIMATION
           ===================================================== */

        @keyframes schoolEntrance {

            from {

                opacity:
                    0;

                transform:
                    translateY(25px)
                    scale(0.98);

            }

            to {

                opacity:
                    1;

                transform:
                    translateY(0)
                    scale(1);

            }

        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 576px) {

            body.login-page {

                padding:
                    20px 14px;

                align-items:
                    center;

                justify-content:
                    center;

            }


            .login-box {

                max-width:
                    100%;

                margin:
                    0 auto;

            }


            .login-logo {

                margin-bottom:
                    20px;

            }


            .login-logo a {

                font-size:
                    27px;

            }


            .login-card-body {

                padding:
                    30px 22px 25px
                    !important;

            }


            .login-box .card {

                border-radius:
                    16px;

            }


            .login-box-msg {

                font-size:
                    17px;

            }

        }


        /* =====================================================
           SMALL HEIGHT DEVICES
           KEEP LOGIN CENTERED
           ===================================================== */

        @media (max-height: 650px) {

            body.login-page {

                align-items:
                    center;

                justify-content:
                    center;

                padding:
                    20px 15px;

                overflow-y:
                    auto;

            }


            .login-box {

                margin:
                    auto;

            }

        }


        /* =====================================================
           REDUCED MOTION
           ===================================================== */

        @media (prefers-reduced-motion: reduce) {

            .login-box,
            .login-box .card,
            .login-box .btn-primary {

                animation:
                    none !important;

                transition:
                    none !important;

            }

        }

    </style>

</head>


<body class="login-page">


<?php

/* =========================================================
   SUCCESS SWEET ALERT
   ========================================================= */

if (isset($_GET['success'])) {

?>

    <script>

        Swal.fire({

            position: "top-end",

            icon: "success",

            title: "Welcome!",

            text: "Login successful",

            showConfirmButton: false,

            timer: 1500,

            timerProgressBar: true

        });

    </script>

<?php

}


/* =========================================================
   ERROR SWEET ALERT
   ========================================================= */

elseif (isset($_GET['error'])) {

    $error = $_GET['error'];

?>

    <script>

        <?php if ($error == "wrong_password") { ?>

            Swal.fire({

                position: "top-end",

                icon: "error",

                title: "Wrong Password",

                text: "The password you entered is incorrect.",

                showConfirmButton: false,

                timer: 2000,

                timerProgressBar: true

            });

        <?php } elseif ($error == "admin_not_found") { ?>

            Swal.fire({

                position: "top-end",

                icon: "error",

                title: "Admin Not Found",

                text: "The username you entered does not exist.",

                showConfirmButton: false,

                timer: 2000,

                timerProgressBar: true

            });

        <?php } else { ?>

            Swal.fire({

                position: "top-end",

                icon: "error",

                title: "Login Failed",

                text: "Please check your username and password.",

                showConfirmButton: false,

                timer: 2000,

                timerProgressBar: true

            });

        <?php } ?>

    </script>

<?php

}

?>


<!-- =========================================================
     LOGIN BOX
     ========================================================= -->

<main class="login-box">


    <!-- =====================================================
         LOGO
         ===================================================== -->

    <h1 class="login-logo">

        <a href="index.php">

            <b>Student</b> Management

        </a>

    </h1>


    <!-- =====================================================
         LOGIN CARD
         ===================================================== -->

    <div class="card">

        <div class="card-body login-card-body">

            <p class="login-box-msg">

                Sign in to start your session

            </p>


            <form
                action=""
                method="post"
            >


                <!-- =========================================
                     USERNAME
                     ========================================= -->

                <label
                    class="visually-hidden"
                    for="loginEmail"
                >

                    Username

                </label>


                <div class="input-group mb-3">

                    <input
                        id="loginEmail"
                        type="text"
                        class="form-control"
                        name="usersname"
                        placeholder="Username"
                        required
                    >


                    <div class="input-group-text">

                        <span
                            class="bi bi-person-fill"
                        ></span>

                    </div>

                </div>


                <!-- =========================================
                     PASSWORD
                     ========================================= -->

                <label
                    class="visually-hidden"
                    for="loginPassword"
                >

                    Password

                </label>


                <div class="input-group mb-3">

                    <input
                        id="loginPassword"
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                        required
                    >


                    <div class="input-group-text">

                        <span
                            class="bi bi-lock-fill"
                        ></span>

                    </div>

                </div>


                <!-- =========================================
                     SIGN IN
                     ========================================= -->

                <div class="row">

                    <div class="col-8">
                    </div>


                    <div class="col-4">

                        <div class="d-grid gap-2">

                            <input
                                type="submit"
                                name="adminLogin"
                                class="btn btn-primary"
                                value="Sign In"
                            >

                        </div>

                    </div>

                </div>


            </form>

        </div>

    </div>

</main>


<!-- =========================================================
     OVERLAY SCROLLBARS
     ========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
></script>


<!-- =========================================================
     POPPER
     ========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"
></script>


<!-- =========================================================
     BOOTSTRAP
     ========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
></script>


<!-- =========================================================
     ADMINLTE
     ========================================================= -->

<script src="../js/adminlte.js"></script>


<!-- =========================================================
     OVERLAY SCROLLBAR
     ========================================================= -->

<script>

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
                                Default.scrollbarClickScroll

                        }

                    }

                );

            }

        }

    );

</script>


<!-- =========================================================
     CHART COLOR MODE
     ========================================================= -->

<script>

    (() => {

        'use strict';


        const mode = () =>

            document.documentElement
                .getAttribute('data-bs-theme') === 'dark'

                ? 'dark'

                : 'light';


        globalThis.Apex ||= {};


        const apex =
            globalThis.Apex;


        apex.theme = {

            mode:
                mode()

        };


        apex.chart = Object.assign(

            apex.chart || {},

            {

                background:
                    'transparent'

            }

        );


        new MutationObserver(() => {

            const next =
                mode();


            apex.theme = {

                mode:
                    next

            };


            const instances =
                apex._chartInstances || [];


            for (
                const { chart }
                of instances
            ) {

                chart.updateOptions(

                    {

                        theme: {

                            mode:
                                next

                        }

                    },

                    false,

                    false

                );

            }

        }).observe(

            document.documentElement,

            {

                attributes:
                    true,

                attributeFilter:
                    ['data-bs-theme']

            }

        );


    })();

</script>


</body>

</html>
