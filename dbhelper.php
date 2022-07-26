<?php

    function connectdb(){
        
        $servername = "localhost";
        $username = "frankadmin";
        $password = "password";

        $db_connect = 
            mysqli_connect($servername, $username, $password);

        if (!$db_connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

    }

    function closedb(){

        mysqli_close($db_connect);

    }

    execute_query($query){

	// $query = "SELECT username, lastlogin, permissions FROM labwebsite.users";
	
    $cursor = mysqli_query($db_connect, $query);

	// if (mysqli_num_rows($cursor) > 0) {

	// 	while($row = mysqli_fetch_assoc($cursor)) {
	// 		echo "<LI>User: " . $row["username"] . " last logged in " . 
	// 			$row["lastlogin"] . " with permission level " . $row["permissions"] . 
	// 			".</LI>";
	// 	}
		
	// } else {
	// 	echo "<LI>There are no users!</LI>";
	// }

    return $cursor;

    }

?>