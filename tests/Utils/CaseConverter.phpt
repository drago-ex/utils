<?php

declare(strict_types=1);

use Drago\Utils;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$snakeCase = 'case_case';
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('CaseCase'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('caseCase'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('Case_Case'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('case_Case'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('CASE_CASE'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('CASE_case'));
Assert::same($snakeCase, Utils\CaseConverter::snakeCase('case_CASE'));
