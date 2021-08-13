
<html>

    <head>
          <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="../js/script.js"></script>
       

  
    </head>
    <body>
        
             <video autoplay muted loop id="myVideo">
  <source src="../images/login.mp4" type="video/mp4">
</video>
                <div class="content">
             <center><img src="../images/logow.png" alt="logo" width="250" height="119.25">
                   <hr>
                 <center>
                     
        
            <h2>DealerLogin</h2> <br><br><br><br>
                     
<?php
include "config.php";

                     session_start();
                     $con = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from usr where usr_nm='".$uname."' and passwd='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: ../index.php');
        }else{
            echo "<label class = 'txt'>Invalid username and password</label>";
        }

    }

}
  ?>          
      <form method="post" action="">
        <div id="div_login">
           
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <button class="button" type="submit" value="Login" name="but_submit" id="but_submit"> <span>Login</span> </button>
            </div>
        </div>
    </form>
           <a href="register.php"> <label class="abt"><u>register</u></label><br></a>
            
        </center>
</center>

</div>
        
        
    </body>
</html>