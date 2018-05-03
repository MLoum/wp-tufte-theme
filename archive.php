<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="page">
    <div id="content">
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <article>
                        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                    </article>
                    <?php // if ( comments_open() || get_comments_number() ) :
                    //comments_template();?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
</body> </html>