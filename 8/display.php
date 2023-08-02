<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
</head>

<body>
    <h2>Submitted User Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];

        echo "Name: " . $name . "<br><br>";
        echo "Email: " . $email . "<br><br>";
        echo "Age: " . $age . "<br><br>";
        echo "Gender: " . $gender . "<br><br>";
    }
    ?>
</body>

</html>
