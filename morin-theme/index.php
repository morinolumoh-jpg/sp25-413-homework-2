<?php get_header(); ?>

<main class="container">

    <!-- ===== HOMEPAGE HERO SECTION ===== -->
    <section id="homepage" class="section-hero">
        <h1>Welcome to Morin Metro News</h1>
        <p>Delivering insights on positive mindset and daily motivation.</p>
    </section>

    <!-- ===== INTRODUCTIONS SECTION ===== -->
    <section id="introductions" class="section-intro">
        <h2>Introductions</h2>
        <p>We focus on stories that inspire, educate, and empower readers to adopt a positive mindset.</p>
    </section>

    <!-- ===== ABOUT ME SECTION ===== -->
    <section id="about-me" class="section-about">
        <h2>About Me</h2>
        <p>Hello! I’m Omorinsola Olumoh, the editor of Morin Metro Theme. I create content to help readers develop a winning mindset and explore topics on personal growth and positivity.</p>
    </section>

    <!-- ===== LATEST POSTS SECTION ===== -->
    <section id="latest-posts" class="section-posts">
        <h2>Latest Articles</h2>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post-card">
                    <!-- Featured Image -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Post Title -->
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <!-- Post Meta -->
                    <p class="post-meta"><?php the_date(); ?> | by <?php the_author(); ?></p>

                    <!-- Post Excerpt -->
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
