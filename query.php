<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'dbcon.php';
/*booking*/
if (isset($_POST["booking"])) {
    if (!isset($_SESSION['booking'])) {
        $_SESSION['booking'] = 1;
    }
    if (isset($_SESSION['booking'])) {
        if ($_SESSION['booking'] >= 5) {
            echo '<script>swal("Failed", "Please don\'t try any script", "warning");</script>';
        } else {
    date_default_timezone_set('Asia/Kolkata');
    $date1 = date("M, d Y");
    $time1 = date("H:i a");

    $first = filter_input(INPUT_POST, 'first');
    $first = stripcslashes($first);
    $first = mysqli_real_escape_string($con, $first);

    $phone = filter_input(INPUT_POST, 'phone');
    $phone = stripcslashes($phone);
    $phone = mysqli_real_escape_string($con, $phone);

    $email = filter_input(INPUT_POST, 'email');
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($con, $email);
    if ($email == "") {
        $email = 'NA';
    }

    $address = filter_input(INPUT_POST, 'address');
    $address = stripcslashes($address);
    $address = mysqli_real_escape_string($con, $address);
    if ($address == "") {
        $address = 'NA';
    }

    if ($first == "") {
        echo '3';
    } elseif ($phone == "") {
        echo '4';
    } else {


        // $location = filter_input(INPUT_POST, 'location');
        // $location = stripcslashes($location);
        // $location = mysqli_real_escape_string($con, $location);

        $package = filter_input(INPUT_POST, 'package');
        $package = stripcslashes($package);
        $package = mysqli_real_escape_string($con, $package);


        $query = mysqli_query($con, "INSERT INTO patients (first_name,phone,email,address,location,package,image_url,time1,date1,status,report) 
    VALUES('$first','$phone','$email','$address','0','$package','0','$time1','$date1','1','0')");
        if ($query) {
          
                    require 'common/composer/vendor/autoload.php';

                    $mail = new PHPMailer(TRUE);

                    /* SMTP parameters. */
                    try {
                        /*$mail->SMTPDebug = 2;*/
                        $mail->setFrom('******', 'Developer Brains');
                        $mail->addAddress('******', 'Developer Brains');
                        $mail->Subject = 'Developer Brains Call Back Request';
                        $mail->Body = "
Received new call back request. Here is the detail\n\n
" . "Name: $first\n
Email id: $email \n
City: $address \n
Contact Number: $phone \n";


                        /* SMTP parameters. */
                        $mail->isSMTP();
                        $mail->Host = 'smtp.hostinger.in';
                        $mail->SMTPAuth = TRUE;
                        $mail->SMTPSecure = 'tls';
                        $mail->Username = '******';
                        $mail->Password = '*******';
                        $mail->Port = 587;
                        $result = $mail->send();
                        if ($result) {
                            $p = $_SESSION['booking'];
                            $_SESSION['booking'] = $p + 1;
                            echo 1;
                        }
                    } catch (Exception $e) {
                        echo 0; //$e->errorMessage();
                    }
    
            }
        else {
            echo 0;
        }
    }
}
}

}







// prescription uploader
if (isset($_POST["upload"])) {
    if (!isset($_SESSION['attempt'])) {
        $_SESSION['attempt'] = 1;
    }
    if (isset($_SESSION['attempt'])) {
        if ($_SESSION['attempt'] >= 50) {
            echo '<script>swal("Failed", "Please don\'t try any script", "warning");</script>';
        } else {
    date_default_timezone_set('Asia/Kolkata');
    $date1 = date("M, d Y");
    $time1 = date("H:i a");
    $mydate = getdate(date("U"));

    $original = "original/";
    $rand = 'covid' . rand(5255, 100000);

    $first = filter_input(INPUT_POST, 'first');
    $first = stripcslashes($first);
    $first = mysqli_real_escape_string($con, $first);

    $phone = filter_input(INPUT_POST, 'phone');
    $phone = stripcslashes($phone);
    $phone = mysqli_real_escape_string($con, $phone);

    $email = filter_input(INPUT_POST, 'email');
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($con, $email);
    if ($email == "") {
        $email = 'NA';
    }

    $address = filter_input(INPUT_POST, 'address');
    $address = stripcslashes($address);
    $address = mysqli_real_escape_string($con, $address);
    if ($address == "") {
        $address = 'NA';
    }

    // $location = filter_input(INPUT_POST, 'location');
        // $location = stripcslashes($location);
        // $location = mysqli_real_escape_string($con, $location);

        $package = filter_input(INPUT_POST, 'package');
        $package = stripcslashes($package);
        $package = mysqli_real_escape_string($con, $package);
        if ($package == "") {
            $package = 'NA';
        }

        
    if ($first == "") {
        echo 'Please enter your name';
    } elseif ($phone == "") {
        echo 'Please Enter Phone Number';
    }
    elseif ($package == "") {
        echo 'Please Select Package';
    }
    else {

        

        $subfoldername = "original/$mydate[month]-$mydate[mday]-$mydate[year]";
        // making subfolder
        if (!is_dir($subfoldername)) {
            mkdir($subfoldername);
            fopen("original/$mydate[month]-$mydate[mday]-$mydate[year]/index.html", "w");
        }

        //$subfolder address
        $original_file = $subfoldername . "/" . $rand . basename($_FILES["file"]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($original_file, PATHINFO_EXTENSION));

         // Check if image file is a actual image or fake image        
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    }

    // Check if file already exists
    if (file_exists($original_file)) {
        echo '<script>swal("Warning", "already exists or change your file name 😭<br/>", "warning");</script>';

        $uploadOk = 0;
    }


    
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "pdf" && $imageFileType != "jpeg") {
        echo "file not supported 😓";
        echo '<script>swal("Warning", "file not supported 😓", "warning");</script>';
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo '<script>swal("Failed", "Failed to upload image file", "warning");</script>';
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $original_file)) {

    $query = mysqli_query($con, "INSERT INTO patients (first_name,phone,email,address,location,package,image_url,time1,date1,status,report) 
    VALUES('$first','$phone','$email','$address','0','$package','$original_file','$time1','$date1','1','0')");
        if ($query) {
                    require 'common/composer/vendor/autoload.php';

                    $mail = new PHPMailer(TRUE);

                    /* SMTP parameters. */
                    try {
                        /*$mail->SMTPDebug = 2;*/
                        $mail->setFrom('**********', 'Developer Brains');
                        $mail->addAddress('**********', 'Developer Brains');
                        $mail->Subject = 'Developer Brains Call Back Request';
                        $mail->Body = "
Received new prescription. Here is the detail\n\n
" . "Name: $first\n
Email id: $email \n
City: $address \n
Contact Number: $phone \n
Package No: $package \n
Prescription link: https://www.healthcheckindia.com/$original_file";

                        /* SMTP parameters. */
                        $mail->isSMTP();
                        $mail->Host = 'smtp.hostinger.in';
                        $mail->SMTPAuth = TRUE;
                        $mail->SMTPSecure = 'tls';
                        $mail->Username = '**********';
                        $mail->Password = '*******';
                        $mail->Port = 587;
                        $result = $mail->send();
                        if ($result) {
                            $p = $_SESSION['attempt'];
                            $_SESSION['attempt'] = $p + 1;
                            echo '<script>swal("Success", "Prescription Uploaded", "success");</script>';
                        }
                    } catch (Exception $e) {
                        echo '<script>swal("Failed", "Failed to Upload", "Danger")</script>;'; //$e->errorMessage();
                    }
    
            }
        } else {
            echo '<script>swal("Failed", "Something went wrong", "warning");</script>';
        }
    }
}
    }
}
}


// prescription uploader
if (isset($_POST["package_btn"])) {
    $package = filter_input(INPUT_POST, 'package_btn');
    $package = stripcslashes($package);
    $package = mysqli_real_escape_string($con, $package);
        $_SESSION['package'] = $package;
        echo $_SESSION['package'];
    }
