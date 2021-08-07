<?php
session_start();
if (!isset($_SESSION["attemptNum"])) {
    $_SESSION["attemptNum"] = 1;
}
if (!isset($_SESSION["overallPts"])) {
    $_SESSION["overallPts"] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score It</title>
</head>

<body>
    <div id="landing-page">
        <h1 class="title">Score IT</h1>
        
        <form class="start-form" action="checkSubject.php" method="POST">
            <input type="text" name="fullName" placeholder="Please enter your fullname here" /><br>
            <label for="subject">Choose a subject: </label>
            <select name="subject" id="subject">
                <option value="mathematics">Mathematics</option>
                <option value="literature">Literature</option>
            </select>
            <br>
            <button type="submit" name="playButton" value="play">Play Now</button>
        </form>
    </div>
</body>
</html>