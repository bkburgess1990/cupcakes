<!--
Author: Brandon Burgess, Adam Winter
Date: 2023-1-9
URL:  https://bburgess.greenriverdev.com/SDEV328/cupcakes/
Git:  https://github.com/bkburgess1990/cupcakes
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Order</title>
</head>
<body>
<?php
    if(empty($_POST['name'])) {
        echo "Please Enter a Name";
        exit();
    }

    if(sizeof($_POST) == 1){
        echo "Please, choose at least one cupcake, you party pooper.";
        exit;
    }

    var_dump($_POST);
    echo "<br><br>";
    echo "Thank you, " . $_POST['name'] . " for your order!";
    echo "<br><br>";


    echo "Order Summary: ";
    echo "<ul>";
    $totalCost = 0.0;
    foreach ($_POST["flavors"] as $cupcakeName) {
            echo "<li>" . $cupcakeName . "</li>";
            $totalCost += 3.50;
    }
    echo "</ul>";
    echo "Total Cost: $" . $totalCost;
?>
</body>
</html>
