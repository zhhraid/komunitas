<?php

function silek_landing_assets() {
    wp_enqueue_style(
        'silek-landing-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script(
        'silek-landing-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'silek_landing_assets');

function silek_landing_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'silek_landing_setup');
function silek_landing_favicon() {
    $favicon_url = add_query_arg('ver', wp_get_theme()->get('Version'), get_template_directory_uri() . '/assets/images/favicon-transparent.png');
    echo '<link rel="icon" href="' . esc_url($favicon_url) . '" type="image/png">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($favicon_url) . '">' . "\n";
}
add_action('wp_head', 'silek_landing_favicon', 100);
add_action('admin_head', 'silek_landing_favicon', 100);
add_action('login_head', 'silek_landing_favicon', 100);

function silek_register_content_types() {
    register_post_type('silek_news', array(
        'labels' => array(
            'name' => 'Berita',
            'singular_name' => 'Berita',
            'add_new' => 'Tambah Berita',
            'add_new_item' => 'Tambah Berita Baru',
            'edit_item' => 'Edit Berita',
            'new_item' => 'Berita Baru',
            'view_item' => 'Lihat Berita',
            'search_items' => 'Cari Berita',
            'not_found' => 'Belum ada berita.',
            'all_items' => 'Semua Berita',
            'menu_name' => 'Berita',
            'featured_image' => 'Gambar Sampul',
            'set_featured_image' => 'Pilih Gambar Sampul',
            'remove_featured_image' => 'Hapus Gambar Sampul',
            'use_featured_image' => 'Gunakan sebagai Gambar Sampul',
        ),
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
        'rewrite' => array('slug' => 'berita', 'with_front' => false),
        'has_archive' => 'berita',
    ));

    register_taxonomy('silek_news_category', 'silek_news', array(
        'labels' => array(
            'name' => 'Kategori Berita',
            'singular_name' => 'Kategori Berita',
            'menu_name' => 'Kategori',
            'add_new_item' => 'Tambah Kategori Berita',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'kategori-berita'),
    ));

    register_post_type('silek_event', array(
        'labels' => array(
            'name' => 'Event',
            'singular_name' => 'Event',
            'add_new' => 'Tambah Event',
            'add_new_item' => 'Tambah Event Baru',
            'edit_item' => 'Edit Event',
            'new_item' => 'Event Baru',
            'view_item' => 'Lihat Event',
            'search_items' => 'Cari Event',
            'not_found' => 'Belum ada event.',
            'all_items' => 'Semua Event',
            'menu_name' => 'Event',
            'featured_image' => 'Gambar Sampul',
            'set_featured_image' => 'Pilih Gambar Sampul',
            'remove_featured_image' => 'Hapus Gambar Sampul',
            'use_featured_image' => 'Gunakan sebagai Gambar Sampul',
        ),
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'custom-fields'),
        'rewrite' => array('slug' => 'event', 'with_front' => false),
        'has_archive' => 'event',
    ));

    register_taxonomy('silek_event_category', 'silek_event', array(
        'labels' => array(
            'name' => 'Kategori Event',
            'singular_name' => 'Kategori Event',
            'menu_name' => 'Kategori',
            'add_new_item' => 'Tambah Kategori Event',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'kategori-event'),
    ));

    register_post_type('silek_gallery', array(
        'labels' => array(
            'name' => 'Galeri Dokumentasi',
            'singular_name' => 'Foto Galeri',
            'add_new' => 'Tambah Foto',
            'add_new_item' => 'Tambah Foto Galeri',
            'edit_item' => 'Edit Foto Galeri',
            'new_item' => 'Foto Galeri Baru',
            'search_items' => 'Cari Foto Galeri',
            'not_found' => 'Belum ada foto galeri.',
            'all_items' => 'Semua Foto',
            'menu_name' => 'Galeri Dokumentasi',
            'featured_image' => 'Foto Galeri',
            'set_featured_image' => 'Pilih Foto Galeri',
            'remove_featured_image' => 'Hapus Foto Galeri',
            'use_featured_image' => 'Gunakan sebagai Foto Galeri',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'excerpt', 'thumbnail', 'page-attributes'),
        'has_archive' => false,
        'rewrite' => false,
    ));
}
add_action('init', 'silek_register_content_types', 5);
function silek_register_event_meta_fields() {
    $fields = array(
        '_silek_event_date' => 'sanitize_text_field',
        '_silek_event_time' => 'sanitize_text_field',
        '_silek_event_location' => 'sanitize_text_field',
        '_silek_event_registration_url' => 'esc_url_raw',
    );

    foreach ($fields as $meta_key => $sanitize_callback) {
        register_post_meta('silek_event', $meta_key, array(
            'type' => 'string',
            'single' => true,
            'show_in_rest' => true,
            'sanitize_callback' => $sanitize_callback,
            'auth_callback' => function () {
                return current_user_can('edit_posts');
            },
        ));
    }
}
add_action('init', 'silek_register_event_meta_fields', 6);
function silek_store_event_details($post_id, $values) {
    $post_id = absint($post_id);
    if (!$post_id || get_post_type($post_id) !== 'silek_event') {
        return new WP_Error('invalid_event', 'Event tidak ditemukan.');
    }

    $date = isset($values['date']) ? sanitize_text_field((string) $values['date']) : '';
    $time = isset($values['time']) ? sanitize_text_field((string) $values['time']) : '';
    $location = isset($values['location']) ? sanitize_text_field((string) $values['location']) : '';
    $registration_url = isset($values['registration_url']) ? esc_url_raw((string) $values['registration_url']) : '';

    if ($date !== '' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        return new WP_Error('invalid_event_date', 'Format tanggal event tidak valid.');
    }
    if ($time !== '' && !preg_match('/^\d{2}:\d{2}$/', $time)) {
        return new WP_Error('invalid_event_time', 'Format waktu event tidak valid.');
    }

    $fields = array(
        '_silek_event_date' => $date,
        '_silek_event_time' => $time,
        '_silek_event_location' => $location,
        '_silek_event_registration_url' => $registration_url,
    );

    foreach ($fields as $meta_key => $value) {
        if ($value !== '') {
            update_post_meta($post_id, $meta_key, $value);
        } else {
            delete_post_meta($post_id, $meta_key);
        }
    }

    clean_post_cache($post_id);

    $stored = array(
        'date' => (string) get_post_meta($post_id, '_silek_event_date', true),
        'time' => (string) get_post_meta($post_id, '_silek_event_time', true),
        'location' => (string) get_post_meta($post_id, '_silek_event_location', true),
        'registration_url' => (string) get_post_meta($post_id, '_silek_event_registration_url', true),
    );

    if ($stored['date'] !== $date || $stored['time'] !== $time || $stored['location'] !== $location || $stored['registration_url'] !== $registration_url) {
        return new WP_Error('event_details_not_saved', 'Database tidak menerima perubahan detail event.');
    }

    return $stored;
}
function silek_disable_event_block_editor($use_block_editor, $post_type) {
    if ($post_type === 'silek_event') {
        return false;
    }

    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'silek_disable_event_block_editor', 10, 2);
