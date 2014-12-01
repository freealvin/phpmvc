functin smarty_block_test($params, $content)
{
	$replace = $params["replace"];
	$maxnum = $params["maxnum"];
	if($replace == ‘true')
	{
		$content = str_replace('，', ',', $content);
		$content = str_replace('。', '.', $content);
	}
	
	$content = strsub($content, 0, $maxnum);
	return $content;
}