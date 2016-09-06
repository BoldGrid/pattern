<?php
/**
 * Header Template Benchmark
 *
 * This is a BoldGrid Theme Header Template.
 *
 * @package BoldGrid
 */
 
// Get the theme configs.
global $boldgrid_theme_framework;
$configs = $boldgrid_theme_framework->get_configs();
?>

<header id="bgpl-header" class="site-header" role="banner" <?php BoldGrid_Framework_Schema::header( true ); ?>> 
    <?php BoldGrid::skip_link(  ); ?>
    <?php do_action( 'boldgrid_header_top' ); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="bgpl-branding">
                    <img src="https://www.boldgrid.com/assets/logos/boldgrid-logo-sm.png" />
                    <h1 class="bgpl-site-title">PATTERN LIBRARY</h1>
                </div>
            </div>
        </div>
    </div>
    <?php do_action( 'boldgrid_header_bottom' ); ?>
</header>
