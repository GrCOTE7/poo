<?php

/**
 * Fruit (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App;

class Gc7
{
	/**
	 * @var Expression or variable (int or array) or object
	 * @txt Expression 's description
	 */
	public static function aff(mixed $var, string $txt = ''): void
	{
		echo '<a title=' . debug_backtrace()[0]['file'] . '&nbsp;-&nbsp;Line&nbsp;' . debug_backtrace()[0]['line'] . '><pre>' . (($txt) ? $txt . ' : ' : '');
		var_dump($var);
		echo '</pre></a>';
	}
	// aff(debug_backtrace());
}