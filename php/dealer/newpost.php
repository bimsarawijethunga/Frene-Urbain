<?php include("../config.php");?>
<?php

                 $con = mysqli_connect($servername, $username, $password,$dbname);
    
    
    
    $sql1 = "SELECT MAX(id) AS num FROM ppty";
$result1 = $con->query($sql1);

if ($result1->num_rows > 0) {
 
            

  while($row1 = $result1->fetch_assoc()) {
      $p_id = $row1["num"];
      $pp_id = $p_id + 1;
  }
} else {
 
}
    
    $did = $_GET['id'];
error_reporting("0");
if(isset($_POST['submit'])) {   
    // Get image name   
    $thumb = $_FILES['thumb'];
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];
    $image3 = $_FILES['image3'];
    $image4 = $_FILES['image4'];
    // Get text
    $id= $_POST['id'];
    $rng= $_POST['rng'];
    $title= $_POST['title'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    // Image file directory 
    $target = "images/".basename($image);
    // Now insert query

    
    
    
    
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
    $sql = "INSERT INTO ppty(id, distri, title, des, prc, thumb , dlr) values ('$pp_id','$rng', '$title', '$description', '$price', '$thumb', '$did')";
    // Execute query
    mysqli_query($con,$sql);  
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))    
    {
      $img = "image uploading successfully";
    } else {
      $img = "faild image uploading";   
    }
    
    
     $sql2 = "INSERT INTO img(id, img1, img2, img3, img4) values ('$pp_id','$image1', '$image2', '$image3', '$image4')";
    // Execute query
    mysqli_query($con,$sql2);  
    
    
    $to       = $_GET['eml'];
$subject  = 'Your post sccesfully posted';
$message  = 'your post is live in our website !!';
$headers  = 'From: ravindu.officia00@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
    
    
     header('Location: dashboard.php');
}   

$con->close();

?>  

<html>    
<head>
      <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <center>
               <video autoplay muted loop id="myVideo">
  <source src="../../images/vie.mp4" type="video/mp4">
</video>
          
            <div class="content">
              <form method="post" enctype="multipart/form-data">
                <h5 class="alert-success">
                  <?php if(isset($img)){ echo $msg;}?>
                </h5>
                <div>
                  <label class="hdr">ID</label>
                 <br> <input type="text" data-size="sm" name="id" value="<?php echo $pp_id;  ?>" disabled>
                   <br><br><br> <label class="hdr">District</label><br><br>
                     <select id="district" class="range" name="rng">
    <option>Select District</option>
</select> <br><br><br> <label class="hdr">Title</label><br>
                     <br> <input type="text" data-size="sm" name="title">
                    
                    <br><br><br> <label class="hdr">Description</label><br>
                     <br> <input type="text" data-size="sm" name="description">
                    
                    
                    <br><br><br> <label class="hdr">price (only numbers)</label><br>
                     <br> <input type="text" data-size="sm" name="price">
                     
                </div><br><br><br><br><br>
                <div ><br>
                  <label class="hdr">Thumbnail</label><br>
                  <input type="file" class="filestyle" data-size="sm" name="thumb">
                </div>
                  <br><br><br><br>
                   <div class="form-group">
                  <label class="hdr">image 01</label><br>
                  <input type="file" class="filestyle" data-size="sm" name="image1"><br>
                       
                       <label class="hdr">image 02</label><br>
                  <input type="file" class="filestyle" data-size="sm" name="image2"><br>
                       
                       
                       <label class="hdr">image 03</label><br>
                  <input type="file" class="filestyle" data-size="sm" name="image3"><br>
                       
                       
                       <label class="hdr">image 4</label><br>
                  <input type="file" class="filestyle" data-size="sm" name="image4"><br>
                </div><br><br><br>
                <div class="form-group">
                  
                    
                    <button type="submit" class="button" value="Save" name="submit"type="submit"value="Save" name="submit" class="button" id="but_submit"> <span>Upload</span> </button>
                </div>
              </form>
            </div>
    
              <script>

window.onload = function showPanel(fieldName) {
   


var select = document.getElementById("district");
var options = ["Anuradhapura", "Gampaha", "Colombo", "Galle", "Jaffna"];
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}


}

function outputUpdate(n) {
  document.querySelector('.num').value = n;
}



</script>    
 </center>
</body>    
</html>