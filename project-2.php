<?php include 'inc/header.php';  
      include 'inc/connect.php'; ?>
		<!--End Consulting Form-->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Project</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Project</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start project Area -->
        <div class="project-page-2 project-4 page-padding">
            <div class="container">
                <div class="row">
                    <div class="awesome-project fix">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu text-center" >
								<h4>
                    </h4>
							</div>
						</div>
					</div>
					
					
					
                    <div class="project-grid project-content">
                        <!-- single-awesome-project start -->
						<?php 
					 
					    		$result1 = mysqli_query($conn, "SELECT * FROM `tbl_product`");
						
					    while($row1=mysqli_fetch_array($result1)){
						
						?>
                        <div class="project-single all-padding">
                            <div class="single-awesome-project">
                                <div>
                                    
            <a href="project_details.php?id=<?php echo $row1['pro_id'];?>"><img src="admin/images/<?php echo $row1['image'];?>"  class="img-fluid-imgrespons" width="400"  height="300" ></a>
										
                                        <div class="add-actions">
                                            <div class="project-dec">
                                             <a href="project_details.php?id=<?php echo $row1['pro_id'];?>"><span><?php echo $row1['name'];?></span></a>
                                              <!--  <h5>A consultancy firm is a skycraper</h5>-->
                                                <div class="opacity-text">
                                                	<p><?php echo $row1['name'];?></p>
													<p><?php echo $row1['descrip'];?></p>

                                                   <!-- <span class="know-more-btn">Know more</span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
						<?php }?>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                       <!-- <div class="project-single all-padding envernment">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/2.jpg">
                                        <img src="img/project/2.jpg" alt="" />
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
                        <!-- single-awesome-project start -
                        <div class="project-single all-padding energy corporate">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/3.jpg">
                                        <img src="img/project/3.jpg" alt="" />
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
                        <!-- single-awesome-project start 
                        <div class="project-single all-padding construction ">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/4.jpg">
                                        <img src="img/project/4.jpg" alt="" />
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
                        <!-- single-awesome-project start
                        <div class="project-single all-padding envernment energy">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/5.jpg">
                                        <img src="img/project/5.jpg" alt="" />
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
                        <!-- single-awesome-project start
                        <div class="project-single all-padding construction">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/6.jpg">
                                        <img src="img/project/6.jpg" alt="" />
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
                        </div>-->
                        <!-- single-awesome-project end -->
                    </div>
				</div>		
            </div>
        </div>
        <!-- End project Area -->
        <!--Start Footer Area-->
       <?php include 'inc/footer.php';  ?>