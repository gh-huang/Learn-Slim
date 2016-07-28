<?php

namespace app\Models;

/**
* UserMapper
*/
class UserMapper extends Mapper
{
	public function signupUser()
	{
		$sql = "SELECT * FROM user";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		return $stmt->fetch();
	}
}
