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
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background-color: #97EAF4;
        }
        .title {
            text-align: center;
        }
        hr{
            background-color: transparent;
            height: 0;
            border: none;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            border-top: 1px solid #007996;
            clear: both;
        }
        .player_stats {
            width: 80%;
            height: 40%;
            font-size: 40px;
            background-color: #06C2F4;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px;
            padding: 20px;
        }
        .player {
            margin: 20px;
        }
        a {
            position: fixed;
            bottom: 30px;
            padding: 3px;
            width: 100%;
            font-size: 70px;
            text-align: center;
            text-decoration: none;
            color: black;
            display: block;
            background-color: #06C2F4;
        }
        a:hover {
            background-color: #007996;
        }
    </style>
</head>
<body>
    <div class="title">
        <h1>Player Information</h1>
    </div>
    <div class="player_stats">
        <?php
            if(isset($_SESSION['player_1'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_1'].": ".$_SESSION['player_1_score']." points.<hr>";
                echo "</div>";
            }
            if(isset($_SESSION['player_2'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_2'].": ".$_SESSION['player_2_score']." points.<hr>";
                echo "</div>";
            }
            if(isset($_SESSION['player_3'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_3'].": ".$_SESSION['player_3_score']." points.<hr>";
                echo "</div>";
            }
            if(isset($_SESSION['player_4'])) {
                echo "<div class=\"player\">";
                echo $_SESSION['player_4'].": ".$_SESSION['player_4_score']." points.<br>";
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