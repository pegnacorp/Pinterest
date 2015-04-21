<?php
	class SystemUser{
		public $id;
		public $login;
		public $isLogged;

		function login(){
			session_start();
			$isLogged = true;
			$id  = $_POST['id'];
			$_SESSION['id'] = $id;
		}
		function logout(){
			session_start();
        	session_destroy();
		}
	}
?>