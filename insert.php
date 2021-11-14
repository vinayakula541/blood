<?php include 'connect.php';?>
<?php
$username = 0;
$password = null;
$gender = null;
$age = 0;
$group = null;
$location = null;
$sql=null;
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$group = $_POST['group'];
$location = $_POST['location'];

}
$sql = "INSERT INTO register (username,password,gender,age,blood group,location) VALUES ('$username','$password','$gender','$age','$group','$location');";
if($conn->multi_query($sql)==TRUE)
{
    echo "New record inserted successfully","<br>";
   
}
$conn->close();
?>

