<?php

declare(strict_types=1);

namespace Drago\Utils;


class CaseConverter
{
	public static function snakeCase(string $input): string
	{
		if (!preg_match('/[A-Z]/', $input)) {
			return $input;
		}

		return strtolower(
			(string) preg_replace_callback(
				'/([a-z])([A-Z])/',
				fn(array $matches): string => $matches[1] . '_' . strtolower((string) $matches[2]),
				$input,
			),
		);
	}
}
