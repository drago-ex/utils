## Drago Utils
This package includes several utility classes for working with arrays, case
conversions, and handling database-related tasks.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/utils/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Futils.svg)](https://badge.fury.io/ph/drago-ex%2Fdatabase)
[![Tests](https://github.com/drago-ex/utils/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/utils/badge)](https://www.codefactor.io/repository/github/drago-ex/utils)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/utils/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/utils?branch=master)

## Requirements
- PHP 8.3 or higher
- composer

## Installation
```
composer require drago-ex/utils
```

## Converts the internal data of the `ExtraArrayHash` object into a simple PHP array.
```php
$data->toArray();
```

## Converts the internal data of the `ExtraArrayHash` object into a PHP array with all keys transformed to uppercase.
```php
$data->toArrayUpper();
```

## Converts a string from CamelCase to snake_case. This method is useful for converting variable or method names commonly used in programming languages.
```php
CaseConverter::snakeCase(...)
```
