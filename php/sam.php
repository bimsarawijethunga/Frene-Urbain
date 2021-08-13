<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
    <?php
       
       
       include "config.php";

                   
                     $con = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
       
       $as = $_GET['cnm'];
       $ds = $_GET['dnm'];
       $dg = $_GET['ppty'];
       
             $sql_query = "INSERT INTO rsrv (c_nm, d_nm, ppty)
VALUES ('$as', '$ds', '$dg')";
     

mysqli_query($con,$sql_query); 
header('Location: ../index.php');
       
       
$to       = $_GET['eml'];
$subject  = 'Dealer information of '.$_GET['ppty'].'';
$message  = 'Hello '.$_GET['cnm'].', <br><br> we are happy to help you to find your next place. <br> this is dealer information for '.$_GET['ppty'].' <br><br> Dealer name :- '.$_GET['dnm'].'<br> Dealer Email :- '.$_GET['dml'].'<br><br>thank you for choosing us!<br>Staff<br>Frene Urbain <br> <br> this is system generated E-mail. please do not reply<br>';
$headers  = 'From: ravindu.officia00@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>
      
   </body>
</html>