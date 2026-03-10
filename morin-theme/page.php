<?php get_header(); ?>

<main class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h1><?php the_title(); ?></h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No page content found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>
