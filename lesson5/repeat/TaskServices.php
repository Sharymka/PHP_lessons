<?php

namespace repeat;

class TaskServices
{
    static function addComment(Task $task, Comments $comment) {
        $task->addComment($comment);
    }
}