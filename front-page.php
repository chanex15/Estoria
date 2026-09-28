<?php
/**
 * Front page template.
 *
 * @package Estoria
 */
get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/listings' );
get_template_part( 'template-parts/invest' );
get_template_part( 'template-parts/credibility' );
get_template_part( 'template-parts/team-press' );
get_template_part( 'template-parts/trust' );

get_footer();
