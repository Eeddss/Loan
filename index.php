<?php
  session_start();
  include('admin/vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
<!--End Navigation-->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('vendor/img/about.jpg')">
        </div>
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/Home1.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/Home2.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/Home3.jpg')">
        </div>
        <!-- Slide Four - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/Home4.jpg')">
        </div>
        <!-- Slide Five - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/Home5.jpg')">
        </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to LMS</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Why Us</h4>
          <div class="card-body">
            <p class="card-text" style="text-align: justify;">
              Take control of your dreams and aspirations with our flexible and tailored loaning plans designed to empower you every step of the way. 
              Whether you're looking to start a new business, expand your existing one, or pursue personal goals, our comprehensive loaning options are here to make it happen. 
              With competitive interest rates, personalized repayment terms, and a seamless application process, accessing the funds you need has never been easier.<br>
              <br>
              Our dedicated team of financial experts is ready to guide you through the entire process, ensuring you find the perfect loaning solution that suits your unique needs. 
              Don't let financial constraints hold you back any longer – seize this opportunity to bring your plans to life. 
              Avail our loaning plans today and embark on a journey towards success, financial stability, and a brighter future.</p>
          </div>
          
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Loan Plans and Offers</h4>
          <div class="card-body">
            <p class="card-text" style="text-align: justify;">
            We offer three Loan Plans:<br>
            <br>
            Business Loans - A plan for the investment and improvement for your business<br>
            <br>
            Personal Loan - A plan for your Personal needs<br>
            <br>
            Mortgage Loan - A plan that will support you Financially             
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Portfolio Section -->
    <h2 class="center">Most Availed Plan</h2>
    <!--Portfolio Section -->
    <hr>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/Home5.jpg" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/Personal.jpg" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="vendor/img/Home2.jpg" alt=""></a>
        </div>
      </div>
      
    </div>
    <!-- /.row -->


    <hr>
    <h1 class="my-4">Client Feedbacks</h1>

    <div class="row">
    <?php

      $ret="SELECT * FROM tms_feedback where f_status ='Published' ORDER BY RAND() LIMIT 3 "; //get all feedbacks
      $stmt= $mysqli->prepare($ret) ;
      $stmt->execute() ;//ok
      $res=$stmt->get_result();
      $cnt=1;
      while($row=$res->fetch_object())
    {
    ?>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?php echo $row->f_uname;?></h4>
          <div class="card-body">
            <p class="card-text"><?php echo $row->f_content;?></p>
          </div>
          </div>
      </div>
    <?php }?>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>
  <!--.Footer-->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
