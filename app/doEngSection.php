<?php

session_start();

$currentAttempt = array(
    "TotalPoint" => 0,
    "CorrectQuestion" => 0,
    "WrongQuestion" => 0
);

$_SESSION['msg'] = array(); // for user to view the correct answer in review page

$userAns = [$_POST['a0'], $_POST['a1'], $_POST['a2'], $_POST['a3']];

for ($i = 0; $i < count($_SESSION['selectedFourQ']); $i++) {

    if (trim(strtoupper($userAns[$i])) == trim(strtoupper($_SESSION['selectedFourQ'][$i]['Ans']))) {
        $currentAttempt['TotalPoint'] += 5;
        $currentAttempt["CorrectQuestion"]++;
        array_push($_SESSION['msg'], "Your answer: <u>$userAns[$i]</u>.</br>Is correct!");
    } else {
        $currentAttempt['TotalPoint'] -= 3;
        $currentAttempt['WrongQuestion']++;
        array_push($_SESSION['msg'], "Your answer: <u>$userAns[$i]</u>.</br>Is incorrect. The correct answer is " . "<b>" . $_SESSION['selectedFourQ'][$i]['Ans'] . "</b>.");
    }
}

if ($currentAttempt['TotalPoint'] < 0) {
    $currentAttempt['TotalPoint'] = 0;
}

$_SESSION['currentAttempt'] = $currentAttempt;

header("Location: review.php");
