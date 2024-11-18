<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\web\BE\nette-test\app\UI\Home/default.latte */
final class Template_c776621518 extends Latte\Runtime\Template
{
	public const Source = 'C:\\web\\BE\\nette-test\\app\\UI\\Home/default.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo 'Hello World!
';
	}
}
