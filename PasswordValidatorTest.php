<?php
// PHPUnit Test Cases
use PHPUnit\Framework\TestCase;
require_once 'PasswordValidator.php';

class PasswordValidatorTest extends TestCase
{
    public function testValidPassword()
    {
        $this->assertTrue(PasswordValidator::validatePassword('Valid_Password123'));
    }

    public function testInvalidPasswordShort()
    {
        $this->assertFalse(PasswordValidator::validatePassword('Short1_'));
    }

    public function testInvalidPasswordNoUppercase()
    {
        $this->assertFalse(PasswordValidator::validatePassword('no_uppercase1_'));
    }


    public function testInvalidPasswordNoLowercase()
    {
        $this->assertFalse(PasswordValidator::validatePassword('NO_LOWERCASE1_'));
    }

    public function testInvalidPasswordNoNumber()
    {
        $this->assertFalse(PasswordValidator::validatePassword('NoNumber_Uppercase'));
    }

    public function testInvalidPasswordNoUnderscore()
    {
        $this->assertFalse(PasswordValidator::validatePassword('NoUnderscore123'));
    }
}
