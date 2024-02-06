<!DOCTYPE html>

<html lang="en">
    <head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<?php include"head.php";?>
</head>
<body>

<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <br>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/4.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Blood-Donation-1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Blood-facts_10-illustration-graphics__canteen.png');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<br>
<br>
<br>
<br>
    <!-- Page Content -->
    <div class="container">
         <div class="pane-1"  data-aos="fade-down" class="div" data-aos-duration="1000" style="border-radius:50px; background-color:black; width:300px; margin-left:230px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="panel-body panel-info bk-primary text-light"  data-aos="fade-down-right" class="div" data-aos-duration="1500" style="background-color:lightsteelblue; border-radius:50px">
                  <div class="stat-panel text-center">
                  <?php
                    include('config.php');
                    ?>
                    <?php
                      $sql =" SELECT * from blood_donor";
                      $result=mysqli_query($con,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);
                    ?>
                    <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">Blood Donors Available </div>
                    <br>
                   </div>
                </div>
                </div>
<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="pane-2"  data-aos="fade-down" class="div" data-aos-duration="1000" style="border-radius:50px; background-color:black; width:300px; margin-left:600px; margin-top: -200px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="panel-body panel-info bk-primary text-dark"  data-aos="fade-down-left" class="div" data-aos-duration="1500" style="background-color:lightsteelblue; border-radius:50px;">
                  <div class="stat-panel text-center">
                  <?php
                    include('config.php');
                    ?>
                    <?php
                      $sql =" SELECT * from request_blood";
                      $result=mysqli_query($con,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>
                      
                  <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Requests Available &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <br>
                   </div>
                </div>
                

</div>
</style>     
<br>
<br>   <!-- Marketing Icons Section -->
        <div class="row" >
            <div class="col-lg-12" data-aos="zoom-in" class="div" data-aos-duration="1000">
                <h1 class="page-header text-primary">
                    Blood Donation & Management System
                </h1>
            </div>
            		 <div class="col-md-4"  data-aos="fade-up-right" class="div" data-aos-duration="1000">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body"  data-aos="fade-down" class="div" data-aos-duration="1000">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="Donor_reg.php" class="btn btn1-primary"  data-aos="flip-left" class="div" data-aos-duration="1000">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4" data-aos="fade-up" class="div" data-aos-duration="1000">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body" data-aos="fade-down" class="div" data-aos-duration="1000">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="request_blood.php" class="btn btn1-primary"  data-aos="flip-up" class="div" data-aos-duration="1000" >View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4" data-aos="fade-up-left" class="div" data-aos-duration="1000">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body" data-aos="fade-down" class="div" data-aos-duration="1000">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                        <a href="Search_Donor.php"  class="btn btn1-primary"  data-aos="flip-right" class="div" data-aos-duration="1000" >View More</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
      <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Blood Donor Camps</h2>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-right" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/_107317099_blooddonor976.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-down" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-left" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/s3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-up-right" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/heart.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-up" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/123.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6"  data-aos="fade-up-left" class="div" data-aos-duration="1000" >
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row"  data-aos="fade-right" class="div" data-aos-duration="1500" >
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need you to give blood ?</h2>
            </div>
            <div class="col-md-6">
              

			<ul>
				<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

				<li>Many people would not be alive today if donors had not generously given their blood.</li>

				<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>

				<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li>Most people between the ages of 17-65 are able to give blood.</li>

				<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive"  data-aos="zoom-in" class="div" data-aos-duration="1500"  src="images/contact-us.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well" data-aos="zoom-in" class="div" data-aos-duration="1500" >
            <div class="row">
                <div class="col-md-8">
                    <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn1-primary btn-block"  data-aos="zoom-in" class="div" data-aos-duration="2000" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
  AOS.init();
  </script>
</body>

</html>
