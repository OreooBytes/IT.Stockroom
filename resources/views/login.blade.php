<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
  <style>
  *{
    margin: 0px;
    padding 0px;
    font-family: 'outfit';
    color: black;
  }
  body{
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
 .login-box{
    background-color: white;
 }
  .main-label{
    font-weight: bold;
    font-size: 20px;
    text-align: center;
  }
  .sub-label{
    font-size: 10px;
    text-align: center;
    margin-bottom: 30px;
  }
  a{
    color: #3A9AFF;
    text-decoration: none;
    margin-top: 20px; 
    font-size: 10px;
  }

  input{
    width: 299px;
    height: 35px;
    margin-top: 0px; 
    margin-bottom: 20px; 
    border-radius: 3px;
    border-style: solid;
  }

  button{
    background-color: black;
    color: white;
    width: 309px;
    height: 35px;
    border-radius: 10px;
    margin-top: 20px; 
  }

</style>
</head>
<body>
<form>
  
    <div class="#">
        <div class="login-box">

            <p class="main-label"> 
                Sign in
            </p>
            <p class="sub-label"> 
                Sign in to access the Inventory Management System
            </p>
            
            <p>Username</p>
            <input type="text" placeholder="Enter username"><br>
            <p>Password</p>
            <input type="password" placeholder="Enter password"> <br>
            
            <a href="#">Forget password</a> |
            <a href="#">Create account</a>

            <br>
            <button type=""> Login </button>
        </div>

        <div class="images">
            <img src="/images/background.png" alt="background">
        </div>
     </div>

</form>
</body>
</html>