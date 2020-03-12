<!DOCTYPE HTML>  
<html>
<head>
<style>
  body{
    background: #1e1e1e;
  }
  .wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background:rgb(231, 171, 60);
  opacity: 0.9;
  padding: 25px;
  border-radius: 40px;
  box-shadow: #f2f2f2; 
}

.wrapper h2{
  font-style:Sans-serif; 
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #000000;
}
.wrapper .btn input[type="submit"]{
  border: 5px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #000000;
  color: #f2f2f2;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}
.error {color: #FF0000;} 
</style>
</head>
<body>  
<div class="wrapper">
<h2>Login</h2>
<form method="post" action="session.php">
    Username : <input type="text" name="username"><br><br>
    Password : <input type="password" name="pwd"><br><br>
    <div class="btn">
      <input type="submit" value="Login">
    </div>   
</form>
</div>

</body>
</html>