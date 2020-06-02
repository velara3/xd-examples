<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title><?php get_bloginfo( 'name' )?></title>
<?php wp_head(); ?>
<style>
a:hover * {
    text-decoration: underline;
}
</style>
<style id="applicationStylesheet" type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	:root {
		--web-view-ids: Wordpress_Theme_Multiple_Posts;
	}
	#Wordpress_Theme_Multiple_Posts * {
		margin: 0;
		padding: 0;
	}
	#Wordpress_Theme_Multiple_Posts {
		position: absolute;
		box-sizing: border-box;
		transform: translateX(-50%);
		left: 50%;
		background: #E5E5E5;
		width: 620px;
		height: initial;
		background-color: rgba(255,255,255,1);
		overflow: visible;
		margin: 0;
		padding: 0;
		opacity: 1;
		--web-view-name: Wordpress Theme Multiple Posts;
		--web-view-id: Wordpress_Theme_Multiple_Posts;
		--web-enable-deep-linking: true;
	}
	#blog_name {
		opacity: 1;
		position: absolute;
		left: 30px;
		top: 25px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 232px;
		height: 36px;
		overflow: visible;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(107,101,97,1);
	}
	#blog_description {
		opacity: 1;
		position: absolute;
		right: 53px;
		top: 46px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: initial;
		height: 12px;
		overflow: visible;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(112,112,112,1);
	}
	#header_icon {
		opacity: 1;
		fill: url(#header_icon_A1_Ellipse_2_pattern);
	}
	.header_icon {
		position: absolute;
		overflow: visible;
		width: 14px;
		height: 14px;
		left: 575px;
		top: 45px;
	}
	#Line_1 {
		opacity: 1;
		fill: transparent;
		stroke: rgb(112, 112, 112);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		top: 66.5px;
		left: 30px;
		width: 560px;
		height: 1px;
	}
	#header_image {
		opacity: 1;
		fill: url(#header_image_A1_Rectangle_2_pattern);
	}
	.header_image {
		position: absolute;
		overflow: visible;
		width: 560px;
		height: 315px;
		left: 30px;
		top: 89px;
	}
	#main_section {
		opacity: 1;
		position: absolute;
		width: 560px;
		height: 436px;
		left: 30px;
		top: 426px;
		overflow: visible;
		position: relative;
	}
	#main {
		opacity: 1;
		position: absolute;
		width: 560px;
		height: initial;
		left: 0px;
		top: 0px;
		overflow: visible;
		position:relative;
		text-align: justify;
	}
	#Lorem_ipsum_dolor_sit_amet__co {
		opacity: 1;
		position: absolute;
		left: 0px;
		top: 42px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 100%;
		height: initial;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
		column-count:2;
		 position: relative;
		 text-align: justify;
		 margin-bottom: 55px;
	}
	#Lorem_ipsum_dolor_sit_amet {
		opacity: 1;
		position: absolute;
		left: 411px;
		top: 22px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 146px;
		height: 14px;
		overflow: visible;
		line-height: 20px;
		margin-top: -4px;
		text-align: right;
		font-family: Helvetica Neue;
		font-style: italic;
		font-weight: normal;
		font-size: 12px;
		color: rgba(108,84,72,1);
	}
	#Link_to_other_pages {
		opacity: 1;
		position: absolute;
		left: 444px;
		top: 0px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 112px;
		height: 15px;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
		position:relative;
	}
	#Group_76 {
		opacity: 1;
		position: absolute;
		width: 100%;
		height: 16px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Lorem_ipsum_dolor_sit_amet_A1_Text_6 {
		opacity: 1;
		position: absolute;
		left: 0px;
		top: 0px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: initial;
		height: 16px;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: bold;
		font-size: 13px;
		color: rgba(108,84,72,1);
	}
	#Author {
		opacity: 1;
		position: absolute;
		left: 0px;
		top: 21px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: initial;
		height: 15px;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
	}
	#footer {
		opacity: 1;
		position: absolute;
		width: 560px;
		height: initial;
		left: 0px;
		top: 331px;
		overflow: visible;
		position:relative;
		 top:initial;
	}
	#Line_85 {
		opacity: 1;
		fill: transparent;
		stroke: rgb(112, 112, 112);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_85 {
		overflow: visible;
		position: absolute;
		top: 0.5px;
		left: 0px;
		width: 560px;
		height: 1px;
	}
	#Rectangle_443 {
		opacity: 0.071;
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		fill: rgba(93,125,138,1);
	}
	.Rectangle_443 {
		position: absolute;
		overflow: visible;
		width: 560px;
		height: 100%;
		left: 0px;
		top: 0px;
	}
	#Pages {
		opacity: 1;
		position: absolute;
		left: 193px;
		top: 16px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 37px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
	#Categories {
		opacity: 1;
		position: absolute;
		left: 343px;
		top: 16px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 64px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
	#Recent_Posts {
		opacity: 1;
		position: absolute;
		left: 2px;
		top: 16px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		overflow: visible;
		width: 79px;
		white-space: nowrap;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
	#Menu {
		opacity: 1;
		display: none;
		position: absolute;
		left: 519px;
		top: 16px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 33px;
		height: 15px;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
	#Recent_Posts_A1_Text_12 {
		opacity: 1;
		position: absolute;
		left: 2px;
		top: 36px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 181px;
		height: initial;
		overflow: hidden;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
		position:relative;
	}
	#Pages_A1_Text_13 {
		opacity: 1;
		position: absolute;
		left: 193px;
		top: 36px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 144px;
		height: initial;
		overflow: hidden;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
	#Categories_A1_Text_14 {
		opacity: 1;
		position: absolute;
		left: 343px;
		top: 36px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 157px;
		height: initial;
		overflow: hidden;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(80,83,84,1);
	}
