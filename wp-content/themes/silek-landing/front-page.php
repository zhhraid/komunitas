<?php
?><!doctype html>
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
                <span class="brand-mark">S</span>
                <span>Perguruan Silek</span>
            </a>
            <div class="nav-links">
                <a class="is-active" href="#beranda">Beranda</a>
                <a href="#perguruan">Perguruan</a>
                <a href="#kegiatan">Kegiatan</a>
                <a href="#agenda">Agenda</a>
                <a href="#khazanah">Khazanah</a>
                <a href="#galeri">Galeri</a>
                <a href="#kontak">Kontak</a>
                <a href="#peta-situs">Peta Situs</a>
            </div>
            <a class="nav-cta" href="#kontak">Kontak</a>
        </nav>
    </header>

    <main>
        <section class="hero section-snap" id="beranda">
            <div class="hero-content">
                <p class="eyebrow">Website Komunitas Perguruan</p>
                <h1>Platform Komunitas Silek Minangkabau</h1>
                <p class="hero-copy">
                    Kenali perguruan, sejarah, silsilah tuo silek, kegiatan latihan,
                    agenda, khazanah istilah, galeri dokumentasi, dan kontak dalam satu halaman.
                </p>
                <div class="hero-actions">
                    <a class="button" href="#perguruan">Lihat Perguruan</a>
                    <a class="button secondary" href="#agenda">Agenda Kegiatan</a>
                </div>
                <div class="hero-feature-cards" aria-label="Ringkasan menu website">
                    <article class="hero-feature">
                        <strong>Sejarah</strong>
                        <span>Perguruan dan silsilah tuo silek.</span>
                    </article>
                    <article class="hero-feature">
                        <strong>Latihan</strong>
                        <span>Kegiatan rutin, seni, dan regenerasi.</span>
                    </article>
                    <article class="hero-feature">
                        <strong>Khazanah</strong>
                        <span>Kamus Silek Minangkabau dan Randai.</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section-snap" id="perguruan">
            <div class="section-header">
                <p class="eyebrow">Perguruan</p>
                <h2>Jejak perguruan dan silsilah tuo silek.</h2>
                <p>
                    Bagian ini disiapkan untuk menampilkan narasi utama tentang perguruan,
                    tokoh, aliran, nilai latihan, dan hubungan antar generasi.
                </p>
            </div>
            <div class="split-layout">
                <article class="story-card large">
                    <span>Sejarah</span>
                    <h3>Sejarah Perguruan</h3>
                    <p>
                        Ceritakan awal mula perguruan, daerah asal, tokoh pendiri,
                        serta filosofi yang menjadi pegangan dalam latihan.
                    </p>
                </article>
                <article class="story-card">
                    <span>Silsilah</span>
                    <h3>Tuo Silek</h3>
                    <p>
                        Tempat untuk mencatat rantai guru, murid, dan pewarisan ilmu.
                    </p>
                </article>
            </div>
        </section>

        <section class="section muted-section section-snap" id="kegiatan">
            <div class="section-header">
                <p class="eyebrow">Kegiatan</p>
                <h2>Aktivitas komunitas yang mudah dipahami.</h2>
                <p>
                    Formatnya dibuat seperti kartu informasi agar nanti gampang diganti
                    dengan dokumentasi asli, jadwal latihan, dan cerita kegiatan.
                </p>
            </div>
            <div class="cards three">
                <article class="card">
                    <span class="card-icon">01</span>
                    <strong>Latihan</strong>
                    <p>Jadwal latihan rutin, lokasi latihan, pelatih, dan persyaratan peserta baru.</p>
                </article>
                <article class="card">
                    <span class="card-icon">02</span>
                    <strong>Seni</strong>
                    <p>Penampilan, randai, tradisi gerak, dan karya seni yang terhubung dengan Silek.</p>
                </article>
                <article class="card">
                    <span class="card-icon">03</span>
                    <strong>Regenerasi</strong>
                    <p>Program pembinaan generasi muda agar nilai dan pengetahuan tetap berlanjut.</p>
                </article>
            </div>
        </section>

        <section class="section section-snap" id="agenda">
            <div class="section-header compact">
                <p class="eyebrow">Agenda</p>
                <h2>Kegiatan rutin dan unggulan.</h2>
            </div>
            <div class="agenda-list">
                <article class="agenda-item">
                    <time>Rutin</time>
                    <div>
                        <h3>Latihan Mingguan</h3>
                        <p>Isi dengan hari, jam, dan tempat latihan komunitas.</p>
                    </div>
                </article>
                <article class="agenda-item">
                    <time>Unggulan</time>
                    <div>
                        <h3>Festival atau Pertunjukan</h3>
                        <p>Gunakan bagian ini untuk acara besar, kolaborasi, atau undangan.</p>
                    </div>
                </article>
                <article class="agenda-item">
                    <time>Publik</time>
                    <div>
                        <h3>Pengenalan Silek</h3>
                        <p>Agenda kelas terbuka, workshop, atau pengenalan untuk peserta baru.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="section muted-section section-snap" id="khazanah">
            <div class="section-header">
                <p class="eyebrow">Khazanah</p>
                <h2>Kamus istilah untuk pembaca baru.</h2>
                <p>
                    Bagian khazanah bisa menjadi ciri khas website, karena pengunjung dapat
                    belajar istilah Silek Minangkabau dan Randai dalam format singkat.
                </p>
            </div>
            <div class="dictionary-grid">
                <article>
                    <strong>Kamus Silek Minangkabau</strong>
                    <p>Masukkan istilah gerak, posisi, aba-aba, dan makna budaya.</p>
                </article>
                <article>
                    <strong>Kamus Randai</strong>
                    <p>Masukkan istilah pertunjukan, dialog, musik, dan struktur cerita.</p>
                </article>
            </div>
        </section>

        <section class="section section-snap" id="galeri">
            <div class="section-header compact">
                <p class="eyebrow">Galeri</p>
                <h2>Dokumentasi kegiatan.</h2>
            </div>
            <div class="gallery-grid" aria-label="Placeholder dokumentasi">
                <div>Latihan</div>
                <div>Perguruan</div>
                <div>Randai</div>
                <div>Agenda</div>
                <div>Regenerasi</div>
                <div>Dokumentasi</div>
            </div>
        </section>

        <section class="section contact-section section-snap" id="kontak">
            <div class="contact-panel">
                <p class="eyebrow">Kontak</p>
                <h2>Hubungi komunitas.</h2>
                <p>
                    Nomor, email, dan alamat masih placeholder. Nanti tinggal diganti sesuai data asli.
                </p>
                <a class="button" href="https://wa.me/6280000000000">Chat WhatsApp</a>
            </div>
            <div class="contact-list">
                <div class="contact-item">
                    <strong>WhatsApp</strong>
                    <span>0800-0000-0000</span>
                </div>
                <div class="contact-item">
                    <strong>Email</strong>
                    <span>halo@silek.test</span>
                </div>
                <div class="contact-item">
                    <strong>Alamat</strong>
                    <span>Isi alamat komunitas di sini</span>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="peta-situs">
        <div>
            <strong>Website Komunitas Perguruan Silek</strong>
            <p>One page website untuk profil, agenda, khazanah, galeri, dan kontak.</p>
        </div>
        <div class="footer-links">
            <a href="#beranda">Beranda</a>
            <a href="#perguruan">Perguruan</a>
            <a href="#kegiatan">Kegiatan</a>
            <a href="#agenda">Agenda</a>
            <a href="#khazanah">Khazanah</a>
            <a href="#galeri">Galeri</a>
            <a href="#kontak">Kontak</a>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
