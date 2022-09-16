<?php
session_start();
require('Admin_class.php');

$ADMIN=new Admin_class();
$cat_status=0;
$catogory=array();
$catogory=$ADMIN->View_all_catogory($cat_status);
// print_r($catogory);
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
								<li class="">
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
								<li class="active">
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
			<h3 class="tittle-w3l"> View Catogories
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


		<div class="bs-docs-example">
				<table class="table">
					<thead>
						<tr>
							<th>Catogory ID</th>
							<th>Catogory Name</th>
							<th>Catogory Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach ($catogory as $cat) {
					?>
						<tr>
							<td><?php echo $cat['Catogory_id'] ?></td>
							<td><?php echo $cat['Catogory_name'] ?></td>
							<td><?php echo $cat['Catogory_Description'] ?></td>
							<td><button class="w3view-cart"  name="edit" value="<?php echo $cat['Catogory_id'] ?>">
									<a class="agile-icon" href="edit_catogory.php" style="color:white">
										<i class="fa fa-edit"></i>
									</a>
								</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="w3view-cart"  name="edit" value="<?php echo $cat['Catogory_id'] ?>">
									<a class="agile-icon" href="delete_catogory.php" style="color:white">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</a>
								</button></td>
						</tr>
					<?php	
					}
					?>
						
							
						
					</tbody>
				</table>
			</div>
			</div>
			</div>
<?php
require 'footer.php';
?>