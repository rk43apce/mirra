<?php 

class Suggestion 
{	
	public $db;	

	function __construct()
	{
		$this->db = new Database();
	}
	
	public function search($searchstring)
	{          
		$sql = "SELECT DISTINCT id, title
				FROM blog
				WHERE title LIKE '%$searchstring%'
				ORDER BY
				CASE
				WHEN title LIKE '$searchstring' THEN 1
				WHEN title LIKE '$searchstring%' THEN 2
				WHEN title LIKE '%$searchstring' THEN 4
				ELSE 3
				END limit 10 ";

			  $result = $this->db->querySelect($sql);	

			if($this->db->isZero($result)){
				return false;
			}

			return $this->db->processRowSet($result);
		     	
    }

}
