<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>

<body>
    <?php
    $hour = rand(1, 24);
    echo $hour;
    if ($hour < 13) {
        echo " Good Morning";
    } elseif ($hour < 18 && $hour > 12) {
        echo " Good Afternoon";
    } elseif ($hour < 22 && $hour >= 18) {
        echo " Good Evening";
    } elseif ($hour > 21) {
        echo " Good Night";
    }
    ?>
    <?php
    echo "<br>";


    $number = rand(1, 250);

    if (($number % 3) == 0 && ($number % 5) == 0) {
        echo "FizzBuzz";
    } elseif (($number % 5) == 0) {
        echo "Buzz";
    } elseif (($number % 3) == 0) {
        echo "Fizz";
    } else {
        echo $number;
    }
    ?>
</body>

</html>