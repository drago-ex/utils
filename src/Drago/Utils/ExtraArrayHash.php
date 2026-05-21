<?php

declare(strict_types=1);

namespace Drago\Utils;

use Nette\Utils\ArrayHash;


/** Extends ArrayHash with convenience methods for array conversion. */
class ExtraArrayHash extends ArrayHash
{
	/** @return array<string, mixed> */
	public function toArray(): array
	{
		/** @var array<string, mixed> $data */
		$data = (array) $this;
		return $data;
	}


	/** @return array<string, mixed> */
	public function toArrayUpper(): array
	{
		/** @var array<string, mixed> $data */
		$data = (array) $this;
		return array_change_key_case($data, CASE_UPPER);
	}
}
