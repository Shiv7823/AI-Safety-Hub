
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ash";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
    echo "Yes";
}
else{
    echo "No";
}

$news = $_POST['news'];
$solution = $_POST['solution'];

$query = "INSERT INTO `user`(`news`, `solution`) VALUES($news , $solution)";
$result = mysqli_query($conn, $query);

if($result)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./addnewnews.html");
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Try Again !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./addnewnews.html");
}

?>
