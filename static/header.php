<!-- feedback -->
<?php
if ($variable == 'feedback') {
    echo '';
} else {
    echo '
<div class="feedback left-tdb0 position-f-tdb bold-tdb5 b-tdb-red8 font-tdb10 c-tdb-gray1" style="opacity:0.8;top:45%;z-index:10000;line-height:15px;border-right:solid green 2px">
    <a href="feedback.php">
        <div style="padding:7px">F<br>E<br>E<br>D<br>B<br>A<br>C<br>K<br></div>
    </a>
</div>';
}
?>
<style>
    #feed:hover {
        animation-name: feed;
        transition: 2sec;
        right: 0 !important
    }
</style>
<!-- Quick Links -->
<div id="feed" class="position-f-tdb bold-tdb6 b-tdb-white c-tdb-red8" style="right:-167px;opacity:0.8;top:42%;z-index:10000;width:200px;line-height:25px;border-left:solid #185aa6 2px;border-radius:1em 0 0 1em">
    <p class="padding-tdb5 margin-tdb0 font-tdb16"><i class="font-tdb20 fa fa-home"></i> <a href="home-collection.php">Home Collection</a></p>
    <p class="padding-tdb5 margin-tdb0 font-tdb16 cursor pop"><i class="font-tdb20 fa fa-phone"></i> Request a Callback</p>
    <p class="padding-tdb5 margin-tdb0 font-tdb16"><i class="font-tdb20 fa fa-file"></i> <a href="prescription.php"> Upload Prescription</a></p>
</div>


<!-- top nav contact/whatsapp -->
<div class="b-tdb-blue1 padding-tdb10 bold-tdb3 c-tdb-gray6 letter-tdb2 font-tdb9">
    <div class="tdb-container">
        <div class="tdb-md-row">
            <div class="tdb-md-12 right">
                <a href="tel:918077401297" class="c-tdb-red8 bold-tdb6 padding-right-tdb10 l-tdb15"><i class="fa fa-phone"></i> Toll-Free No:+91 8077401297</a>
                <a href="https://wa.me/918077401297/?text=" class="c-tdb-red8 bold-tdb6 padding-right-tdb10 l-tdb15"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </div>
</div>

<!--floating button-->
    <div id="chaticon" class="light position-f-tdb padding-tdb5 center w-px-tdb45 h-px-tdb45 b-tdb-red8 s-center-tdb1" style="z-index:100;bottom:20px;left:20px;border-radius:50%;cursor: pointer;">
        <div class="whatsapp b-tdb-gray1 s-center1-tdb1 btn-tdb btn-tdb2 position-a-tdb font-tdb11" style="left:55px;width:205px;top:0;display:none">
            Need Help? <span class="bold-tdb6 c-tdb-red8">Chat with Us!</span>
        </div>
        <i class="fab fa-whatsapp font-tdb36 c-tdb-white"></i>
    </div>


<!--chatbot-->
<div class="chatbot">
    <div class="padding-side-tdb15 b-tdb-red8">
        <i class="fa fa-times position-a-tdb right-tdb10 top-tdb5 c-tdb-white" id="cross" style="cursor:pointer;float:right;padding:5px"></i>
        <div class="c-tdb-white font-tdb22 padding-top-tdb15 bold-tdb2 margin-tdb0">Start a Conversation
            <br />
            <p class="font-tdb12 c-tdb-gray3 margin-tdb0 padding-bottom-tdb10">Hi! Click one of our member below to
                chat on Whatsapp</p>
        </div>
    </div>

    <div class="b-tdb-white" style="background-color: rgba(0, 0, 0, 0.568);border-radius:1em">
        <div id="box">
            <div class="gmail">
                <div class="font-tdb11 c-tdb-gray8 margin-tdb0 b-tdb-gray1 padding-tdb10">The team typically replies in a
                    few minutes.
                </div><br />
                <a href="https://wa.me/918077401297/?text=" target="_blank" rel="noopener">
                    <p class="user1 b-tdb-blue1 bold-tdb4 c-tdb-gray7 font-tdb15"><i class="fab fa-whatsapp font-tdb25 c-tdb-red8"></i> Health Check India</p>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- nav -->
