<?php
abstract class Fighter {
	private $type;

	public function __construct($type) {
		$this->type = $type;
	}

	public function getType() {
		return ($this->type);
	}

	public abstract function fight($with);
}
?>
