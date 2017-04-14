<?php

class Greyjoy {
	protected $familyMotto = "We do not sow";

	public function __get($familyMotto) {
		trigger_error("Fatal error", E_USER_ERROR);
	}
}

?>
