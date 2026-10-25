<?php
get_header('detail', array('body_class' => 'content-archive-page'));
?>

    <main>
        <section class="archive-hero">
            <div class="archive-hero-inner">
                <p class="eyebrow">Halaman Tidak Ditemukan</p>
                <h1>Maaf, halaman ini tidak tersedia.</h1>
                <p>Alamat yang Anda buka mungkin salah ketik atau halamannya sudah dipindahkan.</p>
                <div class="not-found-actions">
                    <a class="button" href="<?php echo esc_url(home_url('/')); ?>">Kembali ke Halaman Utama</a>
                    <a class="button secondary" href="<?php echo esc_url(get_post_type_archive_link('silek_news')); ?>">Lihat Berita</a>
                    <a class="button secondary" href="<?php echo esc_url(get_post_type_archive_link('silek_event')); ?>">Lihat Event</a>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer('detail');
