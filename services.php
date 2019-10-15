 <?php include 'inc/header.php';
  include 'inc/connect.php';  ?>
		<!--End Consulting Form-->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Services</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Welcome service area start -->
        <div class="welcome-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="all-services-top">
                    	<!-- single-well end-->
						
						<!-- <div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
							    <span class="number"><?php// echo $i; ?></span>
								<div class="well-icon">
									<a href="service_details.php?id=<?php// echo $row2['id'];?>"><i class="flaticon-graph-3" ></i></a>
								</div>
								<div class="well-content">
									<h4></h4>
									<p></p>
								</div>
							</div>
						</div>
						
						single-well end-->
						<!--<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
							    <span class="number">2</span>
								<div class="well-icon">
									<a href="#"><i class="flaticon-graph-1" ></i></a>
								</div>
								<div class="well-content">
									<h4>Market <br/> Research</h4>
									<p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
								</div>
							</div>
						</div>
						<!-- single-well end--
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
							    <span class="number">3</span>
								<div class="well-icon">
									<a href="#"><i class="flaticon-bank" ></i></a>
								</div>
								<div class="well-content">
									<h4>Bank <br/>Investment</h4>
									<p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
								</div>
							</div>
						</div>
						<!-- single-well end--
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
							    <span class="number">4</span>
								<div class="well-icon">
									<a href="#"><i class="flaticon-pie-chart-4" ></i></a>
								</div>
								<div class="well-content">
									<h4>Online <br/> Consultant</h4>
									<p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
								</div>
							</div>
						</div>-->
						<!-- single-well end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome service area End -->
        <!-- Start Service area -->
		<div class="services-area services-5 bg-color area-padding">
			<div class="container">
                <div class="row">
                    <!-- Start column -->
					<div class="col-md-21 col-sm-12 col-xs-12">
						<div class="center-head">
							<h3>Our profesional services for all business and world wide clients</h3>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            <div class="all-services">	
								<!-- Start column -->
								<?php 
								$i=1;
								$q2="select *,b.name AS name,a.id AS id from tbl_service a left join service_master b on a.t_id=b.id WHERE a.status=1";
								
								$res2=mysqli_query($conn,$q2);
								while($row2=mysqli_fetch_array($res2)){
							    ?>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
										
										    <img src="admin/images/middle/<?php echo $row2['image'];?>" alt="">
									    									    <div class="service-content">
											<div class="service-icon">
												 <i class="flaticon-presentation-17"></i>
											</div>
											<div class="service-text">
												<h4><a href="#"><?php echo $row2['name']; ?></a></h4>
												<p><?php echo substr($row2['descrip'],0,20); ?></p>
												<a class="service-images" href="service_details.php?id=<?php echo $row2['id'];?>">More Details<i class="ion-arrow-right-c"></i></a>
											</div>
										</div>
									</div>
								</div>
								<?php $i++; } ?>
								<!-- End column -->
								<!--<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
									    <a class="service-images" href="#">
										    <img src="img/service/2.jpg" alt="">
									    </a>
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-graph-1"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Factory managment</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
									    <a class="service-images" href="#">
										    <img src="img/service/3.jpg" alt="">
									    </a>
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-time-passing"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Energy & envernment</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
									    <a class="service-images" href="#">
										    <img src="img/service/4.jpg" alt="">
									    </a>
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-pack"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Oil & gas industry</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column 
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
									    <a class="service-images" href="#">
										    <img src="img/service/5.jpg" alt="">
									    </a>
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-time-passing"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Energy & envernment</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="single-service">
									    <a class="service-images" href="#">
										    <img src="img/service/6.jpg" alt="">
									    </a>
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-pack"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Oil & gas industry</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>-->
								<!-- End column -->
							</div>
						</div>
					</div>
					<!-- End column -->
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start Service area -->
		<div class="services-area area-padding">
			<div class="container">
                <div class="row">
                    <!-- Start column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="left-headline">
							<h3>Our profesional services for all business and world wide clients.</h3>
							<p>Dragon replacing a selection of text within a single line, the amount of words is roughly being maintained. When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter.</p>
							<a class="more-btn" href="services.html">More Services</a>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="row">
                            <div class="all-services">	
								<!-- Start column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
										<div class="service-icon">
											 <i class="flaticon-presentation-17"></i>
										</div>
										<div class="service-text">
											<h4><a href="#">Business Analytics</a></h4>
											<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-graph-1"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Factory managment</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-time-passing"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Energy & envernment</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="single-service">
									    <div class="service-content">
											<div class="service-icon">
												<i class="flaticon-pack"></i>
											</div>
											<div class="service-text">
												<h4><a href="#">Oil & gas industry</a></h4>
												<p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- End column -->
							</div>
						</div>
					</div>
					<!-- End column -->
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!--Start Footer Area-->
   <?php include 'inc/footer.php';?>