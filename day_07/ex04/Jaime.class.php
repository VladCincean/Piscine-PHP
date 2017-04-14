<?php

class Jaime extends Lannister {
	public function sleepWithAux($l) {
		if ($l instanceof Tyrion) {
			return "Not even if I'm drunk !";
		}
		else if ($l instanceof Sansa) {
			return "Let's do this.";
		}
		else if ($l instanceof Cersei) {
			return "With pleasure, but only in a tower in Winterfell, then.";
		}
	}
}

?>
