<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Aviation Model</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include('reusable/nav.php'); ?>

    <div class="container mt-4">
        <h1>Update Aviation Model</h1>
        <form action="inc/updateAviation.php" method="POST">
            <div class="mb-3">
                <label for="modelID" class="form-label">Model ID</label>
                <input type="number" class="form-control" id="modelID" name="modelID" required>
            </div>
            <div class="mb-3">
                <label for="modelName" class="form-label">Model Name</label>
                <input type="text" class="form-control" id="modelName" name="modelName" required>
            </div>
            <div class="mb-3">
                <label for="manufacturer" class="form-label">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="mb-3">
                <label for="firstFlight" class="form-label">First Flight</label>
                <input type="date" class="form-control" id="firstFlight" name="firstFlight" required>
            </div>
            <div class="mb-3">
                <label for="passengerCapacity" class="form-label">Passenger Capacity</label>
                <input type="number" class="form-control" id="passengerCapacity" name="passengerCapacity" required>
            </div>
            <div class="mb-3">
                <label for="range" class="form-label">Range (km)</label>
                <input type="number" class="form-control" id="range" name="range" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Model</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
