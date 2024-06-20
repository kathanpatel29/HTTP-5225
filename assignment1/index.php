<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviation Models</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include('reusable/nav.php');
    include('reusable/conn.php');
    ?>

    <div class="container mt-4">
        <h1 class="mb-4">Aviation Models</h1>
        <?php
        $query = 'SELECT `ModelID`, `ModelName`, `Manufacturer`, `Type`, `FirstFlight`, `PassengerCapacity`, `Range_km` FROM aviation_models';
        $result = mysqli_query($connect, $query);

        if (!$result) {
            echo 'Error Message: ' . mysqli_error($connect);
            exit;
        } else {
            echo '<p>The query found ' . mysqli_num_rows($result) . ' aviation models.</p>';

            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ModelID</th>';
            echo '<th>ModelName</th>';
            echo '<th>Manufacturer</th>';
            echo '<th>Type</th>';
            echo '<th>FirstFlight</th>';
            echo '<th>PassengerCapacity</th>';
            echo '<th>Range (km)</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($result as $model) {
                echo '<tr>';
                echo '<td>' . $model['ModelID'] . '</td>';
                echo '<td>' . $model['ModelName'] . '</td>';
                echo '<td>' . $model['Manufacturer'] . '</td>';
                echo '<td>' . $model['Type'] . '</td>';
                echo '<td>' . $model['FirstFlight'] . '</td>';
                echo '<td>' . $model['PassengerCapacity'] . '</td>';
                echo '<td>' . $model['Range_km'] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
