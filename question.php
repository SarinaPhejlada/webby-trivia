<?php

class Question {
    private $question;
    private $correctAnswer;
    private $firstAnswer;
    private $secondAnswer;
    private $thirdAnswer;
    private $fourthAnswer;
    private $answers;
    
    public function __constructor($question, $correctAnswer, $firstAnswer, $secondAnswer, $thirdAnswer, $fourthAnswer){
        $this->question = $question;
        $this->correctAnswer = $correctAnswer;
        $this->firstAnswer = $firstAnswer;
        $this->secondAnswer = $secondAnswer;
        $this->thirdAnswer = $thirdAnswer;
        $this->fourthAnswer = $fourthAnswer;
        $this->answers = array($firstAnswer, $secondAnswer, $thirdAnswer, $fourthAnswer);
    }
    
    public function getQuestion(){
        return $this->question;
    }
    
    public function setQuestion($question){
        $this->question = $question;
    }
    
    public function getCorrectAnswer(){
        return $this->correctAnswer;
    }
    
    public function setCorrectAnswer($correctAnswer){
        $this->correctAnswer = $correctAnswer;
    }
    
    public function getFirstAnswer(){
        return $this->firstAnswer;
    }
    
    public function setFirstAnswer($firstAnswer){
        $this->firstAnswer = $firstAnswer;
    }
    
    public function getSecondAnswer(){
        return $this->secondAnswer;
    }
    
    public function setSecondAnswer($secondAnswer){
        $this->secondAnswer = $secondAnswer;
    }
    
    public function getThirdAnswer(){
        return $this->thirdAnswer;
    }
    
    public function setThirdAnswer($thirdAnswer){
        $this->thirdAnswer = $thirdAnswer;
    }
    
    public function getFourthAnswer(){
        return $this->fourthAnswer;
    }
    
    public function setFourthAnswer($fourthAnswer){
        $this->fourthAnswer = $fourthAnswer;
    }
    
    public function isCorrect($answerChoice){
        return ($this->correctAnswer == $answerChoice);
    }
}
?>