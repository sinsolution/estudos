<?php

namespace App\Adapters\Validations;

interface EmailValidatorProtocolInterface
{
    public function isEmail(string $value) : bool;
}