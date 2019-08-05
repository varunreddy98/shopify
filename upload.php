
<?php
$conn=new mysqli("localhost","root","","store");
if($conn->connect_error){
   die("connection failed:".$conn->connection_error);
}
echo 'wwwwwwwww';
$name=$_POST['name'];
$gender=$_POST['gender'];
$price=$_POST['price'];
$brand=$_POST['brand'];
$imageFileType='jpeg';
$category=$_POST['category'];
//$image_name=$_FILES['image1']['name'];
$sql="INSERT INTO items(name,gender,price,brand,category) VALUES('$name','$gender','$price','$brand','$category')";
$conn->query($sql);
echo "inserted successfully22"."<br>";
$conn->close();
?>