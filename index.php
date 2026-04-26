<?php
include 'config.php';

$statusQuery = mysqli_query($conn, "SELECT * FROM system_status ORDER BY id DESC LIMIT 1");
$statusData = mysqli_fetch_assoc($statusQuery);

$status = $statusData['status'];
$nextTime = $statusData['next_time'];
?><!DOCTYPE html><html>
<head>
    <title>Cable Car Live Status</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body><h1>🚡 Cable Car Operation Status</h1><div class="status-box">
    <div class="indicator <?php echo strtolower($status); ?>"></div>
    <h2><?php echo $status == 'ON' ? 'IN OPERATION' : 'NOT OPERATING'; ?></h2>
    <p>
        <?php echo $status == 'ON' ? 'Operating Until:' : 'Ready To Operate At:'; ?>
        <br>
        <?php echo $nextTime; ?>
    </p>
</div><a href="passenger/send_message.php">Send Emergency Message</a> <br><br> <a href="admin/login.php">Admin Login</a>

</body>
</html>
