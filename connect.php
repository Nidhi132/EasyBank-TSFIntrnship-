<?php

	Class Database
	{
		public function db_connect()
		{
			$conn = mysqli_connect('127.0.0.1:3307', 'root', '') or die(mysqli_error());
			return $conn;
		}
		public function db_select($conn)
		{
			$db_select = mysqli_select_db($conn, 'ebank') or die(mysqli_error());
			return $db_select;
		}
		public function select_data($tbl_name, $where="", $other="")
		{
			$query = "SELECT * FROM $tbl_name";
			if($where != "")
			{
				$query .= " WHERE $where";
			}
			if($other != "")
			{
				$query .= " $other";
			}
			return $query;
		}
		public function insert_data($tbl_name, $data)
		{
			$query = "INSERT INTO $tbl_name SET $data";
			return $query;
		}
		public function update_data($tbl_name, $data, $where)
		{
			$query = "UPDATE $tbl_name SET $data WHERE $where";
			return $query;
		}
		public function execute_query($conn,$query)
		{
			$res = mysqli_query($conn,$query) or die(mysqli_error($conn));
			return $res;
		}
		public function num_rows($res)
		{
			$num_rows = mysqli_num_rows($res);
			return $num_rows;
		}
		public function fetch_data($res)
		{
			$row = mysqli_fetch_assoc($res);
			return $row;
		}
	}
?>
