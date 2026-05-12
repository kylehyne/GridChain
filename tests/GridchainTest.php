<?php
/**
 * Tests for GridChain
 */

use PHPUnit\Framework\TestCase;
use Gridchain\Gridchain;

class GridchainTest extends TestCase {
    private Gridchain $instance;

    protected function setUp(): void {
        $this->instance = new Gridchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gridchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
