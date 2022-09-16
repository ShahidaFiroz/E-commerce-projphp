<?php
session_start();
require ('header.php');
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
								<li class="">
									<a class="nav-stylehead" href="signUp.php"> Sign Up</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">About Us</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html"> Products</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="faqs.html">Faqs</a>
								</li>
								<!-- <li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="icons.html">Web Icons</a>
										</li>
										<li>
											<a href="typography.html">Typography</a>
										</li>
									</ul>
								</li> -->
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
								<li class="active">
									<a class="nav-stylehead" href="Login.php">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->



	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"> Login
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>

			</h3>
			<?php
				if(isset($_SESSION['login_error']))
				{
					echo $_SESSION['login_error'];
					unset($_SESSION['login_error']);
				}

				
			?>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="Login_action.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="Email ID" name="email" required="required">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Password" name="password" required="required">
							</div>
							<input type="submit" value="Login" name="login">
						</form>
					</div>
					
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
<?php
require ('footer.php');
?>