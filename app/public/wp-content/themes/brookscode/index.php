<?php get_header(); ?>
        <!--end header-->
        <main class="main-content">
            <div class="container">
                <header class="page-header">
                    <h1>Blog</h1>
                    <?php the_custom_header_markup(); ?>
                </header>
                <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                    <article class="blog-card">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail( 'medium' ); ?>
                        <div class="meta-info">
                            <p>Author: <?php the_author(); ?></p>
                            <p>Posted: <?php echo get_the_date(); ?></p>
                            <p><?php the_tags(); ?></p>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                    <?php endwhile;
                else : ?>
                    <p>Nothing to display right now.</p>
                <?php endif; ?>
            </div>
        </main>
        <!--end main-->
<?php get_footer(); ?>