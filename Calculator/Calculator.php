<?php
class Calculator {
	protected $result = 0;
	protected $operation = null;
	protected $operands = array();

	public function setOperands(){
		$this->operands = func_get_args();
	}

	public function setOperation(IOperation $operation){
		$this->operation = $operation;
	}

	public function calculate(){
		foreach ($this->operands as $num) {
			if(!is_numeric($num)){
				throw new InvalidArgumentException;
			}

			$this->result = $this->operation->run($num, $this->result);
		}
	}

	public function getResult(){
		return $this->result;
	}
}
?>