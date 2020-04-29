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
				// echo 'hi printed';
					$defaults = array(
						'menu'            => 'primary',
						'container'       => '',
						'container_class' => '',
						'menu_class'      => '',
						'menu_id'         => '',	
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="navbar-nav flex-column text-left">%3$s</ul>',
						'item_spacing'    => 'preserve',
						'depth'           => 1,
						'walker'          => '',
						'theme_location'  => 'primary',
					);
					
					wp_nav_menu($defaults);
				 ?>
				<!-- <ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul> -->
				
				<!-- <div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div> -->
				<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
					    <h4 class="toggle-name mb-3 "><svg class="svg-inline--fa fa-adjust fa-w-16 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="adjust" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256c0 136.966 111.033 248 248 248s248-111.034 248-248S392.966 8 256 8 8 119.033 8 256zm248 184V72c101.705 0 184 82.311 184 184 0 101.705-82.311 184-184 184z"></path></svg><!-- <i class="fas fa-adjust mr-1"></i> -->Dark Mode</h4>
					    
					    <input class="toggle" id="darkmode" type="checkbox" checked="checked">
					    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
					    
				</div>
			</div>
		</nav>
	</header>
	<div class="main-wrapper">