<?php 
session_start();
if(isset($_SESSION['user_id']))
{
  header("Location:index.php");
}
$conn=mysqli_connect("localhost","root","","blog_db");
if(isset($_POST['login']))
{
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    $query=mysqli_query($conn,"select * from blog_user where user_email='$user_email' and user_password='$user_password'");
    if(mysqli_num_rows($query)>0)
    {
      $row=mysqli_fetch_array($query);
      $_SESSION['user_id']=$row['user_id'];
      $_SESSION['user_username']=$row['user_username'];
      header("Location:index.php");
    }
    else
    {
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>SBlogger | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span>S</span>Blogger</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
					<li class="nav-item"><a href="login.php" class="nav-link pl-5"><i class="fa-solid fa-right-to-bracket pr-2"></i>Login</a></li>
					<li class="nav-item"><a href="register.php" class="nav-link pl-5"><i class="fa-solid fa-user pr-2"></i>Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

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

	<div class="container mt-5 pt-5">
		<div class="justify-content-center h-100 pt-4">
			<div class="card"> 
				<div class="card-header">
					<h2 class="mb-2 mt-2 text-center text-primary"><b>Login Form</b></h2>
				</div>
				<div class="card-body">
					<form action="" class="p-5 bg-light no-gutters block-9 ml-5 mr-5" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="user_email"
								placeholder="Enter Your Email Address">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="user_password"
								placeholder="Enter Your Password">
						</div>
						<div class="form-group text-center pt-3">
							<input type="submit" value="Login" name="login" class="btn py-3 px-5 btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php include("includes/footer.php"); ?>
	
<?php include("includes/main_footer.php"); ?>