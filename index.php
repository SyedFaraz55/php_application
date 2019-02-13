<?php 
	
		if($_SERVER['REQUEST_METHOD']=='post') {
			$name = $_REQUEST['username'];
			if(empty($name)){
				print "Empty";
			} else {
				echo "your user name is : ".$name;
			}
		}

?>