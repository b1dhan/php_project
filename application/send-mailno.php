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

Thank you for taking the time to apply for the position of a teacher at EnLighten Institution. We appreciate your interest in our institution and the effort you put into your application.

After careful consideration of your qualifications and experience, we regret to inform you that we have decided not to move forward with your application at this time. While your application was impressive, we have selected other candidates whose qualifications more closely match our needs for this position.

Please understand that this decision was not a reflection of your abilities or potential. We received a large number of highly qualified applicants and it was a difficult decision to make.

We encourage you to continue pursuing your career goals and wish you the best in your future endeavors.

Thank you again for your interest in our institution.

Sincerely,
Bidhan Sen Oli
EnLighten Institution';

    // Set the email message as HTML
    $mail->isHTML(true);

    // Send the email
    // Send the email
    $mail->send();

// Update the status of the record in the database
    $query = "UPDATE infoo SET Status='Rejected' WHERE id=" . $_GET['id'];
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

