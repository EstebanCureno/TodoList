<?php
use PHPUnit\Framework\TestCase;
use App\ToDo\Domain\Entities\ToDo;
use App\ToDo\Domain\ToDoFactory;

class ToDoFactoryTest extends  TestCase
{
    public function testCanCreateToDoObjects():void{
        $toDoFactory = new ToDoFactory();
        $this->assertInstanceOf(
            ToDo::class,
            $toDoFactory->createTodo()
        );
    }
}
