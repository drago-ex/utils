<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Utils;


class CaseConverter
{
	/**
	 * Converting CamelCase to snake_case.
	 */
	public static function snakeCase(string $input): string
	{
		if (preg_match('/[A-Z]/', $input) === 0) {
			return $input;
		}
		return strtolower(preg_replace_callback('/([a-z])([A-Z])/', fn(array $arr) => $arr[1] . '_' . strtolower($arr[2]), $input));
	}
}
