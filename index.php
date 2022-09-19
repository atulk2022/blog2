<form action="index.php" method="post">
username	<input type="text" name="fname" id="fname"> <br> 

password<input type="text" name="lname" id="lname"> <br> <br>

<Input type="submit">

</form>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "keyboard";



// Create connection

$conn =mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection fail");

}



$fname=$_POST['fname'];

$lname=$_POST['lname'];



$sql = "INSERT INTO students (`sr`, `fname`, `lname`) 

VALUES (NULL, '$fname', '$lname')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>