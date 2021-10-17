@extends('layouts.apps')
@section('title', 'Post')
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

		<!-- page-banner section
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>List Style</h1>
				<span>12 Posts</span>
			</div>
		</section>
		<!-- End page-banner section -->

		<!-- blog section
			================================================== -->
		<section class="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="blog-box list-style">

                            @foreach ($posts as $post)
                                <div class="news-post article-post2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="image-holder">
                                                <img src="{{ asset('storage/' . $post->photo) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="text-link" href="#">{{ $post->category->c_name }}</a>
                                            <h2><a href="single-post.html">{{ $post->title }}</a></h2>
                                            <p>{{ $post->description }}</p>
                                            <p>{{ $post->content }}</p>
                                            <button class="btn btn-primary btn-sm ml-2">
                                                <a href="{{ route('posts.edit', $post->id) }}" style="color: #fff">Edit</a>
                                            </button>
                                            <form class="float-right" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm ml-2" style="color: #fff">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="posts/create" class="btn btn-sm btn-primary mb-3">Create New Post</a>

                            {{-- @foreach ($posts as $post)
                            <a class="text-link" href="#">{{ $post->category->c_name }}</a>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->description }}</p>
                            <p>{{ $post->content }}</p>
                            @endforeach --}}

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f1.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Nullam malesuada eratut turpis.</a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f2.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Vivamus vestibulum ntulla necante.</a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f3.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Morbi in sem quis duiplacerat ornare hendrerit. </a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="advertise-box">
								<a href="#"><img src="upload/banners/ban3.jpg" alt=""></a>
							</div>

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f4.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Aliquam tincidunt mauris eurisus.</a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f5.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Nullam malesuada eratut turpis.</a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="news-post article-post2">
								<div class="row">
									<div class="col-md-6">
										<div class="image-holder">
											<img src="upload/blog/f6.jpg" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<a class="text-link" href="#">Food</a>
										<h2><a href="single-post.html">Vivamus vestibulum ntulla necante.</a></h2>
										<ul class="post-tags">
											<li>3 days ago</li>
											<li><a href="#">3 comments</a></li>
											<li>by <a href="#">John Smith</a></li>
										</ul>
										<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
									</div>
								</div>
							</div>

							<div class="pagination-box">
								<ul class="pagination-list">
									<li><a href="#" class="active">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">Next Page <i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebar">

							<div class="widget social-widget">
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

							<div class="widget subscribe-widget2">
								<h2>Join Our Newsletter</h2>
								<p>Sign up for our free newsletters to receive the latest news. Don't worry we won't do spam.</p>
								<form class="subscibe-form">
									<input type="text" name="email" id="email" placeholder="Enter Your Email Address" />
									<input type="submit" id="submit" value="Subscribe" />
								</form>
							</div>

							<div class="widget instagram-widget">
								<h2>Our Latest Instagram Posts</h2>
								<ul class="insta-list">
									<li><a href="#"><img src="upload/instagram/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/instagram/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/instagram/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/instagram/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/instagram/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/instagram/6.jpg" alt=""></a></li>
								</ul>
							</div>

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
									<li>
										<a class="text-link" href="#">Travel</a>
										<h2><a href="single-post.html">Quisque a lectus. </a></h2>
										<ul class="post-tags">
											<li>4 days ago</li>
											<li><a href="#">0 comments</a></li>
										</ul>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->

		<!-- footer
			================================================== -->
		<footer>
			<div class="container">

				<h1>Mitte</h1>
				<p class="copyright-line">© Copyright 2019 - All rights reserved.</p>
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
