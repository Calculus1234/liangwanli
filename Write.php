include "Link.php"; //引用连接数据库的php文件

if(!empty($_POST["sub"])){ //判断是否按下发表留言按钮

$text=$_POST["text"]; //把提交的text的内容放在此处定义的$text

$sql="INSERT into `wordlist` (`id`,`num`,``) values ('','" . $text . "') "; //sql添加到数据库语句

mysqli_query($links, $sql);

echo "发表成功！"; //输出发表成功

}

?>
