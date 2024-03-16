<!DOCTYPE html>
<html>
<head>
    <title>Process Form</title>
</head>
<body>
    <h2>Form Submission Result</h2>
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
</body>
</html>
