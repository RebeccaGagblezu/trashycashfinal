<?php 	

		// $server="localhost";
		// $username="root";
		// $password="";
		// $dbname="trashycash";

		$server="server222.web-hosting.com";
		$username="trasmgpy_becky";
		$password="Great@2018";
		$dbname="trasmgpy_dbtrashycash";

			$db= new mysqli($server,$username,$password,$dbname)

			// if(!$db) {
			// 	die("error connecting to the database: ".mysql_connect_error());
			// }
			or die("error connecting to the database: ".mysql_connect_error());

			echo "Connected successfully";
			





 ?>