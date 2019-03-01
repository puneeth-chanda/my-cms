<?php
$conn =mysqli_connect("localhost", "admin", "1124");
if(!conn){
    echo "not connected";
}
if(!mysqli_select_db($conn, 'blogcms')){
    echo "Datebase not selected";
}
$title = $_POST['title'];
$category = $_POST['category'];
$date = $_POST['date'];
$body = $_POST['body'];
$author = $_POST['author'];
$keywords = $_POST['keywords'];

$sql= "INSERT INTO posts (title,category,date,body,author,keywords) VALUES ('$title','$category','$date','$body','$author','$keywords')";
if(!mysqli_query($conn,$sql))
{
    echo "not inserted";
}
else{
    echo "inserted";
}
 header("refresh:2; url=index.php");
?>