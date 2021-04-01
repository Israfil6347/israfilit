<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="title" content="israfilit.me">
	<meta name="description" content=" hi, I am israfil. Self-employed I am an expert in HTML5, CSS3, JavaScript, JQuery, Bootstrap, PHP, MySql, and WordPress customization. Web Design and development is my passion.i am best web application developer in Bangladesh ">
  	<meta name="keywords" content="Md israfil,israfilit,Eng israfil,web application developer">
  	<meta name="author" content="israfilit.me">
	<title>Md israfil</title>

	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--font-awesome-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!--css Link-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Md israfil</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#aboutsection">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Education
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#Education">Academic Qualification</a>
								<a class="dropdown-item" href="#traning">Training Summary</a>
								
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Galery">Galary</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								My Project
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#Responsive">Responsive Web Design</a>
								<a class="dropdown-item" href="#myproject">Dinamic Web Application Development(PHP) </a>
								<a class="dropdown-item" href="#">Laravel Web Application Development </a>
							</div>
						</li>

					</ul>
					<form class="form-inline my-2 my-lg-0 ">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
			<div class="row">
				<div class="col-sm-6">
					<h1 style="font-family: 'Source Sans Pro', sans-serif;">Experince</h1>
					<p>Company Name: Softgar It</p>
				</div>
			<div id="carouselExampleControls" class="carousel slide col-sm-6" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 img-fluid img-thumbnail" src="img/car1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 img-fluid img-thumbnail" src="img/car2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 img-fluid img-thumbnail" src="img/car3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 img-fluid img-thumbnail" src="img/car4.jpg" alt="four slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 img-fluid img-thumbnail" src="img/car5.jpg" alt="Five slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExample my-2Controls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			</div>
		</div>
		<div id="aboutsection" class="text-center">
			<h2 class="my-3">About me</h2>
			<p>hi, I am israfil. Self-employed I am an expert in HTML5, CSS3, JavaScript, JQuery, Bootstrap, PHP, MySql, and WordPress customization. Web Design and development is my passion. I have 1 year of Industrial experience in web development. I have completed 20+ projects for my local clients. If you need to develop your website for your business then you are always welcome to ping me.<br>Thank you</p>
		</div>

		<!-- About section -->
		<!-- Education-->
		<div id="Education">
			<h2 class="text-center my-3">Education</h2>
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">BSE in CSE</h5>
							<p class="card-text">Concentration:Computer Science and Engineering</br>Institute:Daffodil international university</br>Result:CGPA:3.10 Out of 4</br>Pass. Year:2018</br>Duration:4 Years.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Diploma in computer Science</h5>
							<p class="card-text">Concentration:Computer Technology
								Institute:Institute of computer science and technology<br>
								Result:CGPA:3.03 Out of 4<br>
								Pass. Year:2015<br>
								Duration:4 Years.</p>
				
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Secondary School Certificate (SSC)</h5>
							<p class="card-text">Concentration:Business Studies<br>
							Institute:Charshavikary High School<br>
							Result:CGPA:2.88 Out of 5<br>
							Pass. Year:2010<br>
							Duration:2 Years</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="row" id="traning">
	<div class="ml-2"><h4 class="m-3">Traning Summery</h4>
		<div class="col-md-4 float-left">
			<div class="card" style="width: 22rem;">
				<img class="card-img-top" src="img/idb.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">ISDB-BISEW(DHAKA)
					</h5>
					<p class="card-text">Professional Web Application
						Development
					</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Computer Fundamental, HTML, CSS</li>
					<li class="list-group-item">JavaScript, Bootstrap,jQuery</li>
					<li class="list-group-item">PHP, WordPress, Laravel</li>
				</ul>
				<div class="card-body">
					<a href="https://careerhub.idb-bisew.info/JobCard" class="card-link">CareerHub.Idb</a>
					<a href="https://bitm.org.bd/institute-details/24/us-software-limited" class="card-link">Traning Center</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 float-left">
			<div class="card" style="width: 22rem;">
				<img class="card-img-top" src="img/ibc.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">IBC-PrimaxSoftware BangladeshLtd (DHAKA)
					</h5>
					<p class="card-text">Web Application and
						Development

					</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Computer Fundamental, HTML, CSS</li>
					<li class="list-group-item"> I used PHP and for frontend usually use HTML, CSS and Bootstrap.</li>

				</ul>
				<div class="card-body">
					<a href="https://www.ibcs-primax.com/ibcsonweb/" class="card-link">IBC-PrimaxSoftware BangladeshLtd</a>
					
				</div>
			</div>
		</div>
		<div class="col-md-4 float-left">
			<div class="card" style="width: 22rem;">
				<img class="card-img-top" src="img/bitm.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">BITM(DHAKA)
					</h5>
					<p class="card-text">IT Support Technical 
					</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">Hardware and Software &Troubleshooting. </li>
					<li class="list-group-item">Network Troubleshooting</li>
					<li class="list-group-item">Using g E-mail and Internet.</li>
				</ul>
				<div class="card-body">
					<a href="http://www.bitm.org.bd/" class="card-link">BITM</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Education-->
