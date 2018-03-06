<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadCrum">
					<li><a href="#">Home</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">Payment Method</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-8 col-xs-12 checkoutWrap">
				<div class="titleLevel1">Payment Method</div>
				<div class="clearfix"></div>
				<div class="col-sm-12">
					<div class="form-group pmd-textfield">
					  	<label class="containerInput">Debit / Credit Card
		                    <input name="radio1" class="payMethod" id="cardPay" type="radio" checked="checked">
		                    <span class="radioMark"></span>
		                </label>
					</div>
					<div class="form-group pmd-textfield">
					  	<label class="containerInput">Cash on delivery
		                    <input name="radio1" class="payMethod" type="radio">
		                    <span class="radioMark"></span>
		                </label>
					</div>
				</div>
				<form action="" class="cardPayForm">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="cardNumber" class="control-label">
							    	Card Number
							  	</label>
							  	<input type="text" id="cardNumber" class="form-control">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="nameCard" class="control-label">
							    	Name on Card
							  	</label>
							  	<input type="text" id="nameCard" class="form-control">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield" style="margin: 0;">
							  	<label for="expiryCard" class="control-label">
							    	Expiry
							  	</label>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-sm-3">
							<div class="form-group pmd-textfield">
							  	<label for="expiryCard" class="control-label">
							    	Month
							  	</label>
							  	<input type="text" id="expiryCard" class="form-control" maxlength="2">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group pmd-textfield">
							  	<label for="expiryMCard" class="control-label">
							    	Year
							  	</label>
							  	<input type="text" id="expiryYCard" class="form-control" maxlength="2">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<label for="cvvCard" class="control-label">
							    	CVV
							  	</label>
							  	<input type="password" id="cvvCard" class="form-control">
							</div>
						</div>
						
						<div class="clearfix"></div>
						<div class="col-sm-6">
							<div class="form-group pmd-textfield">
							  	<button id="continuePayment" type="button" class="btn primaryBtn pmd-ripple-effect">Continue</button>
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
	