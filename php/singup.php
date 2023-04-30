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
                        <h2 align="center">SING UP</h2>
						<hr>
						<form action="../lib/action.php" method="post">
						<div class="col-md-12" style="margin-top:10px">
						<div class="col-md-5">
						<label >Full Name </label>
						</div>
						<div class="col-md-7 ">
						<input type="text" class="form-control" name="name" placeholder="Enter full name*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:10px">
						<div class="col-md-5">
						<label >Email </label>
						</div>
						<div class="col-md-7">
						<input type="email" class="form-control" name="email" placeholder="Enter email*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:10px">
						<div class="col-md-5">
						<label >Number </label>
						</div>
						<div class="col-md-7 ">
						<input type="text" class="form-control" name="number" placeholder="Enter contact number*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:10px">
						<div class="col-md-5">
						<label >Password </label>
						</div>
						<div class="col-md-7 ">
						<input type="password" name="password" class="form-control" placeholder="Enter password*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:10px">
						<div class="col-md-5">
						<label >Re-Password </label>
						</div>
						<div class="col-md-7 ">
						<input type="password" name="re-password" class="form-control" placeholder="Enter re-password*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:20px">
						<div class="col-md-5">
						</div>
						<div class="col-md-7 ">
						<input type="submit" class="btn btn-primary" value="REGISTE"/>
						<input type="reset" class="btn btn-danger" value="CANCEL"/>
						<br>
						<br>
						 <h4> <a href="login.php" style="margin-left:65px">Login</a><br><a href="forget-password.php" style="margin-left:35px">Forget Password</a></h4>
						</div>
						</div>
						<input type="hidden" name="act" value="save_register" />
						</form>
                  </div>
                </div>
            </div>
        </div>
    </section>
	  <?php
include 'footer.php';
?>