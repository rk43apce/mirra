
    <?php 

class ColumsValues 
{	
	
    public static function getColumns($data)
	{
        $columns = "";
        $values = "";
        			
		foreach ($data as $column => $value) {
		    $columns .= ($columns == "") ? "" : ", ";
		    $columns .= $column;		  
        }
        return $columns;			
		
    }

    public static function getValues($data)
	{
        $values = "";
        			
		foreach ($data as $column => $value) {            		   
		    $values .= ($values == "") ? "" : ", ";
		    $values .= "'" . $value . "'";
        }
        return $values;			
		
    }

}
