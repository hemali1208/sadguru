<?php include 'inc/header.php'; ?>
<?php include 'inc/connect.php'; ?>
		<!--End Consulting Form-->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Contact us</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start map Area -->
        <div class="map-area">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-main">
                            <div id="googleMap" style="width:100%;height:450px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
		<?php 
		if(isset($_POST['save'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			$address=$_POST['address'];
			
			$ins="insert into contact_us(name,email,phone,message,address) values('$name','$email','$phone','$message','$address')";
			$ires=mysqli_query($conn,$ins);
			
			if($ires){
		//echo "User exits, create session";
		echo "succecfully";
		//$_SESSION['customer'] = $email;
		//$_SESSION['customerid'] = mysqli_insert_id($connection);
		?>
		<script> 
window.location.replace("index.php");
</script>
<?php
	}else{
		//$fmsg = "Invalid Login Credentials";
		header("location: login.php");
	}
		}
		?>
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form  method="POST" action="" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" name="email" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
									<div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="email form-control" name="address"  placeholder="Address" required data-error="Please enter your address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="msg_subject" class="form-control" placeholder="Contact No" required data-error="Please enter your contact no">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" name="message" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" name= "save" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="contact-head">
                            <h3>Contact us</h3>
                            <p>Water The universal acceptance of website has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.</p>
                            <div class="contact-icon">
								<div class="single-contact">
									<h5>Canada Office</h5>
									<a href="#"><i class="fa fa-map"></i><span>House-5,1/3,Torronto</span></a>
									<a href="#"><i class="fa fa-phone"></i><span>777-6546-655</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>corpoter@headoffice.com</span></a>
								</div>
								<div class="single-contact">
									<h5>USA Office</h5>
									<a href="#"><i class="fa fa-map"></i><span>House-5,1/3,Newyork</span></a>
									<a href="#"><i class="fa fa-phone"></i><span>777-6546-655</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>corpoter@headoffice.com</span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
        <!--Start Footer Area-->
       <?php include 'inc/footer.php'; ?>