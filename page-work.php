<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Resume_for_Success
 */

get_header();
?>
<div id="contentContainer" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">

		<div class="grid grid-projects">
		<?php
		$params = array( 
		'post_type' => 'project',
		'post_status' => 'publish',
        'limit'   => -1  // Return all rows 
    ); 

    // Create and find in one shot 
    $projects = pods( 'project',$params ); 


//loop through results 
if ( 0 < $projects->total() ) { 
    while ( $projects->fetch() ) { ?>
	<div class="block block-project">
		<?php echo $projects->display( 'post_title' ); 
        echo $projects->display( 'thumbnail' ); ?>
		</div>
    <?php } 
} 
		?>
		</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
?>
</div><!-- #contentContainer -->
<?php 
get_footer();
