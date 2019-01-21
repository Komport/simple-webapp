<?php
$dbname = 'shop';
$dbuser = 'john';
$dbpass = 'pass';
$dbhost = 'mysql';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SHOW TABLES FROM $dbname";
$result = $conn->query($sql);
$tblCnt = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$tblCnt++;
		echo $row[0]."<br \>\n";
                echo "Test #3";
	}
}
if (!$tblCnt) {
  echo "There are no tables<br \>\n";
} else {
  echo "There are $tblCnt tables<br \>\n";
}

$conn->close();
