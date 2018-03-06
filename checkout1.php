<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadCrum">
					<li><a href="#">Home</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">Checkout Method</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-8 col-xs-12 checkoutWrap">
				<div class="titleLevel1">Checkout Method</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-sm-6">
						<h3 class="chTitle">Checkout as a Guest or Register</h3>
						<p>Register with us for future convenience:</p>
						<ul class="normalUl">
							<li class="control">
								<label class="containerInput">Checkout as Guest
				                    <input name="radio1" type="radio">
				                    <span class="radioMark"></span>
				                </label>
							</li>
							<li class="control"> 
								<label class="containerInput">Register
				                    <input name="radio1" type="radio">
				                    <span class="radioMark"></span>
				                </label>
							</li>
						</ul>
						<ul class="normalUl">
							<li>Fast and easy check out</li>
							<li>Easy access to your order history and status</li>
						</ul>
						<button id="guestRegisterButton" type="button" class="btn primaryBtn pmd-ripple-effect">Continue</button>
					</div>
					<div class="col-sm-6">
						<div class="chkMethodWrap" id="chkLoginWrap">
							<h3 class="chTitle">Login</h3>
							<!-- <p>Register with us for future convenience:</p> -->
							<form action="">
								<div class="form-group pmd-textfield">
								  	<label for="email" class="control-label">
								    	Email
								  	</label>
								  	<input type="text" id="email" class="form-control">
								</div>
								<div class="form-group pmd-textfield">
								  	<label for="password" class="control-label">
								    	Password
								  	</label>
								  	<input type="password" id="password" class="form-control">
								</div>
							</form>
							<button id="login" type="button" class="btn primaryBtn pmd-ripple-effect">Login</button>
							<a href="javascript:void(0);" class="forgotPass">Forgot password?</a>
						</div>
						<div class="chkMethodWrap hide" id="chkForgotWrap">
							<h3 class="chTitle">RETRIEVE YOUR PASSWORD HERE</h3>
							<p>Please enter your email address below. You will receive a link to reset your password.</p>
							<form action="">
								<div class="form-group pmd-textfield">
								  	<label for="emailForgot" class="control-label">
								    	Email
								  	</label>
								  	<input type="text" id="emailForgot" class="form-control">
								</div>
							</form>
							<div class="row">
								<div class="col-sm-6">
									<button id="backToLogin" type="button" class="btn secondaryBtn pmd-ripple-effect">Back to Login</button>
								</div>
								<div class="col-sm-6">
									<button id="" type="button" class="btn primaryBtn pmd-ripple-effect">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="summaryWrap">
					<div class="summaryBox">
						<h3>Summery</h3>
						<div class="summLine">
							<div class="summLeft">Subtotal</div>
							<div class="summRight"><b>$123.45</b></div>
						</div>
						<div class="summLine">
							<div class="summLeft">Shipping</div>
							<div class="summRight"><b>$3.45</b></div>
						</div>
						<hr>
						<div class="summLine">
							<div class="summLeft"><b>Total</b></div>
							<div class="summRight"><b>$126.9</b></div>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- <a href="javascript:void(0);" class="btn primaryBtn pmd-ripple-effect" id="checkout">Checkout</a> -->
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include 'footer.php';?>
	