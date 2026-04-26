<?php
include '../config.php';

$status = $_POST['status'];

if ($status == 'ON') {
    $next = date('Y-m-d H:i:s', strtotime('+4 hours'));
} else {
    $next = date('Y-m-d H:i:s', strtotime('+1 hour'));
}

mysqli_query($conn, "INSERT INTO system_status (status, next_time) VALUES ('$status', '$next')");

header("Location: dashboard.php");
exit();
?>
