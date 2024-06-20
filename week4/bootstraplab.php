<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #f9f9f9;
        }
        .card-text {
            margin-bottom: 10px;
        }
        .website-link {
            color: #007bff;
            text-decoration: none;
        }
        .website-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    function getUsers()
    {
        $url = 'users.json';
        $data = file_get_contents($url);

        return json_decode($data, true);
    }

    $users = getUsers();
    ?>

    <div class="container mt-4">
        <h1 class="mb-4">User Details</h1>
        <div class="row">
            <?php
            if (!empty($users)) {
                foreach ($users as $user) {
                    echo '<div class="col-md-4">
                            <div class="card">
                                <div class="card-header">'
                                    . $user['name'] .
                                '</div>
                                <div class="card-body">
                                    <p class="card-text"><strong>Email:</strong> ' . $user['email'] . '</p>
                                    <p class="card-text"><strong>Phone:</strong> ' . $user['phone'] . '</p>
                                    <p class="card-text"><strong>City:</strong> ' . $user['address']['city'] . '</p>
                                    <p class="card-text"><strong>Website:</strong> <a class="website-link" href="http://' . $user['website'] . '">' . $user['website'] . '</a></p>
                                    <p class="card-text"><strong>Company:</strong> ' . $user['company']['name'] . '</p>
                                </div>
                            </div>
                          </div>';
                }
            } else {
                echo '<p>No users found.</p>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
