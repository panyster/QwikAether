<?php
/**
 * Tests for QwikAether
 */

use PHPUnit\Framework\TestCase;
use Qwikaether\Qwikaether;

class QwikaetherTest extends TestCase {
    private Qwikaether $instance;

    protected function setUp(): void {
        $this->instance = new Qwikaether(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Qwikaether::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
