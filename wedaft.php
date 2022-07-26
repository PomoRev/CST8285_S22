<?php session_start();

    $_SESSION["pageTitle"] = "FooBar";

    include("wedboiler.php");
?>

<body>

<?php
    include("wedaftheader.dat");
?>

<main>
    <p class="bodytext">
        Lorem ipsum dolor, sit amet consectetur adipisicing
        elit. Sit recusandae, aliquam eos perferendis
        officia nesciunt ex sed a corporis! Maxime illo
        quisquam veniam quaerat eligendi? Vero itaque quia
        aliquam obcaecati!
    </p>

    <a href="page2.php" class="othertype">Please CLICK ME</a>

<?php if (false) {  ?>

    <div class="innerbox">
        <img src="images/cat_with_tie.jpg" alt="flash the jerk">
    </div>

<?php } else { ?>

    <p class="bodytext">
        Lorem ipsum dolor, sit amet consectetur adipisicing
        elit. Sit recusandae, aliquam eos perferendis
        officia nesciunt ex sed a corporis! Maxime illo
        quisquam veniam quaerat eligendi? Vero itaque quia
        aliquam obcaecati!
    </p>

<?php } ?>

</main>

<?php  
    include("wedaftbottom.html");
?>