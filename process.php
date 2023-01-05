<!--
Author: Brandon Burgess, Adam Winter
Date:



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
    if(!isset($_POST['name'])) {
        echo "Please Enter a Name";
        exit();
    }

    var_dump($_POST);
    echo "Thank you, " . $_POST['name'] . " for your order!";
    echo "<br><br>";


    echo "Order Summary: ";
    echo "<ul>";
    $cupcakeNames = array("grass","whisk","carwal","sarcar","redvelv","lemdrop","tir");
    foreach ($cupcakeNames as $cupcakeName) {
        if(isset($_POST[$cupcakeName])) {
            echo "<li>" . $_POST[$cupcakeName] . "</li>";
        }
    }
    echo "</ul>";
?>
</body>
</html>
