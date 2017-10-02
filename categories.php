<?php

session_start();
// Merged
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
                background-color: #97EAF4;
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
                color: black;
                display: block;
                background-color: #06C2F4;
            }
            a:hover{
                background-color: #007996;
            }

            .player_stats {
                position: fixed;
                bottom: 10px;
                background-color: #06C2F4;
                text-align: center;
                padding: 10px;
                width: 100%;
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
            <a href = "questions_display.php?category=HTML">Category 1: HTML</a>
            <a href = "questions_display.php?category=CSS">Category 2: CSS</a>
            <a href = "questions_display.php?category=PHP">Category 3: PHP</a>
            <a href = "questions_display.php?category=PLC">Category 4: PLC</a>
        </div>
        <div class="player_stats">
            <?php
                if (isset($_SESSION['player_1'])) {
                    echo "<b>".$_SESSION['player_1']."</b>: ".$_SESSION['player_1_score']." points\t";
                }
                if (isset($_SESSION['player_2'])) {
                    echo "<b>".$_SESSION['player_2']."</b>: ".$_SESSION['player_2_score']." points\t";
                }
                if (isset($_SESSION['player_3'])) {
                    echo "<b>".$_SESSION['player_3']."</b>: ".$_SESSION['player_3_score']." points\t";
                }
                if (isset($_SESSION['player_4'])) {
                    echo "<b>".$_SESSION['player_4']."</b>: ".$_SESSION['player_4_score']." points\t";
                }
            ?>
        </div>
    </body>
</html>
