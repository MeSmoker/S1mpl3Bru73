<?php 
	$link = mysqli_connect('localhost','root','','users');

	if(mysqli_connect_errno()){
		echo 'Error!';
		exit();
	}
