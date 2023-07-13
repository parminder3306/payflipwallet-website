
<?php
header("Content-Type: application/json");
include_once("../admin/auth/db.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	$empCls = new Employee($connString);
	$empCls->getEmployees($params);
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function getRecords($params) {
	    $data=false;
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		if(empty($params['token'])){
			echo "Token is empty";
			die();
		}else{
		$token= $params['token'];
		}
		$timecheck=time()-300;
		$sql = $sqlRec = $sqlTot = $where = '';
		
		
	 if( !empty($params['searchPhrase']) ) { 		
		    $sql = "SELECT * FROM `online` WHERE token='$token' and time>'$timecheck' and";	 
			$where .=" (webpage LIKE '".$params['searchPhrase']."%' ";    
			$where .=" OR refer_url LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR ip_address LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR country_code LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR country_name LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR region_name LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR city LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR device LIKE '".$params['searchPhrase']."%' ";
			$where .=" OR device_type LIKE '".$params['searchPhrase']."%')"; 
	   }else{
	     $sql = "SELECT * FROM `online` WHERE token='$token' and time>'$timecheck' ORDER by time DESC";	  
	   }
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		if(isset($where) && $where != '') {
			$sqlTot .= $where;
			$sqlRec .= $where;
			
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot users data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch users data");
		$id = 0;
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
		    if($row['again']=='1'){
		     $status='<b style="color:#ff8c00;">Active</b>';    
		    }else{
		      $status='<b style="color:#1dda1d;">Active</b>';   
		    }
			$data[] =array ("number"=>++$id, "id"=>$row['id'],"token"=>$row['token'],"webpage"=>$row['webpage'],"refer_url"=>$row['refer_url'],"ip_address"=>$row['ip_address'],"country_code"=>$row['country_code'],"country_name"=>$row['country_name'],"region_name"=>$row['region_name'],"city"=>$row['city'],"device"=>$row['device'],"time"=>$row['time'],"status"=>$status);
		}
		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data 
			);
		
		return $json_data;
	}
}
?>
	