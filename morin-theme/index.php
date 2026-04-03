<?php get_header(); ?>

<main class="container">

    <!-- HOMEPAGE -->
    <section id="homepage" class="section-hero">
        <h1>Welcome to Morin Metro News</h1>
        <p>Your daily source for positive mindset and personal growth articles.</p>
    </section>

    <!-- INTRODUCTIONS -->
    <section id="introductions" class="section-intro">
        <h2>Introductions</h2>
        <p>We share stories, tips, and insights to help readers cultivate positivity and success in their daily lives.</p>
    </section>

    <!-- ABOUT ME -->
    <section id="about-me" class="section-about">
        <h2>About Me</h2>
        <p>Hello! I’m Omorinsola Olumoh, editor of Morin Metro News. I create content that inspires and motivates readers to achieve a positive mindset.</p>
    </section>

    <!-- LATEST POSTS -->
    <section id="latest-posts" class="section-posts">
        <h2>Latest Articles</h2>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="section"><?php the_date(); ?> | by <?php the_author(); ?></p>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
