<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySQL Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .color-box {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: 10px;
            border: 15px solid;
        }
    </style>
</head>

<body>
    <?php
    $connect = mysqli_connect("localhost", "root", "root", "http5225");

    if (!$connect) {
        echo 'Error code: ' . mysqli_connect_errno();
        exit;
    }

    $query = 'SELECT `Name`, `Hex` FROM colors';
    $result = mysqli_query($connect, $query);
    ?>

    <div class="container mt-4">
        <h1 class="mb-4">Color Names</h1>
        <?php
        if (!$result) {
            echo 'Error Message: ' . mysqli_error($connect);
            exit;
        } else {
            echo '<p>The query found ' . mysqli_num_rows($result) . ' colors.</p>';

            foreach ($result as $color) {
                echo '<p>' . $color['Name'] . '<span class="color-box" style="background-color:' . $color['Hex'] . '; border-color: ' . $color['Hex'] . ';"></span></p>';
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
