<?php  session_start();

    $_SESSION["pageTitle"] = "Frank's Page";

    // $pageTitle = "Hello World";

    include("boilerplateWlab.txt");

    echo "<body>";

    include("wedlabheader.php");

?>

<main>

    <p class="bodytext">
            Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Sit recusandae, aliquam eos perferendis
            officia nesciunt ex sed a corporis! Maxime illo
            quisquam veniam quaerat eligendi? Vero itaque quia
            aliquam obcaecati!
    </p>

<?php

    if (false) {

?> 

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

    <a class="othertype" href="page2.php">CLICK ME NOW!</a>

</main>

<?php

    include("wedlabbottom.html");

?>