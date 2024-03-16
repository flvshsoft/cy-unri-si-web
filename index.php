<!DOCTYPE html>
<html>

<head>
    <title>Form A and B</title>
</head>

<body>
    <h2>Enter values for A and B</h2>
    <form action="index.php" method="post">
        <label for="a">A:</label>
        <input type="text" id="a" name="a" required autofocus><br><br>

        <label for="b">B:</label>
        <input type="text" id="b" name="b" required><br><br>
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values of A and B from the form
            $a = $_POST['a'];
            $b = $_POST['b'];

            // Display values of A and B
            echo "<p>A: $a</p>";
            echo "<p>B: $b</p>";
        } else {
            // If the form is not submitted, display an error message
            echo "<p>Error: Form not submitted.</p>";
        }
        ?>
        <input type="submit" value="Submit">
    </form>
</body>

</html>