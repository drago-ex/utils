<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */
declare(strict_types=1);

namespace Drago\Utils;

use Nette\Utils\ArrayHash;


/**
 * This class extends Nette's ArrayHash and adds additional functionality to
 * convert the stored data to arrays, with options to convert keys to uppercase.
 */
class ExtraArrayHash extends ArrayHash
{
	/**
	 * Converts the items in the object to a simple array.
	 *
	 * This method returns the internal data of the ExtraArrayHash object as an array.
	 *
	 * @return array The converted array.
	 */
	public function toArray(): array
	{
		return (array) $this;
	}


	/**
	 * Converts the items in the object to an array with all keys converted to uppercase.
	 *
	 * This method returns the internal data of the ExtraArrayHash object as an array,
	 * but changes all the keys to uppercase.
	 *
	 * @return array The converted array with uppercase keys.
	 */
	public function toArrayUpper(): array
	{
		$data = (array) $this;
		return array_change_key_case($data, CASE_UPPER);
	}
}
