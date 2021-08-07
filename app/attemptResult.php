<?php session_start(); 
function increaseAttempt() {
    if(isset($_POST['btn_play_agn'])) {
        $_SESSION['attemptNum'] += 1;
    }
}
increaseAttempt();

echo "Overall PTs:" . $_SESSION['overallPts'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td id="attempt">Attempt # <?php echo $_SESSION['attemptNum']; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Score</td>
                <td>Correct</td>
                <td>Wrong</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION['name']; ?></td>
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
    <form action="" method="post">
        <input type="button" id="btn_exit" name="btn_exit" value="Exit">
    </form>
</body>
</html>