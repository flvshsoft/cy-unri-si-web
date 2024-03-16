<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator 2</title>
</head>

<body>
    <h2>Kalkulator 2</h2>
    <form action="kalkulator2.php" method="post">
        <table border="1">
            <tr>
                <td>A:</td>
                <td>
                    <input type="text" id="a" name="a" required autofocus>
                </td>
            </tr>
            <tr>
                <td>+ - </td>
                <td>
                    <select name="operator" id="">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>B:</td>
                <td>
                    <input type="text" id="b" name="b" required>
                </td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td style="text-align: center;">
                    <?php
                    // Check if form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve values of A and B from the form
                        $a = $_POST['a'];
                        $operator = $_POST['operator'];
                        $b = $_POST['b'];

                        // Display values of A and B
                        if ($operator == "tambah") {
                            echo $a + $b;
                        } else {
                            echo $a - $b;
                        }
                    } else {
                        // If the form is not submitted, display an error message
                        echo "-";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Proses">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>