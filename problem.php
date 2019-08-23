<?php
include "dbconn.php";

$sql = "SELECT * FROM complaint";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>".
        	" Problem: " . $row["problem"]. "<br>". 
        	"Address: ". $row["address"]. "<br>".
        	"Landmark: ". $row["landmark"]. "<br>".
        	"City: ". $row["city"]. "<br>".
        	"State: ". $row["state"]. "<br>".
        	"pin: ". $row["pin"]. "<br>".
        	'<form action="vote.php" method="post">
          <td><button>Vote</button></td>
        </form>';
    }
} else {
    echo "0 results";
}
