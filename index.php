<?php

session_start();
require_once "class/news.php";
$news = new News;
$lang = 'vi';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tin tức tổng hợp</title>
		<!-- jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Medic, Medical Center" />
		<meta name="description" content="Responsive Medical Health Template" />
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/reset.css">
		<link rel="stylesheet" type="text/css" href="style/superfish.css">
		<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/menu_styles.css">
		<link rel="stylesheet" type="text/css" href="style/animations.css">
		<link rel="stylesheet" type="text/css" href="style/responsive.css">
		<link rel="stylesheet" type="text/css" href="style/odometer-theme-default.css">
		<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<!--<body class="image_1">
	<body class="image_1 overlay">
	<body class="image_2">
	<body class="image_2 overlay">
	<body class="image_3">
	<body class="image_3 overlay">
	<body class="image_4">
	<body class="image_4 overlay">
	<body class="image_5">
	<body class="image_5 overlay">
	<body class="pattern_1">
	<body class="pattern_2">
	<body class="pattern_3">
	<body class="pattern_4">
	<body class="pattern_5">
	<body class="pattern_6">
	<body class="pattern_7">
	<body class="pattern_8">
	<body class="pattern_9">
	<body class="pattern_10">-->
	<body>
		<div class="site_container">
			<!--<div class="header_top_bar_container style_2 clearfix">
			<div class="header_top_bar_container style_2 border clearfix">
			<div class="header_top_bar_container style_3 clearfix">
			<div class="header_top_bar_container style_3 border clearfix">
			<div class="header_top_bar_container style_4 clearfix">
			<div class="header_top_bar_container style_4 border clearfix">
			<div class="header_top_bar_container style_5 clearfix">
			<div class="header_top_bar_container style_5 border clearfix"> -->
			<div class="header_top_bar_container clearfix">
				<div class="header_top_bar">
					<form class="search" action="search.html" method="get">
						<input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
						<input type="submit" class="search_submit" value="">
					</form>
					<!--<ul class="social_icons dark clearfix">
					<ul class="social_icons colors clearfix">-->
					<ul class="social_icons clearfix">
						<li>
							<a target="_blank" href="http://facebook.com/QuanticaLabs" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social_icon twitter" title="twitter">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="mailto:contact@pressroom.com" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
						<li>
							<a href="http://themeforest.net/user/QuanticaLabs/portfolio" class="social_icon envato" title="envato">
								&nbsp;
							</a>
						</li>
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">LATEST</li>
							<li class="left"><a href="#"></a></li>
							<li class="right"><a href="#"></a></li>
							<li class="posts">
								<ul class="latest_news_scrolling_list">
									<li>
										<a href="post.html" title="">Climate Change Debate While Britain Floods</a>
									</li>
									<li>
										<a href="post.html" title="">The Public Health Crisis Hiding in Our Food</a>
									</li>
									<li>
										<a href="post.html" title="">Nuclear Fusion Closer to Becoming a Reality</a>
									</li>
								</ul>
							</li>
							<li class="date">
								<abbr title="04 Apr 2014" class="timeago current">04 Apr 2014</abbr>
								<abbr title="04 May 2014" class="timeago">04 May 2014</abbr>
								<abbr title="04 June 2014" class="timeago">04 June 2014</abbr>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--<div class="header_container small">
			<div class="header_container style_2">
			<div class="header_container style_2 small">
			<div class="header_container style_3">
			<div class="header_container style_3 small">-->
			<div class="header_container">
				<div class="header clearfix">
					<div class="logo">
						<h1><a href="home.html" title="Pressroom">Tin tức tổng hợp</a></h1>
						<h4>Tin tức nóng sốt, đọc mau, đọc mau</h4>
					</div>
					<div class="placeholder">728 x 90</div>
				</div>
			</div>
			<!-- <div class="menu_container style_2 clearfix">
			<div class="menu_container style_3 clearfix">
			<div class="menu_container style_... clearfix">
			<div class="menu_container style_10 clearfix">
			<div class="menu_container sticky clearfix">-->
			<div class="menu_container clearfix">
				<nav>
				<ul class="sf-menu">
					<li class="submenu selected">
						<a href="#" title="Home">
							Home
						</a>
						<ul>
							<li>
								<a href="home.html" title="Home Style 1">
									Home Style 1
								</a>
							</li>
							<li>
								<a href="home_2.html" title="Home Style 2">
									Home Style 2
								</a>
							</li>
							<li>
								<a href="home_3.html" title="Home Style 3">
									Home Style 3
								</a>
							</li>
							<li>
								<a href="home_4.html" title="Home Style 3">
									Home Style 4
								</a>
							</li>
							<li>
								<a href="home_5.html" title="Home Style 5">
									Home Style 5
								</a>
							</li>
							<li>
								<a href="home_6.html" title="Home Style 6">
									Home Style 6
								</a>
							</li>
							<li class="selected">
								<a href="home_7.html" title="Home Style 7">
									Home Style 7
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#" title="Pages">
							Pages
						</a>
						<ul>
							<li>
								<a href="about.html" title="About Style 1">
									About Style 1
								</a>
							</li>
							<li>
								<a href="about_2.html" title="About Style 2">
									About Style 2
								</a>
							</li>
							<li>
								<a href="default.html" title="Default">
									Default
								</a>
							</li>
							<li>
								<a href="404.html" title="404 Not Found">
									404 Not Found
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu mega_menu_parent">
						<a href="#" title="Mega Menu">
							Mega Menu
						</a>
						<ul>
							<li class="submenu">
								<a href="blog.html" title="Latest Posts">
									Latest Posts
								</a>
								<ul class="mega_menu blog">
									<li class="post">
										<a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
											<img src='images/samples/330x242/image_08.jpg' alt='img'>
										</a>
										<h5><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post.html" title="High Altitudes May Aid Weight Control">
											<img src='images/samples/330x242/image_11.jpg' alt='img'>
										</a>
										<h5><a href="post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post.html" title="Build on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/330x242/image_06.jpg' alt='img'>
										</a>
										<h5><a href="post.html" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="blog.html" title="Recent Galleries">
									Recent Galleries
								</a>
								<ul class="mega_menu blog">
									<li class="post">
										<a href="post_gallery.html" title="Build on Brotherhood, Club Lives Up to Name">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h5><a href="post_gallery.html" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_gallery.html" title="High Altitudes May Aid Weight Control">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_05.jpg' alt='img'>
										</a>
										<h5><a href="post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_04.jpg' alt='img'>
										</a>
										<h5><a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="blog.html" title="Recent Reviews">
									Recent Reviews
								</a>
								<ul class="mega_menu blog">
									<li class="post">
										<a href="post_review.html" title="New Painkiller Rekindles Addiction Concerns">
											<span class="icon"><span>8.7</span></span>
											<img src='images/samples/330x242/image_07.jpg' alt='img'>
										</a>
										<h5><a href="post_review.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_review_2.html" title="High Altitudes May Aid Weight Control">
											<span class="icon"><span>9.5</span></span>
											<img src='images/samples/330x242/image_09.jpg' alt='img'>
										</a>
										<h5><a href="post_review_2.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_review.html" title="Build on Brotherhood, Club Lives Up to Name">
											<span class="icon"><span>7.8</span></span>
											<img src='images/samples/330x242/image_14.jpg' alt='img'>
										</a>
										<h5><a href="post_review.html" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="post_review.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<span class="icon"><span>8.0</span></span>
											<img src='images/samples/330x242/image_13.jpg' alt='img'>
										</a>
										<h5><a href="post_review.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="post_review_2.html" title="The Public Health Crisis Hiding in Our Food">
											<span class="icon"><span>9.1</span></span>
											<img src='images/samples/330x242/image_02.jpg' alt='img'>
										</a>
										<h5><a href="post_review_2.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post first">
										<a href="post_review_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon"><span>6.7</span></span>
											<img src='images/samples/330x242/image_01.jpg' alt='img'>
										</a>
										<h5><a href="post_review_2.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
										<ul class="post_details simple">
											<li class="category"><a title="HEALTH" href="category_health.html">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="blog.html" title="Most Read">
									Most Read
								</a>
								<div class="mega_menu row">
									<div class="column column_1_2">
										<ul class="blog small">
											<li class="post">
												<a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
													<img src='images/samples/100x100/image_06.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
											<li class="post">
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
													<img src='images/samples/100x100/image_12.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
											<li class="post">
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
													<img src='images/samples/100x100/image_02.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
									<div class="column column_1_2">
										<ul class="blog small">
											<li class="post">
												<a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
													<img src='images/samples/100x100/image_04.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
											<li class="post">
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
													<img src='images/samples/100x100/image_10.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
											<li class="post">
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
													<img src='images/samples/100x100/image_07.jpg' alt='img'>
												</a>
												<div class="post_content">
													<h5>
														<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
													</h5>
													<ul class="post_details simple">
														<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
														<li class="date">
															10:11 PM, Feb 02
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#" title="Post Formats">
							Post Formats
						</a>
						<ul>
							<li>
								<a href="post.html" title="Post Default">
									Post Default
								</a>
							</li>
							<li>
								<a href="post_gallery.html" title="Post Gallery">
									Post Gallery
								</a>
							</li>
							<li>
								<a href="post_small_image.html" title="Post Small Image">
									Post Small Image
								</a>
							</li>
							<li>
								<a href="post_video.html" title="Post Video YouTube">
									Post Video Youtube
								</a>
							</li>
							<li>
								<a href="post_video_2.html" title="Post Video Vimeo">
									Post Video Vimeo
								</a>
							</li>
							<li>
								<a href="post_soundcloud.html" title="Post Soundcloud">
									Post Soundcloud
								</a>
							</li>
							<li>
								<a href="post_review.html" title="Post Review Style 1">
									Post Review Style 1
								</a>
							</li>
							<li>
								<a href="post_review_2.html" title="Post Review Style 2">
									Post Review Style 2
								</a>
							</li>
							<li>
								<a href="post_quote.html" title="Post Quote Style 1">
									Post Quote Style 1
								</a>
							</li>
							<li>
								<a href="post_quote_2.html" title="Post Quote Style 2">
									Post Quote Style 2
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="blog.html" title="Blog">
							Blog
						</a>
						<ul>
							<li>
								<a href="blog_small_slider.html" title="Blog Small Slider">
									Blog Small Slider
								</a>
							</li>
							<li class="submenu">
								<a href="#" title="Blog 1 column">
									Blog 1 Column
								</a>
								<ul>
									<li>
										<a href="blog.html" title="Blog With Right Sidebar">
											Blog With Right Sidebar
										</a>
									</li>
									<li>
										<a href="blog_left_sidebar.html" title="Blog With Left Sidebar">
											Blog With Left Sidebar
										</a>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#" title="Blog 2 columns">
									Blog 2 Columns
								</a>
								<ul>
									<li>
										<a href="blog_2_columns.html" title="Right Sidebar">
											Right Sidebar
										</a>
									</li>
									<li>
										<a href="blog_2_columns_left_sidebar.html" title="Left Sidebar">
											Left Sidebar
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="blog_3_columns.html" title="Blog 3 Columns">
									Blog 3 Columns
								</a>
							</li>
							<li>
								<a href="search.html?s=Maecenas+Mauris" title="Search Page Template">
									Search Page Template
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="authors.html" title="Authors">
							Authors
						</a>
						<ul>
							<li>
								<a href="authors.html" title="Authors List">
									Authors List
								</a>
							</li>
							<li>
								<a href="author.html" title="Author Single">
									Author Single
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#" title="Categories">
							Categories
						</a>
						<ul>
							<li>
								<a href="category_health.html" title="Health">
									Health
								</a>
							</li>
							<li>
								<a href="category_science.html" title="Science">
									Science
								</a>
							</li>
							<li>
								<a href="category_sports.html" title="Sports">
									Sports
								</a>
							</li>
							<li>
								<a href="category_world.html" title="World">
									World
								</a>
							</li>
							<li>
								<a href="category_lifestyle.html" title="Lifestyle">
									Lifestyle
								</a>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="contact.html" title="Contact">
							Contact
						</a>
						<ul class="expand_left_contact">
							<li>
								<a href="contact.html" title="Contact Style 1">
									Contact Style 1
								</a>
							</li>
							<li>
								<a href="contact_2.html" title="Contact Style 2">
									Contact Style 2
								</a>
							</li>
						</ul>
					</li>
				</ul>
				</nav>
				<div class="mobile_menu_container">
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="mobile-menu-divider"></div>
					<nav>
					<ul class="mobile-menu">
						<li class="submenu selected">
							<a href="home.html" title="Home">
								Home
							</a>
							<ul>
								<li>
									<a href="home.html" title="Home Style 1">
										Home Style 1
									</a>
								</li>
								<li>
									<a href="home_2.html" title="Home Style 2">
										Home Style 2
									</a>
								</li>
								<li>
									<a href="home_3.html" title="Home Style 3">
										Home Style 3
									</a>
								</li>
								<li>
									<a href="home_4.html" title="Home Style 3">
										Home Style 4
									</a>
								</li>
								<li>
									<a href="home_5.html" title="Home Style 5">
										Home Style 5
									</a>
								</li>
								<li>
									<a href="home_6.html" title="Home Style 6">
										Home Style 6
									</a>
								</li>
								<li class="selected">
									<a href="home_7.html" title="Home Style 7">
										Home Style 7
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="about.html" title="Pages">
								Pages
							</a>
							<ul>
								<li>
									<a href="about.html" title="About Style 1">
										About Style 1
									</a>
								</li>
								<li>
									<a href="about_2.html" title="About Style 2">
										About Style 2
									</a>
								</li>
								<li>
									<a href="default.html" title="Default">
										Default
									</a>
								</li>
								<li>
									<a href="404.html" title="404 Not Found">
										404 Not Found
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="post.html" title="Post Formats">
								Post Formats
							</a>
							<ul>
								<li>
									<a href="post.html" title="Post Default">
										Post Default
									</a>
								</li>
								<li>
									<a href="post_gallery.html" title="Post Gallery">
										Post Gallery
									</a>
								</li>
								<li>
									<a href="post_small_image.html" title="Post Small Image">
										Post Small Image
									</a>
								</li>
								<li>
									<a href="post_video.html" title="Post Video YouTube">
										Post Video Youtube
									</a>
								</li>
								<li>
									<a href="post_video_2.html" title="Post Video Vimeo">
										Post Video Vimeo
									</a>
								</li>
								<li>
									<a href="post_soundcloud.html" title="Post Soundcloud">
										Post Soundcloud
									</a>
								</li>
								<li>
									<a href="post_review.html" title="Post Review Style 1">
										Post Review Style 1
									</a>
								</li>
								<li>
									<a href="post_review_2.html" title="Post Review Style 2">
										Post Review Style 2
									</a>
								</li>
								<li>
									<a href="post_quote.html" title="Post Quote Style 1">
										Post Quote Style 1
									</a>
								</li>
								<li>
									<a href="post_quote_2.html" title="Post Quote Style 2">
										Post Quote Style 2
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="blog.html" title="Blog">
								Blog
							</a>
							<ul>
								<li>
									<a href="blog_small_slider.html" title="Blog Small Slider">
										Blog Small Slider
									</a>
								</li>
								<li class="submenu">
									<a href="blog.html" title="Blog 1 column">
										Blog 1 Column
									</a>
									<ul>
										<li>
											<a href="blog.html" title="Blog With Right Sidebar">
												Blog With Right Sidebar
											</a>
										</li>
										<li>
											<a href="blog_left_sidebar.html" title="Blog With Left Sidebar">
												Blog With Left Sidebar
											</a>
										</li>
									</ul>
								</li>
								<li class="submenu">
									<a href="blog_2_columns.html" title="Blog 2 columns">
										Blog 2 Columns
									</a>
									<ul>
										<li>
											<a href="blog_2_columns.html" title="Right Sidebar">
												Right Sidebar
											</a>
										</li>
										<li>
											<a href="blog_2_columns_left_sidebar.html" title="Left Sidebar">
												Left Sidebar
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="blog_3_columns.html" title="Blog 3 Columns">
										Blog 3 Columns
									</a>
								</li>
								<li>
									<a href="search.html?s=Maecenas+Mauris" title="Search Page Template">
										Search Page Template
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="authors.html" title="Authors">
								Authors
							</a>
							<ul>
								<li>
									<a href="authors.html" title="Authors List">
										Authors List
									</a>
								</li>
								<li>
									<a href="author.html" title="Author Single">
										Author Single
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="category_health.html" title="Categories">
								Categories
							</a>
							<ul>
								<li>
									<a href="category_health.html" title="Health">
										Health
									</a>
								</li>
								<li>
									<a href="category_science.html" title="Science">
										Science
									</a>
								</li>
								<li>
									<a href="category_sports.html" title="Sports">
										Sports
									</a>
								</li>
								<li>
									<a href="category_world.html" title="World">
										World
									</a>
								</li>
								<li>
									<a href="category_lifestyle.html" title="Lifestyle">
										Lifestyle
									</a>
								</li>
							</ul>
						</li>
						<li class="submenu">
							<a href="contact.html" title="Contact">
								Contact
							</a>
							<ul class="expand_left_contact">
								<li>
									<a href="contact.html" title="Contact Style 1">
										Contact Style 1
									</a>
								</li>
								<li>
									<a href="contact_2.html" title="Contact Style 2">
										Contact Style 2
									</a>
								</li>
							</ul>
						</li>
					</ul>
					</nav>
				</div>
			</div>			
			<div class="page">
				<div class="page_layout clearfix">
					<div class="row page_margin_top">
						<div class="column column_2_3">
							<?php require 'slider.php'; ?>
							<div id="small_slider" class='slider_posts_list_container small'>
							</div>
							<div class="row page_margin_top">
								<h4 class="box_header">More Articles</h4>
								<?php require 'slider2.php'; ?>
							</div>
							<h4 class="box_header page_margin_top_section">Latest Posts</h4>
							<div class="row">
								<ul class="blog column column_1_2">
									<li class="post">
										<a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/330x242/image_01.jpg' alt='img'>
										</a>
										<h2 class="with_number">
											<a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											<a class="comments_number" href="post_small_image.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h2>
										<ul class="post_details">
											<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
										<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
										<a class="read_more" href="post_small_image.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
									</li>
									<li class="post">
										<a href="post_quote_2.html" title="High Altitudes May Aid Weight Control">
											<img src='images/samples/330x242/image_02.jpg' alt='img'>
										</a>
										<h2 class="with_number">
											<a href="post_quote_2.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>
											<a class="comments_number" href="post_quote_2.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h2>
										<ul class="post_details">
											<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
										<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
										<a class="read_more" href="post_quote_2.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
									</li>
								</ul>
								<ul class="blog column column_1_2">
									<li class="post">
										<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/330x242/image_04.jpg' alt='img'>
										</a>
										<h2 class="with_number">
											<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											<a class="comments_number" href="post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h2>
										<ul class="post_details">
											<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
										<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
										<a class="read_more" href="post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
									</li>
									<li class="post">
										<a href="post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h2 class="with_number">
											<a href="post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
											<a class="comments_number" href="post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h2>
										<ul class="post_details">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
										<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
										<a class="read_more" href="post_video.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<h4 class="box_header">Lifestyle</h4>
							<ul class="blog small_margin clearfix">
								<li class="post">
									<a href="post.html" title="The Public Health Crisis Hiding in Our Food">
										<img src='images/samples/510x187/image_12.jpg' alt='img'>
									</a>
									<div class="post_content">
										<h5>
											<a href="post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class="list">
								<li class="bullet style_1"><a href="post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></li>
								<li class="bullet style_1"><a href="post_small_image.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></li>
								<li class="bullet style_1"><a href="post.html" title="Supreme Court Skeptical Of Ohio Law">Supreme Court Skeptical Of Ohio Law</a></li>
								<li class="bullet style_1"><a href="post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></li>
								<li class="bullet style_1"><a href="post_small_image.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></li>
							</ul>
							<h4 class="box_header page_margin_top_section">Health</h4>
							<ul class="blog small_margin clearfix">
								<li class="post">
									<a href="post.html" title="The Public Health Crisis Hiding in Our Food">
										<img src='images/samples/510x187/image_06.jpg' alt='img'>
									</a>
									<div class="post_content">
										<h5>
											<a href="post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<ul class="list">
								<li class="bullet style_1"><a href="post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></li>
								<li class="bullet style_1"><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></li>
								<li class="bullet style_1"><a href="post.html" title="Supreme Court Skeptical Of Ohio Law">Supreme Court Skeptical Of Ohio Law</a></li>
								<li class="bullet style_1"><a href="post_small_image.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></li>
								<li class="bullet style_1"><a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></li>
							</ul>
							<h4 class="box_header page_margin_top_section">Top Authors</h4>
							<ul class="authors rating clearfix">
								<li class="author">
									<a class="thumb" href="author.html" title="Debora Hilton">
										<img src='images/samples/Team_100x100/image_01.jpg' alt='img'>
										<span class="number animated_element" data-value="34"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Debora Hilton">Debora Hilton</a></h5>
										<h6>EDITOR</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Anna Shubina">
										<img src='images/samples/Team_100x100/image_02.jpg' alt='img'>
										<span class="number animated_element" data-value="25"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Anna Shubina">Anna Shubina</a></h5>
										<h6>EDITOR</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Liam Holden">
										<img src='images/samples/Team_100x100/image_03.jpg' alt='img'>
										<span class="number animated_element" data-value="9"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Liam Holden">Liam Holden</a></h5>
										<h6>PUBLISHER</h6>
									</div>
								</li>
								<li class="author">
									<a class="thumb" href="author.html" title="Heather Dale">
										<img src='images/samples/Team_100x100/image_04.jpg' alt='img'>
										<span class="number animated_element" data-value="2"></span>
									</a>
									<div class="details">
										<h5><a href="author.html" title="Heather Dale">Heather Dale</a></h5>
										<h6>ILLUSTRATOR</h6>
									</div>
								</li>
							</ul>
							<h4 class="box_header page_margin_top_section">Latest Posts</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_soundcloud.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_soundcloud.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<h4 class="box_header page_margin_top_section">Most Commented</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_quote.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Top Posts</h4>
							<div class="tabs no_scroll margin_top_10 clearfix">
								<ul class="tabs_navigation small clearfix">
									<li>
										<a href="#most-recent" title="Most Recent">
											Most Recent
										</a>
									</li>
									<li>
										<a href="#most-read" title="Most Read">
											Most Read
										</a>
									</li>
									<li>
										<a href="#most-commented" title="Most Commented">
											Most Commented
										</a>
									</li>
								</ul>
								<div id="most-recent">
									<div class="horizontal_carousel_container page_margin_top">
										<ul class="blog horizontal_carousel page_margin_top autoplay-0 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
											<li class="post">
												<a href="post_small_image.html" title="High Altitudes May Aid Weight Control">
													<img src='images/samples/330x242/image_11.jpg' alt='img'>
												</a>
												<h5><span class="number">1.</span><a href="post_small_image.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post.html" title="Climate Change Debate While Britain Floods">
													<img src='images/samples/330x242/image_14.jpg' alt='img'>
												</a>
												<h5><span class="number">2.</span><a href="post.html" title="Climate Change Debate While Britain Floods">Climate Change Debate While Britain Floods</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post.html" title="Escape From Planet Earth: The Movie">
													<img src='images/samples/330x242/image_02.jpg' alt='img'>
												</a>
												<h5><span class="number">3.</span><a href="post.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post_quote_2.html" title="Built on Brotherhood, Club Lives Up to Name">
													<img src='images/samples/330x242/image_09.jpg' alt='img'>
												</a>
												<h5><span class="number">4.</span><a href="post_quote_2.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
													<img src='images/samples/330x242/image_07.jpg' alt='img'>
												</a>
												<h5><span class="number">5.</span><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div id="most-read">
									<div class="horizontal_carousel_container page_margin_top">
										<ul class="blog horizontal_carousel page_margin_top autoplay-0 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
											<li class="post">
												<a href="post.html" title="The Public Health Crisis Hiding in Our Food">
													<img src='images/samples/330x242/image_10.jpg' alt='img'>
												</a>
												<h5><span class="number">1.</span><a href="post.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post_small_image.html" title="Drug Makers Hunt for Mergers">
													<img src='images/samples/330x242/image_07.jpg' alt='img'>
												</a>
												<h5><span class="number">2.</span><a href="post_small_image.html" title="Drug Makers Hunt for Mergers">Drug Makers Hunt for Mergers</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post.html" title="Escape From Planet Earth: The Movie">
													<img src='images/samples/330x242/image_13.jpg' alt='img'>
												</a>
												<h5><span class="number">3.</span><a href="post.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post.html" title="High Altitudes May Aid Weight Control">
													<img src='images/samples/330x242/image_05.jpg' alt='img'>
												</a>
												<h5><span class="number">4.</span><a href="post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
													<img src='images/samples/330x242/image_09.jpg' alt='img'>
												</a>
												<h5><span class="number">5.</span><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div id="most-commented">
									<div class="horizontal_carousel_container page_margin_top">
										<ul class="blog horizontal_carousel page_margin_top autoplay-0 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
											<li class="post">
												<a href="post_quote.html" title="Escape From Planet Earth: The Movie">
													<img src='images/samples/330x242/image_13.jpg' alt='img'>
												</a>
												<h5><span class="number">1.</span><a href="post_quote.html" title="Escape From Planet Earth: The Movie">Escape From Planet Earth: The Movie</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post_soundcloud.html" title="Struggling Nuremberg Sack Coach Verbeek">
													<img src='images/samples/330x242/image_06.jpg' alt='img'>
												</a>
												<h5><span class="number">2.</span><a href="post_soundcloud.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post">
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
													<img src='images/samples/330x242/image_03.jpg' alt='img'>
												</a>
												<h5><span class="number">3.</span><a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post_small_image.html" title="High Altitudes May Aid Weight Control">
													<img src='images/samples/330x242/image_05.jpg' alt='img'>
												</a>
												<h5><span class="number">4.</span><a href="post_small_image.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
											<li class="post first">
												<a href="post.html" title="New Painkiller Rekindles Addiction Concerns">
													<img src='images/samples/330x242/image_07.jpg' alt='img'>
												</a>
												<h5><span class="number">5.</span><a href="post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
													<li class="date">
														10:11 PM, Feb 02
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row page_margin_top_section">
						<div class="column column_1_3">
							<h4 class="box_header">Featured Videos</h4>
							<div class="horizontal_carousel_container big page_margin_top">
								<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_video_2.html" title="Struggling Nuremberg Sack Coach Verbeek">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video_2.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
											<a class="comments_number" href="post_video_2.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_video.html" title="Built on Brotherhood, Club Lives Up to Name">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_14.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											<a class="comments_number" href="post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_video_2.html" title="New Painkiller Rekindles Addiction Concerns">
											<span class="icon video"></span>
											<img src='images/samples/330x242/image_04.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_video_2.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
											<a class="comments_number" href="post_video_2.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<h4 class="box_header">Latest Posts</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post_quote.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_quote.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<h4 class="box_header">Categories</h4>
							<ul class="taxonomies columns clearfix page_margin_top">
								<li>
									<a href="category_world.html" title="WORLD">WORLD</a>
								</li>
								<li>
									<a href="category_health.html" title="HEALTH">HEALTH</a>
								</li>
								<li>
									<a href="category_sports.html" title="SPORTS">SPORTS</a>
								</li>
								<li>
									<a href="category_science.html" title="SCIENCE">SCIENCE</a>
								</li>
								<li>
									<a href="category_lifestyle.html" title="LIFESTYLE">LIFESTYLE</a>
								</li>
							</ul>
							<h4 class="box_header page_margin_top_section">Tags</h4>
							<ul class="taxonomies clearfix page_margin_top">
								<li>
									<a href="#" title="Business">BUSINESS</a>
								</li>
								<li>
									<a href="#" title="Education">EDUCATION</a>
								</li>
								<li>
									<a href="#" title="Family">FAMILY</a>
								</li>
								<li>
									<a href="#" title="Film">FILM</a>
								</li>
								<li>
									<a href="#" title="Food">FOOD</a>
								</li>
								<li>
									<a href="#" title="Garden">GARDEN</a>
								</li>
								<li>
									<a href="#" title="People">PEOPLE</a>
								</li>
								<li>
									<a href="#" title="Sport">SPORT</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
						<div class="footer_container">
				<div class="footer clearfix">
					<div class="row">
						<div class="column column_1_3">
							<h4 class="box_header">About PressRoom</h4>
							<p class="padding_top_bottom_25">Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
							<div class="row">
								<div class="column column_1_2">
									<h5>PressRoom Ltd.</h5>
									<p>
										33 Farlane Street<br>
										25-100 Keilor East,<br>
										Australia
									</p>
								</div>
								<div class="column column_1_2">
									<h5>Phone &amp; Fax</h5>
									<p>
										Phone: 1-800-64-38<br>
										Fax: 1-800-64-39
									</p>
								</div>
							</div>
							<h4 class="box_header page_margin_top">Get In Touch With Us</h4>
							<ul class="social_icons dark page_margin_top clearfix">
								<li>
									<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
										&nbsp;
									</a>
								</li>
								<li>
									<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon skype">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon instagram">
										&nbsp;
									</a>
								</li>
								<li>
									<a title="" href="#" class="social_icon pinterest">
										&nbsp;
									</a>
								</li>
							</ul>
						</div>
						<div class="column column_1_3">
							<h4 class="box_header">Latest Posts</h4>
							<div class="vertical_carousel_container clearfix">
								<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
											<span class="icon small gallery"></span>
											<img src='images/samples/100x100/image_06.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_health.html" title="HEALTH">HEALTH</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
											<img src='images/samples/100x100/image_12.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_world.html" title="WORLD">WORLD</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">
											<img src='images/samples/100x100/image_02.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
									<li class="post">
										<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">
											<img src='images/samples/100x100/image_13.jpg' alt='img'>
										</a>
										<div class="post_content">
											<h5>
												<a href="post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>
											</h5>
											<ul class="post_details simple">
												<li class="category"><a href="category_science.html" title="SCIENCE">SCIENCE</a></li>
												<li class="date">
													10:11 PM, Feb 02
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="column column_1_3">
							<h4 class="box_header">Latest Galleries</h4>
							<div class="horizontal_carousel_container big page_margin_top">
								<ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="post_gallery.html" title="Struggling Nuremberg Sack Coach Verbeek">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_03.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_gallery.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>
											<a class="comments_number" href="post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_14.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
											<a class="comments_number" href="post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
									<li class="post">
										<a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">
											<span class="icon gallery"></span>
											<img src='images/samples/330x242/image_04.jpg' alt='img'>
										</a>
										<h5 class="with_number">
											<a href="post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>
											<a class="comments_number" href="post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="category_sports.html" title="SPORTS">SPORTS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row page_margin_top_section">
						<div class="column column_3_4">
							<ul class="footer_menu">
								<li>
									<h4><a href="category_world.html" title="World">World</a></h4>
								</li>
								<li>
									<h4><a href="category_health.html" title="Health">Health</a></h4>
								</li>
								<li>
									<h4><a href="category_sports.html" title="Sports">Sports</a></h4>
								</li>
								<li>
									<h4><a href="category_science.html" title="Science">Science</a></h4>
								</li>
								<li>
									<h4><a href="category_lifestyle.html" title="Lifestyle">Lifestyle</a></h4>
								</li>
							</ul>
						</div>
						<div class="column column_1_4">
							<a class="scroll_top" href="#top" title="Scroll to top">Top</a>
						</div>
					</div>
					<div class="row copyright_row">
						<div class="column column_2_3">
							© Copyright <a href="http://quanticalabs.com" title="QuanticaLabs" target="_blank">QuanticaLabs</a> - PressRoom Template. <a href="https://themeforest.net/cart/add_items?item_ids=9066845&ref=QuanticaLabs" title="PressRoom Template" target="_blank">Click here to buy it</a> 
						</div>
						<div class="column column_1_3">
							<ul class="footer_menu">
								<li>
									<h6><a href="about.html" title="About">About</a></h6>
								</li>
								<li>
									<h6><a href="authors.html" title="Authors">Authors</a></h6>
								</li>
								<li>
									<h6><a href="contact.html" title="Contact Us">Contact Us</a></h6>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background_overlay"></div>
		<!--js-->
		<!-- <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> -->
		<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/jquery.sliderControl.js"></script>
		<script type="text/javascript" src="js/jquery.timeago.js"></script>
		<script type="text/javascript" src="js/jquery.hint.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/odometer.min.js"></script>
	</body>
</html>