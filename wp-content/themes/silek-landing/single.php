<?php
the_post();
$post_type = get_post_type();
$is_event = $post_type === 'silek_event';
$content_label = $is_event ? 'Event' : 'Berita';
$source_url = get_post_meta(get_the_ID(), '_silek_source_url', true);
$source_name = get_post_meta(get_the_ID(), '_silek_source_name', true);
$event_date = get_post_meta(get_the_ID(), '_silek_event_date', true);
$event_time = get_post_meta(get_the_ID(), '_silek_event_time', true);
$event_location = get_post_meta(get_the_ID(), '_silek_event_location', true);
$registration_url = get_post_meta(get_the_ID(), '_silek_event_registration_url', true);
$is_past_event = $is_event && $event_date && $event_date < wp_date('Y-m-d');
$taxonomy = $is_event ? 'silek_event_category' : 'silek_news_category';
$terms = get_the_terms(get_the_ID(), $taxonomy);

get_header('detail', array(
    'body_class' => 'content-detail-page',
    'active' => $is_event ? 'event' : 'news',
));
?>

    <main class="single-content-wrap">
        <article <?php post_class('single-article'); ?>>
            <header class="single-article-header">
                <a class="single-back-link" href="<?php echo esc_url(get_post_type_archive_link($is_event ? 'silek_event' : 'silek_news')); ?>">Kembali</a>
                <p class="eyebrow"><?php echo esc_html($content_label); ?></p>
                <h1><?php the_title(); ?></h1>
                <div class="single-meta">
                    <?php if ($is_event && $event_date) : ?>
                        <time datetime="<?php echo esc_attr($event_date); ?>"><?php echo esc_html(silek_format_event_date($event_date, 'd F Y')); ?></time>
                    <?php else : ?>
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('d F Y')); ?></time>
                    <?php endif; ?>
                    <?php if ($terms && !is_wp_error($terms)) : ?>
                        <span><?php echo esc_html($terms[0]->name); ?></span>
                    <?php endif; ?>
                    <?php if ($is_past_event) : ?>
                        <span class="event-status">Selesai</span>
                    <?php endif; ?>
                </div>
            </header>

            <?php if ($is_event && has_post_thumbnail()) : ?>
                <figure class="single-featured-image"><?php the_post_thumbnail('full'); ?></figure>
            <?php elseif (!$is_event) : ?>
                <figure class="single-featured-image"><img src="<?php echo esc_url(silek_get_news_cover_url(get_the_ID(), 'full')); ?>" alt="Sampul berita <?php echo esc_attr(get_the_title()); ?>"></figure>
            <?php endif; ?>

            <?php if ($is_event) : ?>
                <div class="event-detail-box">
                    <div><span>Tanggal</span><strong><?php echo esc_html($event_date ? silek_format_event_date($event_date, 'd F Y') : 'Akan diumumkan'); ?></strong></div>
                    <div><span>Waktu</span><strong><?php echo esc_html($event_time ? silek_format_event_time($event_time) : 'Akan diumumkan'); ?></strong></div>
                    <div><span>Lokasi</span><strong><?php echo esc_html($event_location ?: 'Akan diumumkan'); ?></strong></div>
                    <?php if ($is_past_event) : ?>
                        <p class="event-detail-note">Event ini telah selesai dilaksanakan.</p>
                    <?php elseif ($registration_url) : ?>
                        <a class="button" href="<?php echo esc_url($registration_url); ?>" target="_blank" rel="noopener">Daftar Event</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="single-article-content">
                <?php the_content(); ?>
            </div>

            <?php if ($source_url) : ?>
                <div class="article-source">
                    <span>Sumber informasi</span>
                    <a href="<?php echo esc_url($source_url); ?>" target="_blank" rel="noopener"><?php echo esc_html($source_name ? 'Baca berita asli di ' . $source_name : 'Baca sumber berita'); ?></a>
                </div>
            <?php endif; ?>
        </article>

        <?php get_template_part('template-parts/detail-sidebar'); ?>
    </main>

<?php
get_footer('detail');
