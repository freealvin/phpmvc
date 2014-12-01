<?php
	header("Content-type:text/html;charset=utf-8");
	$db_host = "localhost:3306";
	$db_name = "info";
	$db_user = "root";
	$db_pwd = "";
	$link_id;
	if($link_id=mysql_connect($db_host, $db_user, $db_pwd))
	{
		echo "连接成功";
		mysql_close($link_id);
	}else
	{
		echo "连接失败";
	}
	
?>