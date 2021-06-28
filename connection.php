<?php

	$con = mysqli_connect("localhost","root","","charted_db");

		if($con){
			#echo "Connection success" ;
		}
        else{
            echo "connection failed" ; 
        }
?>