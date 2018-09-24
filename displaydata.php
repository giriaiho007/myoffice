<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<?php
setlocale(LC_ALL, "UTF-8");
$servername = "localhost";
$username = "root";
$password = "ironman";
$dbname="officework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
} 

$result = mysqli_query($conn,"SELECT * FROM myoffice");
echo "<table border='2'>
<tr>
<th>sino</th>
<th>ModeOfReceive</th>
<th>LPONUBER</th>
<th>LetterNumber</th>
<th>LetterDate</th>
<th>ReceiveDate</th>
<th>FromAddress</th>
<th>Subject</th>
<th>Remarks</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SINO'] . "</td>";
echo "<td>" . $row['modeofreceive'] . "</td>";
echo "<td>" . $row['lponumber'] . "</td>";
echo "<td>" . $row['letternumber'] . "</td>";
echo "<td>" . $row['LETTERDATE'] . "</td>";
echo "<td>" . $row['receiveddate'] . "</td>";
echo "<td>" . $row['fromaddress'] . "</td>";
echo "<td>" . $row['subject'] . "</td>";
echo "<td>" . $row['remarks'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);



?>
</body>
</html>
