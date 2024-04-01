<?php 
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>
        <!--end header-->
        <main class="main-content">
            <div class="container">
                <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <header class="page-header">
                            <h1><?php the_title(); ?></h1>
                        </header>
                        <?php the_content(); ?>
                    <?php endwhile;
                else : ?>
                    <p>Nothing to display right now.</p>
                <?php endif; ?>
            </div>
        </main>
        <!--end main-->
<?php get_footer(); ?>