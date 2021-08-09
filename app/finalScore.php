<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
    <div class="result-page">
        <h1><?php echo $_SESSION['name']; ?></h1>
        <h1><?php echo "Overall PTs: " . $_SESSION['overallPts']; ?></h1>
		<a href="index.php">Exit</a>
	</div>
</body>

</html>