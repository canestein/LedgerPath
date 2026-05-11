<?php
/**
 * Tests for LedgerPath
 */

use PHPUnit\Framework\TestCase;
use Ledgerpath\Ledgerpath;

class LedgerpathTest extends TestCase {
    private Ledgerpath $instance;

    protected function setUp(): void {
        $this->instance = new Ledgerpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgerpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
