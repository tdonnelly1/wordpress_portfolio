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

include 'template-parts/home-header.php'; ?>

<div class="main-wrap" role="main">
	<div class="grid-x">
		<div class="small-7 cell">Column 1</div>
		<div class="small-3 cell"> Column 2</div>
	</div>
</div>

<?php get_footer();