function silek_set_wib_timezone_once() {
    if (get_option('silek_timezone_wib_v1')) {
        return;
    }

    update_option('timezone_string', 'Asia/Jakarta');
    update_option('gmt_offset', 7);
    update_option('silek_timezone_wib_v1', 1, false);
}
add_action('init', 'silek_set_wib_timezone_once', 1);

function silek_admin_assets($hook_suffix) {
    $screen = get_current_screen();
    if (!$screen) {
        return;
    }

    $allowed_screens = array('dashboard', 'silek_news', 'silek_event', 'silek_gallery', 'edit-silek_news', 'edit-silek_event', 'edit-silek_gallery');
    if (in_array($screen->id, $allowed_screens, true)) {
        wp_enqueue_style(
            'silek-admin-style',
            get_template_directory_uri() . '/assets/css/admin.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('admin_enqueue_scripts', 'silek_admin_assets');

function silek_content_meta_boxes() {
    add_meta_box(
        'silek-news-source',
        'Sumber Berita',
        'silek_render_news_source_meta_box',
        'silek_news',
        'normal',
        'high'
    );

    add_meta_box(
        'silek-content-guide',
        'Panduan Pengisian',
        'silek_render_content_guide_meta_box',
        array('silek_news', 'silek_event', 'silek_gallery'),
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'silek_content_meta_boxes');

function silek_render_news_source_meta_box($post) {
    wp_nonce_field('silek_save_news_source', 'silek_news_source_nonce');
    $source_url = get_post_meta($post->ID, '_silek_source_url', true);
    $source_name = get_post_meta($post->ID, '_silek_source_name', true);
    ?>
    <div class="silek-admin-fields">
        <p>
            <label for="silek_source_name"><strong>Nama sumber</strong></label>
            <input type="text" id="silek_source_name" name="silek_source_name" value="<?php echo esc_attr($source_name); ?>" placeholder="Contoh: Universitas Andalas">
        </p>
        <p>
            <label for="silek_source_url"><strong>Tautan sumber</strong></label>
            <input type="url" id="silek_source_url" name="silek_source_url" value="<?php echo esc_attr($source_url); ?>" placeholder="https://">
            <span class="description">Opsional. Tautan akan ditampilkan di bawah isi berita.</span>
        </p>
    </div>
    <?php
}

function silek_render_content_guide_meta_box($post) {
    if ($post->post_type === 'silek_gallery') {
        ?>
        <ol class="silek-admin-guide">
            <li>Isi judul foto.</li>
            <li>Isi keterangan singkat pada bagian Kutipan.</li>
            <li>Pilih foto melalui panel Foto Galeri.</li>
            <li>Isi Urutan untuk mengatur posisi foto.</li>
            <li>Terbitkan agar tampil di landing page.</li>
        </ol>
        <?php
        return;
    }

    if ($post->post_type === 'silek_event') {
        ?>
        <ol class="silek-admin-guide">
            <li>Isi judul dan deskripsi event.</li>
            <li>Lengkapi tanggal, waktu, dan lokasi.</li>
            <li>Pilih kategori event.</li>
            <li>Pasang gambar sampul bila tersedia.</li>
            <li>Terbitkan agar tampil di landing page.</li>
        </ol>
        <?php
        return;
    }
    ?>
    <ol class="silek-admin-guide">
        <li>Isi judul dan isi berita.</li>
        <li>Tambahkan ringkasan singkat pada bagian Kutipan.</li>
        <li>Pilih kategori berita.</li>
        <li>Pasang gambar sampul.</li>
        <li>Isi sumber jika berita berasal dari situs lain.</li>
    </ol>
    <?php
}

function silek_save_news_source($post_id) {
    if (!isset($_POST['silek_news_source_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['silek_news_source_nonce'])), 'silek_save_news_source')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $source_name = isset($_POST['silek_source_name']) ? sanitize_text_field(wp_unslash($_POST['silek_source_name'])) : '';
    $source_url = isset($_POST['silek_source_url']) ? esc_url_raw(wp_unslash($_POST['silek_source_url'])) : '';

    if ($source_name !== '') {
        update_post_meta($post_id, '_silek_source_name', $source_name);
    } else {
        delete_post_meta($post_id, '_silek_source_name');
    }

    if ($source_url !== '') {
        update_post_meta($post_id, '_silek_source_url', $source_url);
    } else {
        delete_post_meta($post_id, '_silek_source_url');
    }
}
add_action('save_post_silek_news', 'silek_save_news_source');

function silek_title_placeholder($title, $post) {
    if ($post->post_type === 'silek_news') {
        return 'Masukkan judul berita';
    }
    if ($post->post_type === 'silek_event') {
        return 'Masukkan nama event';
    }
    if ($post->post_type === 'silek_gallery') {
        return 'Masukkan judul foto';
    }
    return $title;
}
add_filter('enter_title_here', 'silek_title_placeholder', 10, 2);
function silek_event_details_meta_box() {
    add_meta_box(
        'silek-event-details',
        'Detail Event (WIB)',
        'silek_render_event_details_meta_box',
        'silek_event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'silek_event_details_meta_box');
function silek_hide_default_custom_fields_box() {
    remove_meta_box('postcustom', 'silek_event', 'normal');
}
add_action('add_meta_boxes_silek_event', 'silek_hide_default_custom_fields_box', 20);

function silek_render_event_details_meta_box($post) {
    wp_nonce_field('silek_save_event_details', 'silek_event_details_nonce');
    $date = get_post_meta($post->ID, '_silek_event_date', true);
    $time = get_post_meta($post->ID, '_silek_event_time', true);
    $location = get_post_meta($post->ID, '_silek_event_location', true);
    $registration_url = get_post_meta($post->ID, '_silek_event_registration_url', true);
    ?>
    <div class="silek-admin-fields silek-event-fields">
        <p><strong>Isi tanggal, waktu, dan lokasi, kemudian klik Terbitkan atau Perbarui.</strong> Data disimpan bersamaan dengan event tanpa proses tambahan.</p>
        <table class="form-table" role="presentation">
            <tr>
                <th scope="row"><label for="silek_event_date">Tanggal event <span aria-hidden="true">*</span></label></th>
                <td><input type="date" class="regular-text" id="silek_event_date" name="silek_event_date" value="<?php echo esc_attr($date); ?>" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="silek_event_time">Waktu (WIB) <span aria-hidden="true">*</span></label></th>
                <td><input type="time" class="regular-text" id="silek_event_time" name="silek_event_time" value="<?php echo esc_attr($time); ?>" required><p class="description">Menggunakan zona Indonesia Barat (UTC+7).</p></td>
            </tr>
            <tr>
                <th scope="row"><label for="silek_event_location">Lokasi <span aria-hidden="true">*</span></label></th>
                <td><input type="text" class="regular-text" id="silek_event_location" name="silek_event_location" value="<?php echo esc_attr($location); ?>" placeholder="Contoh: Galanggang Kuranji Sejati" required></td>
            </tr>
            <tr>
                <th scope="row"><label for="silek_event_registration_url">Tautan pendaftaran</label></th>
                <td><input type="url" class="regular-text" id="silek_event_registration_url" name="silek_event_registration_url" value="<?php echo esc_attr($registration_url); ?>" placeholder="https://"><p class="description">Opsional. Kosongkan jika event tidak memerlukan pendaftaran.</p></td>
            </tr>
        </table>
    </div>
    <?php
}

function silek_save_event_details($post_id) {
    if (get_post_type($post_id) !== 'silek_event' || wp_is_post_revision($post_id)) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!isset($_POST['silek_event_details_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['silek_event_details_nonce'])), 'silek_save_event_details')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $values = array(
        'date' => isset($_POST['silek_event_date']) ? wp_unslash($_POST['silek_event_date']) : '',
        'time' => isset($_POST['silek_event_time']) ? wp_unslash($_POST['silek_event_time']) : '',
        'location' => isset($_POST['silek_event_location']) ? wp_unslash($_POST['silek_event_location']) : '',
        'registration_url' => isset($_POST['silek_event_registration_url']) ? wp_unslash($_POST['silek_event_registration_url']) : '',
    );

    if (trim((string) $values['date']) === '' || trim((string) $values['time']) === '' || trim((string) $values['location']) === '') {
        $result = new WP_Error('missing_event_details', 'Tanggal, waktu, dan lokasi wajib diisi.');
    } else {
        $result = silek_store_event_details($post_id, $values);
    }

    $user_id = get_current_user_id();
    if ($user_id) {
        set_transient('silek_event_details_notice_' . $user_id, array(
            'success' => !is_wp_error($result),
            'message' => is_wp_error($result) ? $result->get_error_message() : 'Detail event berhasil disimpan dan sudah terhubung ke halaman pengunjung.',
        ), 60);
    }
}
add_action('save_post_silek_event', 'silek_save_event_details', 20);

function silek_event_save_result_notice() {
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'silek_event' || $screen->base !== 'post') {
        return;
    }

    $key = 'silek_event_details_notice_' . get_current_user_id();
    $notice = get_transient($key);
    if (!$notice || !is_array($notice)) {
        return;
    }

    delete_transient($key);
    $class = !empty($notice['success']) ? 'notice notice-success is-dismissible' : 'notice notice-error';
    echo '<div class="' . esc_attr($class) . '"><p><strong>' . esc_html($notice['message']) . '</strong></p></div>';
}
add_action('admin_notices', 'silek_event_save_result_notice');
function silek_event_missing_details_notice() {
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'silek_event' || $screen->base !== 'post') {
        return;
    }

    $post_id = isset($_GET['post']) ? absint($_GET['post']) : 0;
    if (!$post_id || get_post_status($post_id) === 'auto-draft') {
        return;
    }

    $missing = array();
    if (!get_post_meta($post_id, '_silek_event_date', true)) {
        $missing[] = 'tanggal';
    }
    if (!get_post_meta($post_id, '_silek_event_time', true)) {
        $missing[] = 'waktu';
    }
    if (!get_post_meta($post_id, '_silek_event_location', true)) {
        $missing[] = 'lokasi';
    }

    if ($missing) {
        echo '<div class="notice notice-warning"><p><strong>Detail event belum lengkap.</strong> Lengkapi ' . esc_html(implode(', ', $missing)) . ' pada panel <strong>Detail Event (WIB)</strong>, lalu klik Perbarui.</p></div>';
    }
}
add_action('admin_notices', 'silek_event_missing_details_notice');

function silek_event_admin_columns($columns) {
    $columns['event_date'] = 'Tanggal Event';
    $columns['event_location'] = 'Lokasi';
    $columns['event_completeness'] = 'Status Data';
    return $columns;
}
add_filter('manage_silek_event_posts_columns', 'silek_event_admin_columns');

function silek_event_admin_column_content($column, $post_id) {
    if ($column === 'event_date') {
        $date = get_post_meta($post_id, '_silek_event_date', true);
        echo $date ? esc_html(silek_format_event_date($date, 'd M Y')) : '&mdash;';
    }
    if ($column === 'event_location') {
        $location = get_post_meta($post_id, '_silek_event_location', true);
        echo $location ? esc_html($location) : '&mdash;';
    }
    if ($column === 'event_completeness') {
        $date = get_post_meta($post_id, '_silek_event_date', true);
        $time = get_post_meta($post_id, '_silek_event_time', true);
        $location = get_post_meta($post_id, '_silek_event_location', true);
        $is_complete = $date && $time && $location;
        echo '<span class="silek-status-badge ' . ($is_complete ? 'is-complete' : 'is-incomplete') . '">' . ($is_complete ? 'Lengkap' : 'Belum lengkap') . '</span>';
    }
}
add_action('manage_silek_event_posts_custom_column', 'silek_event_admin_column_content', 10, 2);

function silek_news_admin_columns($columns) {
    $columns['news_category'] = 'Kategori';
    $columns['news_source'] = 'Sumber';
    return $columns;
}
add_filter('manage_silek_news_posts_columns', 'silek_news_admin_columns');

function silek_news_admin_column_content($column, $post_id) {
    if ($column === 'news_category') {
        $terms = get_the_terms($post_id, 'silek_news_category');
        echo ($terms && !is_wp_error($terms)) ? esc_html(implode(', ', wp_list_pluck($terms, 'name'))) : '&mdash;';
    }
    if ($column === 'news_source') {
        $source_url = get_post_meta($post_id, '_silek_source_url', true);
        $source_name = get_post_meta($post_id, '_silek_source_name', true);
        if ($source_url) {
            echo '<a href="' . esc_url($source_url) . '" target="_blank" rel="noopener">' . esc_html($source_name ?: 'Buka sumber') . '</a>';
        } else {
            echo '&mdash;';
        }
    }
}
add_action('manage_silek_news_posts_custom_column', 'silek_news_admin_column_content', 10, 2);

function silek_event_category_column($columns) {
    $columns['event_category'] = 'Kategori';
    return $columns;
}
add_filter('manage_silek_event_posts_columns', 'silek_event_category_column');

function silek_event_category_column_content($column, $post_id) {
    if ($column === 'event_category') {
        $terms = get_the_terms($post_id, 'silek_event_category');
        echo ($terms && !is_wp_error($terms)) ? esc_html(implode(', ', wp_list_pluck($terms, 'name'))) : '&mdash;';
    }
}
add_action('manage_silek_event_posts_custom_column', 'silek_event_category_column_content', 10, 2);
function silek_gallery_admin_columns($columns) {
    return array(
        'cb' => isset($columns['cb']) ? $columns['cb'] : '<input type="checkbox">',
        'gallery_preview' => 'Foto',
        'title' => 'Judul',
        'gallery_caption' => 'Keterangan',
        'menu_order' => 'Urutan',
        'date' => isset($columns['date']) ? $columns['date'] : 'Tanggal',
    );
}
add_filter('manage_silek_gallery_posts_columns', 'silek_gallery_admin_columns');

function silek_gallery_admin_column_content($column, $post_id) {
    if ($column === 'gallery_preview') {
        $image_url = silek_get_gallery_image_url($post_id, 'thumbnail');
        echo $image_url ? '<img class="silek-gallery-preview" src="' . esc_url($image_url) . '" alt="">' : '&mdash;';
    }
    if ($column === 'gallery_caption') {
        $caption = get_the_excerpt($post_id);
        echo $caption ? esc_html($caption) : '&mdash;';
    }
    if ($column === 'menu_order') {
        echo esc_html((string) get_post_field('menu_order', $post_id));
    }
}
add_action('manage_silek_gallery_posts_custom_column', 'silek_gallery_admin_column_content', 10, 2);

function silek_gallery_order_column_sortable($columns) {
    $columns['menu_order'] = 'menu_order';
    return $columns;
}
add_filter('manage_edit-silek_gallery_sortable_columns', 'silek_gallery_order_column_sortable');

function silek_dashboard_widget_setup() {
    wp_add_dashboard_widget(
        'silek-content-dashboard',
        'Kelola Konten Kuranji Sejati',
        'silek_render_dashboard_widget'
    );
}
add_action('wp_dashboard_setup', 'silek_dashboard_widget_setup');

function silek_render_dashboard_widget() {
    ?>
    <div class="silek-dashboard-widget">
        <p>Gunakan menu berikut untuk memperbarui konten yang tampil pada landing page.</p>
        <div class="silek-dashboard-actions">
            <a class="button button-primary" href="<?php echo esc_url(admin_url('post-new.php?post_type=silek_news')); ?>">Tambah Berita</a>
            <a class="button" href="<?php echo esc_url(admin_url('edit.php?post_type=silek_news')); ?>">Semua Berita</a>
            <a class="button button-primary" href="<?php echo esc_url(admin_url('post-new.php?post_type=silek_event')); ?>">Tambah Event</a>
            <a class="button" href="<?php echo esc_url(admin_url('edit.php?post_type=silek_event')); ?>">Semua Event</a>
            <a class="button button-primary" href="<?php echo esc_url(admin_url('post-new.php?post_type=silek_gallery')); ?>">Tambah Foto Galeri</a>
            <a class="button" href="<?php echo esc_url(admin_url('edit.php?post_type=silek_gallery')); ?>">Kelola Galeri</a>
        </div>
    </div>
    <?php
}

function silek_populate_source_names() {
    if (get_option('silek_source_names_v1')) {
        return;
    }

    $posts = get_posts(array(
        'post_type' => 'silek_news',
        'post_status' => 'any',
        'posts_per_page' => -1,
        'meta_key' => '_silek_seed_key',
        'fields' => 'ids',
    ));

    foreach ($posts as $post_id) {
        if (get_post_meta($post_id, '_silek_source_url', true)) {
            update_post_meta($post_id, '_silek_source_name', 'Sastra Minangkabau Universitas Andalas');
        }
    }

    update_option('silek_source_names_v1', 1, false);
}
add_action('init', 'silek_populate_source_names', 26);
function silek_format_event_date($date, $format = 'd M Y') {
    if (!$date) {
        return '';
    }
    try {
        $event_date = new DateTimeImmutable($date, wp_timezone());
        return wp_date($format, $event_date->getTimestamp(), wp_timezone());
    } catch (Exception $exception) {
        return $date;
    }
}

function silek_format_event_time($time) {
    if (!$time) {
        return '';
    }

    if (preg_match('/^(\d{2}):(\d{2})/', $time, $matches)) {
        return $matches[1] . '.' . $matches[2] . ' WIB';
    }

    return $time . ' WIB';
}
function silek_seed_initial_content() {
    if (get_option('silek_initial_content_v1')) {
        return;
    }

    if (!term_exists('Pendampingan Randai', 'silek_news_category')) {
        wp_insert_term('Pendampingan Randai', 'silek_news_category', array('slug' => 'pendampingan-randai'));
    }
    if (!term_exists('Kegiatan Rutin', 'silek_event_category')) {
        wp_insert_term('Kegiatan Rutin', 'silek_event_category', array('slug' => 'kegiatan-rutin'));
    }
    if (!term_exists('Kegiatan Unggulan', 'silek_event_category')) {
        wp_insert_term('Kegiatan Unggulan', 'silek_event_category', array('slug' => 'kegiatan-unggulan'));
    }

    $articles = array(
        array(
            'seed_key' => 'menjaga-randai-komunitas',
            'title' => 'Menjaga Randai dari dalam Komunitas',
            'date' => '2026-08-02 09:00:00',
            'excerpt' => 'Pertemuan awal untuk sosialisasi program, pemetaan kebutuhan komunitas, wawancara, dan dokumentasi pengembangan situs web.',
            'content' => '<p>Program Pengabdian kepada Masyarakat bersama Perguruan Pencak Silat Kuranji Sejati dimulai melalui pertemuan awal di Kuranji, Kota Padang. Kegiatan ini menjadi ruang untuk menyamakan tujuan pendampingan dan mendengar kebutuhan komunitas secara langsung.</p><p>Tim pendamping dan anggota perguruan melakukan sosialisasi program, pemetaan kebutuhan, wawancara, serta dokumentasi awal. Informasi tersebut menjadi dasar untuk menyusun kegiatan yang sesuai dengan kondisi, pengalaman, dan potensi yang dimiliki perguruan.</p><p>Pendampingan diarahkan untuk memperkuat kapasitas komunitas dalam menjaga randai dari dalam: mulai dari proses penciptaan karya, peningkatan kualitas pertunjukan, sampai pemanfaatan media digital untuk dokumentasi dan publikasi.</p><p>Melalui proses yang dilakukan bersama, pengetahuan lokal tetap menjadi pusat kegiatan dan masyarakat perguruan terlibat sebagai pelaku utama dalam pelestarian randai.</p>',
            'source' => 'https://sastraminang.fib.unand.ac.id/index.php/informasi/berita/menjaga-randai-dari-dalam-komunitas-unand-memulai-pendampingan-perguruan-pencak-silat-kuranji-sejati',
        ),
        array(
            'seed_key' => 'belajar-dari-maestro',
            'title' => 'Belajar dari Maestro',
            'date' => '2026-08-09 09:00:00',
            'excerpt' => 'Musra Dahrizal Katik Jo Mangkuto membagikan pengetahuan tentang kaba, silek, bahasa, galombang, dan unsur budaya dalam randai.',
            'content' => '<p>Rangkaian pendampingan randai berlanjut dengan belajar langsung dari maestro, Musra Dahrizal Katik Jo Mangkuto. Pertemuan ini mengajak peserta melihat randai sebagai kesatuan antara cerita, gerak, bahasa, musik, dan pengetahuan budaya.</p><p>Peserta menelusuri hubungan kaba dengan perjalanan cerita, silek dengan gerak galombang, serta bahasa dengan cara tokoh menyampaikan nilai dan pengalaman. Pengetahuan tersebut tidak berdiri sendiri, melainkan tumbuh dari kehidupan masyarakat Minangkabau.</p><p>Dialog bersama maestro juga menekankan pentingnya disiplin, ketelitian, dan pemahaman konteks. Sebuah pertunjukan randai tidak hanya perlu menarik untuk ditonton, tetapi juga harus menjaga makna yang diwariskan di dalamnya.</p><p>Materi dari pertemuan ini menjadi bekal bagi komunitas untuk mengembangkan karya baru yang tetap berpijak pada pengetahuan dan nilai lokal.</p>',
            'source' => 'https://sastraminang.fib.unand.ac.id/index.php/informasi/berita/belajar-dari-maestro-menelusuri-kaba-silek-dan-pengetahuan-di-balik-randai',
        ),
        array(
            'seed_key' => 'kaba-berpindah-ke-naskah',
            'title' => 'Ketika Kaba Berpindah ke Naskah',
            'date' => '2026-08-16 09:00:00',
            'excerpt' => 'Peserta mulai belajar menyusun ide, tokoh, konflik, dialog, dan kerangka cerita sebagai dasar penciptaan naskah randai.',
            'content' => '<p>Setelah menggali pengetahuan dari maestro, peserta memasuki tahap penciptaan naskah randai. Kaba yang sebelumnya hidup melalui tuturan mulai diterjemahkan menjadi kerangka cerita yang dapat dikembangkan untuk kebutuhan pertunjukan.</p><p>Proses dimulai dengan menentukan ide, tokoh, tujuan, dan konflik. Peserta kemudian menyusun urutan peristiwa serta dialog agar cerita memiliki arah yang jelas tanpa kehilangan hubungan dengan nilai budaya yang menjadi dasarnya.</p><p>Dalam randai, naskah perlu memberi ruang bagi gerak galombang, dendang, musik, dan silek. Karena itu, penyusunan cerita dilakukan dengan mempertimbangkan bagaimana setiap unsur dapat bertemu di dalam pertunjukan.</p><p>Latihan ini menjadi langkah penting agar komunitas mampu menciptakan karya secara mandiri, mendokumentasikan proses kreatif, dan meneruskan pengetahuan kepada generasi berikutnya.</p>',
            'source' => 'https://sastraminang.fib.unand.ac.id/index.php/informasi/berita/ketika-kaba-berpindah-ke-naskah-belajar-menciptakan-randai-dari-dalam-komunitas',
        ),
    );

    foreach ($articles as $article) {
        $existing = get_posts(array(
            'post_type' => 'silek_news',
            'post_status' => 'any',
            'posts_per_page' => 1,
            'meta_key' => '_silek_seed_key',
            'meta_value' => $article['seed_key'],
            'fields' => 'ids',
        ));
        if ($existing) {
            continue;
        }

        $post_id = wp_insert_post(array(
            'post_type' => 'silek_news',
            'post_status' => 'publish',
            'post_title' => $article['title'],
            'post_excerpt' => $article['excerpt'],
            'post_content' => $article['content'],
            'post_date' => $article['date'],
            'post_date_gmt' => get_gmt_from_date($article['date']),
        ));

        if (!is_wp_error($post_id)) {
            update_post_meta($post_id, '_silek_seed_key', $article['seed_key']);
            update_post_meta($post_id, '_silek_source_url', esc_url_raw($article['source']));
            wp_set_object_terms($post_id, array('pendampingan-randai'), 'silek_news_category');
        }
    }

    update_option('silek_initial_content_v1', 1, false);
}
add_action('init', 'silek_seed_initial_content', 20);

function silek_get_news_cover_url($post_id, $size = 'large') {
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, $size);
    }

    $covers = array(
        'menjaga-randai-komunitas' => 'menjaga-randai.jpeg',
        'belajar-dari-maestro' => 'belajar-dari-maestro.png',
        'kaba-berpindah-ke-naskah' => 'kaba-ke-naskah.png',
    );
    $seed_key = get_post_meta($post_id, '_silek_seed_key', true);

    if (isset($covers[$seed_key])) {
        return get_template_directory_uri() . '/assets/images/news/' . $covers[$seed_key];
    }

    return get_template_directory_uri() . '/assets/images/gallery/foto5.jpg';
}

function silek_seed_dummy_event() {
    if (get_option('silek_dummy_event_v1')) {
        return;
    }

    $existing = get_posts(array(
        'post_type' => 'silek_event',
        'post_status' => 'any',
        'posts_per_page' => 1,
        'meta_key' => '_silek_dummy_event',
        'meta_value' => '1',
        'fields' => 'ids',
    ));

    if (!$existing) {
        $post_id = wp_insert_post(array(
            'post_type' => 'silek_event',
            'post_status' => 'publish',
            'post_title' => 'Latihan Terbuka dan Pengenalan Randai',
            'post_excerpt' => 'Sesi latihan terbuka untuk mengenal dasar silek, randai, dan lingkungan Perguruan Pencak Silat Kuranji Sejati.',
            'post_content' => '<p>Perguruan Pencak Silat Kuranji Sejati mengadakan sesi latihan terbuka bagi masyarakat yang ingin mengenal silek dan randai lebih dekat.</p><p>Kegiatan ini mencakup pengenalan gerak dasar, nilai yang dijaga dalam latihan, serta peran randai sebagai ruang bertemunya cerita, musik, gerak, dan kebersamaan.</p><p>Event ini merupakan contoh tampilan dan dapat diubah, dijadwalkan ulang, atau dihapus melalui menu Event pada dashboard WordPress.</p>',
        ));

        if (!is_wp_error($post_id)) {
            update_post_meta($post_id, '_silek_dummy_event', '1');
            update_post_meta($post_id, '_silek_event_date', '2026-10-18');
            update_post_meta($post_id, '_silek_event_time', '08:00');
            update_post_meta($post_id, '_silek_event_location', 'Galanggang Perguruan Kuranji Sejati');
            wp_set_object_terms($post_id, array('kegiatan-unggulan'), 'silek_event_category');
        }
    }

    update_option('silek_dummy_event_v1', 1, false);
}
add_action('init', 'silek_seed_dummy_event', 25);
function silek_get_gallery_image_url($post_id, $size = 'large') {
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, $size);
    }

    $legacy_image = basename((string) get_post_meta($post_id, '_silek_gallery_image', true));
    if ($legacy_image && preg_match('/^[a-zA-Z0-9._-]+$/', $legacy_image)) {
        $image_path = get_template_directory() . '/assets/images/gallery/' . $legacy_image;
        if (file_exists($image_path)) {
            return get_template_directory_uri() . '/assets/images/gallery/' . $legacy_image;
        }
    }

    return '';
}

function silek_insert_gallery_items($gallery_items) {
    foreach ($gallery_items as $item) {
        $existing = get_posts(array(
            'post_type' => 'silek_gallery',
            'post_status' => 'any',
            'posts_per_page' => 1,
            'meta_key' => '_silek_gallery_seed_key',
            'meta_value' => $item['key'],
            'fields' => 'ids',
        ));
        if ($existing) {
            continue;
        }

        $post_id = wp_insert_post(array(
            'post_type' => 'silek_gallery',
            'post_status' => 'publish',
            'post_title' => $item['title'],
            'post_excerpt' => $item['caption'],
            'menu_order' => $item['order'],
        ));

        if (!is_wp_error($post_id)) {
            update_post_meta($post_id, '_silek_gallery_seed_key', $item['key']);
            update_post_meta($post_id, '_silek_gallery_image', $item['image']);
        }
    }
}

function silek_seed_gallery_content() {
    if (get_option('silek_gallery_seed_v1')) {
        return;
    }

    silek_insert_gallery_items(array(
        array('key' => 'latihan-rutin', 'title' => 'Latihan Rutin', 'caption' => 'Disiplin membentuk karakter', 'image' => 'foto5.jpg', 'order' => 1),
        array('key' => 'pembukaan-kegiatan', 'title' => 'Pembukaan Kegiatan', 'caption' => 'Kuranji, Kota Padang', 'image' => 'foto2.jpg', 'order' => 2),
        array('key' => 'ruang-latihan', 'title' => 'Ruang Latihan', 'caption' => 'Galanggang Kuranji', 'image' => 'foto1.jpg', 'order' => 3),
        array('key' => 'suasana-padepokan', 'title' => 'Suasana Padepokan', 'caption' => 'Pengabdian masyarakat', 'image' => 'foto3.jpg', 'order' => 4),
        array('key' => 'kebersamaan', 'title' => 'Kebersamaan', 'caption' => 'Dokumentasi tempat', 'image' => 'foto4.jpg', 'order' => 5),
    ));

    update_option('silek_gallery_seed_v1', 1, false);
}
add_action('init', 'silek_seed_gallery_content', 27);

function silek_seed_profile_gallery_content() {
    if (get_option('silek_gallery_seed_v2')) {
        return;
    }

    silek_insert_gallery_items(array(
        array('key' => 'randai-latihan', 'title' => 'Randai', 'caption' => 'Latihan randai anak sasian', 'image' => 'randai-latihan.jpg', 'order' => 6),
        array('key' => 'silat-tradisi', 'title' => 'Silat Tradisi', 'caption' => 'Latihan silek tradisional Kuranji Sejati', 'image' => 'silat-tradisi.jpg', 'order' => 7),
        array('key' => 'randai-galanggang', 'title' => 'Randai', 'caption' => 'Latihan randai di galanggang', 'image' => 'randai-galanggang.jpg', 'order' => 8),
    ));

    update_option('silek_gallery_seed_v2', 1, false);
}
add_action('init', 'silek_seed_profile_gallery_content', 28);
function silek_flush_rewrite_rules_once() {
    if (!get_option('silek_rewrite_rules_v2')) {
        flush_rewrite_rules(false);
        update_option('silek_rewrite_rules_v2', 1, false);
    }
}
add_action('init', 'silek_flush_rewrite_rules_once', 30);