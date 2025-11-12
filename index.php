<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siap Suruh - Kami Siap Disuruh </title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/style.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold d-flex align-items-center" href="#home">
        <img src="asset/img/ChatGPT Image Nov 6, 2025, 09_49_36 AM.png" alt="Logo" 
            style="height: 40px; width: 40px; margin-right: 10px; border-radius: 50%;">
        Siap Suruh
      </a>

      <!-- Tombol Hamburger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu Navbar -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero d-flex align-items-center text-center text-white"
    style="height: 100vh; background: url('asset/img/pexels-denniz-futalan-339724-4956918.jpg') center/cover no-repeat;">
    <div class="container">
      <h1 class="fw-bold">Kami Siap Disuruh Kapan Saja!!!</h1>
      <p>Bersih-bersih, Antar Barang, Perbaikan Alat <br> semua bisa kami bantu.</p>
      <a href="#layanan" class="btn btn-danger btn-lg mt-3">Lihat Layanan</a>
    </div>
  </section>

  <!-- Layanan -->
  <section id="layanan" class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="mb-4 fw-bold">Layanan Kami</h2>
    <div class="row g-4">
      <?php
      include 'config.php';
      $result = $conn->query("SELECT * FROM layanan");
      while($row = $result->fetch_assoc()):
      ?>
      <div class="col-md-4">
        <div class="card layanan-card">
          <img src="asset/img/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['judul'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row['judul'] ?></h5>
            <p class="card-text"><?= $row['deskripsi'] ?></p>
            <a href="#kontak" class="btn btn-outline-danger">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


  <!-- Tentang -->
  <section id="tentang" class="py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">Tentang Kami</h2>
      <p class="lead">
        <strong>Jasa Siap Suruh</strong> hadir buat kamu yang butuh bantuan cepat tanpa ribet!
        Mau bersihin rumah, nganter barang, benerin alat yang rusak, buang sampah, packing, merawat tanaman? Tinggal panggil aja,
        tim kami siap bantu kapan pun dibutuhkan.
      </p>

      <!-- Grafik Chart.js -->
      <div class="mt-5" style="max-width: 700px; margin: auto;">
        <h5 class="mb-3">Jumlah Pesanan per Tahun</h5>
        <canvas id="layananChart"></canvas>
      </div>
    </div>
  </section>

<!-- Kontak -->
<section id="kontak" class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffeaea 100%);">
  <div class="container">
    <h2 class="fw-bold text-center mb-4 text-danger">Hubungi Kami</h2>
    <p class="text-center text-muted mb-5">
      Punya pertanyaan atau ingin memesan layanan kami? Kirim pesan langsung atau hubungi kami melalui WhatsApp dan Instagram!
    </p>

    <!-- Kartu Form -->
    <div class="card shadow-lg border-0 mx-auto" style="max-width: 700px; border-radius: 15px;">
      <div class="card-body p-4">
        <form action="simpan_kontak.php" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label fw-semibold">Nama Anda</label>
    <input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label fw-semibold">Email</label>
    <input type="email"class="form-control form-control-lg"  name="email" placeholder="Email" required>
  </div>

  <div class="mb-3">
    <label for="pesan" class="form-label fw-semibold">Pesan</label>
    <textarea name="pesan" class="form-control form-control-lg" placeholder="Pesan" required></textarea>
  </div>

  <button type="submit">Kirim</button>
</form>


      </div>
    </div>

    <!-- Tambahan kontak sosial -->
    <div class="text-center mt-5">
      <h5 class="fw-bold mb-4 text-danger">Atau hubungi kami melalui:</h5>
      <div class="d-flex justify-content-center gap-4 flex-wrap">
        <!-- WhatsApp -->
        <a href="https://wa.me/6287836196023" target="_blank"
          class="d-flex align-items-center btn btn-success px-4 py-2 rounded-pill shadow-sm">
          <i class="bi bi-whatsapp fs-4 me-2"></i> <span class="fw-semibold"> WhatsApp</span>
        </a>

        <!-- Instagram -->
        <a href="https://instagram.com/alanadyatma.k" target="_blank"
          class="d-flex align-items-center btn btn-danger px-4 py-2 rounded-pill shadow-sm">
          <i class="bi bi-instagram fs-4 me-2"></i> <span class="fw-semibold"> Instagram</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 Jasa Siap Suruh. Semua Hak Dilindungi.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="asset/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JavaScript Kustom -->
  <script>
    // === 1. Menu aktif sesuai section ===
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (scrollY >= sectionTop) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
          link.classList.add('active');
        }
      });
    });

    // === 2. Auto-scroll halus untuk setiap klik menu ===
    navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
      });
    });

    // === 3. ChartJS - Jumlah Pesanan per Tahun ===
      let chart; // variabel global untuk menyimpan chart

function loadChartData() {
  fetch('datachart.php')
    .then(response => response.json())
    .then(data => {
      const labels = data.map(item => item.tahun);
      const values = data.map(item => item.jumlah);

      // Jika chart sudah ada → update datanya
      if (chart) {
        chart.data.labels = labels;
        chart.data.datasets[0].data = values;
        chart.update();
      } else {
        // Buat chart pertama kali
        chart = new Chart(document.getElementById('layananChart'), {
          type: 'line',
          data: {
            labels: labels,
            datasets: [{
              label: 'Jumlah Pesanan',
              data: values,
              borderColor: '#dc3545',
              backgroundColor: 'rgba(220, 53, 69, 0.2)',
              tension: 0.3,
              fill: true,
              pointBackgroundColor: '#dc3545'
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true,
                title: { display: true, text: 'Jumlah Pesanan' }
              },
              x: {
                title: { display: true, text: 'Tahun' }
              }
            },
            plugins: {
              legend: { display: true }
            }
          }
        });
      }
    })
    .catch(error => console.error('Error ambil data:', error));
}

// Panggil pertama kali
loadChartData();

// Update setiap 5 detik
setInterval(loadChartData, 5000);



    // === 4. Fungsi Kirim Pesan (Alert + Reset Form) ===
    const kirimButton = document.querySelector('button.btn-danger'); // tombol kirim
    const kontakForm = document.querySelector('form'); // form kontak

    kirimButton.addEventListener('click', function() {
      kontakForm.reset();
    });
  </script>

</body>
</html>
