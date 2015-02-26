<?php

	require_once('connect.php');
	
	//把传递来的信息入库
	//print_r($_POST);

	$title 		 = $_POST['title'];
	$author		 = $_POST['author'];
	$description = $_POST['description'];
	$content	 = $_POST['content'];

	//在入库前针对信息校验
	if( !(isset($_POST['title']) && ( !empty($_POST['title']) ) ) )
	{
		echo "<script>alert('Title is NULL'); window.location.href='article.add.php'</script>";		
	}

	$dateline = time();

	$insertsql = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
	//测试语句是否正确
	//echo $insertsql;
	mysql_select_db('info');
	echo mysql_error();
	echo "world";
	if( mysql_query($insertsql) )
	{
		echo "<script>alert('文章插入成功'); window.location.href='article.add.php'</script>";		
	}
	else
	{
		$err = mysql_error();
		echo "<script>alert('$err+文章发布失败'); window.location.href='article.add.php'</script>";		
	}
?>
