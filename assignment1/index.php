<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviation Models</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background: linear-gradient(to bottom, #87ceeb, #e0f7fa); /* Sky gradient */
            color: #333;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .container {
            max-width: 1200px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            margin-top: 20px;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            margin-bottom: 20px;
            font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;
            text-align: center;
            animation: slideInDown 1s ease-in-out;
        }
        .table-dark {
            background-color: #004d99;
            color: #fff;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f0f8ff;
        }
        .alert {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInDown {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes zoomIn {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .table-hover tbody tr:hover {
            background-color: #e0ffff;
            animation: zoomIn 0.5s ease-in-out;
        }
    </style>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include('reusable/nav.php');
    include('reusable/conn.php');
    ?>

    <div class="container">
        <h1>Aviation Models</h1>
        <?php
        $query = 'SELECT ModelID, ModelName, Manufacturer, Type, FirstFlight, PassengerCapacity, Range_km FROM aviation_models';
        $result = mysqli_query($connect, $query);

        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">Error Message: ' . mysqli_error($connect) . '</div>';
            exit;
        } else {
            echo '<table class="table table-striped table-hover">';
            echo '<thead class="table-dark">';
            echo '<tr>';
            echo '<th>Model ID</th>';
            echo '<th>Model Name</th>';
            echo '<th>Manufacturer</th>';
            echo '<th>Type</th>';
            echo '<th>First Flight</th>';
            echo '<th>Passenger Capacity</th>';
            echo '<th>Range (km)</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($model = mysqli_fetch_assoc($result)) {
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