</style>
<base href="<?php echo get_stylesheet_directory_uri() ?>/"/>
</head>
<body>
<div id="Wordpress_Theme_Multiple_Posts">
	<a href="<? echo get_bloginfo('url') ?>">
	<div id="blog_name">
		<? echo get_bloginfo( 'name' ) ?>
	</div>
	</a>
	<div id="blog_description">
		<? echo get_bloginfo( 'description', 'display' ) ?>
	</div>
	<svg class="header_icon">
		<pattern elementId="header_icon_A1_Ellipse_2" id="header_icon_A1_Ellipse_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="header_icon_A1_Ellipse_2_pattern.png" xlink:href="header_icon_A1_Ellipse_2_pattern.png"></image>
		</pattern>
		<ellipse id="header_icon" rx="7" ry="7" cx="7" cy="7">
		</ellipse>
	</svg>
	<svg class="Line_1">
		<path id="Line_1" d="M 0 0 L 560 0">
		</path>
	</svg>
	<svg class="header_image">
		<pattern elementId="header_image_A1_Rectangle_2" id="header_image_A1_Rectangle_2_pattern" x="0" y="0" width="100%" height="100%">
			<image x="0" y="0" width="100%" height="100%" href="header_image_A1_Rectangle_2_pattern.png" xlink:href="header_image_A1_Rectangle_2_pattern.png"></image>
		</pattern>
		<rect id="header_image" rx="0" ry="0" x="0" y="0" width="560" height="315">
		</rect>
	</svg>
	<div id="main_section">
		<?php while ( have_posts() ) : the_post(); ?><article id="post-<?php the_ID(); ?>">
		<div id="main">
			<div id="Lorem_ipsum_dolor_sit_amet__co">
				<?php echo the_content(); ?>
			</div>
			<div id="Lorem_ipsum_dolor_sit_amet">
				<?php echo get_the_date(); ?>
			</div>
			<div id="Link_to_other_pages">
				<?php echo wp_link_pages(); ?>
			</div>
			<div id="Group_76">
				<header>
				<a href="<?php echo esc_url( get_permalink() ); ?>">
				<div id="Lorem_ipsum_dolor_sit_amet_A1_Text_6">
					<?php echo get_the_title(); ?>
				</div>
				</a>
				</header>
			</div>
			<div id="Author">
				Published by <?php echo esc_html( get_the_author() ); ?>
			</div>
		</div>
		</article><?php endwhile; ?>
		<div id="footer">
			<svg class="Line_85">
				<path id="Line_85" d="M 0 0 L 560 0">
				</path>
			</svg>
			<svg class="Rectangle_443">
				<rect id="Rectangle_443" rx="0" ry="0" x="0" y="0" width="560" height="100%" height="initial">
				</rect>
			</svg>
			<div id="Pages">
				<span>Pages</span>
			</div>
			<div id="Categories">
				<span>Categories</span>
			</div>
			<div id="Recent_Posts">
				<span>Recent Posts</span>
			</div>
			<div id="Menu">
					<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>
			</div>
			<ul id="Recent_Posts_A1_Text_12">
				<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
?>
			</ul>
			<div id="Pages_A1_Text_13">
				<?php 

wp_nav_menu(
	array(
		'theme_location' => 'footer',
		'menu_class'     => 'footer-menu',
		'depth'          => 1,
	)
);

?>
			</div>
			<ul id="Categories_A1_Text_14">
				<?php
	$categories = get_categories();
	$categories1 = get_categories( array( 'orderby' => 'name', 'order' => 'ASC') );

	foreach( $categories as $category ){
		echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
	}

	wp_reset_query();
?>
			</ul>
		</div>
	</div>
</div>
</body>
<?php wp_footer(); ?>