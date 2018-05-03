<html>
<head>
	<title>Brent's Web Server</title>
</head>

<body>
<?php
	$conn = new mysqli('db', 'root', 'password', 'clouddb');
	$sql = 'SELECT * FROM cloudtable';
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		echo $row['testcolumn'] ;
	}
	$conn->close();
?>
</body>
</html>
