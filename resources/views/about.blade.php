@extends('layouts.apps')

@section('content')
    <!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="drop-link">
								<a href="index.html">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown">
									<li><a href="index.html">Homepage 01</a></li>
									<li><a href="home2.html">Homepage 02</a></li>
									<li><a href="home3.html">Homepage 03</a></li>
									<li><a href="home4.html">Homepage 04</a></li>
									<li><a href="home5.html">Homepage 05</a></li>
									<li><a href="home6.html">Homepage 06</a></li>
								</ul>
							</li>
							<li class="drop-link">
								<a class="active" href="#">Features <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown">
									<li><a href="category-grid.html">Category Pages <i class="fa fa-angle-right"></i></a>
										<ul class="dropdown level2">
											<li><a href="category-list.html">List style</a></li>
											<li><a href="category-grid.html">Grid style</a></li>
											<li><a href="category-mix.html">Mix style</a></li>
										</ul>
									</li>
									<li><a href="single-post.html">Post Styles <i class="fa fa-angle-right"></i></a>
										<ul class="dropdown level2">
											<li><a href="single-post.html">classic sidebar</a></li>
											<li><a href="single-post2.html">fullwidth sidebar</a></li>
											<li><a href="single-post3.html">alt no sidebar</a></li>
										</ul>
									</li>
									<li><a href="about.html">Pages <i class="fa fa-angle-right"></i></a>
										<ul class="dropdown level2">
											<li><a href="about.html">about us</a></li>
											<li><a href="archives.html">Archive</a></li>
											<li><a href="error-404.html">error 404</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="category-mix.html">Lifestyle</a>
								<div class="mega-dropdown">
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/c10.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/c11.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/c12.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Praesent placerat risus.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/c13.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Morbi in sem quis dui placerat ornare.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/c15.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Quisque volutpat mattis semper suscipit eros.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="category-grid.html">Travel</a>
								<div class="mega-dropdown">
									<ul class="filter-list">
										<li><a href="#">Travel</a></li>
										<li><a href="#">Trending</a></li>
										<li><a href="#">Latest</a></li>
									</ul>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/p5.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/p6.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Praesent placerat risus.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/p7.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Morbi in sem quis dui placerat ornare.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
									<div class="news-post standard-post">
										<div class="image-holder">
											<img src="upload/blog/p8.jpg" alt="">
										</div>
										<h2><a href="single-post.html">Quisque volutpat mattis semper suscipit eros.</a></h2>
										<ul class="post-tags">
											<li>by <a href="#">John Smith</a></li>
											<li>1 days ago</li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="contact.html">Contacts</a></li>
						</ul>
					</div>
					<a class="search-button" href="#"><i class="fa fa-search"></i></a>
					<form class="form-search">
						<input type="search" placeholder="Search:"/>
					</form>
				</div>
			</nav>
		</header>
		<!-- End Header -->

		<!-- page-banner section
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>About Us</h1>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- about section
			================================================== -->
		<section class="about-section">
			<div class="container">
				<div class="about-box">
					<div class="row">
						<div class="col-lg-6">
							<div class="about-post">
								<span>our vision</span>
								<h2>Apply Critical Thinking & Imagination.</h2>
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
								<p>Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about-post">
								<span>our mission</span>
								<h2>Highest Creative Standards.</h2>
								<p>Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
							</div>
						</div>
					</div>
				</div>
				<div class="team-box">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="team-post">
								<img src="upload/team/1.jpg" alt="">
								<span>Top Author</span>
								<h2>Stan Enemy</h2>
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede ...</p>
								<ul class="team-social">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="team-post">
								<img src="upload/team/2.jpg" alt="">
								<span>Top Author</span>
								<h2>John Smith</h2>
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede ...</p>
								<ul class="team-social">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="team-post">
								<img src="upload/team/3.jpg" alt="">
								<span>Author</span>
								<h2>Linda M.</h2>
								<p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede ...</p>
								<ul class="team-social">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End about section -->

		<!-- instagram section
			================================================== -->
		<section class="instagram-section">
			<div class="container">
				<div class="border-top"></div>
				<div class="instagram-box">

					<div class="title-section text-center">
						<h1>Our Latest Instagram Posts</h1>
						<a href="#">@mittetheme</a>
					</div>
					<ul class="insta-list">
						<li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li>
						<li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li>
						<li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li>
						<li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li>
						<li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li>
					</ul>

					<div class="center-button">
						<a class="button-one" href="#">Follow Us</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End instagram section -->

		<!-- footer
			================================================== -->
		<footer>
			<div class="container">

				<h1>Mitte</h1>
				<p class="copyright-line">?? Copyright 2019 - All rights reserved.</p>
				<ul class="social-list">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
@endsection
