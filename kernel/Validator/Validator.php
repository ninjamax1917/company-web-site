<?php

namespace App\Kernel\Validator;

/**
 * Класс Validator предназначен для валидации данных по заданным правилам.
 *
 * Поддерживаемые правила:
 *  - required: поле обязательно для заполнения
 *  - min:N: минимальная длина строки N символов
 *  - max:N: максимальная длина строки N символов
 *
 * Пример использования:
 *   $validator = new Validator();
 *   $isValid = $validator->validate($data, $rules);
 *   $errors = $validator->errors();
 */
class Validator implements ValidatorInterface
{
    /**
     * Массив ошибок после валидации.
     *
     * @var array
     */
    private array $errors = [];

    /**
     * Данные для валидации.
     *
     * @var array
     */
    private array $data;

    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];
        $this->data = $data;

        foreach ($rules as $key => $fieldRules) {
            foreach ($fieldRules as $rule) {
                $ruleParts = explode(':', $rule);

                $ruleName = $ruleParts[0];
                $ruleValue = $ruleParts[1] ?? null;

                $error = $this->validateRule($key, $ruleName, $ruleValue);
                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }

        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }

    private function validateRule(string $key, string $ruleName, ?string $ruleValue): string|false
    {

        $value = $this->data[$key];

        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return "Field $key is required";
                }
                break;

            case 'min':
                if (strlen($value) < (int) $ruleValue) {
                    return "Field $key must be at least $ruleValue characters long";
                }
                break;
            case 'max':
                if (strlen($value) > (int) $ruleValue) {
                    return "Field $key must be at most $ruleValue characters long";
                }
                break;
        }

        return false;
    }
}
