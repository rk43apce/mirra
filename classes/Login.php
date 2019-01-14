<?php 

class Login 
{	
	public $db;

	function __construct()
	{
		$this->db = new Database();
	}

	public function adminLogin($email, $password)
	{	
		try {

			$sql = "SELECT adminId from admin where email = '$email' and password = '$password' ";
			$result = $this->db->querySelect($sql);
			if (!$this->db->isOne($result)) {
				return false;
			}

			return $this->db->processRowSet($result, true);

		} catch (Exception $e) {
			error_log($e);
		}

	}

}
