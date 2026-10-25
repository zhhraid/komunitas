<?php
the_post();

get_header('detail', array('body_class' => 'content-detail-page'));
?>

    <main class="single-content-wrap">
        <article <?php post_class('single-article'); ?>>
            <header class="single-article-header">
                <p class="eyebrow">Kuranji Sejati</p>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <figure class="single-featured-image"><?php the_post_thumbnail('full'); ?></figure>
            <?php endif; ?>

            <div class="single-article-content">
                <?php the_content(); ?>
            </div>
        </article>

        <?php get_template_part('template-parts/detail-sidebar'); ?>
    </main>

<?php
get_footer('detail');
