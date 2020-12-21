<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class FileTest extends TestCase
{
    public function testWriteable(): void
    {
        $this->assertTrue(
            File::isWriteable(getcwd())
        );

    }

    public function testNonExistant(): void
    {
        $this->assertFalse(
            File::isWriteable('/home/null')
        );

    }

    public function testNonWriteable(): void
    {
        $this->assertFalse(
            File::isWriteable('/waqar/quite-facebook.css')
        );

    }
}
