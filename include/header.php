<!-- <header class="header stricky ">

	<div class="mainMenu">
		<div>
			<div class="inlineHeader">
				<div class="leftLogo">
					<a href="#">
						<picture>
							<source srcset="images/logo-1.webp" type="image/webp" />
							<img src="images/logo-1.png" alt="Fast Solution" />
						</picture>
					</a>
				</div>
				<div class="rightMenu d-none d-lg-block">
					<ul>
						<li><a class="nav-link" href="#">Home</a>
						</li>
						<li class="aboutBoxLink"><a class="nav-link" href="#about">About</a>

							<div class="aboutLinkBox ">

								<div class="row aboutLinkBox_inner">

									<div class="col-lg-6">

										<h3 class="title text-primary fontWeight700">WHO WE SERVE</h3>
										<ul>
											<li><a href="#">Dogs</a></li>
											<li><a href="#">Cats</a></li>
											<li><a href="#">Birds</a></li>
											<li><a href="#">Reptiles</a></li>
											<li><a href="#">Exotics</a></li>
										</ul>
									</div>
									<div class="col-lg-6">

										<h3 class="title text-primary fontWeight700">FIRST DAY</h3>
										<ul>
											<li><a href="#">Expectations</a></li>
											<li><a href="#">Forms</a></li>
										</ul>
									</div>
								</div>
							</div>

						</li>
						<li><a class="nav-link" href="#">People</a></li>
						<li><a class="nav-link" href="#">Animals</a></li>
						<li><a class="nav-link" href="#">The Gym</a></li>
						<li><a class="nav-link" href="#">Blog</a></li>
						<li><a class="nav-link" href="#">Contact</a></li>

					</ul>
				</div>
				<button class="menuBtn menu__icon d-none d-lg-flex">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<button class="btnMenu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
			</div>


		</div>


	</div>

	<div class="btnBoxMenu">
		<div class="btnBoxMenu_inner">

			<div class="row ">
				<div class="col-lg-6">

					<div class="row">
						<div class="col-6">
							<h3 class="title text-primary fontWeight700">SERVICES</h3>
							<ul class="mt-3">
								<li><a href="#">Adjustments</a></li>
								<li><a href="#">Cupping</a></li>
								<li><a href="#">Needling</a></li>
								<li><a href="#">Functional Medicine</a></li>
							</ul>
						</div>
						<div class="col-6 mt-4">
							<ul class="mt-3">
								<li><a href="#">Massage</a></li>
								<li><a href="#">Nutrition</a></li>
								<li><a href="#">Hyperbaric O2</a></li>
								<li><a href="#">Sports Medicine</a></li>
							</ul>
						</div>
					</div>



				</div>
				<div class="col-lg-3">

					<h3 class="title text-primary fontWeight700">SPECIALITIES</h3>
					<ul class="mt-3">
						<li><a href="#">Car Accidents</a></li>
						<li><a href="#">Sports Injuries</a></li>
						<li><a href="#">Overall Wellness</a></li>
						<li><a href="#">Sports Medicine</a></li>
					</ul>
				</div>
				<div class="col-lg-3">

					<h3 class="title text-primary fontWeight700">FIRST DAY</h3>
					<ul class="mt-3">
						<li><a href="#">Expectations</a></li>
						<li><a href="#">Forms</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</header>









<div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<div class="leftLogo">
			<a href="#">
				<picture>
					<source srcset="images/logo-1.webp" type="image/webp" />
					<img src="images/logo-1.png" alt="Fast Solution" />
				</picture>
			</a>
		</div>
		<h5 id="offcanvasRightLabel">&nbsp;</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="innerMenu mt-3">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#">People</a></li>
				<li><a href="#">Animals</a></li>
				<li><a href="#">The Gym</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<hr>
		<div class="followUs">
			<h3 class="title fontWeight600 mt-3 ms-2">Follow Us</h3>
			<ul class="socialLink">
				<li data-bs-dismiss="offcanvas"><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li data-bs-dismiss="offcanvas"><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
				<li data-bs-dismiss="offcanvas"><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
				<li data-bs-dismiss="offcanvas"><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
			</ul>
		</div>
	</div>
