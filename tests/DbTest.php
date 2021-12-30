<?php

use App\Config\Database;
use PHPUnit\Framework\TestCase;

class dbTest extends TestCase
{
    public function testConnect()
    {
        $database = new Database();
        $db = $database->connect();

        $this->assertIsObject(
            $db,
            "actual content is object or not"
        );
    }
}