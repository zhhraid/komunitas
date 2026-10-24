<?php
$theme_uri = get_template_directory_uri();
$brand_logo_path = get_template_directory() . '/assets/images/logo-kuranji-sejati.png';
$brand_logo_uri  = $theme_uri . '/assets/images/logo-kuranji-sejati.png';
$profil_uri      = $theme_uri . '/assets/images/profil/';
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
                        <a href="#latar-belakang">Latar Belakang</a>
                        <a href="#maksud-tujuan">Maksud & Tujuan</a>
                        <a href="#visi-misi">Visi & Misi</a>
                        <a href="#sejarah">Sejarah</a>
                        <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
                        <a href="#data-umum">Data Umum</a>
                    </div>
                </div>
                <div class="nav-item has-submenu">
                    <a href="#kegiatan">Kegiatan</a>
                    <div class="submenu">
                        <a href="#program">Program</a>
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
                        <a href="#latar-belakang">Latar Belakang</a>
                        <a href="#maksud-tujuan">Maksud & Tujuan</a>
                        <a href="#visi-misi">Visi & Misi</a>
                        <a href="#sejarah">Sejarah</a>
                        <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
                        <a href="#data-umum">Data Umum</a>
                        <a href="#kegiatan">Kegiatan</a>
                        <a href="#program">Program</a>
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
                        Kenali profil perguruan, visi dan misi, sejarah, silsilah tuo silek, program latihan, agenda, khazanah istilah, galeri dokumentasi, dan kontak dalam satu halaman.
                    </p>
                </div>

            </div>
        </section>

        <section class="section profile-section section-snap" id="perguruan">
            <header class="section-head">
                <div>
                    <p class="eyebrow">Tentang Kami</p>
                    <h2>Profil Perguruan</h2>
                </div>
                <p>Perguruan Pencak Silat Kuranji Sejati adalah sasaran silek tradisional di Rimbo Tarok, Kuranji, Kota Padang, yang membekali generasi muda dengan pencak silat, randai, tari-tarian, dan musik tradisional Minangkabau.</p>
            </header>
            <div class="profile-intro-grid">
                <article class="background-card section-snap" id="latar-belakang">
                    <div class="background-card-title">
                        <span class="card-icon">01</span>
                        <h3>Latar Belakang</h3>
                    </div>
                    <div class="background-card-body">
                        <p>Minangkabau kaya dengan kesenian tradisional dan pencak silat yang merupakan peninggalan nenek moyang kita, salah satunya kesenian randai. Kesenian randai dan pencak silat ini dapat menjadi jalan untuk mengatasi pengangguran dan kemiskinan.</p>
                        <p>Pengangguran semakin meningkat setiap tahun, begitu juga kemiskinan yang masih menjadi permasalahan serius yang dihadapi pemerintah. Di antara penyebab tingginya angka pengangguran di Indonesia adalah jumlah pencari kerja yang lebih besar dari jumlah peluang kerja, kesenjangan antara kompetensi pencari kerja dengan kebutuhan pasar kerja, serta masih banyaknya anak putus sekolah yang tidak memiliki keterampilan untuk mandiri. Permasalahan ini perlu dicarikan solusi agar tidak berlarut-larut.</p>
                        <p>Melihat kondisi tersebut, pengurus Perguruan Pencak Silat Kuranji Sejati, yang sudah tiga puluh tiga tahun mengembangkan pelestarian kebudayaan Minangkabau, membekali mereka dengan keterampilan pencak silat, kesenian randai, tari-tarian, dan musik tradisional Minangkabau.</p>
                    </div>
                </article>
                <div class="purpose-grid section-snap" id="maksud-tujuan">
                    <article class="purpose-card">
                        <span class="card-icon">02</span>
                        <h3>Maksud</h3>
                        <ul class="story-list">
                            <li>Membangun dan melestarikan kesenian daerah, terutama silek tradisional, yang merupakan bagian dari kesenian yang tumbuh dan berkembang di masyarakat, termasuk di wilayah Kota Padang.</li>
                            <li>Menumbuhkembangkan kearifan lokal pada generasi muda sebagai generasi penerus melalui pengenalan dan keterlibatan mereka dalam kreativitas silek tradisional.</li>
                        </ul>
                    </article>
                    <article class="purpose-card">
                        <span class="card-icon">03</span>
                        <h3>Tujuan</h3>
                        <ul class="story-list">
                            <li>Melestarikan kesenian silek tradisional serta mengembangkannya di kalangan generasi muda, khususnya di Kecamatan Kuranji.</li>
                            <li>Melaksanakan pembinaan dan latihan bagi kalangan muda sebagai generasi penerus.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section profile-section is-muted section-snap" id="visi-misi">
            <header class="section-head is-center">
                <p class="eyebrow">Visi & Misi</p>
                <h2>Visi dan Misi Perguruan</h2>
                <p>Arah yang menjadi pegangan Kuranji Sejati dalam mengembangkan seni dan budaya bersama masyarakat.</p>
            </header>
            <article class="vision-card">
                <span class="vision-label">Visi</span>
                <p>Mengembangkan potensi masyarakat yang berkarakter, kreatif, inovatif, dan berkolaboratif melalui seni dan budaya.</p>
            </article>
            <ol class="mission-list" aria-label="Misi">
                <li><span>Misi 01</span><p>Menjalin kerja sama dengan masyarakat dalam pengembangan seni dan budaya.</p></li>
                <li><span>Misi 02</span><p>Melaksanakan proses berkesenian secara rutin.</p></li>
                <li><span>Misi 03</span><p>Menggiatkan pelatihan anggota dan masyarakat sekitar sebagai wujud pelestarian dan pengembangan seni dan budaya.</p></li>
                <li><span>Misi 04</span><p>Memberikan kemudahan kepada masyarakat untuk berpartisipasi dalam pengembangan seni dan budaya.</p></li>
            </ol>
        </section>

        <section class="section profile-section section-snap" id="sejarah">
            <header class="section-head">
                <div>
                    <p class="eyebrow">Sejarah</p>
                    <h2>Sejarah Berdiri Kuranji Sejati</h2>
                </div>
                <p>Dari Sasaran Surau Pondok pada tahun 1973 hingga diresmikan sebagai Perguruan Pencak Silat Kuranji Sejati dan diteruskan sampai hari ini.</p>
            </header>
            <ol class="era-timeline">
                <li>
                    <time>1973</time>
                    <span class="era-marker" aria-hidden="true"></span>
                    <div class="era-entry">
                        <h3>Sasaran Surau Pondok</h3>
                        <p>Beberapa orang guru silat Pauh mengajar silat dan randai di satu tempat yang diberi nama Sasaran Surau Pondok, beralamat di Jalan Rimbo Tarok RT 04/RW 09, Kelurahan Kuranji, Kecamatan Kuranji, Kanagarian Pauh Sambilan. Nama-nama guru tersebut di antaranya alm. Munir, alm. Jabar, alm. Syair, alm. Basir, dan kawan-kawan.</p>
                        <p>Proses belajar mengajar berjalan lebih kurang selama sepuluh tahun, namun sempat berhenti selama beberapa tahun.</p>
                    </div>
                </li>
                <li>
                    <time>1986</time>
                    <span class="era-marker" aria-hidden="true"></span>
                    <div class="era-entry">
                        <h3>Dihidupkan Kembali</h3>
                        <p>Guru-guru silat tersebut menghidupkan kembali Sasaran Surau Pondok dan menerima murid-murid baru yang ingin bergabung. Tempat latihannya pun sedikit berpindah dari tempat lama.</p>
                    </div>
                </li>
                <li>
                    <time>1987</time>
                    <span class="era-marker" aria-hidden="true"></span>
                    <div class="era-entry">
                        <h3>Lahirnya Kuranji Sejati</h3>
                        <p>Setelah berjalan selama satu tahun, sasaran ini diresmikan. Atas kesepakatan para guru, ninik mamak, serta Tuo Tapian Kuranji, sasaran diberi nama Perguruan Pencak Silat Kuranji Sejati.</p>
                    </div>
                </li>
                <li>
                    <time>2008</time>
                    <span class="era-marker" aria-hidden="true"></span>
                    <div class="era-entry">
                        <h3>Pengukuhan Tuo Silek</h3>
                        <p>Kaharudin sebagai guru mengangkat dan mengukuhkan beberapa orang muridnya sebagai Tuo Silek: Bustami J., alm. Syafril, Syofian, dan M. Zen.</p>
                    </div>
                </li>
                <li>
                    <time>Kini</time>
                    <span class="era-marker" aria-hidden="true"></span>
                    <div class="era-entry">
                        <h3>Diteruskan hingga Hari Ini</h3>
                        <p>Perjuangan ini dilanjutkan dan dikembangkan oleh M. Zen dan kawan-kawan sampai saat ini, di sasaran yang beralamat di Rimbo Tarok RT 001/RW 009, Kelurahan Kuranji, Kecamatan Kuranji, Kota Padang.</p>
                    </div>
                </li>
            </ol>
        </section>

        <section class="section profile-section is-muted section-snap" id="silsilah-tuo-silek">
            <header class="section-head is-center">
                <p class="eyebrow">Silsilah</p>
                <h2>Silsilah Tuo Silek</h2>
                <p>Guru, pendiri, dan tuo silek yang menjaga kesinambungan ilmu, adab latihan, dan pewarisan budaya di Kuranji Sejati.</p>
            </header>
            <div class="portrait-grid">
                <?php
                $portraits = array(
                    array('file' => 'darwis-rajo-putih.jpg', 'name' => 'Darwis Rajo Putih', 'role' => 'Pendiri Perguruan Surau Pondok'),
                    array('file' => 'munir.jpg', 'name' => 'Alm. Munir', 'role' => 'Guru silat Pauh di Sasaran Surau Pondok'),
                    array('file' => 'm-zen.jpg', 'name' => 'M. Zen', 'role' => 'Tuo Silek, penerus Kuranji Sejati hingga kini'),
                );
                foreach ($portraits as $portrait) :
                    $portrait_uri = $profil_uri . $portrait['file'];
                    ?>
                    <figure class="portrait-card">
                        <button type="button" class="gallery-open portrait-open" data-gallery-full="<?php echo esc_url($portrait_uri); ?>" data-gallery-caption="<?php echo esc_attr($portrait['name'] . ' - ' . $portrait['role']); ?>">
                            <img src="<?php echo esc_url($portrait_uri); ?>" alt="Foto <?php echo esc_attr($portrait['name']); ?>" loading="lazy">
                        </button>
                        <figcaption>
                            <strong><?php echo esc_html($portrait['name']); ?></strong>
                            <span><?php echo esc_html($portrait['role']); ?></span>
                        </figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
            <ol class="lineage-steps">
                <li class="lineage-step">
                    <span class="lineage-label">1973</span>
                    <h3>Guru Silat Pauh</h3>
                    <ul class="name-list"><li>Alm. Munir</li><li>Alm. Jabar</li><li>Alm. Syair</li><li>Alm. Basir</li><li>dan kawan-kawan</li></ul>
                </li>
                <li class="lineage-step">
                    <span class="lineage-label">Pendiri</span>
                    <h3>Perguruan Surau Pondok</h3>
                    <ul class="name-list"><li>Darwis Rajo Putih</li></ul>
                </li>
                <li class="lineage-step">
                    <span class="lineage-label">Tuo Silek</span>
                    <h3>Tuo Silek Perguruan</h3>
                    <ul class="name-list"><li>Kaharudin</li><li>Mawardi</li></ul>
                </li>
                <li class="lineage-step">
                    <span class="lineage-label">2008</span>
                    <h3>Dikukuhkan oleh Kaharudin</h3>
                    <ul class="name-list"><li>Bustami J.</li><li>Alm. Syafril</li><li>Syofian</li><li>M. Zen</li></ul>
                </li>
            </ol>
        </section>

        <section class="section profile-section section-snap" id="data-umum">
            <header class="section-head">
                <div>
                    <p class="eyebrow">Data Umum</p>
                    <h2>Data Umum Perguruan</h2>
                </div>
                <p>Sasaran Kuranji Sejati berada di atas tanah wakaf seluas 10 x 15 m di Rimbo Tarok, Kuranji. Berikut data perguruan serta kondisi lokasi latihan sebelum dan sesudah perbaikan.</p>
            </header>
            <dl class="data-sheet">
                <div><dt>Nama Sasaran/Perguruan</dt><dd>Kuranji Sejati</dd></div>
                <div><dt>Jalan</dt><dd>Jalan Rimbo Tarok RT 01/RW 09</dd></div>
                <div><dt>Kelurahan</dt><dd>Kuranji</dd></div>
                <div><dt>Kecamatan</dt><dd>Kuranji</dd></div>
                <div><dt>Kabupaten/Kota</dt><dd>Padang</dd></div>
                <div><dt>Provinsi</dt><dd>Sumatera Barat</dd></div>
                <div><dt>Kode Pos</dt><dd>25057</dd></div>
                <div><dt>Nomor HP/WA</dt><dd><a href="https://wa.me/6281266496469">0812-6649-6469</a></dd></div>
                <div><dt>Tahun Operasional</dt><dd>2018</dd></div>
                <div><dt>Jumlah Anak Sasian</dt><dd>25 orang</dd></div>
                <div><dt>Status Tanah</dt><dd>Wakaf</dd></div>
                <div><dt>Luas Tanah</dt><dd>10 x 15 m</dd></div>
            </dl>
            <div class="venue-photos">
                <?php
                $venue_photos = array(
                    array('file' => 'lokasi-sebelum-perbaikan.jpg', 'label' => 'Sebelum', 'caption' => 'Lokasi latihan sebelum perbaikan'),
                    array('file' => 'lokasi-sesudah-perbaikan.jpg', 'label' => 'Sesudah', 'caption' => 'Lokasi latihan sesudah perbaikan'),
                );
                foreach ($venue_photos as $venue_photo) :
                    $venue_uri = $profil_uri . $venue_photo['file'];
                    ?>
                    <figure class="venue-photo">
                        <button type="button" class="gallery-open" data-gallery-full="<?php echo esc_url($venue_uri); ?>" data-gallery-caption="<?php echo esc_attr($venue_photo['caption']); ?>">
                            <img src="<?php echo esc_url($venue_uri); ?>" alt="<?php echo esc_attr($venue_photo['caption']); ?>" loading="lazy">
                        </button>
                        <figcaption><span><?php echo esc_html($venue_photo['label']); ?></span><?php echo esc_html($venue_photo['caption']); ?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="section profile-section is-muted section-snap" id="kegiatan">
            <header class="section-head">
                <div>
                    <p class="eyebrow">Program Perguruan</p>
                    <h2>Program dan Kegiatan</h2>
                </div>
                <div>
                    <p>Kuranji Sejati membekali anggota dan anak-anak sekitar dengan pencak silat, randai, tari-tarian, serta musik tradisional Minangkabau.</p>
                    <a class="button" href="#agenda">Lihat Semua Kegiatan</a>
                </div>
            </header>
            <div class="activity-cards">
                <article class="activity-card section-snap" id="latihan"><span>01</span><h3>Latihan Rutin</h3><p>Pencak silat tradisional sebagai dasar gerak, disiplin, dan pewarisan nilai.</p></article>
                <article class="activity-card section-snap" id="seni"><span>02</span><h3>Seni & Budaya</h3><p>Randai, tari piring, tari buai-buai, tari galombang, tari pasambahan, musik tradisional Minangkabau, dan pupuik batang padi.</p></article>
                <article class="activity-card section-snap" id="regenerasi"><span>03</span><h3>Regenerasi</h3><p>Pelatihan anggota dan masyarakat sekitar sebagai wujud pelestarian seni budaya.</p></article>
            </div>
            <div class="program-panel section-snap" id="program">
                <h3>Kegiatan yang sudah berjalan dan terlaksana</h3>
                <ol class="program-list">
                    <?php
                    $programs = array('Pencak Silat Tradisional', 'Randai', 'Tari Piring', 'Tari Buai-Buai', 'Tari Galombang', 'Tari Pasambahan', 'Musik Tradisional Minangkabau', 'Pupuik Batang Padi');
                    foreach ($programs as $index => $program) :
                        ?>
                        <li><span><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span><?php echo esc_html($program); ?></li>
                    <?php endforeach; ?>
                </ol>
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
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/gallery/silat-tradisi.jpg' ); ?>" alt="Latihan silat tradisi di Kuranji Sejati">
                    <div><h3>Silek</h3><p>Seni bela diri tradisional Minangkabau yang tidak hanya mengajarkan teknik bertarung, tetapi juga nilai moral, spiritual, dan adat.</p></div>
                </article>
                <article class="term-card section-snap" id="kamus-randai">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/gallery/randai-latihan.jpg' ); ?>" alt="Latihan randai di Kuranji Sejati">
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
                    <span>Jalan Rimbo Tarok RT 001/RW 009, Kelurahan Kuranji, Kecamatan Kuranji, Kota Padang, Sumatera Barat 25057</span>
                    <a href="https://wa.me/6281266496469">WhatsApp 0812-6649-6469</a>
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
            <p>Website komunitas perguruan dalam satu halaman untuk mengenalkan profil, visi dan misi, sejarah, kegiatan, agenda, khazanah istilah, galeri, dan kontak.</p>
            <div class="footer-contact">
                <span>Jalan Rimbo Tarok RT 001/RW 009, Kuranji, Kota Padang 25057</span>
                <a href="https://wa.me/6281266496469">WhatsApp 0812-6649-6469</a>
            </div>
        </div>

        <nav class="footer-nav" aria-label="Peta situs footer">
            <div>
                <strong>Perguruan</strong>
                <a href="#perguruan">Perguruan</a>
                <a href="#latar-belakang">Latar Belakang</a>
                <a href="#maksud-tujuan">Maksud & Tujuan</a>
                <a href="#visi-misi">Visi & Misi</a>
                <a href="#sejarah">Sejarah</a>
                <a href="#silsilah-tuo-silek">Silsilah Tuo Silek</a>
                <a href="#data-umum">Data Umum</a>
            </div>
            <div>
                <strong>Kegiatan</strong>
                <a href="#kegiatan">Kegiatan</a>
                <a href="#program">Program</a>
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