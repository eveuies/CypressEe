<?php
/**
 * Tests for CypressE2e
 */

use PHPUnit\Framework\TestCase;
use Cypresse2e\Cypresse2e;

class Cypresse2eTest extends TestCase {
    private Cypresse2e $instance;

    protected function setUp(): void {
        $this->instance = new Cypresse2e(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cypresse2e::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
