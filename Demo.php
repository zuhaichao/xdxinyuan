<html>
	<link rel="stylesheet" type="text/css" href="css/base.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>心愿提交ing</title>
<style type="text/css">
	body{
		background-image: url(img/1.jpg);
	}
	form.pos_abs{
		
			position: absolute;
		left: 530px;
		top: 100px;
	}
	h2.pos_left
{
position:relative;
left:-20px
}
</style>

</head>

<body>
	
<form class="pos_abs" method="post">
<h2 class="pos_left">输入心愿：</h2>
<textarea name='str' rows='15' cols='40'>
</textarea>
<input class="button white"  type="submit" name="submit"  value="提交">
	
</form>
<?php
header("Content-type:text/html;charset=utf-8");

if(isset($_POST['submit']))//确认是否单击提交按钮
{
$content=$_POST['str'];//通过post方式获取表单数据并存入到$name变量中

$link=mysql_connect("localhost:3306","root","1234abcd");//链接数据库
    if($link)
    {
        echo"链接数据库成功！";
        mysql_query('SET NAMES UTF8');//设置数据库编码解决无法输入中文的问题
        $sel=mysql_select_db("xinyuan");//选择数据库
            if($sel)
            {
                echo"心愿已提交!\n";
			
                $str="insert into test (content) values ('$content')";//mysql数据库语句
                mysql_query($str);//执行mysql语句
            }
            else
            {
                echo"提交失败了。。";
            }
    }
    else
    {
        echo"网站坏掉了(=@__@=)？！";
        exit;
    }
    
}
?>
<a href="index.php"> <input class="white button"  type="button" name="back" value="回去看看吧"</input></a>
</body>
</html>