<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!--  Bootstrap Icon  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

	<style type="text/css">
		*{
			margin: 0;
			padding:0;
		}
		body{
			background:black ;
			color: whitesmoke;
		}
		nav{
			height: 60px;

			margin-top: 10px;
		}
		.left{
			font-size: 33px;
			font-family: sans-serif;
		}
		nav ul a{
			text-decoration: none;
			color: whitesmoke;
		}
		nav ul a:hover{
			border-bottom: solid lawngreen;
			color: lawngreen;
		}
		.section1{
			margin: 220px 0;
		}
		.section2{
			border-top:solid  lawngreen ;
			margin-bottom: 15%;
			margin-top: 10px;
			padding: 10px;
		}
		.section2 .vertical{
			height: 93px;
			width: 2px;
			background-color: whitesmoke;

		}
		.section2 .box{
			border-top: solid ghostwhite;
			width: 60%;
			margin-left: 20%;

		}
		button:hover{
			background-color: whitesmoke;
			color: lawngreen;
			


		}
		.section3{
			margin:1% 0% 3% 38%;
			padding: 2px;
		}
		.about .left{
			height: 450px;
			margin: 60px;
			width: 404px;
			justify-content: center;
		}
		.about .right{
			height: 450px;
			border: lawngreen solid;
			margin: 60px ;
			width: 404px;
			justify-content: center;
			font-size: 21px;
			padding: 8px;

		}
		.skill{
			margin-top:200px;
			width: 100%;
		}
		.card{
			
			background:transparent;
			height: 450px;
			width: 340px;
			display: flex;
			align-items: center;
			margin: 5%;
			border: lawngreen solid;

		}
		.project{
			display: flex;
			align-items: center;
			margin: 5%;
		}
		.pro1{

			height: 350px;
			width: 300px;
			margin: 40px 5px 68px 15px;
			align-items: center;
			position: relative;
			overflow: hidden;

		}
		.pro2{

			box-sizing: border-box;
			padding-top: 400px;
			position: absolute;
			transition: padding-top 1s;

			
		}

		
		.pro1:hover .pro2
		{
			padding-top: 0px;

		} 		
		.des{

			height: 350px;
			
			background-color: black;
		}




	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<header>
					<nav class="d-flex justify-content-around text-center">
						<div class="left">PORTFOLIO</div>
						
						<div class="right ">
							<ul class="d-flex justify-content-center ">
								<li style="list-style: none; margin: 0 23px;"><a href="">HOME</a></li>
								<li style="list-style: none; margin: 0 23px;"><a href="#about">ABOUT</a></li> 
								<li style="list-style: none; margin: 0 23px;"><a href="#skill">SKILLS</a></li>
								<li style="list-style: none; margin: 0 23px;"><a href="#project">PROJECT</a></li>
								<li style="list-style: none; margin: 0 23px;"><a href="#contact">CONTACT ME</a></li>
							</ul>
						</div>
					</nav>
				</header>
				<div>
					<section class="section1 d-flex justify-content-center">

						<div class="leftsec" style="  width: 30%; font-size: 28px; margin-top: 17px;">
							Hi, My name is <span style="color: lawngreen;">Monika Pal</span>
							<div>
								and I am a Web Developer.
							</div>
						</div>
						<div class="rightsec" style=" width: 30%;   margin-left: 80px;" >
							<img src="https://wtipl.com/wp-content/uploads/WTIP-slider3-1.png" height="300px">
						</div>
					</section>	
				</div>
				<section>
					<div class="about d-flex justify-content-around" style="border-top:solid  lawngreen ;">
						<div class="left">
							<img src="photo.jpg" height="390px" width="400px">
						</div>
						<div class="right">
							<h2 id="about" >About Me</h2>
							<p style="color: lawngreen;">Full stack Developer</p>
							<p>My name is MONIKA PAL and i am pursuing BTech. I am skilled in HTML&CSS, Bootstrap5, Javascript, Sql, PHP, Reactjs and have good knowledge of core java DSA I have a deep intrest in Desiging & Development and I have made many project using REACT and PHP. </p>
							<button class="btn p-2 text-light" style="background-color: lawngreen; ">More..</button>
						</div>
					</div>
				</section>

				<section>
					<div class="skill justify-content-around text-center">
						<h1 id="skill" style=" height: 100px; box-shadow:0px 0px 10px lawngreen ; text-shadow:0px 0px 10px lawngreen, 0px 0px 10px lawngreen ; padding: 20px; ">My Skills</h1>
					</div>
					<div class="container">
						<div class="row">

							<!-- ======================== card ================================================ -->

							<div class="card justify-content-around" style="width: 18rem;">
								<img class="card-img-top" src="https://wisetrolley.com/wp-content/uploads/2023/03/HTML-T-shirt-Black-2.jpg" height="160px" width="150px">
								<div class="card-body">
									<h5 class="card-title">HTML5</h5>
									<p class="card-text">HTML stand for Hyper Text markup Language. HTML is standerd markup language for  createing Web pages.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card justify-content-around" style="width: 18rem;">
								<img class="card-img-top" src="https://media.geeksforgeeks.org/wp-content/uploads/20230803130837/CSS.webp" height="150px" width="150px">
								<div class="card-body">
									<h5 class="card-title">CSS3</h5>
									<p class="card-text">CSS stands for Cascading Style Sheets. It is a style sheet language which is used to describe the look and formatting of a document written in markup language.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="bootstrap.jpg" height="150px" width="150px" >
								<div class="card-body">
									<h5 class="card-title">Bootstrap</h5>
									<p class="card-text">Bootstrap is the popular HTML, CSS and JavaScript framework for developing a responsive and mobile friendly website.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="react.png" height="150px" width="1009px" >
								<div class="card-body">
									<h5 class="card-title">REACTJS</h5>
									<p class="card-text">React is a JavaScript-based UI development library. Facebook and an open-source developer community run it. Although React is a library rather than a language, it is widely used in web development. </p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="https://logos-world.net/wp-content/uploads/2023/02/JavaScript-Emblem.png" height="150px" width="150px" >
								<div class="card-body">
									<h5 class="card-title">Javascript</h5>
									<p class="card-text">JavaScript (js) is a light-weight object-oriented programming language which is used by several websites for scripting the webpages.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="Sql.png" height="150px" width="150px" >
								<div class="card-body">
									<h5 class="card-title">SQL</h5>
									<p class="card-text">This database language is mainly designed for maintaining the data in relational DBMS. It is a special tool used by data professionals for handling structured data.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="PHP.png" height="150px" width="150px" >
								<div class="card-body">
									<h5 class="card-title">PHP</h5>
									<p class="card-text">PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. PHP is well suited for web development. Therefore, it is used to develop web applications.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>

							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="java.png" height="150px" width="150px">
								<div class="card-body">
									<h5 class="card-title">Java</h5>
									<p class="card-text">Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="https://contentstatic.techgig.com/photo/90325682.cms" height="150px" width="150px">
								<div class="card-body">
									<h5 class="card-title">C Language</h5>
									<p class="card-text">C programming is considered as the base for other programming languages, that is why it is known as mother language.</p>
									<a href="#" class="btn text-light " style="background-color: lawngreen;" >More.</a>
								</div>
							</div>


						</div>
					</div>
				</section>

				<!-- ==========================================  project ===================================== -->
				<section>
					<div class="skill justify-content-center text-center ">
						<h1 id="project" style=" height: 100px;  box-shadow:0px 0px 10px lawngreen ; text-shadow:0px 0px 10px lawngreen, 0px 0px 10px lawngreen ; padding: 20px; ">My Project</h1>
					</div>
					<div class="container-fluid">
						<div class=" project row justify-content-around ">

							<div class="pro1" style="background: url('http://localhost/portfolio/cancer.WEBP'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des ">
										<h2  >CANCER SOLUTION HUB</h2>
										<p>CANCER SOLUTION HUB is a platform where every patient can take the appointment form the any type of cancer specialist doctor after filling some information and can see the profile of the doctor. Here you will get the best doctor according to your problem. Now a days this is very complex to find a best doctor and this website will give you the best doctor.</p>
									</div>
								</div>
							</div>

							<div class="pro1" style="background: url('http://localhost/portfolio/onlineshopping.jpg'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des">
										<h2  >Online Shopping Website</h2>
										<p>The online shopping site is to sell goods and services online. the project deals with developing an E-commerce website for online shopping.</p>
									</div>
								</div>
							</div>

							<div class="pro1" style="background: url('http://localhost/portfolio/amazon.png'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des ">
										<h2>Amazon Clone</h2>
										<p>Amazon clone is a wed application developed using some technologies. It is project that replicates the core functionalities of Amozon.com.</p>
									</div>
								</div>
							</div>

							<div class="pro1" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbn3fokDu2N0IqXqlBqUbV3L1Ibm8OlZly1Q&usqp=CAU'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des ">
										<h2  >Digital Clock</h2>
										<p>Digital Clock a clock that display the time in numerical digits rather than by hands on a dial.</p>
									</div>
								</div>
							</div>

							<div class="pro1" style="background: url('https://www.ardorsys.com/blog/wp-content/uploads/2020/05/how-much-does-it-cost-to-develop-a-netflix-clone-mobile-app.jpg'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des">
										<h2  >Netflix Clone</h2>
										<p>Netflix Clone is an online video entertainment website similar to Netflix, wher you can watch unlimited movies $ TV shows for one low monthly price.</p>
									</div>
								</div>
							</div>

							<div class="pro1" style="background: url('https://cdn.dribbble.com/userupload/4569408/file/original-fb56ee9120eca2896a4fac5f54cfef28.png?resize=752x'); background-size: 100% 100%;">
								<div class="pro2 text-light">
									<div class="des">
										<h2   >Music Player</h2>
										<p >The music player is a software project supporting all known media files and has the ability to play them with ease.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>

				<!-- ==========================================  project ===================================== -->
				<section>
					<div class="skill justify-content-center text-center ">
						<h1 id="contact" style=" height: 100px;  box-shadow:0px 0px 10px lawngreen ; text-shadow:0px 0px 10px lawngreen, 0px 0px 10px lawngreen ; padding: 20px; ">Contact Me</h1>
					</div>
					<div class="row">
						<div class="col-12 d-flex justify-content-around">
							<div class="1 my-5 p-5 " style="height: 200px; width: 400px; border: lawngreen solid 5px;"><h3><i class="bi bi-telephone-fill" style="margin-right:10px;"></i>Phone </h3>91+ 8077278500<br>91+ 7302507403 </div>
							<div class="2 my-5 p-5 " style="height: 200px; width: 400px; border: lawngreen solid 5px;"><h3><i class="bi bi-envelope-fill" style="margin-right:10px;"></i>Email</h3> monipal599@gmail.com </div>
							<div class="3 my-5 p-5 " style="height: 200px; width: 400px; border: lawngreen solid 5px;"><h3><i class="bi bi-geo-alt-fill" style="margin-right:1px;"></i>Address</h3>Bijnor, Uttar Pradesh,India </div>
						</div>
					</div>
				</section>
				<section class="section2 mt-5">
					<!-- <span class="text-gray">What I have done so far</span> -->
					<!-- <h1 >work experiance</h1> -->
					<div class="box d-flex justify-content-center mt-5" >
						<div class="vertical " style="margin: 0 100px; height: 96px; width: 2px;">
							<div class="vertical-text" style="margin-top: 98px; font-size: 30px;"> Front end Developer</div>
						</div>
						<div class="vertical" style="margin: 0 100px; height: 96px; width: 2px;">
							<div class="vertical-text" style="margin-top: 98px; font-size: 30px;"> Back end Developer</div>
						</div>
						<div class="vertical" style="margin: 0 100px; height: 96px; width: 2px;">
							<div class="vertical-text" style="margin-top: 98px; font-size: 30px;">Full Stack Developer</div>
						</div>
					</div>
				</section>
				<section class="section3">
					<a class="btn text-light " href="Monikapal_resume\C:\xampp\htdocs\portfolio" style="background-color: lawngreen;height: 50px; width: 200px;  font-size: 20px;">Downlode Resume</a>
					<a class="btn text-light" href="monapal605" style="background-color: lawngreen;height: 50px; width: 200px;  font-size: 20px;">Visit Github</a>
				</section>
			</div>
		</div>
	</div>
</body>
</html>
