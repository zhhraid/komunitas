<?php
$is_event_archive = is_post_type_archive('silek_event') || is_tax('silek_event_category');
$archive_term = is_tax(array('silek_event_category', 'silek_news_category')) ? get_queried_object() : null;
$archive_label = $is_event_archive ? 'Event' : 'Berita';
if ($archive_term) {
    $archive_title = ($is_event_archive ? 'Kategori Event: ' : 'Kategori Berita: ') . $archive_term->name;
} else {
    $archive_title = $is_event_archive ? 'Semua Event Kuranji Sejati' : 'Semua Berita Kuranji Sejati';
}
$archive_intro = $is_event_archive
    ? 'Temukan jadwal kegiatan mendatang dan lihat kembali event yang telah dilaksanakan.'
    : 'Ikuti kabar terbaru, proses pendampingan, dan perjalanan budaya Perguruan Pencak Silat Kuranji Sejati.';

get_header('detail', array(
    'body_class' => 'content-archive-page',
    'active' => $is_event_archive ? 'event' : 'news',
));
?>

    <main>
        <section class="archive-hero">
            <div class="archive-hero-inner">
                <p class="eyebrow"><?php echo esc_html($archive_label); ?></p>
                <h1><?php echo esc_html($archive_title); ?></h1>
                <p><?php echo esc_html($archive_intro); ?></p>
            </div>
        </section>

        <section class="archive-content">
            <?php if ($is_event_archive) : ?>
                <?php
                $event_sections = array(
                    array(
                        'title' => 'Event Mendatang',
                        'description' => 'Diurutkan dari tanggal pelaksanaan yang paling dekat.',
                        'args' => array(
                            'meta_query' => silek_complete_event_meta_query('>='),
                            'orderby' => array('event_date' => 'ASC'),
                        ),
                    ),
                    array(
                        'title' => 'Event Selesai',
                        'description' => 'Dokumentasi jadwal kegiatan yang telah berlangsung.',
                        'args' => array(
                            'meta_query' => silek_complete_event_meta_query('<'),
                            'orderby' => array('event_date' => 'DESC'),
                        ),
                    ),
                );
                $has_events = false;
                ?>
                <?php foreach ($event_sections as $event_section) : ?>
                    <?php
                    $event_args = $event_section['args'];
                    if ($archive_term) {
                        $event_args['tax_query'] = array(array('taxonomy' => 'silek_event_category', 'field' => 'term_id', 'terms' => $archive_term->term_id));
                    }
                    $event_query = new WP_Query(array_merge(array(
                        'post_type' => 'silek_event',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    ), $event_args));
                    if (!$event_query->have_posts()) {
                        continue;
                    }
                    $has_events = true;
                    ?>
                    <div class="archive-event-group">
                        <header class="archive-group-heading">
                            <h2><?php echo esc_html($event_section['title']); ?></h2>
                            <p><?php echo esc_html($event_section['description']); ?></p>
                        </header>
                        <div class="event-list archive-event-list">
                            <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                                <?php
                                $event_date = get_post_meta(get_the_ID(), '_silek_event_date', true);
                                $event_time = get_post_meta(get_the_ID(), '_silek_event_time', true);
                                $event_location = get_post_meta(get_the_ID(), '_silek_event_location', true);
                                $event_terms = get_the_terms(get_the_ID(), 'silek_event_category');
                                ?>
                                <article class="event-card">
                                    <time datetime="<?php echo esc_attr($event_date); ?>">
                                        <strong><?php echo esc_html(silek_format_event_date($event_date, 'd')); ?></strong>
                                        <span><?php echo esc_html(silek_format_event_date($event_date, 'M Y')); ?></span>
                                    </time>
                                    <div>
                                        <?php if ($event_terms && !is_wp_error($event_terms)) : ?>
                                            <span class="event-category"><?php echo esc_html($event_terms[0]->name); ?></span>
                                        <?php endif; ?>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php echo esc_html(trim(silek_format_event_time($event_time) . ($event_time && $event_location ? ' | ' : '') . $event_location)); ?></p>
                                    </div>
                                    <a class="text-link" href="<?php the_permalink(); ?>">Detail Event</a>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endforeach; ?>
                <?php if (!$has_events) : ?>
                    <p class="content-empty">Belum ada event yang diterbitkan.</p>
                <?php endif; ?>
            <?php else : ?>
                <?php if (have_posts()) : ?>
                    <div class="news-grid archive-news-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="news-card">
                                <a class="news-card-media" href="<?php the_permalink(); ?>" aria-label="Baca <?php echo esc_attr(get_the_title()); ?>">
                                    <img src="<?php echo esc_url(silek_get_news_cover_url(get_the_ID())); ?>" alt="Sampul berita <?php echo esc_attr(get_the_title()); ?>">
                                    <span>Berita</span>
                                </a>
                                <div class="news-card-body">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('d M Y')); ?></time>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                    <a class="text-link" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <nav class="archive-pagination" aria-label="Navigasi halaman berita">
                        <?php the_posts_pagination(array('mid_size' => 1, 'prev_text' => 'Sebelumnya', 'next_text' => 'Berikutnya')); ?>
                    </nav>
                <?php else : ?>
                    <p class="content-empty">Belum ada berita yang diterbitkan.</p>
                <?php endif; ?>
            <?php endif; ?>
        </section>
    </main>

<?php
get_footer('detail');
