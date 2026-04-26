

<?php
include '../config.php';

if (isset($_POST['send'])) {
    $message = $_POST['message'];
    mysqli_query($conn, "INSERT INTO passenger_messages (message) VALUES ('$message')");
    echo "Message Sent Successfully";
}
?>

<form method="POST">
    <h2>Emergency / Run Request</h2>
    <textarea name="message" required></textarea><br><br>
    <button name="send">Send Message</button>
</form>
