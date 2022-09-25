header("Content-Type:wordlist/html;charset=utf-8"); //防止中文乱码

$link=mysqli_connect("wordlist.sql"); //服务器地址

mysqli_select_db($links,"wordlist.sql"); //连接数据库

?>
