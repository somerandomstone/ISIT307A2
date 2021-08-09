<?php
session_start();
$_SESSION['attemptNum'] += 1;
$questionsAnswers = array(
    array("Qns" => "What is 2 x 2?", "Ans" => "4"),
    array("Qns" => "What is 2 + 6?", "Ans" => "8"),
    array("Qns" => "What is 4 / 2?", "Ans" => "2"),
    array("Qns" => "What is 5 - 2?", "Ans" => "3"),
    array("Qns" => "What is 2 x 10?", "Ans" => "20"),
    array("Qns" => "What is 4 + 6?", "Ans" => "10"),
    array("Qns" => "What is 7 / 7?", "Ans" => "1"),
    array("Qns" => "What is 5 - 6?", "Ans" => "-1"),
    array("Qns" => "What is 7 x 5?", "Ans" => "35"),
    array("Qns" => "What is 3 x 5?", "Ans" => "15")
);

$selectedFourQ = [];

// randomly select 4 unqiue questions
function selectQns()
{
    global $questionsAnswers, $selectedFourQ;

    while (count($selectedFourQ) !== 4) {
        $rand = rand(0, 9);
        if (!in_array($questionsAnswers[$rand], $selectedFourQ)) {
            array_push($selectedFourQ, $questionsAnswers[$rand]);
        }
    }
}

selectQns();

$_SESSION['selectedFourQ'] = $selectedFourQ;
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
    <div class="eng-page">
        <h1 class="title">Mathematics Quiz</h1>
        <h1>Attempt <?php echo $_SESSION["attemptNum"] ?></h1>
        <form class="start-form" action="doMathSection.php" method="post">
            <?php
            $qnsNum = 1;
            for ($i = 0; $i < count($selectedFourQ); $i++) {
                echo "<h2>" . "Q" . $qnsNum . ") " . $selectedFourQ[$i]['Qns'] . "?" . "</h2></br>";
                echo "<textarea class='answer-input' id='a$i' name='a$i' rows='3' cols='50'></textarea></br>";
                $qnsNum++;
            } ?>
            <button type="submit" name="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>

</html>