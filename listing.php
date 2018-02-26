<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadCrum">
					<li><a href="#">Home</a></li>
					<li><a href="#">Category name</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-3 col-xs-12 sideBar">
				<div class="clearfix"></div>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingCats">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" href="#collapseCats" aria-expanded="true" aria-controls="collapseCats">
									Categories
								</a>
							</h4>
						</div>
						<div id="collapseCats" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingCats">
							<div class="panel-body">
								<div class="filterWrap">
									<label class="containerInput">Automotive
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Electronincs
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Jewelery
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Kids & Babies
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Watches
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Clothing
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					                <label class="containerInput">Bags
					                    <input name="check1" type="checkbox">
					                    <span class="checkMark"></span>
					                </label>
					            </div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>			
			</div>
			<div class="col-sm-9 col-xs-12 mainBar">
				<?php include 'product_grid.php';?>
			</div>
			
		</div>
	</div>
</div>

<?php include 'footer.php';?>
	