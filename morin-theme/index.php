/*
Theme Name: Morin Metro Theme
Author: Omorinsola Olumoh
Version: 1.0
Description: A page customization for the wordpress theme.
*/
<?php get_header(); ?>


<main class="container">

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h1><?php the_title(); ?>
            <p> Trending Posts of the Week </p>33
            </h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

            <div class="post-title">
            <?php the_title("font-family: NYT Modern"); ?>

        </div>

            <div class="img-card">
              <?php the_post_thumbnail('background_color(): #782345'); ?>

            </div>

            <div class="post-click"
            <a href="<?php the_permalink(); ?>">Read More</a>
            </div>

        </article>

    <?php endwhile; ?>

<?php else : ?>

    <p>No page content found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>
