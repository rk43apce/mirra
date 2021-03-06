<?php 

/**
 * 
 */
class Database 
{
	
	public $db;

	function __construct()
	{
		$this->db = Config::getInstance();
	}


	public function  querySelect($sql)
	{

		return	$result =$this->db->mysqli->query($sql);

	}

	public function  queryInset($sql) 
	{

	 return	$result =$this->db->mysqli->query($sql);

	}

	public function  queryInsert($sql)
	{

	return	$result =$this->db->mysqli->query($sql);

	}
	
	public function  getLastInsertId()
	{
		
	return	$result =$this->db->mysqli->insert_id;

	}


	public function  queryUpdate($sql)
	{

	return	$result =$this->db->mysqli->query($sql);

	}

	
	public function  queryDelet($sql) 
	{

	 return	$result =$this->db->mysqli->query($sql);

	}

	public function  isZero($result)
	{

		return	$result->num_rows == 0;

	}

	public function  isOne($result)
	{

		return	$result->num_rows == 1;

	}

	public function  rowNum($result)
	{

		return	$result->num_rows;

	}

	public function processRowSet($result, $singleRow = false)
	{
		
		$resultArray = array();

		while ($row = mysqli_fetch_assoc($result)) {

			array_push($resultArray, $row);
		}

		return ($singleRow)? $resultArray[0] : $resultArray;

	}
	
	
	

}


