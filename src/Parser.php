<?php
/**
 * parser function which parse a markdown string text
 * and converts it in html
 */

namespace Educasoftware\Docs;

use ParseDown;

class Parser 
{
	public static function parse(string $content)
	{
		return (new Parsedown())->text($content);
	}
}