<?php

require("../Connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
   <style>
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:"poppins",sans-serif;
      }
      body{
        background-color: #c9d6ff;
        background:linear-gradient(to right,#e2e2e2,#c9d6ff);
      }
      .container{
        background:#fff;
        width:450px;
        padding:1.5rem;
        margin:50px auto;
        border-radius:10px;
        box-shadow:0 20px 35px rgba(0,0,1,0.9);
      }
      form{
        margin:0 2rem;
      }
      .form-title{
        font-size:1.5rem;
        font-weight:bold;
        text-align:center;
        padding:1.3rem;
        margin-bottom:0.4rem;
      }
      input{
        color:inherit;
        width:100%;
        background-color:transparent;
        border:none;
        border-bottom:1px solid #757575;
        padding-left:1.5rem;
        font-size:15px;
      }
      .input-group{
        padding:1% 0;
        position:relative;

      }
      .input-group i{
        position:absolute;
        color:black;
      }
      input:focus{
        background-color: transparent;
        outline:transparent;
        border-bottom:2px solid hsl(327,90%,28%);
      }
      input::placeholder{
        color:transparent;
      }
      label{
        color: #757575;
        position:relative;
        left:1.2em;
        top:-1.3em;
        cursor:auto;
        transition:0.3s ease all;
      }
      input:focus~label,input:not(:placeholder-shown)~label{
        top:-3em;
        color:hsl(327,90%,28%);
        font-size:15px;
      }
      .forget{
        text-align:right;
        font-size:1rem;
       margin-bottom:1rem;

      }
      .forget a{
        text-decoration:none;
        color:rgb(125,125,235);
      }
      .forget a:hover{
        color:blue;
        text-decoration:underline;
      }
      .btn{
        font-size:1.1rem;
        padding:8px 0;
        border-radius:5px;
        outline:none;
        border:none;
        width:100%;
        background:rgb(125,125,235);
        color:white;
        cursor:pointer;
        transition:0.9s;
      }   
      .btn:hover{
        background:#07001f;
      }
      
    </style>

  </head>
  <body>

      <div class="container" id="signIn">
        <h1 class="form-title">Admin Login</h1>
        <form method="POST">
          <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="AdminName" id="userid" placeholder="User Name" required>
              <label for="text">User Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="AdminPassword" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="forget">
            <a href="#">Forget Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="Signin">
        </form>
        
      </div>

<?php
  
if(isset($_POST['Signin']))
  {
    $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
      {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['AdminName'];
        header("location: ../ADMIN/Admin pannel.php");
      }
    else
      {
        echo"<script>alert('Invalid Usename or Password')</script>";
      }
  }    
  
  ?>    

</body>
</html>      