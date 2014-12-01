<?php

	function C($name, $method)
	{
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		$classname = $name.'Controller';
		$obj = new $classname();
		$obj->$method();
	}
	
	function M($name)
	{
		require_once('/libs/Model/'.$name.'Model.class.php');
		$classname = $name.'Model';
		$obj = new $classname();
		return $obj;
	}
	
	function V($name)
	{
		require_once('/libs/View/'.$name.'View.class.php');
		$classname = $name.'View';
		$obj = new $classname();
		return $obj;
	}
	
	function ORG($path, $name, $params=array())
	{
		require_once('libs/ORG/'.$path.$name.'.class.php');
		
		$obj = new $name();
		if(!empty($params))
		{
			foreach($params as $key=>$value)
			{
				$obj->$key = $value;
			}
		}
		
		return $obj;
	}
	
	
	function daddslashes($str)
	{
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}
?>