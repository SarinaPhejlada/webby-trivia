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
        <title>Webby Trivia - Categories</title>
        <style>
            html, body{
                margin: 0;
                padding: 0;
                font-family: Arial;
            }
            body{
                background-color: #37E990;
                color: #000;

            }
            .title{
                width: 100%;
                height: 200px;
                font-size: 83px;
                text-align: center;
            }
            .categories{
                position: fixed;
                text-align: center;
                margin: 0 auto;
                width: 100%
            }
            a{
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
            a:hover{
                background-color: #8B8B8B;
            }

            .player_stats {
                position: fixed;
                bottom: 10px;
                background-color: #FFF;
                text-align: center;
                padding: 3px;
            }
        </style>
    </head>
    <body>
        <div class = "title">
            Select a Category:
        </div>
        
        <div class = "categories">
            <a href = "html.php">Category 1: HTML</a>
            <a href = "css.php">Category 2: CSS</a>
            <a href = "php.php">Category 3: PHP</a>
            <a href = "plc.php">Category 4: PLC</a>
        </div>
        <div class="player_stats" style="width: 100%">
            <?php
                
                echo $_SESSION['player_1'].": ".$_SESSION['player_1_score']." points.";
                echo $_SESSION['player_2'].": ".$_SESSION['player_2_score']." points.";
                echo $_SESSION['player_3'].": ".$_SESSION['player_3_score']." points.";
                echo $_SESSION['player_4'].": ".$_SESSION['player_4_score']." points.";
            ?>
        </div>
    </body>
</html>
