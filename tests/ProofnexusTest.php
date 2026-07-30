<?php
/**
 * Tests for ProofNexus
 */

use PHPUnit\Framework\TestCase;
use Proofnexus\Proofnexus;

class ProofnexusTest extends TestCase {
    private Proofnexus $instance;

    protected function setUp(): void {
        $this->instance = new Proofnexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Proofnexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
