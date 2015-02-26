<?php
	require_once('config.php');
	//数据库链接
	//链库
	//***bug line
	//if( $con = mysql_connect(HOST, uSERNAME, PASSWORD) )
	echo "Hello";
	if( $con = mysql_connect(HOST, USERNAME) )
	{
		echo mysql_error();	
	}
	//选库
	
	if( mysql_select_db('info') )
	{
		echo mysql_error();	
	}
	//字符集
	
	if( mysql_query('set names utf8') )
	{
		echo mysql_error();	
	}
	//查询
	echo "Hello";
?>
