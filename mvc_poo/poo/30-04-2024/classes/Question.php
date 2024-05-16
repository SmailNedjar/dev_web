<?php

class Question
{
    private string $title;

    private array $answers = [];

    private ?Answer $correctAnswer = null;
    
    public function __construct(string $title)
    {
        $this->title = $title;
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

    public function addAnswer(Answer $answer, bool $isCorrect = false): self
    {
        $this->answers[] = $answer;

        if($isCorrect)
        {
            $this->correctAnswer = $answer;
        }

        return $this;
    }

    /**
     * Get the value of answers
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    /**
     * Get the value of correctAnswer
     */
    public function getCorrectAnswer(): ?Answer
    {
        return $this->correctAnswer;
    }

    /**
     * Set the value of correctAnswer
     */
    public function setCorrectAnswer(?Answer $correctAnswer): self
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }
}