<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


if(isset($_POST['contactname']) && isset($_POST['email'])){

    $contractmonth = $_POST['contractmonth'];
    $bid = $_POST['bid'];
    $bushels = $_POST['bushels'];
    $deldatestart = $_POST['deldatestart'];
    $deldateend = $_POST['deldateend'];
    $farmname = $_POST['farmname'];
    $contactname = $_POST['contactname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $note = $_POST['note'];
    $contractValue = $_POST['contractValue'];
    $contractType = $_POST['contractType'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();


    //smtp settings
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->Host = "smtp.gmail.com";
    $mail->Port= 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = "handhfarmstest@gmail.com";
    $mail->Password = 'Handhfarmstest123';
    // $mail->Username = "handhfarmhandh@gmail.com";
    // $mail->Password = 'handhfarm1123';
    // $mail->Port = 465;
    // $mail->SMTPSecure = "ssl";

    //email settings
    $mail->setFrom($email, "Handhfarm Website");
    $mail->addAddress("Ryan@HandHFarms.com");  
    $mail->addReplyTo($email, $contactname);
    // $mail->setFrom($email, '$contactname');
    // $mail->addAddress("marc_ordan@yahoo.com");
    // $mail->setFrom($email, "Handhfarm Website");
    // $mail->addAddress("Ryan@HandHFarms.com");


    $mail->isHTML(true);
    $mail->Subject = "Corn Contract Reservation for {$farmname}";
    $mail->Body = "<h1>Corn Contract Details:</h1>" . "<hr>";
    $mail->Body .= "<p><b>Contract Month:</b> {$contractmonth}</p>";
    // $mail->Body .= "<p><b>Bid:</b> {$bid}</p>";
    $mail->Body .= "<p><b>Contract Type:</b> {$contractType}</p>";
    $mail->Body .= "<p><b>Contract Value:</b> {$contractValue}</p>";
    $mail->Body .= "<p><b>Bushels: </b> {$bushels}</p>";
    $mail->Body .= "<p><b>Delivery Time Frame Start: </b>{$deldatestart}</p>";
    $mail->Body .= "<p><b>Delivery Time Frame End: </b>{$deldateend}</p>";
    $mail->Body .= "<p><b>Farm Name: </b>{$farmname}</p>";
    $mail->Body .= "<p><b>Contact Name: </b>{$contactname}</p>";
    $mail->Body .= "<p><b>Phone: </b>{$phone}</p>";
    $mail->Body .= "<p><b>Note: </b>{$note}</p>";

    // $mail->send();


    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>
