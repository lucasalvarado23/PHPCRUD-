<br>
<div>
<h1 style="text-align: center;"> Ver registros </h1>
<br>

<center>

<a href="index.php"> Volver a registrarse </a> 

<br>
<br>

</div>

</center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <div style="text-align: center; padding: 20px; border:solid 2px #000000;
-moz-border-radius-topleft: 37px;
-moz-border-radius-topright:37px;
-moz-border-radius-bottomleft:37px;
-moz-border-radius-bottomright:37px;
-webkit-border-top-left-radius:37px;
-webkit-border-top-right-radius:37px;
-webkit-border-bottom-left-radius:37px;
-webkit-border-bottom-right-radius:37px;
border-top-left-radius:37px;
border-top-right-radius:37px;
border-bottom-left-radius:37px;
border-bottom-right-radius:37px;" >
         	<br> 
	         * Name: <?php echo $row["name"] ?><br><br>
	         * E-Mail: <?php echo $row["email"]  ?><br><br>
	         * Phone Number: <?php echo $row["phoneNumber"]  ?><br><br>
	         * <a href="delete.php?id=<?php echo $row["idUser"] ?>">Delete</a> || <a href="update.php?id=<?php echo $row["idUser"] ?>&name=<?php echo $row["name"] ?>&email=<?php echo $row["email"]?>&phoneNumber=<?php echo $row["phoneNumber"] ?>">Update</a>
         </div><br><hr><br>
        <?php

    }
} else {
    echo "0 results";
}



$conn->close();