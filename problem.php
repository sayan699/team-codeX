<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "dbconn.php";

$sql = "SELECT * FROM complaint";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
  //   echo '
		// <img src='.$row["file"].' alt="Smiley face" height="42" width="42">';
        echo "id: " . $row["id"]. "<br>"."<div class='container' style='box-shadow: 5px 10px 18px #888888'>".
        '
		<img class="card-img-top" src='.$row["file"].' alt="user-img" style="width:100%">'.
        //"<img class='card-img-top' src=".$row["file"]."style='width:100%' alt='img'".
        
        "<div class='card' style='width:100%'>".
        	"<div class='card-body'>".	
        	"<h4>"." Problem: " . $row["problem"]."</h4>". "<br>". 
        	"<p>"."Address: ". $row["address"]. "<br>".
        	"Landmark: ". $row["landmark"]. "<br>".
        	"City: ". $row["city"]. "<br>".
        	"State: ". $row["state"]. "<br>".
        	"pin: ". $row["pin"]. "<br>"."</p>".
        	'<form action="vote.php" method="post">
          <td><button>Vote</button></td>
        </form>'."</div>"."</div>"."</div>"."<br>";

    }
} else {
    echo "0 results";
}
?>
<!-- <style>
	*{
		margin:0;
		padding:0;
		font-family: sans-serif;
		background: #ff005c;
	}-->

</style> 
