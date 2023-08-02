<!DOCTYPE html>
<html>

<head>
    <title>User Details Form</title>
</head>

<body>
    <h2>User Details Form</h2>

    <form method="post" action="display.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>
        <br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
