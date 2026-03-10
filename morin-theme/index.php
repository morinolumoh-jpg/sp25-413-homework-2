<?php get_header(); ?>

<div class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>

            <h2>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

            <p class="post-date">
                <?php echo get_the_date(); ?>
            </p>

            <p class="excerpt">
                <?php the_excerpt(); ?>
            </p>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No posts found. Please check back later for positive mindset updates.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
