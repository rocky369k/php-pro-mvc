<?php

namespace App\Validators\Base;

class BaseValidator
{
    protected array $errors = [], $rules = [];

    public function validate(array $fields): bool
    {
        foreach($fields as $key => $value) {
            if (!empty($this->rules[$key]) && preg_match($this->rules[$key], $value)) {
                unset($this->errors["{$key}_error"]);
            }
        }

        return empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
