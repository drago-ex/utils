<?php

declare(strict_types=1);

namespace Drago\Utils;


class CaseConverter
{
	/**
	 * Converts camelCase or PascalCase to snake_case, e.g. versionName -> version_name,
	 * version2Name -> version2_name, HTMLParser -> html_parser, userID -> user_id.
	 */
	public static function snakeCase(string $input): string
	{
		if (!preg_match('/[A-Z]/', $input)) {
			return $input;
		}

		return strtolower((string) preg_replace(
			[
				'/([a-z\d])([A-Z])/', // word boundary after a lowercase letter or digit
				'/([A-Z]+)([A-Z][a-z])/', // boundary between an acronym and the next word
			],
			'$1_$2',
			$input,
		));
	}
}
