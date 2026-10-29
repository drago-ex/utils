# Drago Utils

Small helpers for Nette applications: an `ArrayHash` that converts itself to an array, and a
conversion from camelCase to snake_case.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/utils/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Futils.svg)](https://badge.fury.io/ph/drago-ex%2Futils)
[![Tests](https://github.com/drago-ex/utils/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Installation

```
composer require drago-ex/utils
```

## ExtraArrayHash

`Drago\Utils\ExtraArrayHash` extends `Nette\Utils\ArrayHash`, for example as a parent of form value classes.

```php
use Drago\Utils\ExtraArrayHash;

$data = ExtraArrayHash::from(['name' => 'John', 'address' => ['city' => 'Prague']]);

// Plain array, nested hashes included: ['name' => 'John', 'address' => ['city' => 'Prague']]
$data->toArray();

// Same, with top-level keys in uppercase (e.g. for Oracle): ['NAME' => 'John', 'ADDRESS' => [...]]
$data->toArrayUpper();
```

## CaseConverter

Converts camelCase or PascalCase to snake_case and snake_case back to camelCase:

```php
use Drago\Utils\CaseConverter;

CaseConverter::snakeCase('versionName');  // version_name
CaseConverter::snakeCase('version2Name'); // version2_name
CaseConverter::snakeCase('HTMLParser');   // html_parser
CaseConverter::snakeCase('userID');       // user_id

CaseConverter::camelCase('version_name'); // versionName
CaseConverter::camelCase('USED_COUNT');   // usedCount
```
