<?php

// 1. Tentukan judul halaman (Sama seperti @section('title', '...'))
$title = "Home - Belajar Programming Dasar";

// 2. Mulai menangkap konten halaman (Sama seperti @section('content'))
// require_once __DIR__ . '/../functions.php';

// 2. Langsung panggil write_log dengan pesan bebas buatanmu sendiri
// $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
// write_log("Visitor dengan IP $ip membuka halaman index", "web");
ob_start();
?>

<!-- HOME SECTION -->
<section id="home" class="py-5 my-md-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge text-bg-success mb-3 px-3 py-2 rounded-pill fw-semibold">Edisi Pemula Gratis banget dari rizdhan hernanda Rachmansyah</span>
                <h1 class="display-4 fw-bold text-white mb-3">Tulis Kode Pertamamu Hari Ini Rizdhan!</h1>
                <p class="lead text-body-secondary mb-4">Portal belajar pemrograman web yang menyajikan materi secara ringkas, fokus ke dasar, langsung bisa dipraktikkan tanpa teori berbelit-belit.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#tutorials" class="btn btn-success btn-lg px-4 rounded-3 fw-semibold">Eksplor Tutorial</a>
                    <a href="#about" class="btn btn-outline-secondary btn-lg px-4 rounded-3">Tentang Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-secondary-subtle bg-body-tertiary shadow">
                    <div class="card-header border-bottom border-secondary-subtle py-2 d-flex align-items-center gap-2">
                        <span class="bg-danger rounded-circle" style="width:12px; height:12px; display:inline-block;"></span>
                        <span class="bg-warning rounded-circle" style="width:12px; height:12px; display:inline-block;"></span>
                        <span class="bg-success rounded-circle" style="width:12px; height:12px; display:inline-block;"></span>
                        <span class="text-body-secondary ms-2 small font-monospace">main.js</span>
                    </div>
                    <div class="card-body bg-dark p-4 rounded-bottom">
                        <pre class="mb-0 text-success font-monospace"><code>// Menampilkan pesan selamat datang
const tutorial = {
  nama: "Belajar Coding Dasar",
  level: "Mudah",
  platform: "DevTutorials"
};

console.log("Selamat datang di " + tutorial.platform);</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="py-5 border-top border-bottom border-secondary-subtle bg-body-tertiary">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <h2 class="fw-bold text-white">HTML5</h2>
                <p class="text-body-secondary small mb-0">Kerangka Halaman</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="fw-bold text-white">CSS3</h2>
                <p class="text-body-secondary small mb-0">Desain & Layout</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="fw-bold text-white">JavaScript</h2>
                <p class="text-body-secondary small mb-0">Logika Interaktif</p>
            </div>
            <div class="col-md-3 col-6">
                <h2 class="fw-bold text-white">PHP 8</h2>
                <p class="text-body-secondary small mb-0">Sisi Server</p>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-5 my-md-5">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <span class="text-success fw-bold text-uppercase small">Misi Kami</span>
                <h1 class="text-white fw-bold mt-2 mb-3">Membantu Pemula Mengenal Dunia Kode</h1>
                <p class="lead text-body-secondary">DevTutorials dirancang sesederhana mungkin agar calon pengembang perangkat lunak tidak kebingungan dengan istilah teknis yang terlalu berat saat pertama kali belajar.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="card bg-body-tertiary border-secondary-subtle h-100 p-4 rounded-3">
                    <h4 class="text-white mb-3 fw-bold d-flex align-items-center">
                        <i class="bi bi-eye text-success me-2 fs-3"></i>Fokus Visual
                    </h4>
                    <p class="text-body-secondary mb-0">Mempelajari pemrograman tidak harus membosankan. Kami menyajikan panduan langkah-demi-langkah praktis yang mudah dipahami secara visual di semua ukuran layar.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card bg-body-tertiary border-secondary-subtle h-100 p-4 rounded-3">
                    <h4 class="text-white mb-3 fw-bold d-flex align-items-center">
                        <i class="bi bi-shield-check text-success me-2 fs-3"></i>Pendekatan Praktis
                    </h4>
                    <p class="text-body-secondary mb-0">Kami percaya cara terbaik untuk belajar adalah dengan mencoba. Setiap tutorial dilengkapi cuplikan kode dasar yang siap disalin dan dijalankan secara langsung.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TUTORIALS SECTION -->
