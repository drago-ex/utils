<?php declare(strict_types=1);

namespace Drago\Utils;

use Nette\Utils\ArrayHash;


class ExtraArrayHash extends ArrayHash
{
	/**
	 * Converts the object data to a plain array, including nested hashes.
	 * @return array<string, mixed>
	 */
	public function toArray(): array
	{
		return self::convert($this);
	}


	/**
	 * Converts the object data to an array with top-level keys in uppercase.
	 * @return array<string, mixed>
	 */
	public function toArrayUpper(): array
	{
		return array_change_key_case($this->toArray(), CASE_UPPER);
	}


	/** @return array<string, mixed> */
	private static function convert(ArrayHash $hash): array
	{
		$data = [];
		foreach ((array) $hash as $key => $value) {
			$data[$key] = $value instanceof ArrayHash ? self::convert($value) : $value;
		}

		return $data;
	}
}
