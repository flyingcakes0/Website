<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "annapantula.aarush@outlook.com.au";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
        echo "<script>window.location.href='your_success_page.html';</script>"; // Redirect to a success page
    } else {
        echo "<script>alert('Failed to send your message. Please try again later.');</script>";
        echo "<script>window.location.href='your_failure_page.html';</script>"; // Redirect to a failure page
    }
}
?>
