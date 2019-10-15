<?php include 'inc/header.php'; ?>
		<!--End Consulting Form-->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>About us</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- about-area start -->
        <div class="about-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="img/service/4.jpg" alt="">
                            <div class="video-content">
									<i class="fa fa-play"></i>
								</a>
							</div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
							<h3>A consulting or consultancy firm is a business of one or more experts that provides professional advice</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy text using the starting sequence "Lorem ipsum". Fortunately, the phrase 'Lorem Ipsum' is now recognized by electronic pre-press systems and, when found, an alarm can be raised.</p>
                            <div class="about-details">
                                <ul class="marker-list">
									<li>The phrasal sequence of the Lorem Ipsum text.</li>
									<li>ducimus adipisci voluptas consectetur adipisicing.</li>
									<li>consectetur adipisicing elit praesentium maxime.</li>
									<li>programmes can generate dummy text using..</li>
								</ul>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start About Area -->
        <div class="about-feature-area bg-color area-padding">
            <div class="container">
                <!-- end Row -->
                <div class="row">
                    <div class="about-feature">
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="feature-about">
                                <div class="feature-icon">
                                    <i class="icon icon-cloud"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our Mission</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="feature-about">
                                <div class="feature-icon">
                                    <i class="icon icon-apartment"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our Vision</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="feature-about">
                                <div class="feature-icon">
                                    <i class="icon icon-diamond"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our Experience</h4>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programme</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
        <!-- Start Banner Area -->
      <!--  <div class="banner-area color-bg area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content text-center">
                            <h3>A consultancy firm is a business of one or more experts that provides professional Work</h3>
                            <div class="brand-items">
								<div class="single-brand-item">
									<a href="#"><img src="img/brand/1.png" alt=""></a>
								</div>
								<div class="single-brand-item">
									<a href="#"><img src="img/brand/2.png" alt=""></a>
								</div>
								<div class="single-brand-item">
									<a href="#"><img src="img/brand/3.png" alt=""></a>
								</div>
								<div class="single-brand-item">
									<a href="#"><img src="img/brand/4.png" alt=""></a>
								</div>
								<div class="single-brand-item">
									<a href="#"><img src="img/brand/5.png" alt=""></a>
								</div>
							</div>
                            <div class="banner-contact">
                                <a class="banner-btn" href="#">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End Banner Area -->
        <!-- Start Team Area -->
       <div class="team-area bg-color area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-21 col-sm-12 col-xs-12">
						<div class="center-head">
							<h3>Our profesional Consultant experts.</h3>
							
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="col-md-21 col-sm-12">
						<div class="team-wraper">
							<div class="team-inner team-carousel">
							    <!-- Start Single team -->
						        <?php
								
								$q="Select * from tbl_team";
								$r=mysqli_query($conn,$q);
								while($row=mysqli_fetch_array($r))
								{
									//echo  'Hello';
									//print_r($row);
									//die;
									?>
									
								<div class="single-team">

									<div class="team-img">
										<!--<img src="img/team/t1.jpg" alt="">-->
										<img src="./admin/images/<?php echo $row['image']; ?>" alt=" " class="img-fluid-imgrespons" width="400"  height="300"  />
									</div>
									<div class="team-content">
										<div class="team-data">
											<h4><?php echo $row['name'];?></h4>
										    <span><?php echo $row['type'];?></span>
										</div>
										<div class="team-text">
											<p><?php echo $row['description'];?></p>
										</div>
										
									</div>
								</div>
								<?php  } ?>
								<!-- End Single team -->
								<!-- Start Single team -->
								
								<!-- End Single team -->
								<!-- Start Single team -->
								<!-- End Single team -->
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
		
         <!-- End Team Area -->
        <!-- Start Service area -->
		<div class="choose-area area-padding">
			<div class="container">
				<div class="row">
				    <!-- Start Column -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="choose-wrapper">
							<div class="left-headline">
								<h3>Why choose customer our services</h3>
							</div>
							<div class="choose-all">
								<div class="single-choose">
								   <a class="choose-images" href="#"><i class="flaticon-diagram"></i></a>
									<div class="choose-content">
										<h4><a href="#">Business planning</a></h4>
										<p>Our independent consultants, free from the internal demands of traditional firms, can focus.</p>
									</div>
								</div>
								<!-- Start services -->
								<div class="single-choose">
									<a class="choose-images" href="#"><i class="flaticon-pie-chart"></i></a>
									<div class="choose-content">
										<h4><a href="#">Online consultant</a></h4>
										<p>Our independent consultants, free from the internal demands of traditional firms, can focus.</p>
									</div>
								</div>
								<!-- Start services -->
								<div class="single-choose">
									<a class="choose-images" href="#"><i class="flaticon-bank"></i></a>
									<div class="choose-content">
										<h4><a href="#">Bank investment</a></h4>
										<p>Our independent consultants, free from the internal demands of traditional firms, can focus.</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <!-- Start Column -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <!--  <div class="choose-image">
                        	<img src="img/about/data1.jpg" alt="Choose Imagess">
                        </div>-->
				    </div>
				    <!-- End Column -->
				</div>
			</div>
		</div>
		<!-- End Service area -->
    <?php include 'inc/footer.php'; ?>