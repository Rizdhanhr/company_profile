<?php
// 1. Tentukan judul halaman spesifik untuk About
$title = "About Us - Belajar Programming Dasar";

// 2. Mulai menangkap konten halaman
ob_start();
?>

<!-- ABOUT HEADER HERO -->
<section class="py-5 my-md-4 bg-body-tertiary border-bottom border-secondary-subtle">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span class="badge text-bg-success mb-3 px-3 py-2 rounded-pill fw-semibold">Kenali Kami Lebih Dekatt</span>
                <h1 class="display-4 fw-bold text-white mb-3">Di Balik Layar DevTutorials</h1>
                <p class="lead text-body-secondary mb-0">Kami adalah sekelompok praktisi yang percaya bahwa belajar pemrograman tidak harus terasa seperti membaca dokumen hukum: kaku, membosankan, dan penuh istilah asing.</p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES / TIMELINE KECIL -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="text-white fw-bold mb-4">Mengapa Kami Memulai Ini?</h2>
                <p class="text-body-secondary">Banyak pemula menyerah di minggu-minggu pertama karena lingkungan belajar yang terlalu teoritis. Kita dipaksa menghafal algoritma rumit sebelum merasakan serunya melihat baris kode kita memunculkan sesuatu di layar browser.</p>
                <p class="text-body-secondary">Di DevTutorials, kami membalik urutannya: **Praktikkan dulu, lihat hasilnya, pahami teorinya kemudian.** Pendekatan *Separation of Concerns* (pemisahan fokus) ini membuat otak tidak cepat lelah saat memproses logika baru.</p>
                <div class="mt-4 p-3 bg-body-tertiary rounded border border-secondary-subtle">
                    <h5 class="text-white fw-bold mb-2"><i class="bi bi-lightbulb text-success me-2"></i>Prinsip Kami</h5>
                    <p class="text-body-secondary small mb-0">Kode yang baik bukan cuma kode yang jalan, tapi kode yang mudah dibaca oleh manusia lain. Itu yang selalu kami tanamkan di setiap modul tutorial dasar.</p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-secondary-subtle bg-body-tertiary shadow p-4">
                    <h3 class="text-white fw-bold mb-4 h4">Target Capaian Belajar</h3>
                    
                    <div class="d-flex gap-3 mb-3">
                        <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Paham Fondasi</h5>
                            <p class="text-body-secondary small">Bukan cuma asal salin-tempel, tapi tahu kapan harus pakai Flexbox atau logika IF.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-3 mb-3">
                        <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Mandiri Troubleshooting</h5>
                            <p class="text-body-secondary small">Membiasakan membaca pesan *error* di console browser sejak dini agar tidak panik.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i></div>
                        <div>
                            <h5 class="text-white mb-1 fw-semibold">Siap Naik Level</h5>
                            <p class="text-body-secondary small">Kerangka dasar yang kokoh untuk modal transisi ke framework modern (seperti Laravel atau Node.js).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION (CTA) -->
<section class="py-5 bg-body-tertiary border-top border-secondary-subtle text-center">
    <div class="container py-4">
        <h3 class="text-white fw-bold mb-3">Siap Memulai Petualangan Kodemu?</h3>
        <p class="text-body-secondary mb-4 mx-auto" style="max-width: 600px;">Jangan tunggu sampai besok. Mulai dari satu baris `console.log()` hari ini dan lihat sejauh mana kamu bisa berkembang.</p>
        <a href="index.php#tutorials" class="btn btn-success px-4 py-2 fw-semibold rounded-3">Mulai Belajar Sekarang</a>
    </div>
</section>

<?php
// 3. Ambil seluruh konten yang sudah ditangkap
$content = ob_get_clean();

// 4. Render ke dalam master layout
include_once __DIR__ . '/layouts/app.php';
?>
