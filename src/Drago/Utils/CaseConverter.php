<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */
declare(strict_types=1);

namespace Drago\Utils;


/**
 * This utility class provides methods for converting strings between different
 * case formats, such as converting from CamelCase to snake_case.
 */
class CaseConverter
{
	/**
	 * Converts a string from CamelCase to snake_case.
	 *
	 * Example:
	 *   'CamelCaseString' => 'camel_case_string'
	 *
	 * @param string $input The CamelCase string to be converted.
	 * @return string The converted snake_case string.
	 */
	public static function snakeCase(string $input): string
	{
		// If the string doesn't contain any uppercase letters, return it as is.
		if (!preg_match('/[A-Z]/', $input)) {
			return $input;
		}

		// Use regex to convert CamelCase to snake_case.
		return strtolower(preg_replace_callback('/([a-z])([A-Z])/', fn(array $matches) => $matches[1] . '_' . strtolower($matches[2]), $input));
	}
}
