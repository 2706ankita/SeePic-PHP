

<?php   
    include("Nav.php");
?>

<?php
      include("Intro.php");
?>

      

      <section id="about" class= my-5>
          <div class= py-5>
              <h2 class=text-center>About Us</h2>
          </div>
          <div class="container-fluid">
              <div class=row>
                  <div class= "col-lg-6 col-md-6 col-12">
                      <div class=iframe-box>
                      <iframe class=iframe-vdo src="images/feature_vdo.mp4" width="84%" height="300" style="border:1px solid black"></iframe>
                      </div>
                  </div>
                  <div class= "col-lg-6 col-md-6 col-12 description">
                          <h2 class=pb-4>SeePic</h2>
                          <p>Hey there!👋 SeePic is a one-stop for picturesque and high quality photos.Our collection of natural landscape, historical monuments, street and miscellaneous photographs can be used for your personal or professional projects. All you want to do is to mention photo credit to <strong>Seepic</strong> by including the link <em><strong><a href="index.php">SeePic - www.seepic_arts.com</a></strong></em>
                          and here you are! good to go... </p>
                          <a href="about.php">Read more..</a>
                  </div>
              </div>
          </div>
      </section>

     
      <?php
            include("gallery.php");
      ?>
      
      <?php
            include("contact.php");
      ?>


      <?php
            include("footer.php");
      ?>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>