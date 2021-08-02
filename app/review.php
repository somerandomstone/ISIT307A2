<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score It</title>
</head>

<body>
    <div class="eng-page">
        <div class="review">
            <h1 class="title">Quiz Review</h1>
            <?php for ($i = 0; $i < count($_SESSION['selectedFourQ']); $i++) {
                echo "<h2>" . "Q" . $i + 1 . ") " . $_SESSION['selectedFourQ'][$i]['Qns'] . "?" . "</h2>";
                echo "<p>" . $_SESSION['msg'][$i] . "</p>";
            } ?>
            <button type="submit" name="submit" value="View Results">View Results</button>
        </div>
    </div>
</body>

</html>