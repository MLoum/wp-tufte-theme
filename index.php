<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="page">
    <div id="content">
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <article>
                        <section>
                            <div class="postMetaData">
                                <?php the_time('j F Y') ?> by <?php the_author() ?> <br> Category: <?php the_category(', ') ?> <br> <?php the_tags() ?> <br>  <?php comments_popup_link('No comments', '1 Comment', '% Comments'); ?> <br>
                                <?php edit_post_link('Editer', '', ''); ?>
                            </div>
                    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                            <?php //the_post_thumbnail(); ?>
                        </section>
                        <section>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                        </section>
                    </article>
                    <!--
                    <?php // if ( comments_open() || get_comments_number() ) :
                    //comments_template();?>
                    -->
                </div>

            <?php endwhile;
            else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
             endif; ?>
    </div>


</div>

<?php get_footer(); ?>
</body> </html>