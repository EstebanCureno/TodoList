<?php

use PHPUnit\Framework\TestCase;

use App\ToDo\Domain\Entities\ToDo;

class ToDoTest extends TestCase
{
    public function testCanInstantiateAToDo():void
    {
        $this->assertInstanceOf(
            App\ToDo\Domain\Entities\ToDo::class,
            new Todo()
        );
    }
}
