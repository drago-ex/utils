<?php declare(strict_types=1);

/**
 * Test: Drago\Utils\ExtraArrayHash
 */

use Drago\Utils\ExtraArrayHash;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/../TestArrayHash.php';


test('Declared properties are converted to an array', function () {
	$hash = new TestArrayHash;
	$hash->var = 'test';

	Assert::same(['var' => 'test'], $hash->toArray());
	Assert::same(['VAR' => 'test'], $hash->toArrayUpper());
});


test('Values created with from() are converted to an array', function () {
	$hash = ExtraArrayHash::from(['name' => 'John', 'age' => 30]);

	Assert::type(ExtraArrayHash::class, $hash);
	Assert::same(['name' => 'John', 'age' => 30], $hash->toArray());
	Assert::same(['NAME' => 'John', 'AGE' => 30], $hash->toArrayUpper());
});


test('Nested hashes are converted to nested arrays', function () {
	$hash = ExtraArrayHash::from(['user' => ['name' => 'John', 'address' => ['city' => 'Prague']]]);

	Assert::same(['user' => ['name' => 'John', 'address' => ['city' => 'Prague']]], $hash->toArray());
	Assert::same(['USER' => ['name' => 'John', 'address' => ['city' => 'Prague']]], $hash->toArrayUpper());
});


test('An empty hash gives an empty array', function () {
	Assert::same([], (new ExtraArrayHash)->toArray());
});
