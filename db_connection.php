<?php 

function test()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control panel";

//11
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} //17

	if(isset($_POST['Forwards'])){
		echo "F";
		$sql = "INSERT INTO positions (direction)  VALUES ('Forwards')";
	}
	elseif (isset($_POST['Left'])) {
		echo "L";
		$sql = "INSERT INTO positions (direction)  VALUES ('Left')";
	}elseif (isset($_POST['Stop'])) {
		echo "S";
		$sql = "INSERT INTO positions (direction)  VALUES ('Stop')";
	}elseif (isset($_POST['Right'])) {
		echo "R";
		$sql = "INSERT INTO positions (direction)  VALUES ('Right')";
	}elseif (isset($_POST['Backwards'])) {
		echo "B";
		$sql = "INSERT INTO positions (direction)  VALUES ('Backwards')";
	}
if(isset($_POST['submit']))
{
 if ($conn->query($sql) === TRUE) {
//38
  echo " ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;//41
}

$conn->close();

}
}
test();
?>