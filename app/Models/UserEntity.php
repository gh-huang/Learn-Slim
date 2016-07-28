<?php
namespace app\Models;

/**
* UserEntity
*/
class UserEntity
{
	protected $id;
	protected $username;
	protected $password;
	protected $email;
	protected $register_time;
	protected $update_time;
	protected $is_admin;
	
	function __construct(array $data)
	{
		$this->id = $data['id'];
		$this->username = $data['username'];
		$this->password = $data['password'];
		$this->email = $data['email'];
		$this->register_time = $data['register_time'];
		$this->update_time = $data['update_time'];
		$this->is_admin = $data['is_admin'];
	}
}