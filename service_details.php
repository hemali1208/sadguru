<?php 
include 'inc/header.php'; 
include 'inc/connect.php';
?>
		<!--End Consulting Form-->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Service Details</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Service Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- End services Area -->
        <div class="single-services-page page-padding">
            <div class="container">
                <div class="row">
                 <!--   <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="page-head-left">
                           <!-- strat single area -
						   
                            <div class="single-page-head">
                                <div class="left-menu">
                                    <ul>
                                        <li class="active"><a href="#">Business Consultation</a></li>
                                        <li><a href="#">Industry Managment</a></li>
                                        <li><a href="#">ICT Managment</a></li>
                                        <li><a href="#">Oil & Gas Consultation</a></li>
                                        <li><a href="#">Energy & Environment</a></li>
                                        <li><a href="#">Bank Loan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- strat single area -
                            <div class="single-page-head">
                                <div class="download-btn">
                                    <div class="about-btn">
                                        <a href="#" class="down-btn">Download Brochure <i class="fa fa-file-pdf-o"></i></a>
                                        <a href="#" class="down-btn apli">Download Aplication <i class="fa fa-file-word-o"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- strat single area -
                            <div class="single-page-head">
                                <div class="clients-testi">
                                    <div class="single-review">
                                        <div class="review-img ">
                                            <img src="img/review/1.jpg" alt="">
                                        </div>
                                        <div class="review-text">
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection.</p>
                                            <h4>Arnold russel</h4>
                                            <span class="guest-rev">Clients - <a href="#">Investor</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end single area -
                        </div>
                    </div>-->
                    <!-- End Right sidebar -->
                     <!-- Start service page -->
					 <div class="row mar-row">
                          <?php 
						  $sid=$_GET['id'];
						 $s="select *,b.name AS name,a.id AS id from tbl_service a left join service_master b on a.t_id=b.id where a.id='$sid'";
						   $sres=mysqli_query($conn,$s);
						   while($srow=mysqli_fetch_array($sres)){
						  
						  ?>
							
							  <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="admin/images/middle/<?php echo $srow['image']; ?>" alt="" class="img-fluid-imgrespons" width="300"  height="300">
                                    </div>
									 
                                </div>
				                  </div>  
                             	<div class="col-md-4 col-sm-6 col-xs-12">
								<h3><?php echo $srow['name']; ?></h3>
                                    <p><?php echo $srow['descrip']; ?></p>
									<br>
								<div class="text-center">
									<a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Inqviry</a>
								</div>							
								</div>  
								
						
								</div>  
								
					
                            
						   <?php } ?>
                   			</div>
							</div>
							<!-- End Column -->
                        </div>
                        <!-- end Row -->
					</div>
                </div>
            </div>
        </div>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	   <form role="form" method="post" name="" id="list_inquiry"> 
						
		<input type="hidden" class="form-control" id="sid" value="<?php echo $sid; ?>" name="id">

		
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form34">Your name</label>
          <input type="text" id="form34" class="form-control validate" name="name">
         
        </div>

        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form29">Your email</label>
          <input type="email" id="form29" class="form-control validate" name="email">
          
        </div>

        <div class="md-form mb-5">
          <i class="fa fa-tag prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form32">phone</label>
          <input type="text" id="form32" class="form-control validate" name="phone">
         
        </div>
		
		<div class="md-form mb-5">
          <i class="fa fa-tag prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form32">City</label>
          <input type="text" id="city" class="form-control validate" name="city">
          </div>
		
		<div class="md-form">
          <i class="fa fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">address </label>
			<textarea type="text" id="form8" class="md-textarea form-control"  name="address"rows="4"></textarea>
        </div>

      </div>

		<div class="modal-footer d-flex justify-content-center">
			<button class="btn btn-unique" name="send">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
        </div>

</div>
</div>
</div>
		
 </form>
 <?php
	//$id=$_GET['id'];
	
	if(isset($_POST['send'])){

	//$email = mysqli_real_escape_string($connection, $_POST['email']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$name = filter_var($_POST['name']);
	$address = filter_var($_POST['address']);
	$city = filter_var($_POST['city']);
	$phone = filter_var($_POST['phone']);
	//$state = filter_var($_POST['state']);
	//$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	if(isset($_GET['sid'])){
		$id=$_GET['sid'];
	echo $sql = "INSERT INTO inquiry (name,service_id,address,email,city,phone) VALUES ('$name','$id','$address','$email','$city','$phone')";
	}
	else if(isset($_GET['pro_id'])){
		$pid=$_GET['pro_id'];
		echo $sql = "INSERT INTO inquiry (name,project_id,address,email,city,phone) VALUES ('$name','$pid','$address','$email','$city','$phone')";
	}else
	{
		$id=$_GET['id'];
		echo $sql = "INSERT INTO inquiry (name,id,address,email,city,phone) VALUES ('$name','$id','$address','$email','$city','$phone')";

	}
	
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		//echo "User exits, create session";
		echo "succecfully";
		//$_SESSION['customer'] = $email;
		//$_SESSION['customerid'] = mysqli_insert_id($connection);
		//header("location: index.php");
		?>
		<script>
		window.location="index.php";
		</script>
		<?php
	}else
	{
		echo "Some Problem Ocuuers";
	}
}
?>
  </div>
  </div>
</div>
</body>
</html>
        <!-- Start Footer bottom Area -->
      <?php include 'inc/footer.php'; ?>