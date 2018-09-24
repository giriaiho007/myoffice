<a href=""
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Untitled Document</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "ironman";
$dbname="officework";
$mode=$_POST['modeofreceive'];
$lpo_number=$_POST['lponumber'];
$letter_number=$_POST['rnumber'];
$letter_date=$_POST['ldate'];
$received_date=$_POST['rdate'];
$laddress=$_POST['letteraddress'];
$lsubject=$_POST['subject'];
$lremarks=$_POST['remarks'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
} 
$sql="INSERT INTO `myoffice`(`modeofreceive`, `lponumber`, `letternumber`, `letterdate`, `receiveddate`, `fromaddress`, `subject`, `remarks`) VALUES ('$mode','$lpo_number','$letter_number','$letter_date','$received_date','$laddress','$lsubject','$lremarks')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: '. index);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<body>
</body>
</html>
