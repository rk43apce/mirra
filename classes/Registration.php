<?php 

class Registration 
{	
	public $db;

	function __construct()
	{
		$this->db = new Database();
	}

	public function exists($email)
	{          
		$sql = "SELECT email from user where email = '$email'";				
		return $this->db->isOne($this->db->querySelect($sql));		
    }
	
	public function doRegistration($data)
	{   
        $columns = "";
        $values = "";
        $columns =  ColumsValues::getColumns($data);
        $values = ColumsValues::getValues($data);
        
		echo $sql = "INSERT INTO user ($columns) values ($values)";

		return $this->db->queryInset($sql);	
    }

 

}
