<?php

include ('DB_CONN.php');

session_start();

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $mail_id = $_POST['mail_id'];
    $password = $_POST['password'];

    $select = " SELECT * FROM user_table WHERE mail_id = '$mail_id' and password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) 
    {
      $row = mysqli_fetch_array($result);
      $_SESSION['mail_id'] = $row['mail_id'];
      header('location:index.php');
    } 
    else 
    {
      $error[] = 'incorrect mail_id or password!';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <style>
    body{
      background-color: rgba(17, 219, 207,0.3);
    }
    .form-container{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding:20px;
        padding-bottom: 60px;
        
     }
     
     .form{
        padding:20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.8);
        background-color: rgba(0,0,0,0.3);
        text-align: center;
        width: 500px;
     }
     
     .form-container form h3{
        font-size: 30px;
        text-transform: uppercase;
        margin-bottom: 10px;
        color:#333;
     }
     
     .form-container form input,
     .form-container form select{
        width: 70%;
        padding:10px 15px;
        font-size: 17px;
        margin:8px 0;
        border-radius: 5px;
     }
     label
     {
      text-align: left;
      color: #fff;
      font-weight: bold; 
      font-size: 28px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); 
     }
     .form-container form select option{
        background: #fff;
     }
     .form-btn
     {
        background:rgba(17, 219, 207,0.8);
        text-transform: capitalize;
        font-size: 28px;
         text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5); 
        cursor: pointer;
     }
     
     .form-container form .form-btn:hover{
        background: rgba(17, 219, 207,0.8);
        color:#fff;
     }
     
     .form-container form p{
        margin-top: 10px;
        font-size: 20px;
        color:#333;
     }
     
     .form-container form p a{
        color:rgba(17, 219, 207,0.8);;
     }
     
     .form-container form .error-msg{
        margin:10px 0;
        display: block;
        background: rgba(17, 219, 207,0.8);
        color:#fff;
        border-radius: 5px;
        font-size: 20px;
        padding:10px;
     }
     
      </style>
  </head>
  <body>
    <div class="form-container">
        <form class="form" action="#" method="post">
         <h3>LOGIN PAGE</h3>
         <br/>
         <?php 
            if (isset($error)) 
            {
               foreach ($error as $error) 
               {
                  echo '<span class="error-msg">' . $error . '</span>';
               }
            } 
         ?>
            <label for="mail_id">E-mail:</label><br>
            <input type="mail_id" id="mail_id" name="mail_id" required placeholder="enter your mail id"><br>
            <label for="user_name">Username:</label><br>
            <input type="text" id="user_name" name="user_name" required placeholder="enter your username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required placeholder="enter your password"><br><br>
            <input type="submit" name="submit" value="login" class="form-btn">
            <p>don't have an account? <a href="register.php">register now</a></p>
        </form>
    </div>
    
  </body>
</html>