include "Link.php"; //连接数据库

$sql = "select * from `text`"; //sql查找数据库中的所有信息

$query = mysqli_query($links,$sql); //获取所有的数据库信息，但是是二进制

while($news=mysqli_fetch_array($query)) { //$news 获取的是$query中的一条信息，并将这条信息转换为数组的形式

?>

} //循环到此为止，上侧是html代码，每将一条信息转换为数组，循环输出一次【php和html嵌套】

?>
