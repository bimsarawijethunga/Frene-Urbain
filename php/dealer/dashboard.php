<html>

    <head>
          <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

    </head>
    <body>
        
          <div class="background">
 
             <video autoplay muted loop id="myVideo">
  <source src="../../images/reg.mp4" type="video/mp4">
</video>
    <div class="content">
        
         <center><img src="../../images/logow.png" alt="logo" width="250" height="119.25">

             <hr>
</center>
        
    
       <center> <h2>Dealer Dashboard </h2></center><br><br><br>
     
     <?php   echo'<a href="newpost.php?id='.$_GET['id'].'" target="_blank"><button class="button" id="but_submit"> <span>New post</span> </button></a>'; ?>
  <h2> &nbsp;Your Posts </h2>
<?php



        
 include("../Config.php");
   session_start();


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


        
    
$sql = "SELECT * FROM ppty WHERE dlr = '".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
                    
                       

          

  while($row = $result->fetch_assoc()) {
      $ttl = $row["title"];
      $desc = $row["id"];
      $idn = $row["des"];
        

     
      
      echo '  <div class="gallery">
  <a target="_blank" href="view.php?id='.$row['id'].'">
  <img src="data:image/jpeg;base64,'.base64_encode($row['thumb'] ).'" width="600" height="400" class="img-thumnail" /> 
  </a>
  <div id="hd1" class="hdr">'.$row['title'].'
     </div><br>
      <div id="des2" class="des">ID : '.$row['id'].'</div><br>
      
        <div id="hd2" class="hdr">'.$row['prc'].' $
     </div><br>
     <form method="post" action="">
     <button class="button" type="submit" value="Login" name="but_submit" id="but_submit"> <span>Delete</span> </button></form>
</div>';
      
      
      

  }
    
} else {
  echo "0 results";
}
   
  if(isset($_POST['but_submit'])){
      
      $sql1 = "DELETE FROM ppty WHERE id= $desc";
      
      if ($conn->query($sql1) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
  }
        
                    
$conn->close();
?> 
  
      <br><br><br>   
    </div>
    <label class="abt">Connect With us :</label>
        <br>
        <a onclick="loadresult()" href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
</div>
       
    
      
            
      
  
        
  
    

    </body>
</html>