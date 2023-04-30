  <?php
include 'header.php';
?>
<section class="about-area ptb--110">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="about-left-thumb">
                        <img src="../assets/img/bg/login.jpg" alt="mobile screen">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <h2 align="center">LOGIN</h2>
						<hr>
						<form action="../lib/action.php" method="post">
						<div class="col-md-12">
						<div class="col-md-4">
						<label >Username </label>
						</div>
						<div class="col-md-7 ">
						<input type="text" class="form-control" name="username" placeholder="Enter username*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:20px">
						<div class="col-md-4">
						<label >Password </label>
						</div>
						<div class="col-md-7 ">
						<input type="password" name="password" class="form-control" placeholder="Enter password*" required/>
						</div>
						</div>
						<div class="col-md-12" style="margin-top:20px">
						<div class="col-md-4">
						</div>
						<div class="col-md-7 ">
						<input type="submit" class="btn btn-primary" value="LOGIN"/>
						<input type="reset" class="btn btn-danger" value="CANCEL"/>
						<br>
						<br>
						 <h4> <a href="singup.php" style="margin-left:50px">Sing Up</a><br><a href="forget-password.php" style="margin-left:20px">Forget Password</a></h4>
						</div>
						</div>
						<input type="hidden" name="act" value="login">
						</form>
                  </div>
                </div>
            </div>
        </div>
    </section>
	  <?php
include 'footer.php';
?>