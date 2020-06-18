<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Utils;


class CaseConvertor
{
	/**
	 * Character conversion to snake.
	 */
	public function snakeCase(string $input): string
	{
		if (preg_match('/[A-Z]/', $input) === 0) {
			return $input;
		}
		return strtolower(preg_replace_callback('/([a-z])([A-Z])/', function (array $a) {
			return $a[1] . '_' . strtolower($a[2]);
		}, $input));
	}
}
