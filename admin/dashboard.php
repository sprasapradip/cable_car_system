<?php
session_start();
include '../config.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$messages = mysqli_query($conn, "SELECT * FROM passenger_messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Admin Dashboard</h1>

<form action="update_status.php" method="POST">
    <label>Select Cable Car Status:</label>
    <br><br>

    <select name="status" required>
        <option value="ON">ON - Running</option>
        <option value="OFF">OFF - Stopped</option>
    </select>

    <br><br>

    <button type="submit">Update Status</button>
</form>

<br><hr><br>

<h2>Passenger Emergency Messages</h2>

<?php
if (mysqli_num_rows($messages) > 0) {
    while ($row = mysqli_fetch_assoc($messages)) {
        echo "<p><strong>Message:</strong> " . htmlspecialchars($row['message']) . "</p>";
        echo "<p><small>" . $row['created_at'] . "</small></p>";
        echo "<hr>";
    }
} else {
    echo "<p>No passenger messages yet.</p>";
}
?>

<br>
<a href="logout.php">Logout</a>

</body>
</html>