<section id="tutorials" class="py-5 border-top border-bottom border-secondary-subtle bg-body-tertiary">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase small">Materi Pembelajaran</span>
            <h1 class="text-white fw-bold mt-2 mb-2">Tutorial Pemrograman Dasar</h1>
            <p class="text-body-secondary">Mulai perjalanan belajarmu dari daftar materi dasar di bawah ini secara runtut.</p>
        </div>
        <div class="row g-4">
            <!-- Tutorial 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-body border-secondary-subtle d-flex flex-column rounded-3">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-danger-subtle text-danger mb-3 align-self-start px-2.5 py-1.5 rounded">Dasar</span>
                        <h5 class="card-title text-white fw-bold mb-3">HTML Semantik</h5>
                        <p class="card-text text-body-secondary small flex-grow-1">Belajar menyusun struktur halaman web yang rapi, ramah SEO, dan mudah diakses menggunakan tag semantik.</p>
                        <div class="bg-dark p-2.5 rounded border border-secondary-subtle font-monospace text-success small mt-3">
                            <code>&lt;header&gt;&lt;/header&gt;</code>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tutorial 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-body border-secondary-subtle d-flex flex-column rounded-3">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-primary-subtle text-primary mb-3 align-self-start px-2.5 py-1.5 rounded">Gaya</span>
                        <h5 class="card-title text-white fw-bold mb-3">CSS Flexbox</h5>
                        <p class="card-text text-body-secondary small flex-grow-1">Mengatur tata letak kotak, posisi, dan alignment elemen HTML secara otomatis, responsif, dan fleksibel.</p>
                        <div class="bg-dark p-2.5 rounded border border-secondary-subtle font-monospace text-success small mt-3">
                            <code>display: flex;</code>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tutorial 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-body border-secondary-subtle d-flex flex-column rounded-3">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-warning-subtle text-warning mb-3 align-self-start px-2.5 py-1.5 rounded">Interaksi</span>
                        <h5 class="card-title text-white fw-bold mb-3">Variabel JavaScript</h5>
                        <p class="card-text text-body-secondary small flex-grow-1">Memahami cara mendeklarasikan dan menyimpan data sementara pada memori browser dengan let dan const.</p>
                        <div class="bg-dark p-2.5 rounded border border-secondary-subtle font-monospace text-success small mt-3">
                            <code>let nama = "Budi";</code>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tutorial 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 bg-body border-secondary-subtle d-flex flex-column rounded-3">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="badge bg-info-subtle text-info mb-3 align-self-start px-2.5 py-1.5 rounded">Backend</span>
                        <h5 class="card-title text-white fw-bold mb-3">Logika IF di PHP</h5>
                        <p class="card-text text-body-secondary small flex-grow-1">Membuat keputusan bercabang di sisi server dengan mengevaluasi kondisi benar atau salah.</p>
                        <div class="bg-dark p-2.5 rounded border border-secondary-subtle font-monospace text-success small mt-3">
                            <code>if ($nilai &gt; 80)</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-5 my-md-5">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <span class="text-success fw-bold text-uppercase small">Hubungi Kami</span>
                <h1 class="text-white fw-bold mt-2 mb-2">Ada Pertanyaan?</h1>
                <p class="text-body-secondary">Silakan kirimkan pesan kepada kami mengenai kebutuhan materi belajar pemrograman dasar melalui formulir di bawah ini.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card bg-body-tertiary border-secondary-subtle p-4 p-md-5 shadow-sm rounded-3">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label text-white small fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control bg-transparent border-secondary" id="nama" placeholder="Contoh: Andi Wijaya" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white small fw-semibold">Alamat Email</label>
                            <input type="email" class="form-control bg-transparent border-secondary" id="email" placeholder="andi@domain.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label text-white small fw-semibold">Pesan Anda</label>
                            <textarea class="form-control bg-transparent border-secondary" id="pesan" rows="4" placeholder="Tuliskan masukan atau pertanyaan..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2.5 rounded-3 mt-3 fw-semibold">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// 3. Ambil konten yang sudah ditangkap, lalu masukkan ke variabel $content
// (Sama seperti @endsection)
$content = ob_get_clean();

// 4. Panggil berkas master layout (Sama seperti @extends)
include_once __DIR__ . '/layouts/app.php';
?>
