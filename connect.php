<?php
	
	//include the configuration file.
	require_once('config.php');


	//Connect to database
	if(!(mysql_connect(HOST, USERNAME, PASSWORD))){
	
		echo mysql_error();
	}

	//select the database
	if(!(mysql_select_db("ugacsaco_newsArticle"))){
		echo mysql_error();
	}
	//select query
	if(!(mysql_query("set names utf8"))){
		echo mysql_error();
	}
	
?>