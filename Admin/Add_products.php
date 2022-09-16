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
			<h3 class="tittle-w3l"> Add Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>

			</h3>
			<?php
				if(isset($_SESSION['add_products']))
				{
					echo $_SESSION['add_products'];
					unset($_SESSION['add_products']);
				}

				
			?>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="Add_products_action.php" method="post" enctype="multipart/form-data" >
							
							<div class="">
								<input type="text" placeholder="Product Name" name="Product_name" required="required">
							</div>
							<div class="">
								<input type="text" placeholder="Product Catogory" name="Product_catogory" required="required">
							</div>
							<!-- Upload Product Pic<input type="file"  required="" name="upload_file"><br> -->
                            <div class="">
								<textarea placeholder="Enter Product Desription" name="Product_description" required="required"></textarea>
							</div>
							<div class="">
								<input type="text" placeholder="Product price" name="Product_price" required="required">
							</div>
							<div class="">
								<input type="text" placeholder="Product Quantity" name="Product_quantity" required="required">
							</div>
							<input type="submit" value="Add Product" name="add_product">
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