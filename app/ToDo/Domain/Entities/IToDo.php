<?php

namespace App\ToDo\Domain\Entities;

interface IToDo
{
    public function setTitle(Title $title):void;
    public function getTitle():Title;
}
