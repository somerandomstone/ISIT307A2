<?php
session_start();

$questionsAnswers = array(
    array("Qns" => "Who is the bear in The Jungle Book", "Ans" => "Baloo"),
    array("Qns" => "What is the name of the wizard at the court of King Arthur", "Ans" => "Merlin"),
    array("Qns" => "What was the name of Harry Potter’s pet owl", "Ans" => "Hedwig"),
    array("Qns" => "In Charlie and the Chocolate Factory, what is Charlie’s surname", "Ans" => "Bucket"),
    array("Qns" => "Who has a dog called Snowy and is friends with Captain Haddock", "Ans" => "Tintin"),
    array("Qns" => "Which popular Disney movie, featuring a 'practically perfect' nanny, was originally a novel written by P.L.Travers", "Ans" => "Mary Poppins"),
    array("Qns" => "Who stole Christmas in a Dr Seuss book", "Ans" => "The Grinch"),
    array("Qns" => "Which character in Alice’s Adventures in Wonderland muttered “Oh dear! Oh dear! I shall be late”", "Ans" => "The White Rabbit"),
    array("Qns" => "Who wrote the 'Chronicles of Narnia' series", "Ans" => "C.S. Lewis"),
    array("Qns" => "What is the name of the Lion in The Lion, The Witch and the Wardrobe", "Ans" => "Aslan")
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
        <h1 class="title">English Literature Quiz</h1>
        <h1>Attempt <?php echo $_SESSION["attemptNum"] ?></h1>
        <form class="start-form" action="doEngSection.php" method="post">
            <?php for ($i = 0; $i < count($selectedFourQ); $i++) {
                echo "<h2>" . "Q" . $i + 1 . ") " . $selectedFourQ[$i]['Qns'] . "?" . "</h2></br>";
                echo "<textarea class='answer-input' id='a$i' name='a$i' rows='3' cols='50'></textarea></br>";
            } ?>
            <button type="submit" name="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>

</html>