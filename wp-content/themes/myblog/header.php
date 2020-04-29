<?php ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php wp_title(); ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
	<script defer src="<?php echo get_template_directory_uri(); ?>/assets/fontawesome/js/all.min.js"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-1.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Mahesh's Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Mahesh Shimpi. <br />I am passionate Salesforce Developer. <br />I love to learn the new technologies.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="https://twitter.com/MaheshShimpi1"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/mahesh-shimpi-a3a94440/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/MaheshShimpi"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube fa-fw"></i></a></li>
			            <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li> -->
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				<?php 
					$defaults = array(
						'menu'            => 'primay',
						'container'       => false,
						'container_class' => false,
						'menu_class'      => 'navbar-nav flex-column text-left',
						'menu_id'         => '',	
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing'    => 'preserve',
						'depth'           => 0,
						'walker'          => '',
						'theme_location'  => 'primary',
					);
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'link_before' => '<span class="screen-reader-text">',
							'link_after' => '</span>',
						)
					);
				 ?>
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul>
				
				<!-- <div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div> -->
			</div>
		</nav>
	</header>
	<div class="main-wrapper">