<?php
class ABC{
	public $name = 'rahul';
	
	public function __get(){
		echo $this->name;
		
	}
	
	
}

