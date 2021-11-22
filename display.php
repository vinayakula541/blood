<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
           color: rgb(255, 72, 0);
            
           text-decoration-thickness: 10%;
           text-align: center;
           display: inline;
            margin: auto;
            height:0.5%;
        }
        img{
            
            width: 5%;
            height: 0.5%;
        }
        body{
            background-color:antiquewhite;
        }
        #button1{
                background-color:rgb(220, 20, 20);
                color: white;
                width: 195px;
                height: 30px;
                border-style: solid;
                border-width: 2px;
                border-color: rgba(247, 243, 243, 0.726);
                margin-right : 9%;
            }
            #button{
                background-color:rgb(220, 20, 20);
                color: white;
                width: 195px;
                height: 30px;
                border-style: solid;
                border-width: 2px;
                border-color: rgba(247, 243, 243, 0.726);
                margin-right : 7%;
            }
            .input-place-holder{
                align-self: center;
                width: 180px;
                border-style:solid;
                border-width: 1.7px;
                border-color: rgba(136, 136, 136, 0.911);
                border-radius: 6px;
                padding:8px;
                margin: 10px 0px 0px 20px;
                font-size: 15px;
            }
            h3{
                color:orange;
            }
            div{
                margin:1% 0% 0% 3%;
                width: 50%;
                height: 10%;
                width: 250px;
                height: 250px;
                background-color:#ebeeed;
                align-self: center;
                border-style:solid;
                border-radius: 6px;
                border-width: 1.7px;
                border-color:#2d2e2ea1;
                color: #808181;
                font-family:sans-serif;
                box-shadow: 10px 10px 8px #888888;
                           
            }
            a{
                text-decoration: none;
                txt-color: #545555;
                color: #909292;
                margin-left: 15%;
                font-size: 12px;
            }
            
        



    </style>
    
<title>AB BLOOD BANK</title>
</head>
<body>
   <center> <h1><strong>AB BLOOD BANK</strong><h1><center>
   
    <marquee behavior="scroll" direction="left" style="
    color: rgb(32, 70, 28);
    font-weight: bold;
    background: #d15208d3;margin-bottom: 0;
    padding: 10px 0 10px; 
    font-size: 14px;display:block" scrolldelay="100">|| "Give blood and keep the world beating" || "Sometimes money cannot save life but donated blood can" || "Your droplets of blood may create an ocean of happiness” </marquee>


   

</body>
</html>









<?php include 'connect.php';?>
<?php
session_start();
if(!$_SESSION['auth'])
{
  header('loaction:login.php');
}

?>
<h1 style="font-size:40px; color:black;">Welcome you are logged in successfully..!!</h1>
<br>
<?php
$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
   {
    echo "uid:" , $row["username"], " - age:" , $row["age"],  "-gender:" , $row["gender"], "-group:" , $row["group"], "-location: " , $row["location"], "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
<a href="login.php"><input type="button" value="logout"></a>