<?php

class MCQ
{
    private string $title;

    private array $questions = [];

    private int $score;
    
    public function __construct(string $title)
    {
        $this->title = $title;
        $this->score = 0;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function addQuestion(Question $question): self
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Get the value of questions
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function render()
    {
        require 'templates/qcm.html.php';
    }

    public function check($formData)
    {
        if(!empty($formData['answers']))
        {
            foreach($formData['answers'] as $questionIndex => $anwserIndex){

                $question = $this->questions[$questionIndex];
                $anwser = $question->getAnswers()[$anwserIndex];

                if($question->getCorrectAnswer() == $anwser)
                {
                    $this->score ++;
                }
            }
            
            require 'templates/score.html.php';
        }
        else
        {
            return $this->render();
        }
    }

    /**
     * Get the value of score
     */
    public function getScore(): int
    {
        return $this->score;
    }

    public function showScore(): string
    {
        return $this->score . '/' . count($this->questions);
    }
}