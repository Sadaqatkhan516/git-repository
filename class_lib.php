<?php
class addition
{
public $first;
public $second;
public $result;
function __construct($first,$second) {
	$this->first = $first;
	$this->second = $second;
	$this->result = $first + $second;
	}
function get_first() {
	return $this->first;
	}
function get_second() {
	return $this->second;
	}
function get_result() {
	return $this->result;
	}
} 

class person 
{
var $name;
function __construct($person_name) {
	$this->name = $person_name;
	}

function set_name($new_name) {
	$this->name = $new_name;
	}

function get_name(){
	return $this->name;
	 }
}

class employee extends person {
	function __construct($employee_name) {
	$this->set_name($employee_name);
	}

}
