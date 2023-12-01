<?php

if(file_exists(__DIR__ . '/vendor/autoload.php'))
{
    require __DIR__ . '/vendor/autoload.php';
}

use PHPUnit\Framework\TestCase;
use Mmantai\Dotenv\DotEnvParser;

final class DotEnvParserTest extends TestCase
{
    public function testDotEnv()
    {
        DotEnvParser::init("test/.env.test");
        $this->assertSame("192.168.178.1", getenv("IP"));
        $this->assertSame("testuser", getenv("USERNAME"));
        $this->assertSame("123456", getenv("PASSWORD"));
    }
}