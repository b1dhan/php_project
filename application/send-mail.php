<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$host = "localhost";
$username = "root";
$password = "";
$database = "application";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
} else {
    $query = "SELECT * FROM infoo WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    } else {
        $data = mysqli_fetch_assoc($result);
    }
}

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Set mailer to use SMTP
    $mail->isSMTP();

    // Specify main and backup SMTP servers
    $mail->Host = 'smtp.gmail.com';

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // SMTP username and password
    $mail->Username = 'bidhansenoli1234@gmail.com';
    $mail->Password = 'xlemmuajqmvptigb';

    // Enable TLS encryption
    $mail->SMTPSecure = 'tls';

    // TCP port to connect to
    $mail->Port = 587;

    // Set who the message is to be sent from
    $mail->setFrom('bidhansenoli@gmail.com', 'Bidhan Sen Oli');

    // Set who the message is to be sent to
    $mail->addAddress($data['Email'], 'Recipient Name');

    // Set the subject line
    $mail->Subject = 'Teacher Application';

    // Set the email message
    $mail->Body = 'Dear Sir/Madam,

I am writing to inform you that your application for the teaching position at our institution has been reviewed and we are impressed with your qualifications and experience. We would like to invite you for an interview.

We believe that your skills and experience will be a valuable addition to our institution and we are excited to learn more about you. We will be in touch shortly to schedule the interview.

In the meantime, please feel free to reach out to us if you have any questions or concerns regarding the interview process. We look forward to hearing from you soon.

Thank you for your interest in our institution and for taking the time to apply for this position.

Best regards,

Bidhan Sen Oli

EnLighten Institution';

    // Set the email message as HTML
    $mail->isHTML(true);

    // Send the email
    // Send the email
    $mail->send();

// Update the status of the record in the database
    $query = "UPDATE infoo SET Status='Accepted' WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error updating record: " . mysqli_error($conn);
        exit;
    }

    echo 'Message has been sent and record updated';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
header('Location: display_data.php');
?>

