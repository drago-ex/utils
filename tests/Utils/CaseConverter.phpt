<?php

declare(strict_types = 1);

use Tester\Assert;
use Drago\Utils;

require __DIR__ . '/../bootstrap.php';

Assert::same('camel_case', Utils\CaseConverter::snakeCase('CamelCase'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('camelCase'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('Camel_Case'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('camel_Case'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('CAMEL_CASE'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('CAMEL_case'));
Assert::same('camel_case', Utils\CaseConverter::snakeCase('camel_CASE'));
