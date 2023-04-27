<?php

class Validation
{
	/* USED AS A FLAG CHANGES TO TRUE IF ONE OR MORE ERRORS IS FOUND */
	private $error = false;

	/* CHECK FORMAT IS BASCALLY A SWITCH STATEMENT THAT TAKES A VALUE AND THE NAME OF THE FUNCTION THAT NEEDS TO BE CALLED FOR THE REGULAR EXPRESSION */
	public function checkFormat($value, $regex)
	{
		switch($regex)
		{
			case "name": return $this->name($value); break;
			case "address": return $this->address($value); break;
            case "city": return $this->city($value); break;
			case "phone": return $this->phone($value); break;
            case "email": return $this->email($value); break;
			case "dob": return $this->dob($value); break;
			case "password": return $this->password($value); break;
		}
	}


		
	/* THE REST OF THE FUNCTIONS ARE THE INDIVIDUAL REGULAR EXPRESSION FUNCTIONS*/
	private function name($value)
	{
		$match = preg_match('/^[a-z-\' ]{1,50}$/i', $value);
		return $this->setError($match);
	}

    private function address($value)
	{
		$match = preg_match('/^\d+ [a-z-\' ]{1,50}$/i', $value);
		return $this->setError($match);
	}

    private function city($value)
	{
		$match = preg_match('/^[a-z-\' ]{1,50}$/i', $value);
		return $this->setError($match);
	}

	private function phone($value)
	{
		$match = preg_match('/^\d{3}\.\d{3}\.\d{4}$/', $value);
		return $this->setError($match);
	}

    private function email($value)
	{
		$match = preg_match('/^[a-z-A-Z-\'\d_]{1,30}@[a-z-A-Z-\'\d_]{1,20}\.[a-z-A-Z-\d]{1,8}$/i', $value);
		return $this->setError($match);
	}

    private function dob($value)
	{
		$match = preg_match('/^(0[0-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d\d$/i', $value);
		return $this->setError($match);
	}

	private function password($value)
	{
		$match = preg_match('/^[\w\W]{1,50}$/i', $value);
		return $this->setError($match);
	}
	
	private function setError($match)
	{
		if(!$match)
		{
			$this->error = true;
			return "error";
		}
		else 
		{
			return "";
		
		}
	}
	
		public function login($post) {
			require_once 'classes/Pdo_methods.php';
			$pdo = new PdoMethods();
	
			$sql = "SELECT status, name, email, password FROM admins WHERE email = :email";
	
			$bindings = array(
			  array(':email', $post['email'], 'str')
			);
		
			$records = $pdo->selectBinded($sql, $bindings);
		
			if($records == 'error'){
				return "There was an error logging in";
			}
			else {
				if(count($records) != 0){
					if(password_verify($post['password'], $records[0]['password'])){
						session_start();
						$_SESSION['access'] = "accessGranted";
						$_SESSION['status'] = $records[0]['status'];
						$_SESSION['name'] = $records[0]['name'];
						
						return "success";
					}
					else {
						return "There was a problem logging in with those credentials";
					}
				}
				else {
					return "There was a problem logging in with those credentials";
				}
			}
		}
	

	public function security(){
		session_start();
		if($_SESSION['access'] !== "accessGranted"){header('location: index.php?page=login');}
	}


	/* THE SET MATCH FUNCTION ADDS THE KEY VALUE PAR OF THE STATUS TO THE ASSOCIATIVE ARRAY */
	public function checkErrors(){
		return $this->error;
	}
	
}