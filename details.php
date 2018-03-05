<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadCrum">
					<li><a href="#">Home</a></li>
					<li><a href="#">Category name</a></li>
					<li><a href="#">Product name</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-6 col-xs-12">
				<div class="prodDetailsImg">
					<div class="prodDetailsMainSlider">
						<a class="example-image-link" href="./images/products/prod1.jpg" data-lightbox="example-set" data-title="Product image caption goes here.">
							<img class="example-image" src="./images/products/prod1.jpg" alt=""/>
						</a>
						<a class="example-image-link" href="./images/products/prod1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img class="example-image" src="./images/products/prod1.jpg" alt=""/>
						</a>
						<a class="example-image-link" href="./images/products/prod1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img class="example-image" src="./images/products/prod1.jpg" alt=""/>
						</a>
						<a class="example-image-link" href="./images/products/prod1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img class="example-image" src="./images/products/prod1.jpg" alt=""/>
						</a>
					</div>
					
				</div>			
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="prodDetailsSec">
					<div class="prodName">Product name</div>
					<div class="prodPrice">$325.23</div>
					<div class="infoLine">Includes all taxes.</div>
					<hr>	
					<div class="quickLine">SKU: ABCD-12345Z</div>
					<div class="quickLine">Availability: <span class="greenText">In stock</span></div>
					<hr>	
					<!-- <div class="quickLine">Availability: <span class="redText">Out of stock</span></div> -->
					<div class="categorizeProd">
						<div class="row">
							<div class="col-md-3 col-xs-12">
								<h4>Colors</h4>
							</div>
							<div class="col-md-9 col-xs-12">
								<a href="javascript:void(0);" class="catVariation colorVar" style="background-color: red"></a>
								<a href="javascript:void(0);" class="catVariation colorVar" style="background-color: blue"></a>
								<a href="javascript:void(0);" class="catVariation colorVar" style="background-color: green"></a>
							</div>
						</div>
					</div>
					<hr>	
					<div class="categorizeProd">
						<div class="row">
							<div class="col-md-3 col-xs-12">
								<h4>Sizes</h4>
							</div>
							<div class="col-md-9 col-xs-12">
								<a href="javascript:void(0);" class="catVariation sizeVar">S</a>
								<a href="javascript:void(0);" class="catVariation sizeVar">M</a>
								<a href="javascript:void(0);" class="catVariation sizeVar">L</a>
								<a href="javascript:void(0);" class="catVariation sizeVar">XL</a>
								<a href="javascript:void(0);" class="catVariation sizeVar">XXL</a>
							</div>
						</div>
					</div>
					<hr>	
					<div class="row infoActions">
						<div class="col-md-6 col-xs-12">
							<button class="btn primaryBtn">Add to Cart</button>
						</div>
						<div class="col-md-6 col-xs-12">
							<button class="btn primaryBtn">Add to Wishlist</button>
						</div>
					</div>
					<hr>	
					<h3>Product Overview</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cum asperiores deserunt sit, commodi facere id amet quia nulla molestiae, distinctio officia similique necessitatibus laborum a odit perferendis aut dicta? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, quam quia laudantium laboriosam debitis esse ullam odit fuga aut temporibus hic impedit animi, illo dolorem cupiditate, deleniti blanditiis corporis! Assumenda.</p>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="recommendations">
					<div class="hotDeals">
						<div class="hotTitle">
							<h3>Recommended Products</h3>
						</div>
						<div class="prodSlider detProdSlider">
							<?php include 'product_grid.php';?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include 'footer.php';?>
	