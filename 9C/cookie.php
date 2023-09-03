<?php
// $_COOKIE['last_visited'] = date("d-m-Y H:i:s");
// Set the cookie with the current date-time
$expiration = time() + (3); // Cookie will expire in 30 days
if (!isset($_COOKIE['last_visited'])) {
    setcookie('last_visited', date('Y-m-d H:i:s'), $expiration);
    // setcookie('last_visited', date('d-m-Y H:i:s'), $expiration);
}

// Get the last visited date-time from the cookie
$lastVisitedDateTime = $_COOKIE['last_visited'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Last Visited Date-Time</title>
</head>

<body>
    <h2>Last Visited Date-Time</h2>
    <p>
        <?php
        if ($lastVisitedDateTime !== 'Unknown') {
            echo 'Last visited on: ' . $lastVisitedDateTime;
        } else {
            echo 'Welcome! This is your first visit.';
        }
        ?>
    </p>
</body>

</html>
