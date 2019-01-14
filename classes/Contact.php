<?php 

class Contact 
{	
	public $db;

	function __construct()
	{
		$this->db = new Database();
	}
	
	public function addContactRequest($data)
	{
        $columns = "";
        $values = "";
        			
		foreach ($data as $column => $value) {
		    $columns .= ($columns == "") ? "" : ", ";
		    $columns .= $column;
		    $values .= ($values == "") ? "" : ", ";
		    $values .= "'" . $value . "'";
        }
        			
		$sql = "INSERT INTO contact ($columns) values ($values)";

		return $this->db->queryInset($sql);	
	}	


}
