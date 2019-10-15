<?php include 'inc/header.php';?>
		<!--End Consulting Form-->
        <!-- Start Slider Area -->
        <div class="intro-area intro-2">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/s3.jpg" alt="">
                    </div>
                    <div class="slider-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center">
									<!-- layer 1 -->
									<div class="layer-1">
										<h1 class="title2"> "So Why To Wait Come Share Your Problem and Buy Relief Today" </h1>
									</div>
									<!-- layer 2 -->
									
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="services.php" class="ready-btn left-btn" >Our Services</a>
										<a href="project-2.php" class="ready-btn right-btn">Our Projects</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/s4.jpg" alt="">
                    </div>
                    <div class="slider-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center">
									<!-- layer 1 -->
									<div class="layer-1">
										<h1 class="title2"> "So Why To Wait Come Share Your Problem and Buy Relief Today" </h1>
									</div>
									<!-- layer 2 -->
									<!--<div class="layer-2">
										<p>Everything we do is underpinned by our in-house data and insights team. We use a number of industry leading. </p>
									</div>-->
									<!-- layer 3 -->
									<div class="layer-3">
										<a href="services.php" class="ready-btn left-btn" >Our Services</a>
										<a href="project-2.php" class="ready-btn right-btn">Our Projects</a>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Welcome service area start -->
        <div class="welcome-area welcome-2 area-padding">
            <div class="container">
                <div class="row">
				
				 
                    <div class="all-services-top">
                 
				 <!-- Start column -->
								<?php 
								$i=1;
								$q2="select *,b.name AS name,a.id AS id from tbl_service a left join service_master b on a.t_id=b.id WHERE a.status=1 LIMIT 4";
								//$q2="select * from tbl_service s left join service_master m on s.t_id=m.id where s.status=1";
								$res2=mysqli_query($conn,$q2);
								while($row2=mysqli_fetch_array($res2)){
							    ?>
								<a class="service-images" href="service_details.php?id=<?php echo $row2['id'];?>"><div class="col-md-3 col-sm-6 col-xs-12"></a>
									<div class="single-service">
										<div class="service-content">
											<div class="service-icon">
												 <i class="flaticon-presentation-17"></i>
											</div>
											<div class="service-text">
												<h4><a class="service-images" href="service_details.php?id=<?php echo $row2['id'];?>"><?php echo $row2['name']; ?></a></h4>
												<p><?php echo substr($row2['descrip'],0,50); ?></p>
												<!--<p><?php echo ($row2['descrip']); ?></p>-->
							<a class="service-images" href="service_details.php?id=<?php echo $row2['id'];?>">Read More<i class="ion-arrow-right-c"></i></a>

											</div>
										</div>
									</div>
								</div>
								<?php $i++; } ?>
								
				 <!-- single-well end-->
						<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- single-well end-->
						
						<!-- single-well end-->
                    </div>
                </div>
						
            </div>
        </div>
        <!-- Welcome service area End -->
        <!-- about-area start -->
        <div class="about-area about-2">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <div class="about-image">
                            <div class="video-content">
								<a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
									<i class="fa fa-play"></i>
								</a>
							</div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-7 col-sm-8 col-xs-12">
                        <div class="about-content">
							<h3>A consultancy firm is a business of one or more experts that provides professional advice</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy text using the starting sequence "Lorem ipsum". Fortunately, the phrase 'Lorem Ipsum' is now recognized by electronic pre-press systems and, when found, an alarm can be raised.</p>
                            <div class="about-company">
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-diamond" ></i></span>
									<span class="about-text">Friendly <br/> Team</span>
                                </div>
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-graduation-hat" ></i></span>
									<span class="about-text">Goal <br/> Achivment</span>
                                </div>
                                <div class="single-about">
									<span class="about-icon"><i class="icon icon-users" ></i></span>
									<span class="about-text">24/7 <br/> Supports</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start Service area -->
		<div class="services-area area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="choose-wrapper">
							<div class="left-headline">
							    <center><h3>Our profesional services for all business and world wide clients.</h3></center>
							</div>
							<div class="row">
							 <div class="all-services">	

									<?php 
					
						//$pid=$_GET['eid'];
						$result1 = mysqli_query($conn, "SELECT * FROM `tbl_sample` order by id desc LIMIT 4");
					    while($row1=mysqli_fetch_array($result1)){
						
						?>

								<a  href="service_details.php?id=<?php echo $row1['id'];?>"><div class="col-md-3 col-sm-6 col-xs-12"></a>
										<div class="single-service">
												<div class="service-text">
													<a class="service-images" href="service_details.php?id=<?php echo $row1['id'];?>"><h3><?php echo $row1['name'];?></h3></a>
													<p><?php echo substr($row1['description'],0,50);?><p>
													<div class="w3_agile_services_grid1">
						<a href="sample_details.php?id=<?php echo $row1['id']; ?>" class="see-more-link see-more-link--dark" >Read More<i class="ion-arrow-right-c"></i></a>
				</div>
												</div>
										</div>
									</div>

									<!-- End column -->
								
					<?php 	}?>
					</div>
							</div>
						</div>
                    </div>
                    <!-- End column -->
                    
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start project Area -->
        <div class="project-area project-2 area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="project-headline white-headline">
							<h3>A consultancy firm is a business of one or more experts that provides professional Work</h3>
							<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business development strategy for growth that builds both the company profile and client base.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="project-grid project-carousel">
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p1.jpg">
                                        <img src="img/project/p1.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Business consultant</span>
                                                <h5>A consultancy firm is a skycraper</h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p2.jpg">
                                        <img src="img/project/p2.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Industry consultant</span>
                                                <h5>Industry camical company</h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p3.jpg">
                                        <img src="img/project/p3.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Oil & gas</span>
                                                <h5>Gas industry complete mision</h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p4.jpg">
                                        <img src="img/project/p4.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Power plant</span>
                                                <h5>Electricity can be proper</h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p5.jpg">
                                        <img src="img/project/p5.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Agriculture</span>
                                                <h5>Forest and river project</h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/p6.jpg">
                                        <img src="img/project/p6.jpg" alt="" />
                                        <div class="add-actions">
                                            <div class="project-dec">
                                                <span>Solar panel</span>
                                                <h5>Solar panel farmer feilds </h5>
                                                <div class="opacity-text">
                                                	<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business .</p>
                                                    <span class="know-more-btn">Know more</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                    </div>
				</div>		
            </div>
        </div>
        <!-- End project Area -->
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
                    
				    <!-- End Column -->
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start Banner Area -->
        
        <!-- End Banner Area -->
        <!--Blog Area Start-->
        
		<!--End of Blog Area-->	
<?php include 'inc/footer.php'; ?>