</div> -->

<header id="header" class="header stricky">
	<div class="containerFull d-flex align-items-center justify-content-between">

		<a class="logo  " href="index.php">
			<picture>
				<source srcset="images/logo-1.webp" type="image/webp" />
				<img src="images/logo-1.png" alt="Fast Solution" />
			</picture>
		</a>




		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link scrollto <?php echo ($page === "home") ? 'activelink' : '' ?> "
						href="#hero">Home</a>
				</li>

				<li class="dropdown"><a href="#"
						class="<?php echo ($page === "about") ? 'activelink' : '' ?> "><span>About</span> <i
							class="bi bi-chevron-down"></i></a>
					<ul>

						<li class="dropdown"><a href="#"><span>Who we serve</span> <i
									class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#" class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Dogs
									</a></li>
								<li><a href="#" class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Cats
									</a></li>
								<li><a href="#" class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Birds
									</a></li>
								<li><a href="#" class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Reptiles
									</a></li>
								<li><a href="#"
										class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Exotics</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#"><span>First Day</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#"
										class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Expectations</a>
								</li>
								<li><a href="#" class="<?php echo ($page === "about") ? 'activelink' : '' ?> ">Forms</a>
								</li>

							</ul>
						</li>

					</ul>
				</li>
				<li><a class="nav-link scrollto" href="#services">People</a></li>
				<li><a class="nav-link scrollto" href="#departments">Animals</a></li>
				<li><a class="nav-link scrollto" href="#doctors">The Gym</a></li>

				<li><a class="nav-link scrollto" href="#contact">Blog</a></li>
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
			</ul>
			<!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
		</nav>

		<a href="#offcanvas" class="services-menu scrollto" data-bs-toggle="offcanvas" href="#offcanvasExample"
			role="button" aria-controls="offcanvasLabel">

			<i class="fa-solid fa-bars "></i>

		</a>


	</div>
</header>


<div class="header-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasLabel">
			<picture>
				<source srcset="images/logo-1.webp" type="image/webp" />
				<img class="" style="max-height: 60px;" src="images/logo-1.png" alt="Fast Solution" />
			</picture>
		</h5>
		<button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body ">

		<div class="navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link " aria-current="page" href="#">Home</a>
				</li>
				
				<!--  -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						About
					</a>
					<ul class="dropdown-menu w-100">

						<li>
							<h3 class="fontWeight600 py-2  dropdown-menu-title">WHO WE SERVE</h3>
						</li>
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
						<li class="mt-2">
							<h3 class="fontWeight600 py-2  dropdown-menu-title">FIRST DAY</h3>
						</li>
						<li><a class="dropdown-item" href="#">Expectations
							</a></li>
						<li><a class="dropdown-item" href="#">Forms</a></li>

					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">People</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Animals</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						Services
					</a>
					<ul class="dropdown-menu w-100">
						<li><a class="dropdown-item" href="#">Adjustments</a></li>
						<li><a class="dropdown-item" href="#">Cupping</a></li>
						<li><a class="dropdown-item" href="#">Needling</a></li>
						<li><a class="dropdown-item" href="#">Functional Medicine</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false">
						Specialities
					</a>
					<ul class="dropdown-menu w-100">

						<li><a class="dropdown-item" href="#">Car Accidents</a></li>
						<li><a class="dropdown-item" href="#">Sports Injuries</a></li>
						<li><a class="dropdown-item" href="#">Overall Wellness</a></li>
						<li><a class="dropdown-item" href="#">Sports Medicine</a></li>
					</ul>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="#">The Gym</a>

				</li>
				<li class="nav-item">

					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item">

					<a class="nav-link" href="#">Contact</a>
				</li>

			</ul>
		</div>
	</div>
</div>



