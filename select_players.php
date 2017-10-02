<html>
<head>
    <title>Webby Trivia - Players</title>
    <meta charset="UTF-8">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background-color: #D8BFD8;
        }
        .player_insert {
            text-align: center;
            font-size: 3em;
        }
        .title {
            width: 100%;
            height: 200px;
            font-size: 83px;
            text-align: center;
        }
        input {
            height: 50px;
            width: 400px;
            font-size: 30px;
        }
        .submit_button {
            position: fixed;
            left: 25%;
            right: 25%;
            width: 50%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="title">
        Select Player Names
    </div>
    <div class="player_insert">
        <form action="player_info.php" method="post">
            Player 1: <input name="player_1"/><br>
            Player 2: <input name="player_2"/><br>
            Player 3: <input name="player_3"/><br>
            Player 4: <input name="player_4"/><br>

            <input class="submit_button" type="submit" value="Start Game" name="submit_players"/>
        </form>
    </div>
</body>
</html>
