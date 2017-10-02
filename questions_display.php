<?php
    session_start();

    require_once('question.php');
    require_once('answer.php');
    $question = new question;
    $category = $_GET['category'];
    switch($category) {
        case "HTML":
            $question->setQuestion("What does HTML stand for?");
            $question->setCorrectAnswer("HyperText MarkUp Language");
            $question->setFirstAnswer("HyperLinks and Text Markup Language");
            $question->setSecondAnswer("Home Tool Markup Language");
            $question->setThirdAnswer("Homework That Makes Losers");
            $question->setFourthAnswer("HyperText MarkUp Language");
            break;
        case "CSS":
            $question->setQuestion("What does CSS stand for?");
            $question->setCorrectAnswer("Cascading Style Sheet");
            $question->setFirstAnswer("Computer Style Sheet");
            $question->setSecondAnswer("Creative Style Sheet");
            $question->setThirdAnswer("Cute Style Sheet");
            $question->setFourthAnswer("Cascading Style Sheet");
            break;
        case "PHP":
            $question->setQuestion("What does PHP stand for?");
            $question->setCorrectAnswer("PHP: HyperText Preprocessor");
            $question->setFirstAnswer("Personal HyperText Processor");
            $question->setSecondAnswer("PHP: HyperText Preprocessor");
            $question->setThirdAnswer("Portable Home Page");
            $question->setFourthAnswer("Puppies Hate People");
            break;
        case "PLC":
            $question->setQuestion("Day 1 DLC");
            $question->setCorrectAnswer("");
            $question->setFirstAnswer("Day 1 DLC");
            $question->setSecondAnswer("Day 1 DLC");
            $question->setThirdAnswer("Day 1 DLC");
            $question->setFourthAnswer("Day 1 DLC");
            break;
        default:
            break;
    }
    $_SESSION['question'] = $question;
    if(isset($_GET['answer'])) {
        switch($_GET['answer']) {
            case 1:
                if($question->isCorrect($question->getFirstAnswer())) {
                    correctAnswer();
                } else {
                    wrongAnswer();
                }
                break;
            case 2:
                if($question->isCorrect($question->getSecondAnswer())) {
                    correctAnswer();
                } else {
                    wrongAnswer();
                }
                break;
            case 3:
                if($question->isCorrect($question->getThirdAnswer())) {
                    correctAnswer();
                } else {
                    wrongAnswer();
                }
                break;
            case 4:
                if($question->isCorrect($question->getFourthAnswer())) {
                    correctAnswer();
                } else {
                    wrongAnswer();
                }
                break;
            default:
                break;
        }
    }
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webby's Question</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/questions.css">
    </head>
    <body>
        <div class="title">Questions</div>
        <?php echo $_SESSION['starter']; ?>
        <div class="questionbox">
            <?php echo $question->getQuestion(); ?>
        </div>
        <a class="answer-box" href="questions_display.php?category=<?php echo $category; ?>&answer=1"><div class="answerbox1"><?php echo $question->getFirstAnswer(); ?></div></a>
        <a class="answer-box" href="questions_display.php?category=<?php echo $category; ?>&answer=2"><div class="answerbox2"><?php echo $question->getSecondAnswer(); ?></div></a>
        <a class="answer-box" href="questions_display.php?category=<?php echo $category; ?>&answer=3"><div class="answerbox3"><?php echo $question->getThirdAnswer(); ?></div></a>
        <a class="answer-box" href="questions_display.php?category=<?php echo $category; ?>&answer=4"><div class="answerbox4"><?php echo $question->getFourthAnswer(); ?></div></a>

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
