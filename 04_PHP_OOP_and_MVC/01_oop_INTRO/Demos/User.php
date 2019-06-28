<?php 

class User {
	public $username;
	public $password;
	public $picture;
	public $role = 'plain_user';

	public function __construct($u, $pswd){
		$this->username = $u;
		$this->password =$pswd;

		echo $this->username . ' - username';
		echo "<p></p>";
		echo $this->password . ' - password';
	}

	public function login(){

	}

	public function get_user_role(){
		echo $this->role;
	}

	public function change_user_role($new_role)
	{
		$this->role = $new_role;
	}
}