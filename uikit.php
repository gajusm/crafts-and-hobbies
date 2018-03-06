<?php include 'header.php';?>

<div class="clearfix"></div>
<div class="mainPage">
	<div class="container">
        <div class="row">
            <br><br>
            <div class="col-sm-3">Primary Button</div>
            <div class="col-sm-3">
                <button class="btn primaryBtn pmd-ripple-effect">Click Me</button>
            </div>
            <div class="col-sm-3">
                <button class="btn primaryBtn pmd-ripple-effect" disabled="">Click Me</button>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Secondary Button</div>
            <div class="col-sm-3">
                <button class="btn secondaryBtn pmd-ripple-effect">Click Me</button>
            </div>
            <div class="col-sm-3">
                <button class="btn secondaryBtn pmd-ripple-effect" disabled="">Click Me</button>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Select</div>
            <div class="col-sm-3">
                <!--Simple Select with Search-->
                <div class="form-group pmd-textfield">
                    <label>Simple Select with Search</label>
                    <select class="select-with-search form-control pmd-select2">
                        <option></option>
                        <option>Dallas Cowboys</option>
                        <option>New York Giants</option>
                        <option>Philadelphia Eagles</option>
                        <option>Washington Redskins</option>
                        <option>Chicago Bears</option>
                        <option>Detroit Lions</option>
                        <option>Green Bay Packers</option>
                        <option>Minnesota Vikings</option>
                        <option>Arizona Cardinals</option>
                        <option>St. Louis Rams</option>
                        <option>San Francisco 49ers</option>
                        <option>Seattle Seahawks</option>
                        <option>Baltimore Ravens</option>
                        <option>Cincinnati Bengals</option>
                        <option>Cleveland Browns</option>
                        <option>Pittsburgh Steelers</option>
                        <option>Houston Texans</option>
                        <option>Indianapolis Colts</option>
                        <option>Jacksonville Jaguars</option>
                        <option>Tennessee Titans</option>
                        <option>Denver Broncos</option>
                        <option>Kansas City Chiefs</option>
                        <option>Oakland Raiders</option>
                        <option>San Diego Chargers</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <!--Simple Select with Search-->
				<div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label>Simple Select with Search</label>
					<select class="select-with-search form-control pmd-select2">
						<option></option>
						<option>Dallas Cowboys</option>
						<option>New York Giants</option>
						<option>Philadelphia Eagles</option>
						<option>Washington Redskins</option>
						<option>Chicago Bears</option>
						<option>Detroit Lions</option>
						<option>Green Bay Packers</option>
						<option>Minnesota Vikings</option>
						<option>Arizona Cardinals</option>
						<option>St. Louis Rams</option>
						<option>San Francisco 49ers</option>
						<option>Seattle Seahawks</option>
						<option>Baltimore Ravens</option>
						<option>Cincinnati Bengals</option>
						<option>Cleveland Browns</option>
						<option>Pittsburgh Steelers</option>
						<option>Houston Texans</option>
						<option>Indianapolis Colts</option>
						<option>Jacksonville Jaguars</option>
						<option>Tennessee Titans</option>
						<option>Denver Broncos</option>
						<option>Kansas City Chiefs</option>
						<option>Oakland Raiders</option>
						<option>San Diego Chargers</option>
					</select>
				</div>
            </div>
            <div class="col-sm-3">
                <div class="floatLabel hide">
                    <input id="" name="" type="text" required="">
                    <label for="">Your Name</label>
                </div>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Radio Button</div>
            <div class="col-sm-3">
                <label class="containerInput">One
                    <input name="radio1" type="radio" checked="checked">
                    <span class="radioMark"></span>
                </label>
            </div>
            <div class="col-sm-3">
                <label class="containerInput">Two
                    <input name="radio1" type="radio">
                    <span class="radioMark"></span>
                </label>
            </div>
            <div class="col-sm-3">
                <label class="containerInput disabled">Disabled
                    <input name="radio1" type="radio" disabled="disabled">
                    <span class="radioMark"></span>
                </label>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Check Box</div>
            <div class="col-sm-3">
                <label class="containerInput">One
                    <input name="check1" type="checkbox" checked="checked">
                    <span class="checkMark"></span>
                </label>
            </div>
            <div class="col-sm-3">
                <label class="containerInput">Two
                    <input name="check2" type="checkbox">
                    <span class="checkMark"></span>
                </label>
            </div>
            <div class="col-sm-3">
                <label class="containerInput disabled">Disabled
                    <input name="check3" type="radio" disabled="disabled">
                    <span class="checkMark"></span>
                </label>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Text Fields</div>
            <div class="col-sm-3">
                <div class="form-group pmd-textfield">
                    <label for="regular1" class="control-label">
                        Regular Input
                    </label>
                    <input type="text" id="regular1" class="form-control">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
					<label for="regular1" class="control-label">
						Regular Input
					</label>
					<input type="text" id="regular1" class="form-control">
				</div>
            </div>
            <div class="clearfix"></div>

            <br><br>
            <div class="col-sm-3">Text Area</div>
            <div class="col-sm-3">
                <div class="form-group pmd-textfield">
                    <label class="control-label">Text Area</label>
                    <textarea required class="form-control"></textarea>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                    <label class="control-label">Text Area</label>
                    <textarea required class="form-control"></textarea>
                </div>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Tab Panel</div>
            <div class="col-sm-9">
                <!--Scrollable tab example -->
				<div class="pmd-card pmd-z-depth"> 
					<div class="pmd-tabs pmd-tabs-bg" scroll="true">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
							<li role="presentation"><a href="#home-scrollable" aria-controls="home" role="tab" data-toggle="tab">Default</a></li>
							<li role="presentation"><a href="#about-scrollable" aria-controls="about" role="tab" data-toggle="tab">Fixed</a></li>
							<li role="presentation"><a href="#work-scrollable" aria-controls="work" role="tab" data-toggle="tab">Scrollable</a></li>
						</ul>
					</div>
					<div class="pmd-card-body">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home-scrollable">A tab provides the affordance for displaying grouped content. A tab label succinctly describes the tab’s associated grouping of content.</div>
							<div role="tabpanel" class="tab-pane" id="about-scrollable">Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</div>
							<div role="tabpanel" class="tab-pane" id="work-scrollable">To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</div>
						</div>
					</div>
				</div> <!--Scrollable tab example end-->
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Aspect ratio</div>
            <div class="col-sm-3">
                <div class="aspectBox">
                    <div class="aspectContent">
                        <img src="https://staging.korsall.com/images/noimage.jpg" alt="">
                    </div>
                </div>
                <p>16:9 aspect ratio.</p>
            </div>
            <div class="col-sm-3">
                <div class="aspectBox">
                    <div class="aspectContent">
                        <img src="https://staging.korsall.com/images/prod-det-large/prod-det-slideLg01.png" alt="">
                    </div>
                </div>
                <p>16:9 aspect ratio.</p>
            </div>
            <div class="col-sm-3">
                <div class="aspectBox">
                    <div class="aspectContent" style="background-image: url(https://staging.korsall.com/images/prod-det-large/prod-det-slideLg01.png);">
                        
                    </div>
                </div>
                <p>16:9 aspect ratio.</p>
            </div>
            <div class="clearfix"></div>


            <br><br>
            <div class="col-sm-3">Accordion</div>
            <div class="col-sm-9">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

