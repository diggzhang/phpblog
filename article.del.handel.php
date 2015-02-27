<?php

	require_once('connect.php');


	$id = 2;
	$deletesql = "delete from article where id = $id";

	if ( mysql_query( $deletesql ) )
	{
		echo "<script>alert('删除成功');window.location.herf='article.add.php';</script>";
	}
	else
	{
		echo "<script>alert('删除失败');</script>";	
	}

?>
