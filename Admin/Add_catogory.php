<?php
session_start();
require 'header.php';
?>
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="dropdown active">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Add
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="Add_catogory.php"> Add Catogory</a>
										</li>
										<li>
											<a href="Add_products.php">Add Products</a>
										</li>
										<li>
											<a href="Add_offers.php">Add Offers</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="view_catogory.php"> View Catogory</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="faqs.html">View Products</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="faqs.html">View Customers</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="faqs.html">View Orders</a>
								</li>
								
								<!-- <li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li> -->
								<li class="">
									<a class="nav-stylehead" href="Login.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->


	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"> Add Catogory
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>

			</h3>
			<?php
				if(isset($_SESSION['add_catogory']))
				{
					echo $_SESSION['add_catogory'];
					unset($_SESSION['add_catogory']);
				}

				
			?>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="Add_catogory_action.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Catogory Name" name="catogory_name" required="required">
							</div>
							<div class="">
								<textarea placeholder="Enter Catogory Desription" name="catogory_des" required="required"></textarea>
							</div>
							<input type="submit" value="Add Catogory" name="add_catogory">
						</form>
					</div>
					
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
<?php
require 'footer.php';
?>