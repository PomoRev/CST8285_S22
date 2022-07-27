<?php session_start();

    $my_array = array ( 
        array("fred", 3),
        array("wilma", 14),
        array( "pebbles", 1)
    );




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


    echo '<select name="somestuff" id="somestuff" onchange="showme()">';

    foreach ($my_array as $mini_array){
        $blob = $mini_array[0].":".$mini_array[1];
        echo "<option value=$blob>$mini_array[0]</option>";
    }

    echo "</select>";
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

<script>
    function showme(){

        console.log(": " + somestuff.value);
        item.value = somestuff.value;

    }
</script>

</html>