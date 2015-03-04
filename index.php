<?php get_header(); ?>

<body <?php body_class(); ?>>

	<nav class="navbar navbar-default bg-r" role="navigation">
		<div class="container">
			<?php html5blank_nav(); ?>
		</div>
	</nav>
<!-- /nav -->
	<header class="header clear home-banner" role="banner">
		<div class="opt-in dark">
        	<div class="content container">
        		<div class="bg">
        			<img src="<?php echo get_template_directory_uri(); ?>/img/header-1.png">
        		</div>
			</div>
			</div>
	</header>
	<!-- /header -->
	<div class="darkred-bg first-opt">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="float-left">
	          		<h4>Sign up for my <b>FREE</b> <br>
	          		Expert wellness tips now! <i class="fa fa-envelope-o"></i></h4>	
					</div>
				</div>
				<!-- Begin MailChimp Signup Form -->
				<div class="col-lg-7">
					<div id="mc_embed_signup">
						<form class="form-inline" action="//pierab.us10.list-manage.com/subscribe/post?u=2ebaedf512d0204a6f128e01e&amp;id=b5cbf61bd0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
						    	<div class="form-group mc-field-group">
									<label class="sr-only" for="mce-FNAME">FIRST Name </label>
									<input class="form-control" type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="NAME">
								</div>
								<div class="form-group mc-field-group">
									<label class="sr-only" for="mce-EMAIL">Email </label>
									<input class="form-control" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL">
								</div>
								<div id="mce-responses">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_2ebaedf512d0204a6f128e01e_b5cbf61bd0" tabindex="-1" value="">
								</div>
								<div class="pull-right top-opt">
									<input type="submit" value="YES, PLEASE" name="subscribe" id="mc-embedded-subscribe" class="btn btn-danger">
								</div>
						    </div>
						</form>
					</div>
				</div>
				<!--End mc_embed_signup-->
			</div>
		</div>
	</div>

	<!-- wrapper -->
	<div class="wrapper">
		<div class="container">
			<div class="col-md-8 col-sm-8 wrap">
				<main role="main">
					<section class="little-intro">
						<div class="boxi">
						<?php
							$post_id = 61; // substitute page_id of page you want content included from for "2"
							$page = get_post($post_id);
							echo "$page->post_content";
						?>	
						</div>
					</section>
					<!-- section -->
					<hr>
					<section class="blog">

						<h1><?php _e( '', 'html5blank' ); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col-md-4 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>

<?php get_footer(); ?>
