<?php
session_start();
?>

<html>
<head>
    <title>Webby Trivia - Results</title>
    <link rel="stylesheet" href="styles/styles.css"/>
    <link rel="stylesheet" href="styles/win.css"/>
</head>
<body>
<div class="title">
    Results<hr>
</div>

<?php
$winner = 0;
$max = 0;
for ($i=1; $i<=$_SESSION['player_count']; $i++) {
    if ($max < $_SESSION['player_'.$i.'_score']) {
        $max = $_SESSION['player_'.$i.'_score'];
        $winner = $_SESSION['player_'.$i];
    }
    echo "<div class=\"player_score\">";
    echo "<h2>".$_SESSION['player_'.$i]."</h2>";
    echo "<h3>".$_SESSION['player_'.$i.'_score']." points</h3>";
    echo "</div><br>";
}
echo "<br>";
echo "<h1 style=\"text-align: center\">Winner is ".$winner."!</h1>";
?>

<div class="ad">
    <h2>Enjoyed Webby Trivia? Check out our other game!</h2>
    <a href="../ynoT">Project ynoT</a>
<div>
</body>
</html>
<?php
    session_destroy();
?>
