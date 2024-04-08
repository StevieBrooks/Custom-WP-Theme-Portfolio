<?php get_header(); ?>
        <!--end header-->
        <main class="main-content">
            <div class="container">
                <div class="blog-cards">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <section class="blog-post">
                            <h2><?php the_title(); ?></h2>
                            <div class="meta-info">
                                <p>Author: <?php the_author(); ?></p>
                                <p>Posted: <?php echo get_the_date(); ?></p>
                                <p><?php the_tags(); ?></p>
                            </div>
                            <p><?php the_content(); ?></p>
                        </section>
                        <?php if (comments_open() || get_comment_count()) {
                            comments_template();
                        } ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </main>
        <!--end main-->
<?php get_footer(); ?>