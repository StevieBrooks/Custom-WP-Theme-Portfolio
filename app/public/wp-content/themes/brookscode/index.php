<?php get_header(); ?>
        <!--end header-->
        <main class="main-content">
            <div class="container">
                <header class="page-header">
                    <?php the_custom_header_markup(); ?>
                    <h1>Blog</h1>
                </header>
                <div class="blog-cards">
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                        <article class="blog-card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
            </div>
        </main>
        <!--end main-->
<?php get_footer(); ?>