<?php

	require_once('connect.php');
	
	//把传递来的信息入库
	//print_r($_POST);

	//在入库前针对信息校验
	$id = $_POST['id'];
	if( !(isset($_POST['title']) && ( !empty($_POST['title']) ) ) )
	{
		echo "<script>alert('Title is NULL'); window.location.href='article.add.php'</script>";		
	}
	else
	{
		$title = $_POST['title'];
	}

	$author		 = $_POST['author'];
	$description = $_POST['description'];
	$content	 = $_POST['content'];
	$timeline 	 = time();

//	$insertsql = "insert into article(title, author, description, content, timeline) values('$title', '$author', '$description', '$content', $timeline)";

	$updatesql = "update article set title = '$title', author = '$author', description = '$description', content = '$content', timeline = $timeline where id = $id";
	//测试语句是否正确

	if( mysql_query($updatesql) )
	{
		echo "<script>alert('文章修改成功'); window.location.href='article.add.php'</script>";		
	}
	else
	{
		echo mysql_error();
		echo "<script>alert('文章修改发布失败'); window.location.href='article.add.php'</script>";		
	}

?>
