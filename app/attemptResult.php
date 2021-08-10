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
    <title>Result</title>
</head>

<body>
    <div class="result-page">
        <h1><?php echo "Overall PTs: " . $_SESSION['overallPts']; ?></h1>
        <table>
            <thead>
                <tr class="attempt-number">
                    <th id="attempt" colspan="3">Attempt # <?php echo $_SESSION['attemptNum']; ?></th>
                </tr>
                <tr>
                    <th>Score</th>
                    <th>Correct</th>
                    <th>Wrong</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_SESSION['currentAttempt']['TotalPoint']; ?></td>
                    <td><?php echo $_SESSION['currentAttempt']['CorrectQuestion']; ?></td>
                    <td><?php echo $_SESSION['currentAttempt']['WrongQuestion']; ?></td>
                </tr>
            </tbody>
        </table>

        <form action="checkSubject.php" method="post">
            <input type="radio" name="subject" value="mathematics" required>
            <label for="">Mathematics</label>
            <input type="radio" name="subject" value="literature" required>
            <label for="">Literature</label>
            <br>
            <input type="submit" id="btn_play_agn" name="btn_play_agn" value="Play Again">
        </form>
        <a href="finalScore.php">Exit</a>
    </div>
</body>

</html>