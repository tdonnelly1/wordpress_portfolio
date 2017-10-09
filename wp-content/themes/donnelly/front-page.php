<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_template_part('template-parts/home-header'); ?>
</div>
<!-- End Header Graphic -->

<div role="main" style="top:-150px; display: block; position: relative;">
	<div class="row full-width" style="height: 400px;">
    <div class="small-7 columns" style="background: red; padding:100px;">
    	Tyler is digital artist and designer.He specializes in producing engaging visual experiences and bringing creative visions to life. In his spare time, Tyler can be found getting lost in a good book.
    </div>
    <div class="small-5 columns" style="background: #342e2c; padding:100px;">Illustration</div>
	</div>
	<div class="row full-width" style="height: 400px; ">
		<div class="small-6 columns" style="background: red; padding:100px;">Half</div>
		<div class="small-6 columns" style="background: #342e2c; padding:100px;">Half</div>
	</div>
	<div class="row full-width" style="height: 400px;">
		<div class="small-4 columns" style="background: #342e2c; padding:100px;">Third</div>
		<div class="small-4 columns" style="background: red; padding:100px;">Third</div>
		<div class="small-4 columns" style="background: #342e2c; padding:100px;">Third</div>
	</div>
</div>

<?php get_footer(); ?>
