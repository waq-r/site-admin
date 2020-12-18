<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class DataTest extends TestCase
{
    public function testWriteable(): void
    {
        $this->assertTrue(
            Data::isWriteable(getcwd())
        );

    }

    public function testNonExistant(): void
    {
        $this->assertFalse(
            Data::isWriteable('/home/null')
        );

    }

    public function testNonWriteable(): void
    {
        $this->assertFalse(
            Data::isWriteable('/waqar/quite-facebook.css')
        );

    }
}
