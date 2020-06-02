<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title><?php get_bloginfo( 'name' )?></title>
<?php wp_head(); ?>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Wordpress Theme Example;
		--web-view-id: Wordpress_Theme_Example;
		--web-center-horizontally: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Wordpress_Theme_Example;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Wordpress_Theme_Example {
		position: absolute;
		transform: translateX(-50%);
		left: 50%;
		background: #E5E5E5;
		width: 620px;
		height: 905px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Wordpress Theme Example;
		--web-view-id: Wordpress_Theme_Example;
		--web-center-horizontally: true;
		--web-enable-deep-linking: true;
	}
	#blog_name {
		position: absolute;
		left: 30px;
		top: 25px;
		overflow: visible;
		width: 233px;
		white-space: nowrap;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(107,101,97,1);
	}
	#Lorem_ipsum_dolor_sit_amet__co {
		position: absolute;
		left: 30px;
		top: 427px;
		overflow: visible;
		width: 261px;
		height: 454px;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
	}
	#Lorem_ipsum_dolor_sit_amet__co_m {
		position: absolute;
		left: 330px;
		top: 429px;
		overflow: hidden;
		width: 261px;
		height: 454px;
		line-height: 20px;
		margin-top: -3.5px;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 13px;
		color: rgba(108,84,72,1);
	}
	#header_image {
		position: absolute;
		width: 560px;
		height: 315px;
		left: 30px;
		top: 89px;
		overflow: visible;
	}
	.Line_1 {
		overflow: visible;
		position: absolute;
		width: 560px;
		height: 1px;
		left: 30px;
		top: 66.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#blog_description {
		position: absolute;
		right: 53px;
		top: 46px;
		overflow: visible;
		width: initial;
		white-space: nowrap;
		text-align: left;
		font-family: Helvetica Neue;
		font-style: normal;
		font-weight: normal;
		font-size: 11px;
		color: rgba(112,112,112,1);
	}
	#header_icon {
		position: absolute;
		width: 14px;
		height: 14px;
		left: 575px;
		top: 45px;
		overflow: visible;
	}
</style>
<base href="<?php echo get_stylesheet_directory_uri() ?>/"/>
</head>
<body>
<div id="Wordpress_Theme_Example">
	<div id="blog_name">
		<? echo get_bloginfo( 'name' ) ?>
	</div>
	<div id="Lorem_ipsum_dolor_sit_amet__co">
		<?php the_post(); echo the_content(); ?>
	</div>
	<div id="Lorem_ipsum_dolor_sit_amet__co_m">
		<span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br/>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</span>
	</div>
	<img id="header_image" src="header_image.png" srcset="header_image.png 1x, header_image@2x.png 2x">
	<svg class="Line_1" viewBox="0 0 560 1">
		<path fill="transparent" stroke="rgba(112,112,112,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_1" d="M 0 0 L 560 0">
		</path>
	</svg>
	<div id="blog_description">
		<? echo get_bloginfo( 'description', 'display' ) ?>
	</div>
	<img id="header_icon" src="header_icon.png" srcset="header_icon.png 1x, header_icon@2x.png 2x">
</div>
</body>
<?php wp_footer(); ?>