<?php
    /**
    * Template Name: Page With Sidebar Template
    */

    get_header();
?>

<main id="site-content" role="main">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="post-inner"> 

            <div class="entry-content-new"> 

                <?php

                    if ( have_posts() ) {

                        while ( have_posts() ) {

                            the_post();


                        ?>

                        <div class="left_bar_container">

                            <?php if ( is_active_sidebar( 'twenty-twenty-side-bar' ) ) : ?>
                                <?php dynamic_sidebar( 'twenty-twenty-side-bar' ); ?>
                                <?php endif; ?>

                        </div>
                        <div class="right_bar_container"> 
                            <?php the_content( __( 'Continue reading', 'twentytwenty' ) ); ?>
                        </div>

                        <?php 


                        }
                    }

                ?>

            </div>
        </div>

    </article>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
