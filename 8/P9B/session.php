<?php
session_start();
// Check if the 'views' session variable exists
if (!isset($_SESSION['views']))
    $_SESSION['views'] = 1; // Initialize the 'views' session variable to 1 if it doesn't exist
else
    $_SESSION['views']++; // Increment the 'views' session variable if it exists

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Views Counter</title>
</head>

<body>
    <h2>Page Views Counter</h2>
    <p>This page has been viewed
        <?php echo $_SESSION['views']; ?> times.
    </p>
    <p>Refresh the page to see the count increase.</p>
</body>

</html>