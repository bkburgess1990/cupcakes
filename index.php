<!--
Author: Brandon Burgess, Adam Winter
Date: 2023-1-5
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
    <title>Cupcakes</title>
</head>
<body>
    <h1>Pick Your Cupcake</h1>



    <form method="post" action="process.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <input type="checkbox" value="The Grasshopper" name="flavors[]">The Grasshopper</input><br>
        <input type="checkbox" value="Whiskey Maple Bacon" name="flavors[]">Whiskey Maple Bacon</input><br>
        <input type="checkbox" value="Carrot Walnut" name="flavors[]">Carrot Walnut</input><br>
        <input type="checkbox" value="Salted Caramel" name="flavors[]">Salted Caramel</input><br>
        <input type="checkbox" value="Red Velvet" name="flavors[]">Red Velvet</input><br>
        <input type="checkbox" value="Lemon Drop" name="flavors[]">Lemon Drop</input><br>
        <input type="checkbox" value="Tiramisu" name="flavors[]">Tiramisu</input><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php



?>
