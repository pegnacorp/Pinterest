<?php

class User extends ActiveRecord{
	public $id;
	public $firstName;
	public $lastName;
	public $user;
	public $password;

	function __construct($firstName,$lastName,$user,$password){
		parent::__construct();
		$this->firstName =$firstName;
		$this->lastName = $lastName;
		$this->user = $user;
		$this->password = $password;
	}
}

?>