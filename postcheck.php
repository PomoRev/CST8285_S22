<?php session_start();

    if (!empty($_POST)) {

        if (!isset($_SESSION['itemlist'])){

            $_SESSION['itemlist']= array( $_POST['item'] );

        } else 

            array_push( $_SESSION['itemlist'], $_POST['item']);        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prof. Frank Emanuel">
    <meta name="email" content="emanuef@algonquincollege.com">
    <meta name="date" content="2022-07-27">
    <title>POST CHECK PROGRAM</title>
</head>
<body>
    <header>POST CHECK PROGRAM</header>

    <h3>Our List</h3>

    <div id="listofthings">
        <ol>
<?php


    if (isset($_SESSION['itemlist'])){

        foreach ($_SESSION['itemlist'] as $oneitem){

            echo "<li>$oneitem</li>";

        }
    }

?>
        </ol>
    </div>

    <form action="postcheck.php" method="post">
        <label for="item">Enter an Item: </label>
        <input type="text" name="item" id="item">
        <br>
        <button type="submit">Send Item</button>
    </form>

</body>
</html>