

<html>

    <head>
          <link rel="stylesheet" href="../css/view.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="../js/view.js"></script>


    </head>
    <body>
            <?php


   include("Config.php");
   session_start();


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,distri,title,des, prc FROM ppty WHERE id='".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
       $dist = $row["distri"];
      $ttl = $row["title"];
      $desc = $row["des"];
      $idn = $row["id"];
      $pr = $row["prc"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
        
        <div class="background">
            
 <video autoplay muted loop id="myVideo">
  <source src="../images/vie.mp4" type="video/mp4">
</video>
    
    <div class="content">
        
         <center><img src="../images/logow.png" alt="logo" width="250" height="119.25">
                     <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../src/about.html">About</a></li>
  <li><a href="../src/search.html">Search</a></li>
  <li style="float:right"><a class="active" href="src/register.html">Regiter</a></li>
  <li style="float:right"><a class="active" href="src/login.html">Login</a></li>
</ul>
             <hr>
</center>
        
   <br> <h2><?php echo $ttl; ?>  <br> #<?php echo $idn; ?></h2><br><br>
        
        
        <?php




        
 include("Config.php");



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM img WHERE id = '".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
                    
                       

          

  while($row = $result->fetch_assoc()) {
      
      echo '

          <div class="row">
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img1'] ).'" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img1'] ).'" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img1'] ).'" style="width:100%" onclick="currentSlide(1)" alt="image">
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img2'] ).'" style="width:100%" onclick="currentSlide(2)" alt="image">
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img3'] ).'" style="width:100%" onclick="currentSlide(3)" alt="images">
    </div>
    <div class="column">
      <img class="demo cursor" src="data:image/jpeg;base64,'.base64_encode($row['img4'] ).'" style="width:100%" onclick="currentSlide(4)" alt="image">
    </div>
  </div>
</div>   
';
  }
    
} else {
  echo "0 results";
}
      
                    
$conn->close();
?> 
        
        
        <br> <br> <br> <br> <br>
     
         <center>
        <label class="desc"><?php echo $desc; ?> <br><br><br> Area : <?php echo $dist; ?></label>
     
         <br><br><br>    <div id="hd2" class="hdr"><?php echo $pr; ?> $
     </div>
        <br> <br>
             <?php
        
             echo '<a href="reserve.php?id='.$_GET['id'].'"> <button class="button"><span>Reserve Property  </span></button></a><br><br>';
        
            
            ?>
         
         <br> <br> <br>


        <footer>
        <label class="abt">Connect With us :</label>
        <br>
        <a onclick="loadresult()" href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        </footer>
</center>
        

  
         
    </div>
    
</div>
    

        
    
    
    </body>
</html>