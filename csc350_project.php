<?php include ('csc350_db.php');?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Final Project</title>
</head>
<body>
<?php

	$sql = "SELECT * FROM customer;";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);

	if($result_check > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row ['first_name'];
			echo $row ['last_name'];
		}
	}
?>


</body>
</html>