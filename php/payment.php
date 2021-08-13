<html>

    <head>
          <link rel="stylesheet" href="../css/reserve.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
          <script type="text/javascript" src="../js/pay.js"></script>


    </head>
    <body>
        

        
        <center>
         <div class="background">
               <video autoplay muted loop id="myVideo">
  <source src="../images/pay.mp4" type="video/mp4">
</video>
                <div class="content">
             <center><img src="../images/logow.png" alt="logo" width="250" height="119.25">
                   <hr>
    <h2>Payment</h2> <br><br><br><br>
                 
                 
                 <p class="txt">We will send you the dealer's contact details via E-mail<br>If you're using online payment system details will send immiditely <br> If you're using bank deposit method, we will send the details after conforming your payment <br></p>
                 <?php
                  session_start();
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    
   
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
                 
                 $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usr WHERE usr_nm = '".$_SESSION['uname']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
                    
                       

          

  while($row = $result->fetch_assoc()) {
      $eml = $row["eml"];
      $name = $row["nm"];
   echo "<p class='txt'>Your E-mail :- " .$eml . "</p>";
      echo $name;
        

     
    
      
      
      

  }
    
} else {
  echo "0 results";
}

                 $sqll = "SELECT * FROM ppty WHERE id = '".$_GET['id']."'";
                 
                 $resultt = $conn->query($sqll);
                 
                   while($row = $resultt->fetch_assoc()) {
      $dlr = $row["dlr"];
     
   echo $dlr;
        

     
    
      
      
      

  }
                 
                               $sqla = "SELECT * FROM dlr WHERE id = '".$dlr."'";
                 
                 $resulta = $conn->query($sqla) or die($conn->error);
                 
                   while($rowa = $resulta->fetch_assoc()) {
      $dnm = $rowa["nm"];
       $dml = $rowa["eml"];
     
   echo $dnm;
                        echo $dml;
        

     
    
      
      
      

  }
                    
      echo' <br><br><br><br>
            <p class="txt"><b>Bank Deposit: </b><br><br> Acc no - 2004589621<br>Bank - Sampath bank<br> Branch - Colombo 07</p>
            
            <br><br><h2>OR</h2>
             <a href="sam.php?dnm='.$dnm.'&dml='.$dml.'&ppty='.$_GET['id'].'&eml='.$eml.'&cnm='.$name.'"><button class="button"><span>Redirect to payment gateway</span></button></a><br><br>';
                 
            
$conn->close();
?>
     

</center>

</div>
            </div>      
            
           
            
           
            
        </center>
    </body>
</html>