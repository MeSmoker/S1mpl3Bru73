<?php 
	function get_user($db, $name, $password){
		$format = "SELECT * FROM users_table WHERE User_name='%s' AND password='%s';";
		$sql = sprintf($format, $name, $password);
		$result = mysqli_query($db, $sql);

		if($result != null ){
			$user = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $user;
		}

		return null;
	}

	function add_user($db, $name, $password){
		$format = "INSERT INTO users_table (User_name, Password) VALUES ('%s', '%s');";
		$sql = sprintf($format, $name, $password);

		$result = mysqli_query($db, $sql);
	}