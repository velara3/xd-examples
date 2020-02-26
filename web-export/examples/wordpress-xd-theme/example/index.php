<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title><?php echo get_bloginfo('name')?></title>
<?php wp_head(); ?>
<style>
a:hover, a:hover * {
    text-decoration: underline;
}
a {
    text-align: left;
    text-decoration: none;
    font-family: Helvetica Neue;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    color: rgba(80,83,84,1);
}
</style>
<style id="applicationStylesheet" type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	:root {
		--web-view-ids: Wordpress_Theme_2;
	}
	#Wordpress_Theme_2 * {
		margin: 0;
		padding: 0;
	}
	#Wordpress_Theme_2 {
		position: absolute;
		box-sizing: border-box;
		transform: translateX(-50%);
		left: 50%;
		background: #E5E5E5;
		width: 720px;
		height: initial;
		background-color: rgba(255,255,255,1);
		overflow: visible;
		margin: 0;
		padding: 0;
		opacity: 1;
		--web-view-name: Wordpress Theme 2;
		--web-view-id: Wordpress_Theme_2;
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
		width: initial;
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
		right: 32.634px;
		top: 43px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: initial;
		height: 12px;
		overflow: visible;
		text-align: right;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 10px;
		color: rgba(112,112,112,1);
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
		width: 656.76px;
		height: 1px;
	}
	#main_section {
		opacity: 1;
		position:  relative;
		width: 517.298px;
		height: 364px;
		left: 169.462px;
		top: 85px;
		overflow: visible;
	}
	#main {
		opacity: 1;
		position: relative;
		width: 517.298px;
		height: initial;
		left: 0px;
		top: 0px;
		overflow: visible;
		text-align:  justify;
	}
	#Lorem_ipsum_dolor_sit_amet__co {
		opacity: 1;
		position:  relative;
		left: 0px;
		top: 26px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 100%;
		height: initial;
		overflow: visible;
		line-height: 20px;
		margin-top: -3.5px;
		text-align:  justify;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
		column-count: 2;
		margin-bottom:  65px;
	}
	#Lorem_ipsum_dolor_sit_amet {
		opacity: 1;
		position: absolute;
		left: 334.015px;
		top: 6px;
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
		display: none;
		position: relative;
		left: 369.688px;
		top: 344.425px;
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
	}
	#Lorem_ipsum_dolor_sit_amet_A2_Text_6 {
		opacity: 1;
		position: absolute;
		left: 0px;
		top: 0px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: initial;
		height: 19px;
		overflow: visible;
		line-height: 20px;
		margin-top: -2px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: bold;
		font-size: 16px;
		color: rgba(108,84,72,1);
	}
	#Author {
		opacity: 1;
		display: none;
		position: absolute;
		left: 312.31px;
		top: 344.425px;
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
	#left_column {
		opacity: 1;
		position: absolute;
		width: 125.603px;
		height: initial;
		left: 32px;
		top: 85px;
		overflow: visible;
	}
	#Recent_Posts {
		opacity: 1;
		position: relative;
		left: 0px;
		top: 0px;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		width: 125.603px;
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
<div id="Wordpress_Theme_2">
	<a href="<?php echo get_bloginfo('url') ?>">
	<div id="blog_name">
		<?php echo get_bloginfo( 'name' ) ?>
	</div>
	</a>
	<div id="blog_description">
		<?php echo get_bloginfo( 'description', 'display' ) ?>
	</div>
	<svg class="Line_1">
		<path id="Line_1" d="M 0 0 L 656.759521484375 0">
		</path>
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
				<?php
echo next_post_link();?>
			</div>
			<header>
			<a href="<?php echo esc_url( get_permalink() ); ?>">
			<div id="Lorem_ipsum_dolor_sit_amet_A2_Text_6">
				<?php echo get_the_title(); ?>
			</div>
			</a>
			</header>
			<div id="Author">
				Published by <?php echo esc_html( get_the_author() ); ?>
			</div>
		</div>
		</article><?php endwhile; ?>
	</div>
	<div id="left_column">
		<div id="Recent_Posts">
			<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
?>
		</div>
	</div>
</div>
</body>
<?php wp_footer(); ?>