<? php

$user = “root”;
$password = “root”; // windows users leave this blank
$host  = “localhost”;
$db = “a3_cooperInfo”;

$coon = mysqli_connect($user, $password, $host, $db);

If (!$conn) {
	Echo “connection didn't work”;
exit;
}

//echo “connected”;

//get all the car data
$myQuery = “SELECT * FROM mainmodel”;

//make the query, get the result


$result = mysqli_query($conn, $myQuery);

$rows = array();

while($row = mysqli_fetch_assoc($result)) {
	$rows[] = $row;
}

//send the entire result set as a json encoded array
Echo json_encode($rows);

>
