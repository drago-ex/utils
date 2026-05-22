<?php

declare(strict_types=1);

namespace Drago\Utils;

use Nette\Utils\ArrayHash;


/** Extends ArrayHash with convenience methods for array conversion. */
class ExtraArrayHash extends ArrayHash
{
	/**
	 * Converts the object data to a simple array.
	 * @return array<string, mixed>
	 */
	public function toArray(): array
	{
		return (array) $this;
	}


	/**
	 * Converts the object data to an array with all keys in uppercase.
	 * @return array<string, mixed>
	 */
	public function toArrayUpper(): array
	{
		$data = (array) $this;
		return array_change_key_case($data, CASE_UPPER);
	}
}
