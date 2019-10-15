<?php 
//session_start();
require_once 'inc/connect.php';
include 'inc/header.php'; 
 ?>
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Service Inquiry</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Service Inquiry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php
	//$id=$_GET['id'];
	
	if(isset($_POST['inquiry'])){

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
	else{
		$pid=$_GET['id'];
		echo $sql = "INSERT INTO inquiry (name,project_id,address,email,city,phone) VALUES ('$name','$pid','$address','$email','$city','$phone')";
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
	<!-- SHOP CONTENT -->
	 <div class="single-services-page page-padding">
            <div class="container">
                <div class="row">
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
				<div class="row shop-login">
			<!--	<div class="col-md-6">
					<div class="box-content">
						<h3 class="heading text-center">I'm a Returning Customer</h3>
						<div class="clearfix space40"></div>
						<?php /*if(isset($_GET['message'])){
								if($_GET['message'] == 1){
						 ?><div class="alert alert-danger" role="alert"> <?php echo "Invalid Login Credentials"; ?> </div>

						 <?php } }*/?>
						<form class="logregform" method="post" action="loginprocess.php">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<label>E-mail Address</label>
										<input type="email" name="email" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<!-- <a class="pull-right" href="#">(Lost Password?)</a> -->
										<!--<label>Password</label>
										<input type="password" name="password" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-6">
									<!-- <span class="remember-box checkbox">
									<label for="rememberme">
									<input type="checkbox" id="rememberme" name="rememberme">Remember Me
									</label>
									</span> -->
								<!--</div>
								<div class="col-md-6">
									<button type="submit" class="button btn-md pull-right">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>-->
				<div class="col-md-12">
					<div class="box-content">
						
						<div class="clearfix space40"></div>
						<?php if(isset($_GET['message'])){ 
								if($_GET['message'] == 2){
							?><div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>
							<?php } } ?>
						<form class="logregform" method="post" >
							<div class="row">
								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<label>E-mail Address</label>
										<input type="email" name="email" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<label>Name</label>
										<input type="text" name="name" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<label>Contact No</label>
										<input type="text" name="phone" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										<label>Address</label>
										<input type="text" name="address" value="" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
					<div class="col-md-3"></div>
									<div class="col-md-6">
										<label>City</label>
										<input type="text" name="city" value="" class="form-control">
									</div>
								</div>
							</div>
							
							<div class="clearfix space20"></div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="space20"></div>
									<input type="submit"  name="inquiry"  value="Inquiry">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>


							
					</div>
				</div>
			</div>
		</div>
	</section>
		</div>
			</div>
		</div>
	
<?php include 'inc/footer.php' ?>
