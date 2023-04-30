  <?php
include 'header.php';
?>
<section class="about-area ptb--110">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="about-left-thumb">
                        <img src="../assets/img/bg/register.jpg" alt="mobile screen">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content">
						<form name="password">
						<?php
									if($_SESSION['id'])
										{
										  ?>
										   <h2 align="center">CHANGE PASSWORD</h2>
						<hr>
										  <div class="col-md-12" style="margin-top:10px">
											<div class="col-md-5">
											<label >New-password </label>
											</div>
											<div class="col-md-7 ">
											<input type="password" class="form-control" name="password" placeholder="Enter password*" required/>
											</div>
											</div>
											<div class="col-md-12" style="margin-top:10px">
											<div class="col-md-5">
											<label>Re-password </label>
											</div>
											<div class="col-md-7 ">
											<input type="password" class="form-control"  name="re-password" placeholder="Enter re-password*" required/>
											</div>
											</div>
											<div class="col-md-12" style="margin-top:20px">
											<div class="col-md-5">
											</div>
											<div class="col-md-7 ">
											<input type="submit" class="btn btn-primary" value="change"/>
											<input type="hidden" name="act" value="changePassword"/>
										  	 <?php
										}
										else
										{
										?>
										 <h2 align="center">FORGET PASSWORD</h2>
						                  <hr>
										<?php
										if($_SESSION['otp'])
										{	 ?>
										<div class="col-md-12" style="margin-top:10px">
										<div class="col-md-5">
										<label >OTP</label>
										</div>
										<div class="col-md-7 ">
										<input type="text" class="form-control" name="otp1" placeholder="Enter 4 digits otp*" required/>
										</div>
										</div>
										<div class="col-md-12" style="margin-top:20px">
											<div class="col-md-5">
											</div>
											<div class="col-md-7 ">
											<input type="hidden" name="otp" value="<?=$_SESSION['otp']?>"
											<input type="submit" class="btn btn-primary"/>	
											<input type="hidden" name="act" value="check_otp"/>									
										<?php
									}
									else{
										  ?>
										<div class="col-md-12" style="margin-top:10px">
										<div class="col-md-5">
										<label >Email</label>
										</div>
										<div class="col-md-7 ">
										<input type="email" class="form-control" name="email" placeholder="Enter register email*" required/>
										</div>
										</div>
										<div class="col-md-12" style="margin-top:20px">
											<div class="col-md-5">
											</div>
											<div class="col-md-7 ">
											<input type="submit" class="btn btn-primary" value="SNED OTP"/>
											<input type="hidden" name="act" value="send_otp"/>
											 <?php
											 }
										}
									?>
						               <br />
										<br />
						 <h4> <a href="login.php" style="margin-left:65px">Login</a><br><a href="forget-password.php" style="margin-left:35px">Forget Password</a></h4>
						</div>
						</div>
						</form>
                  </div>
                </div>
            </div>
        </div>
    </section>
	  <?php
include 'footer.php';
?>