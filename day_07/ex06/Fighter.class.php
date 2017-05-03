<?php
abstract class Fighter {
	private $type;

	public function __construct($type) {
		$this->type = $type;
	}

	public function getType() {
		return ($this->type);
	}

	public function __clone() {
		//...
	}

	public abstract function fight($with);
}
?>
