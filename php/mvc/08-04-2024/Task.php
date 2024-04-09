<?php

class Task {
    private string $title;
    private string $description;
    private Datetime $createdAt;
    private Datetime $completedAt;

    public function __construct(string $title, string $description) {
        $this->title=$title;
        $this->description=$description;
        $this->createAt=new Datetime();
    }

    public function setTitle (string $title) {
        $this->title=$title;
    }

    public function getTitle(string $title) {
        return $this->title;
    }

    public function complete(){  
        $this->completedAt=new Datetime(); 
    }

}


$task = new Task("boire de la biere", "fais comme chez toi");
var_dump($task);
$task->complete();
var_dump($task);