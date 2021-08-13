<html>

    <head>
          <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        

 
    </head>
    <body>
    
        
          <center> 
<div class="background">
 
    
    <div class="layer">
        
         <center><img src="images/logow.png" alt="logo" width="250" height="119.25">
                     <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="src/about.html">About</a></li>
  <li><a href="src/search.html">Search</a></li>
  <li style="float:right"><a class="active" href="php/register.php">Regiter</a></li>
  <li style="float:right"><a class="active" href="php/login.php">Login</a></li>
</ul>
</center>
        <hr>
    
        <h2>Discover a place
 <br>you'll love to live  </h2>
        
        

   <video src="https://www.robmillsarchitects.com/files/land/city/RMA_Web_land_city_1.mp4" loop muted autoplay width="1280" height="350"></video>
         
    </div>
    
</div>
     
              <div class="dwn">
                  <div class="layerr">
          <br><br>
                      <div class="item">
     <img class="ico" src="images/img1.png" alt="icon">
   
    <span class="caption">24 x 7<br> Service</span>
</div>
                      
                                      <div class="item">
     <img class="ico" src="images/img2.png" alt="icon">
   
    <span class="caption">User-friendly
<br> Service</span>
</div>
                                      <div class="item">
     <img class="ico" src="images/img3.png" alt="icon">
   
    <span class="caption">1000+ Happy
<br> Customers</span>
</div>
  
                      <br><br><br><br><br><br>
                      
                      
                          <?php
    


   include("php/Config.php");
   


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM rev";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
                    
                       
 echo "<div class='scrollmenu'>";
            

  while($row = $result->fetch_assoc()) {
      $desc = $row["usr"];
      $idn = $row["des"];
      echo "<a>" . $row["usr"] . "<br>" . $row["des"] . "</a>&nbsp&nbsp&nbsp&nbsp&nbsp";
  }
} else {
  echo "0 results";
}
      
                      echo "</div>";
$conn->close();
?>
                      
   <br><br>
            <br>
   
              <label class="abt">Connect With us :</label>         <br>
        <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a> 

  
         
    </div>
        
     
            
        </div> 
        
     



        
       
     </center>
        

    </body>
</html>