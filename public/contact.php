<?php
// 1. Tentukan judul halaman spesifik untuk Contact
$title = "Contact Us - Belajar Programming Dasar";

// Inisialisasi variabel pesan notifikasi / error
$pesan_status = "";

// 2. Proses form saat disubmit (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data teks biasa
    $nama   = htmlspecialchars(trim($_POST['nama']));
    $email  = htmlspecialchars(trim($_POST['email']));
    $subjek = htmlspecialchars(trim($_POST['subjek']));
    $pesan  = htmlspecialchars(trim($_POST['pesan']));

    // Proses Validasi Upload Gambar
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] !== UPLOAD_ERR_NO_FILE) {
        $gambar_nama   = $_FILES['gambar']['name'];
        $gambar_tmp    = $_FILES['gambar']['tmp_name'];
        $gambar_size   = $_FILES['gambar']['size'];
        $gambar_error  = $_FILES['gambar']['error'];

        // Cek apakah ada error bawaan dari PHP Upload
        if ($gambar_error !== UPLOAD_ERR_OK) {
            // Diperbaiki menggunakan "=>" agar kompatibel dengan PHP 7.x
            $pesan_error_php = array(
                UPLOAD_ERR_INI_SIZE   => "File melebihi batas ukuran (upload_max_filesize di php.ini).",
                UPLOAD_ERR_FORM_SIZE  => "File melebihi batas ukuran yang ditentukan dalam form HTML.",
                UPLOAD_ERR_PARTIAL    => "File hanya ter-upload sebagian.",
                UPLOAD_ERR_NO_TMP_DIR => "Folder temporary server hilang.",
                UPLOAD_ERR_CANT_WRITE => "Gagal menulis file ke disk server.",
                UPLOAD_ERR_EXTENSION  => "Upload file dihentikan oleh ekstensi PHP."
            );
            $detail_error = isset($pesan_error_php[$gambar_error]) ? $pesan_error_php[$gambar_error] : "Error sistem kode: " . $gambar_error;
            $pesan_status = '<div class="alert alert-danger small mb-4"><strong>Gagal Upload:</strong> ' . $detail_error . '</div>';
        } else {
            // Tentukan ekstensi yang diperbolehkan
            $ekstensi_valid = ['jpg', 'jpeg', 'png', 'webp'];
            $ekstensi_file  = strtolower(pathinfo($gambar_nama, PATHINFO_EXTENSION));

            // Validasi ekstensi
            if (!in_array($ekstensi_file, $ekstensi_valid)) {
                $pesan_status = '<div class="alert alert-danger small mb-4"><strong>Gagal:</strong> Format file <code>.' . $ekstensi_file . '</code> tidak didukung. Gunakan JPG, JPEG, PNG, atau WEBP!</div>';
            } 
            // Validasi ukuran (maksimal 2MB = 2 * 1024 * 1024 byte)
            elseif ($gambar_size > 2 * 1024 * 1024) {
                $ukuran_mb = number_format($gambar_size / (1024 * 1024), 2);
                $pesan_status = '<div class="alert alert-danger small mb-4"><strong>Gagal:</strong> Ukuran file terlalu besar (' . $ukuran_mb . ' MB). Maksimal ukuran yang diizinkan adalah 2 MB.</div>';
            } else {
                // Buat nama file yang unik agar tidak bentrok
                $nama_file_baru = uniqid('bukti_', true) . '.' . $ekstensi_file;
                
                // Tentukan direktori penyimpanan (public/images)
                $direktori_tujuan = __DIR__ . '/images/';

                // Jika folder belum ada, buat foldernya secara otomatis
                if (!is_dir($direktori_tujuan)) {
                    if (!mkdir($direktori_tujuan, 0777, true)) {
                        $pesan_status = '<div class="alert alert-danger small mb-4"><strong>Gagal Sistem:</strong> Tidak dapat membuat folder <code>public/images/</code>. Periksa permission server.</div>';
                    }
                }

                // Jika folder aman, lanjutkan pindahkan file
                if (empty($pesan_status)) {
                    if (move_uploaded_file($gambar_tmp, $direktori_tujuan . $nama_file_baru)) {
                        $pesan_status = '<div class="alert alert-success small mb-4"><strong>Berhasil:</strong> Pesan dan gambar lampiran berhasil dikirim!</div>';
                        // Lanjutkan simpan data ke database jika diperlukan di sini...
                    } else {
                        $pesan_status = '<div class="alert alert-danger small mb-4"><strong>Gagal Sistem:</strong> <code>move_uploaded_file()</code> gagal memindahkan file. Pastikan folder <code>public/images/</code> memiliki hak akses tulis (writable).</div>';
                    }
                }
            }
        }
    } else {
        $pesan_status = '<div class="alert alert-warning small mb-4"><strong>Perhatian:</strong> Lampiran gambar tidak disertakan, tetapi pesan teks Anda tetap diproses.</div>';
    }
}

// Mulai menangkap konten halaman
ob_start();
?>

