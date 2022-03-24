<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ChefPost
 */

get_header();
?>
        <main class="main how-it-works" style="background: #FFFFFF;">
            <div class="container">
                <div class="error-404 not-found text-center">
                    <div class="page-header">
                        <h2 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'ChefPost' ); ?></h2>
                        <h1 class="page-title">404.</h1>
                    </div><!-- .page-header -->

                    <div class="page-content">
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ChefPost' ); ?></p>
                        <a href="<?php echo home_url( '/' ) ?>" class="hover-ripple theme-button with-background open_login_popup">Go to Homepage</a>
                    </div><!-- .page-content -->
                </div><!-- .error-404 -->
            </div>

        </main><!-- #main -->

<?php
get_footer();
