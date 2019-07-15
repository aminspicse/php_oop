<?php
	class OOPPHP{ // OOPPHP is a class name
		
		public function sum(){ // sum() is a function name 
			$result = $num1+$num2;
			return $result;
		}
	}
	
	$obj = new OOPPHP(); // create object
	echo $obj->sum(); // call function 