<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>

<body>
    <?php
    echo "test";
    ?>
    <?php
    echo "<h1>Welcome to HTTP 5225</h1>";
    ?>
    <h1>Php Intro</h1>
    <?php
    echo "<p>We will learn PHP in this class</p>";
    ?>
    <?php
    echo "
    <ul>
        <li>PHP</li>
        <li>mySQL</li>
        <li>Laravel</li>
    </ul>";
    ?>
    <img src="<?php echo 'https://placehold.co/600x400'; ?>">
    <?php echo '<img src="https://placehold.co/600x400">'; ?>

    <?php
    $fname = 'Kathan Patel';
    echo "Hello" . $fname;
    ?>
</body>

</html>