<?php

require 'functions.php';

class Task
{

    public $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }
    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [
    new Task('Go to the store'), //0
    new Task('Finish my screencast'), //1
    new Task('Clean my room') //etc
];

// dd($tasks);

$tasks[0]->complete();

require 'index.view.php';

/* var_dump($task->isComplete()); */
/* $task = new Task('Go to the store'); // a new task objekt */
/* $task->complete(); */
// require 'index.view.php';
