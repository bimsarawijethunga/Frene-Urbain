<html>

    <head>
          <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="../js/script.js"></script>
       

     
    </head>
    <body>
        
        
        <center>
        
         
            
               <video autoplay muted loop id="myVideo">
  <source src="../images/reg.mp4" type="video/mp4">
</video>
                <div class="content">
             <center><img src="../images/logow.png" alt="logo" width="250" height="119.25">
                   <hr>
                 <center>
                     
                     <?php
                     
include "config.php";

                   
                     $con = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "INSERT INTO usr (id, nm, usr_nm , passwd , eml)
VALUES ('1005', '".$name."', '".$username."', '".$password."', '".$email."')";
     

mysqli_query($con,$sql_query); 
header('Location: ../index.php');
               
$to       = $email;
$subject  = 'Welcome to Frene Urbain';
$message  = 'Hello '.$name.', <br><br> <br><br>thank you for choosing us!<br>Staff<br>Frene Urbain <br> <br> this is system generated E-mail. please do not reply<br>';
$headers  = 'From: ravindu.officia00@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
        
        mail($to, $subject, $message, $headers);

    }

}
                     $con->close();
  ?> 
        
              <h2>Register</h2> <br><br><br><br>
            
             <form method="post" action="">         
            <label class="txt">Name</label><br>
            <input name="name" type="text"><br><br>
            <label class="txt">Username</label><br>
            <input name="username" type="text"><br><br>
                  <label class="txt">E-mail</label><br>
            <input name="email" type="text"><br><br>
            <label class="txt">Password</label><br>
            <input name="password" type="password"><br><br><br><br>
            
             <button type="submit" class="button" name="but_submit" id="but_submit"><span>Register  </span></button><br><br>
            
            <a href="login.php"><label class="abt"><u>already have account ?</u></label><br></a>
            <br><br>
                     </form>
        </center>
</center>

</div>
            
        </center>
    </body>
</html>