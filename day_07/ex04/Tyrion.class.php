<?php

class Tyrion extends Lannister {
	public function sleepWithAux($l) {
		if ($l instanceof Jaime) {
			return "Not even if I'm drunk !";
		}
		else if ($l instanceof Sansa) {
			return "Let's do this.";
		}
		else if ($l instanceof Cersei) {
			return "Not even if I'm drunk !";
		}
	}
}

?>
