<?php

include ("connection.php");

$rv = "RV ADVISOR"; 

?>

<br>

el id del usurio es <?php echo $_GET["id"]; ?>, el nombre del usuario es <? echo $_GET["name"]; ?>, el correo del usuario es <? echo $_GET["email"]; ?>, y su numero de telefono es <? echo $_GET["phoneNumber"]; ?>, Bienvenido a <? echo $rv ?> 


<br>
<br>



<form method="GET" action="updateStudent.php" style="padding: 20px; border:solid 2px #000000;
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
<input type="text" name="name" placeholder="Name" value="<? echo $_GET["name"] ?>" style="width: 50%; padding: 0.5%;"><br><br>
<input type="text" name="email" placeholder="Email" value="<? echo $_GET["email"] ?>" style="width: 50%; padding: 0.5%;"><br><br>
<input type="number" name="phoneNumber" placeholder="phone number" value="<? echo $_GET["phoneNumber"] ?>" style="width: 50%; padding: 0.5%;"><br><br>
<input type="hidden" name="id" placeholder="id" value="<? echo $_GET["id"] ?>" style="width: 50%; padding: 0.5%;"><br><br>


<input type="submit" value="Submit">

</center>

<br>

<hr> 



</form>