@extends('layouts.apps')

@section('content')
    <!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix header-style3">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="drop-link">
								<a class="active" href="index.html">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
								<a href="#">Features <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown">
									<li><a href="category-grid.html">Category Pages <i class="fa fa-angle-right"></i></a>
										<ul class="dropdown level2">
											<li><a href="{{ route('posts.index') }}">Posts</a></li>
											<li><a href="{{ route('categories.index') }}">Categories</a></li>
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

		<!-- top-images-section
			================================================== -->
		<section class="top-slider-section">
			<div class="container">
				<div class="top-slider-box">
					<div class="row">
						<div class="col-lg-8">
							<div class="owl-wrapper">
								<div class="owl-carousel" data-num="1">

									<div class="item">
										<div class="news-post image-post">
											<img src="upload/blog/home3/a1.jpg" alt="">
											<div class="hover-post overlay-bg">
												<div><a class="category-link" href="#">Travel</a></div>
												<h2><a href="single-post.html">Morbi in sem quidui placerat ornare.</a></h2>
												<ul class="post-tags">
													<li><a href="#">3 comments</a></li>
													<li>3 days ago</li>
													<li>by <a href="#">John Smith</a></li>
												</ul>
												<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Praesent elementum ...</p>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="news-post image-post">
											<img src="upload/blog/home3/a2.jpg" alt="">
											<div class="hover-post overlay-bg">
												<div><a class="category-link" href="#">Travel</a></div>
												<h2><a href="single-post.html">Integer vitae libero ac risus egestas.</a></h2>
												<ul class="post-tags">
													<li><a href="#">3 comments</a></li>
													<li>3 days ago</li>
													<li>by <a href="#">John Smith</a></li>
												</ul>
												<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Praesent elementum ...</p>
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
						<div class="col-lg-4">
							<div class="top-list-posts">
								<h2>Popular Stories</h2>
								<ul class="list-thumb-posts">
									<li>
										<div class="image-holder"><img src="upload/blog/home3/t1.jpg" alt=""></div>
										<div class="list-post-content">
											<a class="text-link" href="#">Lifestyle</a>
											<h2><a href="single-post.html">Fusce pellentesque suscipit.</a></h2>
											<ul class="post-tags">
												<li>2 days ago</li>
												<li><a href="#">0 comments</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="image-holder"><img src="upload/blog/home3/t2.jpg" alt=""></div>
										<div class="list-post-content">
											<a class="text-link" href="#">Food</a>
											<h2><a href="single-post.html">Integer vitae libero ac risus egestas placerat.</a></h2>
											<ul class="post-tags">
												<li>2 days ago</li>
												<li><a href="#">3 comments</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="image-holder"><img src="upload/blog/home3/t3.jpg" alt=""></div>
										<div class="list-post-content">
											<a class="text-link" href="#">Lifestyle</a>
											<h2><a href="single-post.html">Vestibulum commodo tortor.</a></h2>
											<ul class="post-tags">
												<li>4 days ago</li>
												<li><a href="#">0 comments</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="image-holder"><img src="upload/blog/home3/t4.jpg" alt=""></div>
										<div class="list-post-content">
											<a class="text-link" href="#">Travel</a>
											<h2><a href="single-post.html">Quisque a lectus. </a></h2>
											<ul class="post-tags">
												<li>4 days ago</li>
												<li><a href="#">0 comments</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End top-images section -->

		<!-- fresh-section2
			================================================== -->
		<section class="fresh-section2">
			<div class="container">
				<div class="title-section text-center">
					<h1>Trending Stories</h1>
				</div>
				<div class="fresh-box">
					<div class="row">
						<div class="col-lg-6">
							<div class="news-post image-post">
								<img src="upload/blog/home3/img1.jpg" alt="">
								<div class="hover-post overlay-bg">
									<a class="category-link" href="#">Food</a>
									<h2><a href="single-post.html">Quisque volutpat mattis eros.</a></h2>
									<ul class="post-tags">
										<li>3 days ago</li>
										<li><a href="#">3 comments</a></li>
										<li>by <a href="#">John Smith</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="news-post image-post">
								<img src="upload/blog/home3/img2.jpg" alt="">
								<div class="hover-post overlay-bg">
									<a class="category-link" href="#">Lifestyle</a>
									<h2><a href="single-post.html">Fusce pellentesque suscipit.</a></h2>
									<ul class="post-tags">
										<li>3 days ago</li>
										<li><a href="#">3 comments</a></li>
										<li>by <a href="#">John Smith</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-lg-3 col-md-6">
							<div class="news-post standard-post">
								<div class="image-holder">
									<a href="single-post.html"><img src="upload/blog/p1.jpg" alt=""></a>
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
								<ul class="post-tags">
									<li>by <a href="#">Stan Enemy</a></li>
									<li>3 days ago</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="news-post standard-post">
								<div class="image-holder">
									<a href="single-post.html"><img src="upload/blog/p2.jpg" alt=""></a>
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
								<ul class="post-tags">
									<li>by <a href="#">Stan Enemy</a></li>
									<li>3 days ago</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="news-post standard-post">
								<div class="image-holder">
									<a href="single-post.html"><img src="upload/blog/p3.jpg" alt=""></a>
								</div>
								<a class="text-link" href="#">Travel</a>
								<h2><a href="single-post.html">Vestibulum auctor dapibus neque.</a></h2>
								<ul class="post-tags">
									<li>by <a href="#">Stan Enemy</a></li>
									<li>3 days ago</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="news-post standard-post">
								<div class="image-holder">
									<a href="single-post.html"><img src="upload/blog/p4.jpg" alt=""></a>
								</div>
								<a class="text-link" href="#">Travel</a>
								<h2><a href="single-post.html">Praesent placerat risus quiseros.</a></h2>
								<ul class="post-tags">
									<li>by <a href="#">Stan Enemy</a></li>
									<li>3 days ago</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End fresh section -->

		<!-- category-line-section
			================================================== -->
		<section class="category-line-section">
			<div class="container">
				<div class="border-top"></div>

				<div class="category-line-box">
					<div class="title-section">
						<div class="row">
							<div class="col-5">
								<h1>Lifestyle</h1>
							</div>
							<div class="col-7">
								<a class="text-link" href="category-grid.html">View all posts</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c11.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Quisque a lectus. </a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c10.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Aliquam tincidunt mauris.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c9.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>

					</div>

					<div class="center-button">
						<a href="#" class="button-one">Load More</a>
					</div>
				</div>

			</div>
		</section>
		<!-- End category-line section -->

		<!-- category-line-section
			================================================== -->
		<section class="category-line-section">
			<div class="container">
				<div class="border-top"></div>

				<div class="category-line-box">
					<div class="title-section">
						<div class="row">
							<div class="col-5">
								<h1>Travel</h1>
							</div>
							<div class="col-7">
								<a class="text-link" href="category-grid.html">View all posts</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c3.jpg" alt="">
								</div>
								<a class="text-link" href="#">Travel</a>
								<h2><a href="single-post.html">Praesent dapibus. </a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c16.jpg" alt="">
								</div>
								<a class="text-link" href="#">Travel</a>
								<h2><a href="single-post.html">Morbi in sem quisdui placerat ornare.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c8.jpg" alt="">
								</div>
								<a class="text-link" href="#">Travel</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>

					</div>

					<div class="center-button">
						<a href="#" class="button-one">Load More</a>
					</div>
				</div>

			</div>
		</section>
		<!-- End category-line section -->

		<!-- Subscribe section
			================================================== -->
		<section class="subscribe-section">
			<div class="container">
				<div class="subscribe-box">
					<div class="subscribe-title">
						<h2>Join Our Newsletter</h2>
						<p>Sign up for our free newsletters to receive the latest news. Don't worry we won't do spam.</p>
					</div>
					<form class="subscribe-form">
						<input type="text" name="email2" id="email2" placeholder="Enter your Email Address"/>
						<button type="submit" id="submit-subscribe-form">Subscribe</button>
					</form>
				</div>
			</div>
		</section>
		<!-- End Subscribe section -->

		<!-- category-line-section
			================================================== -->
		<section class="category-line-section">
			<div class="container">
				<div class="border-top"></div>

				<div class="category-line-box">
					<div class="title-section">
						<div class="row">
							<div class="col-5">
								<h1>Food</h1>
							</div>
							<div class="col-7">
								<a class="text-link" href="category-grid.html">View all posts</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f1.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Praesent dapibus. </a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f2.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Morbi in sem quisdui placerat ornare.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f3.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
							</div>
						</div>

					</div>

					<div class="center-button">
						<a href="#" class="button-one">Load More</a>
					</div>
				</div>

			</div>
		</section>
		<!-- End category-line section -->

		<!-- widgets-area section
			================================================== -->
		<section class="widgets-area-section background-grey">
			<div class="container">
				<div class="sidebar">
					<div class="row">

						<div class="col-lg-4">
							<div class="widget list-widget">
								<h2>Latest Stories</h2>
								<ul class="list-posts">
									<li>
										<a class="text-link" href="#">Lifestyle</a>
										<h2><a href="single-post.html">Fusce pellentesque suscipit.</a></h2>
										<ul class="post-tags">
											<li>2 days ago</li>
											<li><a href="#">0 comments</a></li>
										</ul>
									</li>
									<li>
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Integer vitae libero ac risus egestas placerat.</a></h2>
										<ul class="post-tags">
											<li>2 days ago</li>
											<li><a href="#">3 comments</a></li>
										</ul>
									</li>
									<li>
										<a class="text-link" href="#">Lifestyle</a>
										<h2><a href="single-post.html">Vestibulum commodo felisquis tortor.</a></h2>
										<ul class="post-tags">
											<li>4 days ago</li>
											<li><a href="#">0 comments</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="widget popular-video-widget">
								<h2>Popular Video</h2>
								<div class="owl-wrapper">

									<div class="owl-carousel" data-num="1">

										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v1.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Food</a>
												<h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>

										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v2.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Lifestyle</a>
												<h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>

										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v3.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Travel</a>
												<h2><a href="single-post.html">Vestibulum auctor dapibus neque.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">

							<div class="widget category-widget">
								<h2>Categories</h2>
								<ul class="category-list">
									<li>
										<a href="#">
											Travel <span>24</span>
										</a>
									</li>
									<li>
										<a href="#">
											Lifestyle <span>16</span>
										</a>
									</li>
									<li>
										<a href="#">
											Food <span>8</span>
										</a>
									</li>
								</ul>
							</div>

							<div class="widget social-widget">
								<h2>Social</h2>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
											facebook
											<span>25k likes</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
											twitter
											<span>31k followers</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram"></i>
											instagram
											<span>31k followers</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End widgets-area section -->

		<!-- instagram-line section
			================================================== -->
		<section class="instagram-line-section">
			<ul class="insta-list">
				<li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/6.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/7.jpg" alt=""></a></li>
				<li><a href="#"><img src="upload/instagram/8.jpg" alt=""></a></li>
			</ul>
			<a class="button-one" href="#">Follow Us</a>
		</section>
		<!-- End instagram-line section -->

		<!-- footer
			================================================== -->
		<footer class="dark-style">
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
