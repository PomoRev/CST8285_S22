<?php session_start();

    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

    include("things.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prof. Frank Emanuel">
    <meta name="email" content="emanuef@algonquincollege.com">
    <meta name="date" content="2022-08-03">
    <title>Docu-list</title>
</head>
<body>
    <header>Docu-list</header>

    <h1>LIST</h1>

    <ol>
    <?php

        foreach ($_SESSION['cart'] as $item){

            echo "<li>$item</li>";

        }
    

    ?>
    </ol>

    <hr>



    <select name="thing" id="thing" onchange=" target.value = thing.value; ">
        <option disabled selected>choose your weapon</option>
        <?php 
              foreach ($things as $onething)  {
                echo "<option value='".$onething."'>".$onething."</option>";
              }; ?>
    </select>

    <br>
    <input type="text" name="target" id="target">
    <br>

</body>
</html>