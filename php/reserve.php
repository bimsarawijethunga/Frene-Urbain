<html>

    <head>
          <link rel="stylesheet" href="../css/reserve.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="../js/reserve.js"></script>
       

    </head>
    <body>
        
                
        <center>
        
         
             <div class="background">
               <video autoplay muted loop id="myVideo">
  <source src="../images/res.mp4" type="video/mp4">
</video>
                <div class="content">
             <center><img src="../images/logow.png" alt="logo" width="250" height="119.25">
                   <hr>
                 <center>
          <h2>Reserve Property</h2> <br><br><br><br>  
            
         <label class="txt">Property ID &nbsp;   </label>
            <input type="text" value="<?php echo (isset($_GET['id']))?$_GET['id']:'';?>">
                     
                     <br><br>
            <textarea id="toc" name="toc" rows="20" cols="50" class="abt">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent velit lacus, convallis quis sagittis ut, finibus et massa. Curabitur venenatis quis odio nec finibus. Sed imperdiet nibh augue. Aliquam erat volutpat. Donec elit leo, volutpat et ligula at, condimentum ullamcorper lorem. Integer molestie egestas malesuada. Aliquam at elit id quam venenatis commodo. Vivamus sit amet ullamcorper lacus. Sed dignissim congue convallis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum commodo, justo sed convallis laoreet, quam elit vehicula nisi, eget tempus ligula elit non est.

Nulla facilisi. Donec ultrices hendrerit sem, sed tincidunt urna consequat id. Proin vitae finibus urna. In hac habitasse platea dictumst. Aenean scelerisque, diam vitae suscipit luctus, enim neque aliquam risus, eleifend accumsan orci felis sed mauris. Maecenas erat ligula, pretium a tristique ac, facilisis vitae quam. Etiam et vehicula dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam nec lectus quis ligula facilisis lobortis. Nullam id fermentum mauris, eget viverra quam.
</textarea><br><br><br><br>
            
             <input type="checkbox" id="toc" name="toc" value="toc">
  <label for="txt" id="txt" class="txt"> I agree with ToC</label><br><br>
                 <?php
        
             echo '<a href="payment.php?id='.$_GET['id'].'"> <button class="button"><span>Conform  </span></button></a>';
        
            
            ?><br><br>
            <br><br>
            
        </center>
</center>

</div>
            </div>      
        </center>
        
          <hr>
        
        <center>
        
          
            
           
            
           
            
        </center>
    </body>
</html>