<?php
	ob_start();
  include('connect.php');

	class Functions extends Database{
        public function sanitize($conn,$data)
        {
            $clean=mysqli_real_escape_string($conn,$data);
            return $clean;
        }

	}

	//Set Default Time Zone
	date_default_timezone_set('Asia/Kolkata');

	//Now create new obect for functions
	$obj=new Functions();

	//Now Connecting Database
	$conn = $obj->db_connect();
	//Selecting Database
	$db_select = $obj->db_select($conn);
?>
