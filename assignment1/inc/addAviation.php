<?php
// Check if the form was submitted
if(isset($_POST['addModel'])) {
    // Retrieve form data
    $modelName = $_POST['modelName'];
    $manufacturer = $_POST['manufacturer'];
    $type = $_POST['type'];
    $firstFlight = $_POST['firstFlight'];
    $passengerCapacity = $_POST['passengerCapacity'];
    $range = $_POST['range'];

    // Include database connection
    include('../reusable/conn.php');

    // SQL query to insert data into the database
    $query = "INSERT INTO aviation_models (ModelName, Manufacturer, Type, FirstFlight, PassengerCapacity, Range_km) 
              VALUES (
                '" . mysqli_real_escape_string($connect, $modelName) . "',
                '" . mysqli_real_escape_string($connect, $manufacturer) . "',
                '" . mysqli_real_escape_string($connect, $type) . "',
                '" . mysqli_real_escape_string($connect, $firstFlight) . "',
                '" . mysqli_real_escape_string($connect, $passengerCapacity) . "',
                '" . mysqli_real_escape_string($connect, $range) . "'
              )";

    // Execute query
    $result = mysqli_query($connect, $query);

    // Check if query executed successfully
    if($result) {
        echo "Aviation model added successfully!";
    } else {
        echo "Failed: " . mysqli_error($connect); // Output error message if query fails
    }
} else {
    echo "You should not be here!"; // Display a message if form was not submitted
}
?>