<!-- CONTACT HEADER HERO -->
<section class="py-5 my-md-4 bg-body-tertiary border-bottom border-secondary-subtle">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="badge text-bg-success mb-3 px-3 py-2 rounded-pill fw-semibold">Hubungi Tim Kami</span>
                <h1 class="display-4 fw-bold text-white mb-3">Ada Pertanyaan atau Kendala?</h1>
                <p class="lead text-body-secondary mb-0">Apakah kamu bingung dengan salah satu materi tutorial, menemukan *bug* pada cuplikan kode, atau ingin mengajak kerja sama? Kirimkan pesanmu di bawah.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT CONTENT SECTION -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5 justify-content-center">
            
            <!-- INFORMASI TAMBAHAN (KIRI) -->
            <div class="col-lg-5 order-lg-2">
                <div class="card bg-body-tertiary border-secondary-subtle p-4 h-100 rounded-3">
                    <h3 class="text-white fw-bold mb-4 h4">Saluran Komunikasi</h3>
                    <p class="text-body-secondary mb-4">Selain melalui formulir di samping, kamu juga bisa terhubung dengan kami melalui saluran alternatif berikut untuk respons yang lebih interaktif:</p>
                    
                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-envelope-at"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Email Dukungan</h5>
                            <p class="text-body-secondary small mb-0">support@devtutorials.id</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-discord"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Komunitas Discord</h5>
                            <p class="text-body-secondary small mb-0">Join Group #DevTutorials-ID untuk diskusi *real-time* sesama pemula.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <div class="fs-3 text-success"><i class="bi bi-geo-alt"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Lokasi Operasional</h5>
                            <p class="text-body-secondary small mb-0">Surabaya, Jawa Timur, Indonesia</p>
                        </div>
                    </div>

                    <hr class="border-secondary my-4">

                    <div class="p-3 bg-dark rounded border border-secondary-subtle">
                        <h6 class="text-white fw-bold mb-1 small"><i class="bi bi-clock text-warning me-2"></i>Waktu Respons</h6>
                        <p class="text-body-secondary small mb-0">Kami membaca setiap pesan masuk dan biasanya membalas dalam waktu kurang dari 24 jam pada hari kerja.</p>
                    </div>
                </div>
            </div>

            <!-- FORMULIR KONTAK (KANAN) -->
            <div class="col-lg-7 order-lg-1">
                <div class="card bg-body-tertiary border-secondary-subtle p-4 p-md-5 shadow-sm rounded-3">
                    <h3 class="text-white fw-bold mb-3 h4">Kirim Pesan Langsung</h3>
                    <p class="text-body-secondary mb-4 small">Seluruh kolom di bawah ini wajib diisi dengan informasi yang valid.</p>
                    
                    <!-- Tampilkan Pesan Status / Error Asli -->
                    <?= $pesan_status; ?>

                    <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label text-white small fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control bg-transparent border-secondary py-2" id="nama" name="nama" placeholder="Contoh: Andi Wijaya" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-white small fw-semibold">Alamat Email</label>
                                    <input type="email" class="form-control bg-transparent border-secondary py-2" id="email" name="email" placeholder="andi@domain.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subjek" class="form-label text-white small fw-semibold">Subjek Pesan</label>
                            <select class="form-select bg-transparent border-secondary py-2" id="subjek" name="subjek" required>
                                <option value="" disabled selected class="bg-dark">Pilih kategori kendala...</option>
                                <option value="materi" class="bg-dark">Pertanyaan Materi Tutorial</option>
                                <option value="bug" class="bg-dark">Laporan Error / Bug Kode</option>
                                <option value="kerjasama" class="bg-dark">Penawaran Kerja Sama</option>
                                <option value="lainnya" class="bg-dark">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label text-white small fw-semibold">Isi Pesan Anda</label>
                            <textarea class="form-control bg-transparent border-secondary" id="pesan" name="pesan" rows="5" placeholder="Tuliskan masukan atau pertanyaanmu secara detail..." required></textarea>
                        </div>

                        <!-- INPUT UPLOAD GAMBAR -->
                        <div class="mb-4">
                            <label for="gambar" class="form-label text-white small fw-semibold">Lampiran Gambar (Opsional / *Screenshot* Bug)</label>
                            <input type="file" class="form-control bg-transparent border-secondary py-2 text-white" id="gambar" name="gambar" accept=".jpg, .jpeg, .png, .webp">
                            <div class="form-text text-secondary small">Format: JPG, JPEG, PNG, WEBP. Maksimal ukuran 2MB.</div>
                        </div>

                        <!-- <button type="submit" class="btn btn-success px-4 py-2.5 rounded-3 mt-2 fw-semibold d-inline-flex align-items-center">
                            <i class="bi bi-send-fill me-2"></i> Kirim Pesan Sekarang
                        </button> -->
                    <!-- </form> -->
                </div>
            </div>

        </div>
    </div>
</section>

<?php
// 3. Ambil seluruh konten yang sudah ditangkap
$content = ob_get_clean();

// 4. Render ke dalam master layout
include_once __DIR__ . '/layouts/app.php';
?>