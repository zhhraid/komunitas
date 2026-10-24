<?php
$theme_uri = get_template_directory_uri();
$brand_logo_path = get_template_directory() . '/assets/images/logo-kuranji-sejati.png';
$brand_logo_uri  = $theme_uri . '/assets/images/logo-kuranji-sejati.png';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-shell">
    <header class="site-header">
        <nav class="nav" aria-label="Navigasi utama">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if ( file_exists( $brand_logo_path ) ) : ?>
                    <img class="brand-logo" src="<?php echo esc_url( $brand_logo_uri ); ?>" alt="Logo Perguruan Pencak Silat Kuranji Sejati" width="54" height="54" style="width:54px;height:54px;max-width:54px;max-height:54px;object-fit:contain;">
                <?php else : ?>
                    <span class="brand-mark">KS</span>
                <?php endif; ?>
                <span class="brand-name">Perguruan Pencak Silat<br>Kuranji Sejati</span>
            </a>

            <div class="nav-links">
                <a class="is-active" href="#beranda">Beranda</a>
                <div class="nav-item has-submenu">
                    <a href="#perguruan">Perguruan</a>
                    <div class="submenu">
                        <a href="#sejarah">Sejarah</a>
                        <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
                    </div>
                </div>
                <div class="nav-item has-submenu">
                    <a href="#kegiatan">Kegiatan</a>
                    <div class="submenu">
                        <a href="#latihan">Latihan</a>
                        <a href="#seni">Seni</a>
                        <a href="#regenerasi">Regenerasi</a>
                    </div>
                </div>
                <div class="nav-item has-submenu">
                    <a href="#agenda">Agenda</a>
                    <div class="submenu">
                        <a href="#berita">Berita</a>
                        <a href="#event">Event</a>
                    </div>
                </div>
                <div class="nav-item has-submenu">
                    <a href="#khazanah">Khazanah</a>
                    <div class="submenu">
                        <a href="#kamus-silek-minangkabau">Kamus Silek Minangkabau</a>
                        <a href="#kamus-randai">Kamus Randai</a>
                    </div>
                </div>
                <div class="nav-item has-submenu">
                    <a href="#galeri">Galeri</a>
                    <div class="submenu">
                        <a href="#dokumentasi">Dokumentasi</a>
                    </div>
                </div>
                <a href="#kontak">Kontak</a>
                <a href="#peta-situs">Peta Situs</a>
            </div>

            <div class="nav-actions">
                <details class="mobile-menu">
                    <summary>Menu</summary>
                    <div class="mobile-menu-panel">
                        <a href="#beranda">Beranda</a>
                        <a href="#perguruan">Perguruan</a>
                        <a href="#sejarah">Sejarah</a>
                        <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
                        <a href="#kegiatan">Kegiatan</a>
                        <a href="#latihan">Latihan</a>
                        <a href="#seni">Seni</a>
                        <a href="#regenerasi">Regenerasi</a>
                        <a href="#agenda">Agenda</a>
                        <a href="#berita">Berita</a>
                        <a href="#event">Event</a>
                        <a href="#khazanah">Khazanah</a>
                        <a href="#kamus-silek-minangkabau">Kamus Silek Minangkabau</a>
                        <a href="#kamus-randai">Kamus Randai</a>
                        <a href="#galeri">Galeri</a>
                        <a href="#dokumentasi">Dokumentasi</a>
                        <a href="#kontak">Kontak</a>
                        <a href="#peta-situs">Peta Situs</a>
                    </div>
                </details>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero section-snap" id="beranda">
            <div class="hero-slideshow" aria-hidden="true">
                <figure class="hero-slide hero-slide-1">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero-rumah-gadang.webp' ); ?>" alt="">
                </figure>
                <figure class="hero-slide hero-slide-2">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero-minang-silek.jpg' ); ?>" alt="">
                </figure>
                <figure class="hero-slide hero-slide-3">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero-minang-roof.jpg' ); ?>" alt="">
                </figure>
            </div>
            <div class="hero-inner">
                <div class="hero-copy-block">
                    <p class="eyebrow">Website Komunitas Perguruan</p>
                    <h1>Perguruan Pencak Silat Kuranji Sejati</h1>
                    <p class="hero-copy">
                        Kenali perguruan, sejarah, silsilah tuo silek, kegiatan latihan, agenda, khazanah istilah, galeri dokumentasi, dan kontak dalam satu halaman.
                    </p>
                </div>

            </div>
        </section>

        <section class="section intro-section section-snap" id="perguruan">
            <div class="section-lead">
                <p class="eyebrow">Tentang Kami</p>
                <h2>Sejarah Perguruan</h2>
                <p>
                    Perguruan Pencak Silat Kuranji Sejati tumbuh dari ruang belajar budaya di Kuranji, tempat silek, randai, dan nilai adat diwariskan dari guru kepada generasi berikutnya.
                </p>
            </div>
            <div class="intro-stories">
                <article class="story-card section-snap" id="sejarah">
                    <span class="card-icon">01</span>
                    <h3>Sejarah Perguruan</h3>
                    <p>Pada tahun 1973, beberapa guru silat Pauh mulai mengajar silat dan randai di Sasaran Surau Pondok, Rimbo Tarok, Kuranji. Kegiatan ini menjadi awal dari ruang belajar bersama bagi anak sasian dan masyarakat sekitar.</p>
                    <p>Sasaran sempat mengalami pasang surut, lalu kembali menerima murid baru pada tahun 1986. Pada tahun 1987, nama Kuranji Sejati disepakati oleh guru, ninik mamak, dan tuo tapian Kuranji sebagai identitas perguruan.</p>
                </article>
                <article class="story-card section-snap" id="silsilah-tuo-silek">
                    <span class="card-icon">02</span>
                    <h3>Silsilah Tuo Silek</h3>
                    <p>Pendiri Perguruan Surau Pondok adalah Darwis. Dalam catatan perguruan, Tuo Silek awal yang dikenal adalah Kaharudin dan Mawardi.</p>
                    <p>Pada tahun 2008, Kaharudin mengukuhkan beberapa murid untuk meneruskan perguruan. Dari proses ini, Kuranji Sejati menjaga kesinambungan ilmu, adab latihan, dan tanggung jawab pewarisan budaya.</p>
                </article>
            </div>
        </section>
        <section class="section history-section section-snap" id="data-umum">
            <div class="timeline-panel">
                <article><time>1973</time><strong>Sasaran Surau Pondok</strong><span>Guru-guru silat Pauh mulai mengajar silat dan randai di Rimbo Tarok.</span></article>
                <article><time>1986</time><strong>Dihidupkan Kembali</strong><span>Sasaran menerima murid baru dan proses belajar kembali berjalan.</span></article>
                <article><time>1987</time><strong>Kuranji Sejati</strong><span>Nama perguruan disepakati oleh guru, ninik mamak, dan tuo tapian Kuranji.</span></article>
                <article><time>2008</time><strong>Pengukuhan Tuo Silek</strong><span>Kaharudin mengukuhkan beberapa murid untuk meneruskan perguruan.</span></article>
            </div>
            <aside class="identity-card">
                <p class="eyebrow">Data Umum</p>
                <h3>Kuranji Sejati</h3>
                <dl>
                    <div><dt>Alamat</dt><dd>Jalan Rimbo Tarok RT 001/RW 009, Kelurahan Kuranji, Kecamatan Kuranji, Kota Padang, Sumatera Barat 25057</dd></div>
                    <div><dt>Tahun Operasional</dt><dd>2018</dd></div>
                    <div><dt>Anak Sasian</dt><dd>25 orang</dd></div>
                    <div><dt>Status Tanah</dt><dd>Wakaf, luas 10 x 15 m</dd></div>
                    <div><dt>WhatsApp</dt><dd>0812-6649-6469</dd></div>
                </dl>
            </aside>
        </section>

        <section class="section muted-section section-snap" id="kegiatan">
            <div class="section-lead">
                <p class="eyebrow">Aktivitas Kami</p>
                <h2>Aktivitas komunitas yang mudah dipahami.</h2>
                <p>
                    Kuranji Sejati membekali anggota dan anak-anak sekitar dengan pencak silat, randai, tari-tarian, serta musik tradisional Minangkabau.
                </p>
                <a class="button" href="#agenda">Lihat Semua Kegiatan</a>
            </div>
            <div class="activity-cards">
                <article class="activity-card section-snap" id="latihan"><span>01</span><h3>Latihan Rutin</h3><p>Pencak silat tradisional sebagai dasar gerak, disiplin, dan pewarisan nilai.</p></article>
                <article class="activity-card section-snap" id="seni"><span>02</span><h3>Seni & Budaya</h3><p>Randai, tari piring, tari buai-buai, tari galombang, tari pasambahan, dan musik tradisional.</p></article>
                <article class="activity-card section-snap" id="regenerasi"><span>03</span><h3>Regenerasi</h3><p>Pelatihan anggota dan masyarakat sekitar sebagai wujud pelestarian seni budaya.</p></article>
            </div>
        </section>

        <section class="section news-event-section section-snap" id="agenda">
            <div class="news-event-heading">
                <div>
                    <p class="eyebrow">Berita & Event</p>
                    <h2>Kabar terbaru dari Kuranji Sejati.</h2>
                    <p>Ikuti perjalanan pendampingan, kegiatan budaya, dan jadwal event perguruan.</p>
                </div>
                <a class="button section-view-all" href="<?php echo esc_url(get_post_type_archive_link('silek_news')); ?>">Lihat Semua Berita</a>
            </div>

            <div class="news-grid" id="berita">
                <?php
                $news_query = new WP_Query(array(
                    'post_type' => 'silek_news',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $news_cover = silek_get_news_cover_url(get_the_ID());
                        ?>
                        <article class="news-card">
                            <a class="news-card-media" href="<?php the_permalink(); ?>" aria-label="Baca <?php echo esc_attr(get_the_title()); ?>">
                                <img src="<?php echo esc_url($news_cover); ?>" alt="Sampul berita <?php echo esc_attr(get_the_title()); ?>">
                                <span>Berita</span>
                            </a>
                            <div class="news-card-body">
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('d M Y')); ?></time>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a class="text-link" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="content-empty">Berita terbaru akan ditampilkan di bagian ini.</p>
                <?php endif; ?>
            </div>

            <div class="event-board section-snap" id="event">
                <div class="event-board-heading">
                    <div>
                        <p class="eyebrow">Event</p>
                        <h3>Jadwal kegiatan mendatang.</h3>
                    </div>
                    <a class="button section-view-all" href="<?php echo esc_url(get_post_type_archive_link('silek_event')); ?>">Lihat Semua Event</a>
                </div>
                <div class="event-list">
                    <?php
                    $event_query = new WP_Query(array(
                        'post_type' => 'silek_event',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                        'meta_key' => '_silek_event_date',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => '_silek_event_date',
                                'value' => wp_date('Y-m-d'),
                                'compare' => '>=',
                                'type' => 'DATE',
                            ),
                        ),
                    ));
                    if ($event_query->have_posts()) :
                        while ($event_query->have_posts()) : $event_query->the_post();
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
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php echo esc_html(trim(silek_format_event_time($event_time) . ($event_time && $event_location ? ' | ' : '') . $event_location)); ?></p>
                                </div>
                                <a class="text-link" href="<?php the_permalink(); ?>">Detail Event</a>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="event-empty">
                            <strong>Belum ada event yang dijadwalkan.</strong>
                            <span>Informasi kegiatan rutin dan unggulan berikutnya akan diumumkan di sini.</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="section dictionary-section section-snap" id="khazanah">
            <div class="section-lead">
                <p class="eyebrow">Kamus Istilah</p>
                <h2>Kenali istilah dalam silek Minangkabau.</h2>
                <p>Pelajari istilah-istilah penting yang sering digunakan dalam dunia silek dan tradisi Minangkabau.</p>
            </div>
            <div class="dictionary-panel">
                <article class="term-card section-snap" id="kamus-silek-minangkabau">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/gallery/foto2.jpg' ); ?>" alt="Dokumentasi ruang latihan Kuranji Sejati">
                    <div><h3>Silek</h3><p>Seni bela diri tradisional Minangkabau yang tidak hanya mengajarkan teknik bertarung, tetapi juga nilai moral, spiritual, dan adat.</p></div>
                </article>
                <article class="term-card section-snap" id="kamus-randai">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/gallery/foto5.jpg' ); ?>" alt="Dokumentasi kegiatan randai dan silek">
                    <div><h3>Randai</h3><p>Randai menggabungkan kaba, dialog, dendang, musik, gerak galombang, dan silek dalam satu pertunjukan.</p></div>
                </article>
            </div>
        </section>

        <section class="section gallery-section section-snap" id="galeri">
            <div class="gallery-heading">
                <div><p class="eyebrow">Galeri</p><h2>Dokumentasi kegiatan.</h2><p>Geser untuk melihat suasana latihan, galanggang, dan kegiatan komunitas.</p></div>
                <div class="gallery-controls" aria-label="Navigasi galeri">
                    <button type="button" class="gallery-arrow" data-gallery-prev aria-label="Foto sebelumnya" title="Foto sebelumnya">&larr;</button>
                    <button type="button" class="gallery-arrow" data-gallery-next aria-label="Foto berikutnya" title="Foto berikutnya">&rarr;</button>
                </div>
            </div>
            <div class="gallery-slider section-snap" id="dokumentasi" aria-label="Dokumentasi Perguruan Pencak Silat Kuranji Sejati">
                <?php
                $gallery_query = new WP_Query(array(
                    'post_type' => 'silek_gallery',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => array('menu_order' => 'ASC', 'date' => 'DESC'),
                ));
                ?>
                <div class="gallery-track" data-gallery-track>
                    <?php if ($gallery_query->have_posts()) : ?>
                        <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
                            <?php
                            $gallery_image = silek_get_gallery_image_url(get_the_ID(), 'full');
                            $gallery_thumb = silek_get_gallery_image_url(get_the_ID(), 'large');
                            $gallery_caption = get_the_excerpt();
                            $lightbox_caption = $gallery_caption ? get_the_title() . ' - ' . $gallery_caption : get_the_title();
                            ?>
                            <?php if ($gallery_image) : ?>
                                <figure class="gallery-card">
                                    <button type="button" class="gallery-open" data-gallery-full="<?php echo esc_url($gallery_image); ?>" data-gallery-caption="<?php echo esc_attr($lightbox_caption); ?>">
                                        <img src="<?php echo esc_url($gallery_thumb ?: $gallery_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                                    </button>
                                    <figcaption>
                                        <strong><?php the_title(); ?></strong>
                                        <?php if ($gallery_caption) : ?><span><?php echo esc_html($gallery_caption); ?></span><?php endif; ?>
                                    </figcaption>
                                </figure>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="gallery-empty">Belum ada dokumentasi galeri.</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>            </div>
            <dialog class="gallery-lightbox" data-gallery-lightbox aria-label="Pratinjau foto galeri">
                <button type="button" class="gallery-lightbox-close" data-gallery-close aria-label="Tutup foto" title="Tutup foto">&times;</button>
                <figure>
                    <img src="" alt="">
                    <figcaption></figcaption>
                </figure>
            </dialog>            <a class="video-card" href="https://youtu.be/v9Orl4oDs34?si=agj1qzQsjK1XUwiZ" target="_blank" rel="noopener" aria-label="Tonton video dokumentasi Pengabdian kepada Masyarakat di YouTube">
                <span class="video-thumb"><img src="https://img.youtube.com/vi/v9Orl4oDs34/hqdefault.jpg" alt="Thumbnail video dokumentasi Pengabdian kepada Masyarakat"><span class="youtube-icon" aria-hidden="true"></span></span>
                <span class="video-copy"><strong>Dokumentasi Pengabdian kepada Masyarakat</strong><span>Penguatan kapasitas komunitas dalam pelestarian dan pengembangan randai bersama Kuranji Sejati.</span></span>
            </a>
        </section>

        <section class="cta-band section-snap">
            <div>
                <p class="eyebrow dark">Bergabung Bersama Kami</p>
                <h2>Ingin mengenal Silek Kuranji lebih dekat?</h2>
                <p>Datang, melihat, dan belajar bersama keluarga besar Kuranji Sejati.</p>
            </div>
            <div class="cta-actions">
                <a class="button ghost" href="https://wa.me/6281266496469">Hubungi Kami</a>
            </div>
        </section>

        <section class="section contact-section section-snap" id="kontak">
            <div class="section-lead">
                <p class="eyebrow">Lokasi & Kontak</p>
                <h2>Kunjungi Perguruan Pencak Silat Kuranji Sejati.</h2>
                <p>Kami terbuka untuk siapa saja yang ingin belajar, berdiskusi, atau berkolaborasi.</p>
            </div>
            <div class="location-layout section-snap" id="lokasi">
                <div class="map-wrap"><iframe class="map-frame" title="Peta lokasi Perguruan Pencak Silat Kuranji Sejati" src="https://www.google.com/maps?q=Jalan%20Rimbo%20Tarok%20RT%20001%20RW%20009%20Kuranji%20Kota%20Padang%20Sumatera%20Barat&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <aside class="contact-card">
                    <strong>Perguruan Pencak Silat Kuranji Sejati</strong>
                    <span>Kuranji, Kota Padang, Sumatera Barat</span>
                    <a class="button" href="https://share.google/kekTEYsKUZj7d5Y0Y" target="_blank" rel="noopener">Buka di Google Maps</a>
                </aside>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="peta-situs">
        <div class="footer-main">
            <a class="footer-brand" href="#beranda">
                <?php if ( file_exists( $brand_logo_path ) ) : ?>
                    <img class="brand-logo" src="<?php echo esc_url( $brand_logo_uri ); ?>" alt="Logo Perguruan Pencak Silat Kuranji Sejati" width="48" height="48" style="width:48px;height:48px;max-width:48px;max-height:48px;object-fit:contain;">
                <?php else : ?>
                    <span class="brand-mark">KS</span>
                <?php endif; ?>
                <span>Perguruan Pencak Silat Kuranji Sejati<br><small>Warisan budaya, kekuatan masa depan.</small></span>
            </a>
            <p>Website komunitas perguruan dalam satu halaman untuk mengenalkan sejarah, kegiatan, agenda, khazanah istilah, galeri, dan kontak.</p>
            <div class="footer-contact">
                <span>Jalan Rimbo Tarok RT 001/RW 009, Kuranji, Kota Padang</span>
            </div>
        </div>

        <nav class="footer-nav" aria-label="Peta situs footer">
            <div>
                <strong>Perguruan</strong>
                <a href="#perguruan">Perguruan</a>
                <a href="#sejarah">Sejarah</a>
                <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
            </div>
            <div>
                <strong>Kegiatan</strong>
                <a href="#kegiatan">Kegiatan</a>
                <a href="#latihan">Latihan</a>
                <a href="#seni">Seni</a>
                <a href="#regenerasi">Regenerasi</a>
            </div>
            <div>
                <strong>Berita & Event</strong>
                <a href="#agenda">Agenda</a>
                <a href="#berita">Berita</a>
                <a href="#event">Event</a>
            </div>
            <div>
                <strong>Khazanah</strong>
                <a href="#khazanah">Khazanah</a>
                <a href="#kamus-silek-minangkabau">Kamus Silek Minangkabau</a>
                <a href="#kamus-randai">Kamus Randai</a>
            </div>
            <div>
                <strong>Lainnya</strong>
                <a href="#beranda">Beranda</a>
                <a href="#galeri">Galeri</a>
                <a href="#dokumentasi">Dokumentasi</a>
                <a href="#kontak">Kontak</a>
                <a href="#peta-situs">Peta Situs</a>
            </div>
        </nav>

        <div class="footer-bottom">
            <span>2026 Perguruan Pencak Silat Kuranji Sejati.</span>
            <a href="#beranda">Kembali ke atas</a>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>