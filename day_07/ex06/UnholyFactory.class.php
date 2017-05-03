<?php
class UnholyFactory {
    private $array;

    public function __construct() {
    	$this->array = array();
    }

    public function absorb($f) {
        if ($f instanceof Fighter) {
            if (isset($this->array[$f->getType()])) {
                echo "(Factory already absorbed a fighter of type " . $f->getType() . ")" . PHP_EOL;
            } else {
            	$this->array[$f->getType()] = $f;
                echo "(Factory absorbed a fighter of type " . $f->getType() . ")" . PHP_EOL;
            }
        } else {
            echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
        }
    }

    public function fabricate($f) {
        if (array_key_exists($f, $this->array)) {
            echo "(Factory fabricates a fighter of type " . $f . ")" . PHP_EOL;
            return clone $this->array[$f];
        }
        echo "(Factory hasn't absorbed any fighter of type " . $f . ")" . PHP_EOL;
        return null;
    }
}
?>
