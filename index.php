<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Kalkulator 1</h2>
        <div class="row justify-content-center">
            <form action="index.php" method="post" class="col-md-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>A:</td>
                            <td>
                                <input type="text" class="form-control" id="a" name="a" required autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td>B:</td>
                            <td>
                                <input type="text" class="form-control" id="b" name="b" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Hasil:</td>
                            <td>
                            <?php
                    // Check if form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve values of A and B from the form
                        $a = $_POST['a'];
                        $b = $_POST['b'];

                        // Display values of A and B
                        echo '<input type="text" class="form-control" id="hasil" name="hasil" readonly value="'.$b.' '.$a.'">';
                    } else {
                        // If the form is not submitted, display an error message
                        echo "-";
                    }
                    ?>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <button type="submit" class="btn btn-primary">Proses</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>