<nav class="nav4 b-tdb-gray1">
    <div class="tdb-container">
        <div class="tdb-md-row center">
            <div class="tdb-md-2 c-tdb-red8 font-tdb21 padding-left-tdb10">
                <a href="index.php" title="home page"><img src="https://www.thedeveloperbrains.com/img/logos/logo.png" alt="e-menu logo" class="h-px-tdb60 padding-tdb5" style="opacity:0.9;margin-top:-10px"></a>
            </div>

            <div class="tdb-md-8 links c-tdb-red8 bold-tdb6 position-r-tdb left" style="padding-bottom: 16px;">

                <!-- admin -->


                <?php if (isset($_SESSION['admin']) && $variable != 'admin') {?>
                    <a href="admin.php" class="link padding-left-tdb20"><span>Admin</span></a><?php } else { if($variable!='index'){?>
                    <a href="index.php" class="link padding-left-tdb20"><span>Home</span></a><?php }} ?>

                <!-- home-collection -->
                <?php if ($variable != 'home_collection') { ?>
                    <a href="home-collection.php" class="link padding-left-tdb20"><span>Home</span></a>
                <?php } ?>

                <?php if ($variable != 'prescription') { ?>
                    <a href="#" class="link padding-left-tdb20"><span>Upload</span></a>
                <?php } ?>



                <!-- About -->
                <?php if ($variable != 'about') { ?>
                    <a href="about-us.php" class="link padding-left-tdb20"><span>About</span></a>
                <?php } ?>

                <!-- Contact-us -->
                <?php if ($variable != 'contact') { ?>
                    <a href="contact-us.php" class="link padding-left-tdb20"><span>Contact</span></a>
                <?php } ?>

               
               

                <!-- a login user -->
                <?php if (isset($_SESSION['login_user']) && $variable == 'admin') { ?>
                    <?php
                    $email = $_SESSION['login_user'];
                    // $con = $_SESSION['con'];
                    ?>

                    <br>
                

                    <!-- logout -->
                    <a href="logout.php" class="link padding-left-tdb20">
                        <span>Log_Out</span>
                    </a>
                <?php } ?>




            </div>

            <!-- desktop qr scanner -->
            <div class="tdb-md-2 center links">
                <a href="#" class="bold-tdb6 padding-right-tdb10 l-tdb10"><i class="c-tdb-red8 fab fa-instagram"></i></a>

                <a href="#" class="bold-tdb6 padding-right-tdb10 l-tdb10"><i class="c-tdb-red8 fab fa-facebook"></i></a>
            </div>




            <!-- mobile menu -->
            <div class="tdb-md-7 sidebar c-tdb-gray8 b-tdb-white bold-tdb6 left">
                <!-- qr-code scanner -->
                <div class="b-tdb-white"><br />
                    <p class="b-tdb-white margin-auto-tdb center">
                        <a href="index.php" class="anchor">
                            <img src="https://www.thedeveloperbrains.com/img/logos/logo.png" class="w-per-tdb80" alt="">
                        </a>
                    </p>
                   
                </div>

                <!-- home -->
                <?php if ($variable != 'index') { ?>
                    <a href="index.php" class="anchor b-tdb-gray2">
                        <p>HOME</p>
                    </a>
                <?php } ?>


                <?php if (isset($_SESSION['admin'])) { ?>
                    <!-- admin -->
                    <a href="admin.php" class="anchor b-tdb-red8" style="color:white">
                        <p>ADMIN PANEL</p>
                    </a>
                <?php } ?>


                <!-- about/help/contact-us/feedback/privacy/report/terms -->
                <?php if ($variable != 'about') { ?>
                    <a href="about-us.php" class="anchor b-tdb-gray1">
                        <p>ABOUT</p>
                    </a>
                <?php } ?>
                <!-- <a href="blog.php" class="anchor b-tdb-gray1">
<p>BLOGS</p></a> -->
                <?php if ($variable != 'contact') { ?>
                    <a href="contact-us.php" class="anchor b-tdb-gray1">
                        <p>CONTACT US</p>
                    </a>
                <?php } ?>
                <a href="mailto:info@healthcheckindia.com" class="anchor b-tdb-gray2">
                    <p>HELP</p>
                </a>

                <?php if (isset($_SESSION['login_user'])) { ?>
                    <a href="logout.php" class="anchor b-tdb-red8" style="color:white">
                        <p>LOG OUT</p>
                    </a>
                <?php
                }
                ?>
                <!-- ads -->
                <div>
                    <img src="img/banner/banner2.jpg" class="w-per-tdb100" alt="emenu ads">
                </div>

            </div>


            <!-- transparent cover -->
            <div class="cover" id="cover1"></div>

            <!-- toggle -->
            <div class="toggle c-tdb-gray6" id="toggle41" style="top:52px">
                <i class="redd fa fa-circle font-tdb8 c-tdb-red8"></i>
                <i class="greenn fa fa-circle font-tdb10 c-tdb-red8"></i>
                <i class="orange6 fa fa-circle font-tdb14 c-tdb-red8"></i>
            </div>
            <!-- toggle -->
            <div class="toggle c-tdb-gray6" id="toggle42" style="top:52px">
                <i class="redd fa fa-circle font-tdb14 c-tdb-red8"></i>
                <i class="greenn fa fa-circle font-tdb10 c-tdb-red8"></i>
                <i class="orange6 fa fa-circle font-tdb8 c-tdb-red8"></i>
            </div>

        </div>
    </div>
</nav>

<?php
if (isset($_SESSION['login_user'])) {
    echo '<div class="emailid b-tdb-red8 padding-tdb10 bold-tdb7 c-tdb-gray1 letter-tdb4 center font-tdb10">
        ID: ' . $_SESSION['login_user'] . '<br>';

    echo '</div>';
} else {if(($variable!='prescription') and ($variable!='home_collection') and ($variable!='contact')){echo '<div class="request b-tdb-red8 cursor padding-tdb10 bold-tdb6 c-tdb-gray1 letter-tdb4 center font-tdb13">
<i class="fa fa-phone"></i> Request a Call</div>'; }
}
?>
<div class="emailid b-tdb-white padding-tdb10 bold-tdb3 c-tdb-red7 letter-tdb4 center font-tdb12">
    <marquee>
        Your Message
    </marquee>
</div>