<!DOCTYPE HTML>  
<html>
<style>
    body{
        background:rgb(210, 150, 60);
    }
    h1{
        font-style:Sans-serif; 
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #000000;
    }
    .btn {
        position: center;
        border: 0px;
        margin-top: 10px;
        padding: 15px;
        text-align: center;
        background: #000000;
        color: #f2f2f2;
        text-transform: uppercase;
        letter-spacing: 5px;
        font-weight: bold;
        border-radius: 25px;
        width: 25%;
        display: block;
        margin: auto auto;
    }
    .btn:hover {
        background-color: #555555;
        color: white;   
    }

</style>
<head>
</head>
<body>  
</body>
</html>
<?php
$username="admin";
$pwd="password";

session_start();

if(isset($_SESSION['username'])){
    echo "<h1>Welcome ".$_SESSION['username']."</h1>";

    echo "<br><a href='logout.php' ><input type= button class=btn align=right value=logout name=logout></a>";
}
else{
    if($_POST['username']==$username && $_POST['pwd']==$pwd){
        $_SESSION['username']=$username;
        echo "<script>location.href='session.php'</script>";
    }
    else{
        echo "<script>alert('Username or Password incorrect!')</script>";
        echo "<script>location.href='read.php'</script>";
    }
}
?>