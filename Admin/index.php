<?php
session_start();
require('Admin_class.php');

$ADMIN=new Admin_class();
$user_id=$_SESSION['LOGIN_ID'];
$profile=array();
$profile=$ADMIN->my_profile($user_id);
print_r($profile);
?>
<?php
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
								<li class="active">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="dropdown">
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

<?php
require 'footer.php';
?>