<?php get_header(); ?>

<div class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h1><?php the_title(); ?></h1>

            <p class="section">
                By <?php the_author(); ?> | <?php echo get_the_date(); ?>
            </p>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>Sorry, this article could not be found.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
