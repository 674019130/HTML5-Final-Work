
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5
 * Time: 20:13
 */
//获取登陆名和密码然后和数据库中的数据进行匹配
$username_Login=$_POST["username_Login"];
$password_Login=$_POST["password_Login"];
$count=0;

$servername = "localhost";
$username = "root";
$password = "lp090911";
$dbname = "test";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
//    die("连接失败: " . mysqli_connect_error());
}
echo "连接成功"."<br/>";


$sql = "SELECT * FROM USER";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
//查询记录条数
//    echo mysqli_num_rows($result);
// 输出数据
    while($row = mysqli_fetch_assoc($result)) {
//        echo "username: " . $row["user"]. " - password1: " . $row["password1"]. " password2 " . $row["password2"]. "<br>";   //此句打印数据库中的内容。
        if($username_Login===$row["user"] and $password_Login===$row["password1"]){
//            echo '存在此帐号!';
            header("Location:../HTML01/FinalIndex.html");
        }
        else{
            $count++;
            if($count===mysqli_num_rows($result)){


                echo "<script>alert('系统中无此帐号!请注册后进行登陆');location.href='../HTML01/login and signup.html'</script>";

            }
        }
    }
}
else {
//    echo "0 结果";
}
mysqli_close($conn);

?>








