<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<head>
		<meta charset="utf-8" />
		<title>西电心愿墙</title>
		<style type="text/css">
		body
		{ 
		background-image:url(img/1.jpg);
		background-repeat: no-repeat;
		background-position:top;
		
		}
		</style>
	</head>
	<body>
	<div class="title"><b><h1>欢迎来到西电心愿墙</h1></b></div>
   
    <div class="demo">
    	<a href="Demo.php">
		<input class="button white" type="button" value="添加我的心愿" /> 
		</a>
	</div> 
		
	<table>

	<tr><td><h2>心愿:</h2></td></tr>
	<?php

	mysql_connect('localhost:3306','root','1234abcd');

	mysql_select_db('xinyuan');

	mysql_query("SET NAMES utf8");

	$sql=mysql_query("select * from test");
	while($row=mysql_fetch_assoc($sql)){
	?>
	<tr>
	<td><?php echo $row['content'];?></td>
	</tr>
	<?php
	}
	?>
	</table>
	</body>
</html>
