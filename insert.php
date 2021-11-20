<?php include 'connect.php';?>
<?php
$username = null;
$password = null;
$gender = null;
$age = null;
$group = null;
$location = null;
if($_SERVER['REQUEST_METHOD']=='POST')
{
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$age = $_REQUEST['age'];
$group = $_REQUEST['group'];
$location = $_REQUEST['location'];

}
$sql = "INSERT INTO register(username,password,gender,age,blood group,location) VALUES('$username','$password','$gender','$age','$group','$location');";
if($conn->multi_query($sql)===TRUE)
{
    echo "New record inserted successfully","<br>";
   
}
$conn->close();
?>

