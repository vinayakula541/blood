<?php include 'connect.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $query = "select * from register where username = '$username' and password = '$password'";
$res = mysqli_query($conn,$query);
if(mysqli_num_rows($res)>=1)
{
    session_start();
    $_SESSION['auth']='true';
    header('location:display.php');
}
else{echo 'Wrong username or password';}
}

?>

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


   
<h3 style="text-align: center;align-self: center;color: #484949;padding:7px;margin: 6px;">Login</h3>
<div>
<form method = "post" action = "<?php echo $_SERVER['PHP_SELF']?>">
<label></label>
<strong><input class="input-place-holder" type="text" name="username" placeholder="    Username"></strong> 
<br><br>
<label></label>
<input class="input-place-holder" type="password" name="password" placeholder="    Password"><br>

<br>
<button id="button" type="submit">SIGN IN</button>

        </form>
</div>
<br>


<a href ="register.php"><button id="button1" type="submit" > NEW REGISTRATION</button></a>
</body>
</html>