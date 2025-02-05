<?php include("includes/main_header.php"); ?>

    <?php include("includes/navbar.php"); ?>

	<section class="hero-wrap js-fullheight" style="background-image: url('images/image.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
					<div class="text text-center">
						<span class="subheading">Hey! I am</span>
						<h1>SBlogger</h1>
						<h2>I'm a
							<span class="txt-rotate" data-period="2000"
								data-rotate='[ "Ronaldo Fredickson" ]'></span>
						</h2>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				
				<div class="col-md-6 col-lg-6 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center"
							style="background-image:url(images/about.jpg);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h1 class="big">About</h1>
							<h2 class="mb-4">About Me</h2>
							<p>Hii, I'm RONALDO FREDICKSON. It will inform your visitors who you are so they can know who is authoring your content.</p>
							<ul class="about-info mt-4 px-md-0 px-2">
								<li class="d-flex"><span>Name:</span> <span>Ronaldo Fredrickson</span></li>
								<li class="d-flex"><span>Date of birth:</span> <span>November 28, 1989</span></li>
								<li class="d-flex"><span>Address:</span> <span>San Francisco, California, USA</span></li>
								<li class="d-flex"><span>Zip code:</span> <span>1000</span></li>
								<li class="d-flex"><span>Email:</span> <span>ronaldo@gmail.com</span></li>
								<li class="d-flex"><span>Phone: </span> <span>+1-2234-5678-9-0</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Blog</h1>
					<h2 class="mb-4">Our Blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<?php $conn=mysqli_connect("localhost","root","","blog_db");
					$blog_query=mysqli_query($conn,"select * from blog_item");
					while($blog_row=mysqli_fetch_array($blog_query))
					{
						?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="single.php" class="block-20" style="background-image: url('uploads/<?php echo $blog_row['blog_thumb']; ?>');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="single.php?blog_id=<?php echo $blog_row['blog_id']; ?>"><?php echo $blog_row['blog_title']; ?></a>
							</h3>
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<span class="mr-2"><?php echo $blog_row['created_date']; ?></span>
									<a href="#" class="mr-2">Blog</a>
									<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
								</p>
							</div>
							<p><?php echo $blog_row['blog_description']; ?></p>
						</div>
					</div>
				</div>
					<?php
						}
					?>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<div>
							<h3 class="mb-4">Address</h3>
							<p><a href="#">San Francisco, California</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<div>
							<h3 class="mb-4">Contact Number</h3>
							<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<div>
							<h3 class="mb-4">Email Address</h3>
							<p><a href="mailto:ronaldo@gmail.com">ronaldo@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<div>
							<h3 class="mb-4">Website</h3>
							<p><a href="#">SBlogger.com</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row no-gutters block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-light p-4 p-md-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>

				</div>

				<div class="col-md-6 d-flex">
					<div class="img" style="background-image: url(images/about.jpg);"></div>
				</div>
			</div>
		</div>
	</section>

    <?php include("includes/footer.php"); ?>

<?php include("includes/main_footer.php"); ?>