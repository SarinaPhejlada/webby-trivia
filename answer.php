<?php

function correctAnswer() {
    $_SESSION['player_'.$_SESSION['starter'].'_score'] += 10;
    $counter = $_SESSION['starter'];
    $counter = ($counter % $_SESSION['player_count']);
    $counter++;
    $_SESSION['starter'] = $counter;
    header("Location: categories.php");
    exit();
}

function wrongAnswer() {
    $counter = $_SESSION['starter'];
    $counter = ($counter%$_SESSION['player_count']) + 1;
    $_SESSION['starter'] = $counter;
    echo "Wrong Answer! Player ".$_SESSION['starter']."'s turn.";
}
?>