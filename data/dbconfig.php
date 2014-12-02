<?php
	header("Content-type:text/html;charset=utf-8");
	$db_host = "localhost:3306";
	$db_name = "info";
	$db_user = "root";
	$db_pwd = "";
	$link_id;//连接操作符
	if($link_id=mysql_connect($db_host, $db_user, $db_pwd))
	{
		echo "连接成功";
		//
	}else
	{
		echo "连接失败";
	}
	
	if(mysql_select_db('info'))
	{
		mysql_query("set names 'utf8'");
		echo "选择数据库成功";
	}else{
		echo "选择数据库失败";
	}
	//mysql_query()
	//mysql_error()
	//echo mysql_insert_id()获得自增的Id
	
	//mysql_fetch_row();//获取和显示数据，返回查询到的第一条语句,返回结果为一个索引数组，索引顺序和查询字段顺序有关
	//mysql_fetch_array();//获取和显示数据，返回索引数组和关联数组
	//mysql_fetch_assoc();//获取和显示数据
	//mysql_fetch_object();//获取和显示数据
	$sql = "SELECT * from test";
	$query = mysql_query($sql);
	
	while($row = mysql_fetch_row($query))
	{
		echo $row[0].'<br/>';
		echo $row[1].'<br/>';
	}
	
	$query = mysql_query($sql);
	while($arr = mysql_fetch_array($query, MYSQL_ASSOC))
	{
		print_r($arr);
		echo '<br/>';
	}
	
	$query = mysql_query($sql);
	while($arr = mysql_fetch_array($query, MYSQL_NUM))
	{
		print_r($arr);
		echo '<br/>';
	}
	
	$query = mysql_query($sql);
	while($arr = mysql_fetch_assoc($query))
	{
		print_r($arr);
		echo '<br/>';
	}
	
	mysql_close($link_id);
?>