<?php
include('../reusable/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelID = $_POST['modelID'];
    $modelName = $_POST['modelName'];
    $manufacturer = $_POST['manufacturer'];
    $type = $_POST['type'];
    $firstFlight = $_POST['firstFlight'];
    $passengerCapacity = $_POST['passengerCapacity'];
    $range = $_POST['range'];

    $sql = "UPDATE aviation_models SET 
                ModelName='$modelName', 
                Manufacturer='$manufacturer', 
                Type='$type', 
                FirstFlight='$firstFlight', 
                PassengerCapacity=$passengerCapacity, 
                Range_km=$range 
            WHERE ModelID=$modelID";

    if ($conn->query($sql) === TRUE) {
        echo "Model updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
