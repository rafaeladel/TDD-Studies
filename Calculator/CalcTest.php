<?php	
	class CalcTest extends PHPUnit_Framework_TestCase {

		public function setUp(){
			$this->calc = new Calculator();
		}

		public function testTrue(){
			$this->assertTrue(true);
		}

		public function testResultExists(){ 
			$this->assertSame(0, $this->calc->getResult());
		}

		public function testSumResult(){
			$this->calc->setOperands(2,3);
			$this->calc->setOperation(new Addition());
			$this->calc->calculate();
			$this->assertSame(5, $this->calc->getResult());
		}

		/**
		* @expectedException InvalidArgumentException
		*/
		public function testInvalidArguments(){
			$this->calc->setOperands("dsdsd",3);
			$this->calc->setOperation(new Addition());
			$this->calc->calculate();
			$this->assertSame(5, $this->calc->getResult());
		}

		public function testManyOperations(){
			$this->calc->setOperands(2,3);
			$this->calc->setOperation(new Addition());
			$this->calc->calculate();
			$this->assertSame(5, $this->calc->getResult());
			$this->calc->setOperands(3);
			$this->calc->setOperation(new Substraction());
			$this->calc->calculate();
			$this->assertSame(2, $this->calc->getResult());
		}

		

	}
?>