<?php
/**
 * Tests for PostmanCore
 */

use PHPUnit\Framework\TestCase;
use Postmancore\Postmancore;

class PostmancoreTest extends TestCase {
    private Postmancore $instance;

    protected function setUp(): void {
        $this->instance = new Postmancore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Postmancore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
