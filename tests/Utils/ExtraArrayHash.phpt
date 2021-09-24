<?php

/**
 * Test: Drago\Utils\ExtraArrayHash
 */

declare(strict_types=1);

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../TestArrayHash.php';

$testArrayHash = new TestArrayHash;
$testArrayHash->var = 'test';

Assert::equal(['var' => 'test'], $testArrayHash->toArray());
Assert::equal(['VAR' => 'test'], $testArrayHash->toArrayUpper());
