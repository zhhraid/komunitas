<?php
$args = wp_parse_args($args ?? array(), array(
    'body_class' => 'content-detail-page',
    'active' => '',
));
$brand_logo_path = get_template_directory() . '/assets/images/logo-kuranji-sejati.png';
$brand_logo_uri = get_template_directory_uri() . '/assets/images/logo-kuranji-sejati.png';
$detail_links = array(
    'home' => array('label' => 'Beranda', 'url' => home_url('/')),
    'news' => array('label' => 'Berita', 'url' => get_post_type_archive_link('silek_news')),
    'event' => array('label' => 'Event', 'url' => get_post_type_archive_link('silek_event')),
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class($args['body_class']); ?>>
<?php wp_body_open(); ?>

<div class="site-shell detail-shell">
    <header class="site-header detail-site-header">
        <nav class="nav" aria-label="Navigasi halaman">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (file_exists($brand_logo_path)) : ?>
                    <img class="brand-logo" src="<?php echo esc_url($brand_logo_uri); ?>" alt="Logo Perguruan Pencak Silat Kuranji Sejati" width="48" height="48">
                <?php else : ?>
                    <span class="brand-mark">KS</span>
                <?php endif; ?>
                <span class="brand-name">Perguruan Pencak Silat<br>Kuranji Sejati</span>
            </a>
            <div class="archive-nav">
                <?php foreach ($detail_links as $key => $link) : ?>
                    <a<?php echo $args['active'] === $key ? ' class="is-active"' : ''; ?> href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a>
                <?php endforeach; ?>
            </div>
        </nav>
    </header>
