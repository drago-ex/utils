# Drago Utils

This package includes several utility classes for working with arrays, case
conversions, and handling database-related tasks.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/utils/blob/master/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Futils.svg)](https://badge.fury.io/ph/drago-ex%2Futils)
[![Tests](https://github.com/drago-ex/utils/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml)

## Requirements
- PHP >= 8.3
- Nette Framework
- Composer

## Installation
```
composer require drago-ex/utils
```

## Methods:

Converts the internal data of the `ExtraArrayHash` object into a simple PHP array.
```php
$data->toArray();
```

Converts the internal data of the `ExtraArrayHash` object into a PHP array with all keys transformed to uppercase.
```php
$data->toArrayUpper();
```

Converts a string from CamelCase to snake_case. This method is useful for converting variable or method names commonly used in programming languages.
```php
CaseConverter::snakeCase(...)
```
