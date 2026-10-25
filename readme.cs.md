# Drago Utils

[English](readme.md) | Čeština

Drobní pomocníci pro aplikace v Nette: `ArrayHash`, který se umí převést na pole, a
převod z camelCase na snake_case.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/utils/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Futils.svg)](https://badge.fury.io/ph/drago-ex%2Futils)
[![Tests](https://github.com/drago-ex/utils/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/utils/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Instalace

```
composer require drago-ex/utils
```

## ExtraArrayHash

`Drago\Utils\ExtraArrayHash` rozšiřuje `Nette\Utils\ArrayHash`, například jako předek tříd s hodnotami formulářů.

```php
use Drago\Utils\ExtraArrayHash;

$data = ExtraArrayHash::from(['name' => 'John', 'address' => ['city' => 'Prague']]);

// Plain array, nested hashes included: ['name' => 'John', 'address' => ['city' => 'Prague']]
$data->toArray();

// Same, with top-level keys in uppercase (e.g. for Oracle): ['NAME' => 'John', 'ADDRESS' => [...]]
$data->toArrayUpper();
```

## CaseConverter

Převádí camelCase nebo PascalCase na snake_case:

```php
use Drago\Utils\CaseConverter;

CaseConverter::snakeCase('versionName');  // version_name
CaseConverter::snakeCase('version2Name'); // version2_name
CaseConverter::snakeCase('HTMLParser');   // html_parser
CaseConverter::snakeCase('userID');       // user_id
```
