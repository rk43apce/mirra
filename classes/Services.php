<?php 

class Services 
{	
	public $db;	
	function __construct()
	{
		$this->db = new Database();
	}

	public function getServices()
	{   	
		$sql = "SELECT * from service";

		$result = $this->db->querySelect($sql);	

		if(empty($result)) {
			return false;
		}

		if($this->db->isZero($result)){
			return false;
		}
				
		return $this->db->processRowSet($result);
	}	

}
