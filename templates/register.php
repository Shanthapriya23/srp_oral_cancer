<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
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
     .form-container form select,
     .form-container form option{
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
            <h3>REGISTER HERE!</h3>
            <br/>
            <label for="user_name">User Name:</label><br>
            <input type="text" id="user_name" name="user_name" required placeholder="enter your user name"><br>

            <label for="mail_id">E-mail:</label><br>
            <input type="email" id="mail_id" name="mail_id" required placeholder="enter your E-mail id"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required placeholder="enter your password"><br><br>

            <label for="district">Select your district:</label>
            <select id="district" name="district">
            <option value="CHENGALPATTU">Chengalpattu</option>
            <option value="CHENNAI">Chennai</option>
            <option value="COIMBATORE">Coimbatore</option>
            <option value="CUDDALORE">Cuddalore</option>
            <option value="DHAHRMAPURI">Dharmapuri</option>
            <option value="DINDIGUL">Dindigul</option>
            <option value="ERODE">Erode</option>
            <option value="KALLAKURICHI">Kallakurichi</option>
            <option value="KANCHEEPURAM">Kanchipuram</option>
            <option value="KANYAKUMARI">Kanniyakumari</option>
            <option value="KARUR">Karur</option>
            <option value="KRISHNAGIRI">Krishnagiri</option>
            <option value="MADURAI">Madurai</option>
            <option value="MAYILADUTHURAI">Mayiladuthurai</option>
            <option value="NAMAKKAL">Namakkal</option>
            <option value="PERAMBALUR">Perambalur</option>
            <option value="PUDUKOTTAI">Pudukkottai</option>
            <option value="RAMANATHAPURAM">Ramanathapuram</option>
            <option value="RANIPET">Ranipet</option>
            <option value="SALEM">Salem</option>
            <option value="SIVAGANGAI">Sivagangai</option>
            <option value="TENKASI">Tenkasi</option>
            <option value="THANJAVUR">Thanjavur</option>
            <option value="THENI">Theni</option>
            <option value="THIRUVALLUR">Thiruvallur</option>
            <option value="TIRUVARUR">Thiruvarur</option>
            <option value="TIRUCHIRAPPALLI">Tiruchirappalli</option>
            <option value="TIRUNELVELI">Tirunelveli</option>
            <option value="TIRUPUR">Tiruppur</option>
            <option value="TIRUVANNAMALAI">Tiruvannamalai</option>
            <option value="TUTICORIN">Tuticorin</option>
            <option value="VELLORE">Vellore</option>
            <option value="VILLUPURAM">Viluppuram</option>
            <option value="VIRUDHUNAGAR">Virudhunagar</option>
            </select>

            <input type="submit" name="submit" value="SIGN UP" class="form-btn">
            <p>Already have an account? <a href="login.php">Click here to Login</a></p>
            <?php
            if (isset($_POST["user_name"]) && isset($_POST["mail_id"]) && isset($_POST["password"]) && isset($_POST["district"]))
            {
              $user_name=$_POST["user_name"];
              $mail_id=$_POST["mail_id"];
              $district=$_POST["district"];
              $password=$_POST["password"];
             
              $ins_stmt="INSERT INTO user_table(user_name,mail_id,district,password)
              VALUES('$user_name','$mail_id','$district','$password')";
              include("DB_CONN.php");
            
              $stmt=mysqli_prepare($conn,$ins_stmt);
              mysqli_stmt_execute($stmt);
              echo "record saved successfuly";
            
              mysqli_stmt_close($stmt);
              mysqli_close($conn);
            
            }
            ?>
        
        </form>
    </div>
    
  </body>
</html>