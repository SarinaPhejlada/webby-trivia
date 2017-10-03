<?php
session_start();

if (isset($_POST['submit_players'])) {
    $player = 0;
    foreach($_POST as $input) {
        if(isset($input)) {
            if ($input!=null && $input!="Start Game") {
                $player++;
                $_SESSION['player_'.$player] = $input;
                $_SESSION['player_'.$player.'_score'] = 0;
            }
        }
    }
    $_SESSION['starter'] = rand(1, $player);

    $_SESSION['player_count'] = $player;
}
?>

<html>
<head>
    <title>Webby Trivia - Player Info</title>
    <link rel="stylesheet" href="styles/player_info.css"/>
</head>
<body>
    <div class="title">
        <h1>Player Information</h1>
    </div>
    <div class="player_stats">
        <?php
            if(isset($_SESSION['player_1'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_1'].": ".$_SESSION['player_1_score']." points.";
                echo "</div>";
            }
            if(isset($_SESSION['player_2'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_2'].": ".$_SESSION['player_2_score']." points.";
                echo "</div>";
            }
            if(isset($_SESSION['player_3'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_3'].": ".$_SESSION['player_3_score']." points.";
                echo "</div>";
            }
            if(isset($_SESSION['player_4'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_4'].": ".$_SESSION['player_4_score']." points.";
                echo "</div>";
            }
            // session_destroy();
        ?>
    </div>
    <?php
        echo "<h2 style=\"text-align: center; font-size: 40px\">".$_SESSION['player_'.$_SESSION['starter']]." goes first.</h2>";
    ?>
    
    <a href="categories.php">Start Game</a>
</body>
</html>