<?php
/**
 * Tests for NextAuthJS
 */

use PHPUnit\Framework\TestCase;
use Nextauthjs\Nextauthjs;

class NextauthjsTest extends TestCase {
    private Nextauthjs $instance;

    protected function setUp(): void {
        $this->instance = new Nextauthjs(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nextauthjs::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
