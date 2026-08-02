<?php
// This is the bouncer. It checks the IP before loading the website.
$allowed_ip = '49.43.220.139'; 
$user_ip = $_SERVER['REMOTE_ADDR'];

// If the visitor's IP does not match your Wi-Fi, stop them here.
if ($user_ip !== $allowed_ip) {
    echo '<div style="text-align: center; margin-top: 50px; font-family: sans-serif;">';
    echo '<h1 style="color: red;">⛔ Access Denied</h1>';
    echo '<p>You must be connected to the office Wi-Fi to view this page.</p>';
    echo '</div>';
    exit(); // This stops the rest of the page from loading
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page</title>
    <style>
        body { font-family: sans-serif; background: #f0fdf4; text-align: center; padding-top: 50px; }
        .box { background: white; padding: 30px; border: 2px solid #22c55e; border-radius: 10px; display: inline-block; }
    </style>
</head>
<body>
    <div class="box">
        <h1 style="color: #166534;">✅ Access Granted!</h1>
        <p>You are connected to the correct Wi-Fi network.</p>
        <p>Your IP: <strong><?php echo $user_ip; ?></strong></p>
    </div>
</body>
</html>
