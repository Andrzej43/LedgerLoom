<?php
/**
 * Tests for LedgerLoom
 */

use PHPUnit\Framework\TestCase;
use Ledgerloom\Ledgerloom;

class LedgerloomTest extends TestCase {
    private Ledgerloom $instance;

    protected function setUp(): void {
        $this->instance = new Ledgerloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgerloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
