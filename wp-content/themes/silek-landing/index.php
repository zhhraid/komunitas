<?php
$post_type_labels = array(
    'silek_news' => 'Berita',
    'silek_event' => 'Event',
    'page' => 'Halaman',
);

get_header('detail', array('body_class' => 'content-archive-page'));
?>

    <main>
        <section class="archive-hero">
            <div class="archive-hero-inner">
                <p class="eyebrow"><?php echo is_search() ? 'Pencarian' : 'Kuranji Sejati'; ?></p>
                <h1><?php echo is_search() ? esc_html(sprintf('Hasil pencarian "%s"', get_search_query())) : esc_html(wp_strip_all_tags(get_the_archive_title())); ?></h1>
                <?php get_search_form(); ?>
            </div>
        </section>

        <section class="archive-content">
            <?php if (have_posts()) : ?>
                <div class="search-result-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="search-result">
                            <span class="event-category"><?php echo esc_html(isset($post_type_labels[get_post_type()]) ? $post_type_labels[get_post_type()] : 'Tulisan'); ?></span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo esc_html(get_the_excerpt()); ?></p>
                        </article>
                    <?php endwhile; ?>
                </div>
                <nav class="archive-pagination" aria-label="Navigasi hasil">
                    <?php the_posts_pagination(array('mid_size' => 1, 'prev_text' => 'Sebelumnya', 'next_text' => 'Berikutnya')); ?>
                </nav>
            <?php else : ?>
                <p class="content-empty"><?php echo is_search() ? 'Tidak ada hasil yang cocok. Coba kata kunci lain.' : 'Belum ada tulisan yang diterbitkan.'; ?></p>
            <?php endif; ?>
        </section>
    </main>

<?php
get_footer('detail');
