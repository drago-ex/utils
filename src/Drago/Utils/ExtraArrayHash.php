<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Utils;

use Nette\Utils\ArrayHash;
use Nette\Utils\Strings;


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
		$data = [];
		foreach ($this as $k => $v) {
			$data[Strings::upper($k)] = $v;
		}
		return $data;
	}
}
