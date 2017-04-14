<?php

class NightsWatch implements IFighter {
	private $_array;

	public function __construct() {
		$this->_array = array();
	}

	public function recruit($p) {
		if ($p instanceof IFighter) {
			$this->_array[] = $p;
		}
		// else {
		// 	trigger_error("Fatal error", E_USER_ERROR);
		// }
	}

	public function fight() {
		foreach ($this->_array as $p) {
			$p->fight();
		}
	}
}

?>
