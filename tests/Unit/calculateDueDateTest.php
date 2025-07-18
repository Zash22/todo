<?php

namespace Tests\Unit;

use App\Models\Item;
use PHPUnit\Framework\TestCase;

class calculateDueDateTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $task = new Item ([
            "name" => "unitTest",
            "created_at" => "2023-11-15 00:31:25"
        ]);

//        $task->due_date = $i
        $this->assertTrue(true);
    }
}
