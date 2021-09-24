<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Utils;

use Nette\Utils\ArrayHash;


class ExtraArrayHash extends ArrayHash
{
	/**
	 * Returns items as array.
	 */
	public function toArray(): array
	{
		return (array) $this;
	}


	/**
	 * Returns items as array with converted keys to uppercase.
	 */
	public function toArrayUpper(): array
	{
		$data = (array) $this;
		return array_change_key_case($data, CASE_UPPER);
	}
}