<!-- Galery-->
<div id="Galery">
	<h2 class="text-center my-2">Galeary</h2>
	<div class="row">
		<div class="col-sm-4">
			<img src="img/g1.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">

		</div>
		<div class="col-sm-4">
			<img src="img/g2.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">
		</div>
		<div class="col-sm-4">
			<img src="img/g3.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">
		</div>
		<div class="w-100"></div>
		<div class="col-sm-4">
			<img src="img/g4.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">
		</div>
		<div class="col-sm-4">
			<img src="img/g5.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">
		</div>
		<div class="col-sm-4">
			<img src="img/g6.jpg" class="img-fluid img-thumbnail my-2" alt="Responsive image">
		</div>
	</div>
</div>
<!-- Galery-->
<!-- My Project-->
<div id="myproject">
	<h2 class="text-center my-2">My Project</h2>
	<div class="col-sm-12">
		<h3>1.E-commerce Application</h3>
		<h6><a href="http://israfilit.me/shop/">Online Shop</a></h6>
		<p class="text-justify">Description: This project is an E-commerce Application system and it is the way to sell products through the manager It has fully control admin and administration. Admin and manager, brand, delivery, produce, order, category, sub category, shop can view their sales Structure & Payment Report by weekly, monthly and yearly basis. Admin can view their full management structure<br>
			Technologies used: MySQL, HTML 5, CSS 3, JavaScript, PHP (OOP) and Bootstrap
		</p>
		<h3>2.Online News portal</h3>
		<h6><a href="http://israfilit.me/news/">Online News</a></h6>
		<p class="text-justify">Description: It is a dynamic system. It can be maintain and changed easily because it is based on database. It’s contained web pages that are generated in real-time. These pages include Web scripting code, such as PHP. It is fully secured from unauthorized access. In a word it can say that our Online News Paper website is a completely dynamic website.<br>
			Technologies used:MySQL, HTML 5, CSS 3, JavaScript, PHP and Bootstrap.

		</p>
		<h3 id="Responsive">3.Personal Portfolio Website</h3>
		<h6><a href="http://israfilit.me">Md israfil</a></h6>
		<p>Technologies used:MySQL, HTML 5, CSS 3, JavaScript, PHP and Bootstrap<p>

		</div>
	</div>
	<!-- My Project-->
	<!-- contact-->
	<div class="row">
		<?php
                        
                  
        if(isset($_POST['submit']))
        {
          $name    =$_POST['name'];
          $email   =$_POST['email'];
          $subject =$_POST['subject'];
          $message =mysqli_real_escape_string($conn, $_POST['message']);
          $query  = "INSERT INTO contact (name,email,subject,message)
          VALUES ('$name', '$email','$subject', '$message')";

          $result = mysqli_query($conn, $query);

          if ($result){
            echo '<script> alert("Thanks for your command!");</script>';
          }else{
            echo "ok". mysqli_error($conn);
          }

        }
        ?>

		<div class="col text-center"><h2 class="m-4">Contact Form</h2>
			<form method="post" action="index.php">
				<div class="form-row mx-5">
					<div class="col-sm-12">
					
						<input type="text" class="form-control" name="name" placeholder="Your Name"><br>
					</div>
					<div class="col-sm-12">
						<input type="email" class="form-control" name="email" placeholder="Enter Email"><br>
					</div>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="subject" placeholder="Subject"><br>
					</div>
					<div class="col-sm-12" >
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Enter Your Comment"></textarea><br>
					</div>
					<button type="submit" name="submit" class="btn btn-outline-info my-2" style="margin-left: 465px;">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!-- contact-->
	<!-- Footer -->
	<footer class="bg-dark text-center text-white">
		<!-- Grid container -->
		<div class="container p-4">
			<!-- Section: Social media -->
			<section class="mb-4">
				<!-- Facebook -->
				<a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/israfilhaqueeng" role="button"
				><i class="fab fa-facebook-f"></i></a>

				<!-- Twitter -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-twitter"></i></a>

				<!-- Google -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-google"></i></a>

				<!-- Instagram -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-instagram"></i></a>

				<!-- Linkedin -->
				<a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/israfileng/" role="button"
				><i class="fab fa-linkedin-in"></i></a>

				<!-- Github -->
				<a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Israfil6347" role="button"
				><i class="fab fa-github"></i></a>
			</section>
			<div class="row">
				<div class="col-sm-4">
					<h2>Address</h2>
					<p>Present Address:931 East Shawarapara Mirpur, Dhaka-1216<br>
						permanant address:Adderss: Charshavikary,Sonagazi,feni-3933
						<p>
						</div>
						<div class="col-sm-4">
							<h3>Email address</h3>
							<p>israfilhaque@yahoo.com<br>6347israfil@gmail.com</p>
						</div>
						<div class="col-sm-4">
							<h3>Mobile Phone </h3>
							<p>+880-1815-458842 <br>+880-1613-458842</p>
						</div>

					</div>

					<!-- Copyright -->
					<div class="text-center p-3">
						© 2021 Copyright:
						<a class="text-white" href="https://israfilit.me/">israfilit.me</a>
					</div>
					<!-- Copyright -->
				</footer>
				<!-- Footer -->
			</div>
		</div>
	</div>

	<!-- About section -->


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>