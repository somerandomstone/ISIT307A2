<?php
session_start();

function startGame() {
    $name = $_POST['fullName'];
    $subject = $_POST['subject'];

    echo "{$name}, {$subject}";
}
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
    <div id="landing-page">
        <h1 class="title">Score IT</h1>
        <?php
            if(isset($_POST['playButton']))
            {
                startGame();
            }
        ?>
        <form class="start-form" method="post">
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