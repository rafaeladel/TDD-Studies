<?php
class Addition implements IOperation {
	public function run($num, $current){
		return $num + $current;
	}
}

class Substraction implements IOperation {
	public function run($num, $current){
		return $current - $num;
	}
}
?>