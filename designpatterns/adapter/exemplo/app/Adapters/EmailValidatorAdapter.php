<?php

namespace App\Adapters;

use App\Adapters\Validations\EmailValidatorProtocolInterface;
use Respect\Validation\Validator as validator;

class EmailValidatorAdapter implements EmailValidatorProtocolInterface

{
    public function isEmail(string $value): bool
    {
        return validator::email()->validate($value);
    }
   
}