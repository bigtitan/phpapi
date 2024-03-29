<?php
declare(strict_types=1);

//require 'allAutoload.php';
require 'class/Email.php';
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
//final class EmailTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeCreatedFromValidEmailAddress1(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCanBeCreatedFromValidEmailAddress2(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
?>
