<?php 

$things = array("hammer","screwdriver","holesaw","sawsall"); 

echo "<div id='thinglist' hidden>";
foreach ($things as $thing){

    echo $thing.":";

}
echo "</div>";

?>