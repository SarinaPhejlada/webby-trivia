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
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background-color: #D8BFD8;
        }
        .player_stats {
            width: 80%;
            font-size: 40px;
            background-color: white;
            margin: 0 auto;
            text-align: center;
        }
        a {
                margin-bottom: 30px;
                padding: 3px;
                width: 100%;
                font-size: 70px;
                text-align: center;
                text-decoration: none;
                color: white;
                display: block;
                background-color: #000;
        }
        a:hover {
            background-color: #8B8B8B;
        }
    </style>
</head>
<body>
    <div class="player_stats" style="width: 100%">
        <?php
            echo $_SESSION['player_1'].": ".$_SESSION['player_1_score']." points.<br>";
            echo $_SESSION['player_2'].": ".$_SESSION['player_2_score']." points.<br>";
            echo $_SESSION['player_3'].": ".$_SESSION['player_3_score']." points.<br>";
            echo $_SESSION['player_4'].": ".$_SESSION['player_4_score']." points.<br>";
        ?>
    </div>

    <?php
        echo "<h2>Player ".$_SESSION['starter']." goes first.</h2>";
    ?>
    <a href="categories.php">Start Game</a>
</body>
</html>