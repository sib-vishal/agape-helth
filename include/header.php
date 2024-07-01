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
				<li><a class="  <?php echo ($page === "home") ? 'activelink' : '' ?> " href="index.php">Home</a>
				</li>

				<li class="dropdown"><a href="#"
						class="<?php echo ($page === "about") ? 'activelink' : '' ?> "><span>About</span> <i
							class="bi bi-chevron-down"></i></a>
					<ul>

						<li class="dropdown"><a href="#"><span>Who we serve</span> <i
									class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="chiropractic-services-dogs.php" class=" ">Dogs
									</a></li>
								<li><a href="chiropractic-services-cats.php" class=" ">Cats
									</a></li>
								<li><a href="#" class=" ">Birds
									</a></li>
								<li><a href="#" class=" ">Reptiles
									</a></li>
								<li><a href="#" class=" ">Exotics</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#"><span>First Day</span> <i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="#" class=" ">Expectations</a>
								</li>
								<li><a href="#" class=" ">Forms</a>
								</li>

							</ul>
						</li>

					</ul>
				</li>
				<li><a class=" " href="#services">People</a></li>
				<li><a class=" " href="chiropractic-animal-services.php">Animals</a></li>
				<li><a class=" " href="#doctors">The Gym</a></li>

				<li><a class=" " href="#contact">Blog</a></li>
				<li><a class=" " href="contact-us.php">Contact</a></li>
			</ul>
			<!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
		</nav>

		<a href="#offcanvas" class="services-menu " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
			aria-controls="offcanvasLabel">

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
						<li><a class="dropdown-item" href="chiropractic-services-dogs.php">Dogs</a></li>
						<li><a class="dropdown-item" href="chiropractic-services-catss.php">Cats </a></li>
						<li><a class="dropdown-item" href="#">Birds</a></li>
						<li class="mt-2">
							<h3 class="fontWeight600 py-2  dropdown-menu-title">FIRST DAY</h3>
						</li>
						<li><a class="dropdown-item" href="#">Expectations
							</a></li>
						<li><a class="dropdown-item" href="#">Forms</a></li>

					</ul>
				</li>
				<li class="nav-item">
					<a class="" href="#">People</a>
				</li>
				<li class="nav-item">
					<a class="" href="chiropractic-animal-services.php">Animals</a>
				</li>
				<li class="nav-item dropdown">
					<a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

					<a class="" href="contact-us.php">Contact</a>
				</li>

			</ul>
		</div>
	</div>
</div>