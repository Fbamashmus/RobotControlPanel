//<?php
//include 'db_connection.php';
//$conn = OpenCon();
//echo "Connected Successfully";
//CloseCon($conn);
//?>
<?php
//include_once 'includes/dbh.php'
include 'db_connection.php';
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>
Robot Control Panel
	</title>
</head>
<style>
.btn-group .button {
  background-color: #379683; 
  border-radius: 12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
  border: 1px solid green;
}

.btn-group .button:hover {
  background-color: #8EE4AF !important;
}

.btn-group{
  text-align: center;
  margin-top: 4px;
  margin-bottom: 4px;
}
</style>

<body style="text-align:center; background-color:#EDF5E1;">
<form class="" action="index.php" method="post" > 
	<h1 style="color:black">
		Robot Control Panel
	</h1>
<div class="btn-group">
<input type="submit" class="button" name="Forwards" value="Forwards">
</div>

<div class="btn-group">
<input type="submit" class="button" name="Left" value="Left">
<input type="submit" class="button" name="Stop" value="Stop" style="background-color:Red;  border-radius: 35%;">
<input type="submit" class="button" name=" Right" value=" Right">
</div>

<div class="btn-group">

<input type="submit" class="button" name="Backwards" value="Backwards">
</div>
</form>
</body>
</html>