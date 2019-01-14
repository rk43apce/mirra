<?php 

class Blog 
{	
	public $db;

	function __construct()
	{
		$this->db = new Database();
	}


	public function addBlog($blogData)
	{	
				
		$columns = "";
		$values = "";	
			
		foreach ($blogData as $column => $value) {
		    $columns .= ($columns == "") ? "" : ", ";
		    $columns .= $column;
		    $values .= ($values == "") ? "" : ", ";
		    $values .= "'" . $value . "'";
		}
	
			
		$sql = "INSERT INTO blog ($columns) values ($values)";
		
		return $this->db->queryInset($sql);			

	}


	public function getBlogs($limit = null, $category = null)
	{   	
		$sql = "SELECT * from blog where isApproved = 'approved'";

		if (!empty($category) ){
			$sql .= " AND category	='$category'";
		}	

		$sql .= " order by id" ;

		if (!empty($limit) ){
			$sql .=  " limit".' '. $limit ;
		}

		$result = $this->db->querySelect($sql);	

		if(empty($result)) {
			return false;
		}

		if($this->db->isZero($result)){
			return false;
		}
		
		return $this->db->processRowSet($result);
	}
	
	public function getBlogById($blogId)
	{   	
		$sql = "SELECT * from blog where id = '$blogId' and isApproved = 'approved'";

		$result = $this->db->querySelect($sql);	

		if(empty($result)) {
			return false;
		}

		if(!$this->db->isOne($result)){
			return false;
		}
		
		return $this->db->processRowSet($result, true);
    }

	public  function updateBlog($blogData, $blogId)
	{

		$out = array();

		foreach ($blogData as $column => $value) {
			
			array_push($out, "$column='$value'");
		}

		$set = implode(', ', $out);

		$sql = "UPDATE blog SET $set where id = '$blogId'";	
		
		return $this->db->queryUpdate($sql);
	}


	public function getInsights($limit = null, $offset = null)
	{   	

		$sql = "SELECT * from blog where isApproved = 'approved'";

		if (!empty($category) ){
			$sql .= " AND category	='$category'";
		}	

		if (!empty($limit) ){
			$sql .=  " limit " .$offset . ',' . $limit ;
		}

		$result = $this->db->querySelect($sql);	

		if(empty($result)) {
			return false;
		}

		if($this->db->isZero($result)){
			return false;
		}
		
		return $this->db->processRowSet($result);
	}

	public function rowCount(Type $var = null)
	{
		$sql = "SELECT id  from blog where isApproved = 'approved'";
		$result = $this->db->querySelect($sql);	
		return $this->db->rowNum($result);
	}

		
		


}
