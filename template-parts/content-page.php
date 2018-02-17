<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Madang
 */

?>

    <div class="container">
        <div class="row">
            <div id="gardener-blogs-content">
                <div class="col-md-9">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="single-blog-post">
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                            <?php wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'madang' ),
                        'after'  => '</div>',
                    ) ); ?>
                        </div>
                        <!-- .entry-content -->

                       
                    </div>
                    <!-- #post-## -->
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right ">
                    <div class="gardener-blog-sidebar">
                        <aside class="blog-widget">
                            <?php echo dynamic_sidebar('right_sidebar'); ?>
                        </aside>
                        <!-- /.widget -->
                    </div>
                </div>

            </div>

        </div>
    </div>