<?php

class Answer
{
    private string $title;

    
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
}