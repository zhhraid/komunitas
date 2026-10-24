<?php
$theme_uri = get_template_directory_uri();
$brand_logo_path = get_template_directory() . '/assets/images/logo-kuranji-sejati.png';
$brand_logo_uri = $theme_uri . '/assets/images/logo-kuranji-sejati.png';

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
$taxonomy = $is_event ? 'silek_event_category' : 'silek_news_category';
$terms = get_the_terms(get_the_ID(), $taxonomy);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('content-detail-page'); ?>>
<?php wp_body_open(); ?>

<div class="site-shell detail-shell">
    <header class="site-header detail-site-header">
        <nav class="nav" aria-label="Navigasi halaman detail">
            <a class="brand" href="<?php echo esc_url(home_url('/#beranda')); ?>">
                <?php if (file_exists($brand_logo_path)) : ?>
                    <img class="brand-logo" src="<?php echo esc_url($brand_logo_uri); ?>" alt="Logo Perguruan Pencak Silat Kuranji Sejati" width="48" height="48">
                <?php else : ?>
                    <span class="brand-mark">KS</span>
                <?php endif; ?>
                <span class="brand-name">Perguruan Pencak Silat<br>Kuranji Sejati</span>
            </a>
            <a class="detail-nav-back" href="<?php echo esc_url(home_url('/#agenda')); ?>">Kembali ke Berita & Event</a>
        </nav>
    </header>

    <main class="single-content-wrap">
        <article <?php post_class('single-article'); ?>>
            <header class="single-article-header">
                <a class="single-back-link" href="<?php echo esc_url(home_url('/#agenda')); ?>">Kembali</a>
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
                    <?php if ($registration_url) : ?>
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

        <aside class="single-sidebar">
            <p class="eyebrow">Kuranji Sejati</p>
            <h2>Warisan budaya terus bergerak.</h2>
            <p>Kembali ke halaman utama untuk melihat sejarah perguruan, kegiatan, khazanah, galeri, dan jadwal terbaru.</p>
            <a class="button" href="<?php echo esc_url(home_url('/#beranda')); ?>">Halaman Utama</a>
        </aside>
    </main>

    <footer class="detail-footer">
        <span>Perguruan Pencak Silat Kuranji Sejati</span>
        <a href="<?php echo esc_url(home_url('/#kontak')); ?>">Kontak Perguruan</a>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>