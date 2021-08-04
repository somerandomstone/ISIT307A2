<?php

session_start();

$currentAttempt = array(
    "TotalPoint" => 0,
    "CorrectQuestion" => 0,
    "WrongQuestion" => 0
);

$userAns = [$_POST['a0'], $_POST['a1'], $_POST['a2'], $_POST['a3']];

for ($i = 0; $i < count($_SESSION['selectedFourQ']); $i++) {

    if (trim(strtoupper($userAns[$i])) == trim(strtoupper($_SESSION['selectedFourQ'][$i]['Ans']))) {
        $currentAttempt['TotalPoint'] += 5;
        $currentAttempt["CorrectQuestion"]++;
    } else {
        $currentAttempt['TotalPoint'] -= 3;
        $currentAttempt['WrongQuestion']++;
    }
}

$_SESSION['currentAttempt'] = $currentAttempt;

header("Location: attemptResult.php");
