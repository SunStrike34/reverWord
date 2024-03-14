<?php

require_once '../Class/Revert.php';

class RevertTest extends Revert
{
	public $testStr    = "Hel,lo! World!o";
	public $testResult = "Oll,eh! Odlro!w";

	public function revTest(): bool
	{
		$result = $this->revertCharacters($this->testStr);
        echo $result;

		if($result == $this->testResult) {
			return 'true';
		}

		return 'false';
	}
}

