<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadCrum">
					<li><a href="#">Home</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">Shipping Information</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-8 col-xs-12 checkoutWrap">
				<div class="titleLevel1">Shipping Information</div>
				<div class="clearfix"></div>
				<form action="">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="fNameB" class="control-label">
							    	First Name
							  	</label>
							  	<input type="text" id="fNameB" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="lNameB" class="control-label">
							    	Last Name
							  	</label>
							  	<input type="text" id="lNameB" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="emailB" class="control-label">
							    	Email
							  	</label>
							  	<input type="text" id="emailB" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="mobileB" class="control-label">
							    	Mobile
							  	</label>
							  	<input type="text" id="mobileB" class="form-control">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group pmd-textfield">
							  	<label for="address1B" class="control-label">
							    	Address Line 1
							  	</label>
							  	<input type="text" id="address1B" class="form-control">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group pmd-textfield">
							  	<label for="address2B" class="control-label">
							    	Address Line 2
							  	</label>
							  	<input type="text" id="address2B" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
								<label>Country</label>
								<select class="select-with-search form-control pmd-select2">
									<option></option>
									<option>India</option>
									<option>United States</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
								<label>State/Province</label>
								<select class="select-with-search form-control pmd-select2">
									<option></option>
									<option>India</option>
									<option>United States</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
								<label>State/Province</label>
								<select class="select-with-search form-control pmd-select2">
									<option></option>
									<option>Maharashtra</option>
									<option>California</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
								<label>City</label>
								<select class="select-with-search form-control pmd-select2">
									<option></option>
									<option>Pune</option>
									<option>Mumbai</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="postalCodeB" class="control-label">
							    	Postal Code
							  	</label>
							  	<input type="text" id="postalCodeB" class="form-control">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<button id="continueShipping" type="button" class="btn primaryBtn pmd-ripple-effect">Continue</button>
							</div>
						</div>
					</div>
					
				</form>
				
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
	