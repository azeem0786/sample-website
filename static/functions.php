<?php
include 'dbcon.php';
if (isset($_SESSION['login_user'])) {
    $login_session = $_SESSION['login_user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head typeof="og:website">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#d65c2c">
    <meta name="author" content="TDB Sample Layout">
    <meta name="copyright" content="All rights reserved. Copyright 2020, www.healthcheckindia.com">

    <meta property="og:site_name" content="TDB Sample Layout" />
    <meta property="og:title" content="TDB Sample Layout" />
    <meta property="og:image" content="https://www.thedeveloperbrains.com/img/logos/logo.png" />
    <meta property="og:type" content="TDB Sample Layout" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:url" content="https://www.healthcheckindia.com" />
    <meta property="og:description" content="" />

    <!--twitter-->
    <meta name="twitter:card" content="TDB Sample Layout" />
    <meta name="twitter:site" content="TDB Sample Layout" />
    <meta name="twitter:title" content="TDB Sample Layout" />
    <meta name="twitter:image" content="https://www.thedeveloperbrains.com/img/logos/logo.png" />
    <meta name="twitter:description" content="" />

    <meta name="keywords" content="lab, noida lab, hospital test, covid home collection, home collection, online covid test, covid report online, covid report, check covid report online, lab test, covid test, covid test, covid'19, white fungus, black fungus,healthy india, india covid test, covid online report, covid test online,covid cases, covid news, covid lab india, covid lab gurgaon, covid lab delhi, covid lab noida, covid lab punjab">

    <!--icon-->
    <link rel="shortcut icon" href="https://www.thedeveloperbrains.com/img/logos/logo.png">
    <link rel="apple-touch-icon" href="https://www.thedeveloperbrains.com/img/logos/logo.png">

    <!--links-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="tdb-package/js/jquery.min.js?version=01"></script>
    <script src="tdb-package/js/nav.js?version=01"></script>
    <link rel="stylesheet" href="tdb-package/framework/style.css?version=01" />
    <link rel="stylesheet" href="tdb-package/framework/index.css?version=01" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--Start of Tawk.to Script-->
    <?php
    $chat = '';
    $_SESSION['chat'] = $chat;
    ?>


    <?php
    ############################
    ############################
    #####index.php#####
    #####index.php#####
    function index()
    {
        echo $_SESSION['chat'];
        $variable = 'index';
    ?>
        <title>TDB Sample Layout</title>
        <meta name="description" content="">
        <meta name="robots" content="no-index, no-follow">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="manifest.json">
        <meta name="msapplication-TileColor" content="rgb(148, 38, 38)">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <!-- <meta name="theme-color" content="#ffffff"> -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="rgb(148, 38, 38)">
        <meta name="apple-mobile-web-app-title" content="TDB Sample Layout">

        </script>
</head>

<body id="body" class="b-tdb-gray4 fixed">

<?php include 'header.php';
    }



    #####About.php#####
    #####About.php#####
    function about()
    {
        echo $_SESSION['chat'];
        $variable = 'about';
?>
    <title>TDB Sample Layout About Page</title>
    <meta name="description" content="TDB Sample Layout About Page">
    <meta name="robots" content="index, follow">
    </head>

    <body id="body" class="b-tdb-gray4 fixed">

    <?php include 'header.php';
    }



    #####contact.php#####
    #####contact.php#####
    function contact()
    {
        echo $_SESSION['chat'];
        $variable = 'contact';
    ?>
        <title>TDB Sample Layout Contact</title>
        <meta name="description" content="TDB Sample Layout Contact Us Page">
        <meta name="robots" content="index, follow">
        </head>

        <body id="body" class="b-tdb-gray4 fixed">
        <?php include 'header.php';
    }

    #####contact.php#####
    #####contact.php#####
    function profile()
    {
        echo $_SESSION['chat'];
        $variable = 'profile';
        ?>
            <title>Upload PDF</title>

            <meta name="robots" content="noindex, nofollow">
            </head>

            <body id="body" class="b-tdb-gray4 fixed">
            <?php include 'header.php';
        }


        #####home-collection.php#####
        #####home-collection.php#####
        function home_collection()
        {
            echo $_SESSION['chat'];
            $variable = 'home_collection';
            ?>
                <title>Home Collection | TDB Sample Layout</title>
                <meta name="description" content="Home Collection | TDB Sample Layout">
                <meta name="robots" content="index, follow">
                </head>

                <body id="body" class="b-tdb-gray4 fixed">

                <?php include 'header.php';
            }


            #####home-collection.php#####
            #####home-collection.php#####
            function prescription()
            {
                echo $_SESSION['chat'];
                $variable = 'prescription';
                ?>
                    <title>Upload prescription | TDB Sample Layout</title>
                    <meta name="description" content="Upload prescription | TDB Sample Layout">
                    <meta name="robots" content="index, follow">
                    </head>

                    <body id="body" class="b-tdb-gray4 fixed">

                    <?php include 'header.php';
                }



                #####privacy.php#####
                #####privacy.php#####
                function privacy()
                {

                    $variable = 'privacy';
                    ?>
                        <title>TDB Sample Layout Privacy</title>
                        <meta name="description" content="TDB Sample Layout Privacy Policy">
                        <meta name="robots" content="noindex, nofollow">
                        </head>

                        <body id="body" class="b-tdb-gray4 fixed">

                        <?php include 'header.php';
                    }





                    #####terms.php#####
                    #####terms.php#####
                    function terms()
                    {
                        $variable = 'terms';
                        ?>
                            <title>TDB Sample Layout Terms</title>
                            <meta name="description" content="TDB Sample Layout Terms  & Conditions page">
                            <meta name="robots" content="noindex, nofollow">
                            </head>

                            <body id="body" class="b-tdb-gray4 fixed">

                            <?php include 'header.php';
                        }




                        #####admin.php#####
                        #####admin.php#####
                        function admin()
                        {
                            if (!isset($_SESSION['admin'])) {
                                header("location:logout.php");
                            } else if (!isset($_SESSION['login_user'])) {
                                header("location:index.php");
                            }
                            $variable = 'admin';
                            ?>
                                <title>Admin</title>
                                <meta name="robots" content="noindex, nofollow">
                                </head>

                                <body id="body" class="b-tdb-gray4 fixed">
                                <?php include 'header.php';
                            }



                            #####signup.php#####
                            #####signup.php#####
                            function signup()
                            {
                                echo $_SESSION['chat'];
                                if (isset($_SESSION['login_user'])) {
                                    header("location:index.php");
                                }
                                $variable = 'signup';
                                ?>
                                    <title>E-Menus Sign Up Form</title>
                                    <meta name="description" content="Register on E-Menu platform using email id.">
                                    <meta name="robots" content="index, follow">
                                    </head>

                                    <body id="body" class="b-tdb-gray4 fixed">
                                    <?php include 'header.php';
                                }


                                #####login.php#####
                                #####login.php#####
                                function login()
                                {
                                    echo $_SESSION['chat'];
                                    if (isset($_SESSION['login_user'])) {
                                        header("location:index.php");
                                    }
                                    $variable = 'login';
                                    ?>
                                        <title>Login Page | TDB Sample Layout </title>
                                        <meta name="description" content="Login TDB Sample Layout and Download Your Report.">
                                        <meta name="robots" content="index, follow">
                                        </head>

                                        <body id="body" class="b-tdb-gray4 fixed">

                                        <?php include 'header.php';
                                    }


                                    #####password.php#####
                                    #####password.php#####
                                    function password()
                                    {
                                        echo $_SESSION['chat'];
                                        if (isset($_SESSION['login_user'])) {
                                            header("location:index.php");
                                        }
                                        $variable = 'password';
                                        ?>
                                            <title>TDB Sample Layout Password Reset</title>
                                            <meta name="description" content="TDB Sample Layout Password Reset">
                                            <meta name="robots" content="noindex, nofollow">
                                            </head>

                                            <body id="body" class="b-tdb-gray4 fixed">

                                            <?php include 'header.php';
                                        }
