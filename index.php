<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPDB | Perguruan Panca Budi</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body>
    <!-- WELCOME SCREEN -->
    <section id="welcome">
      <img class="bg-image" src="assets/img/bg.png" alt="bg image" />
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-md">
          <a href="index.php"
            ><img
              src="assets/img/logoSekolah.svg"
              alt="logo sekolah"
              width="200"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav gap-2 ms-auto">
              <a class="nav-link" aria-current="page" href="#informasi"
                >Informasi PPDB</a
              >
              <a class="nav-link" href="#jalur">Jalur Pendaftaran</a>
              <a class="nav-link" href="#profil">Tentang Sekolah</a>
              <a class="nav-link" href="#footer">Kontak Kami</a>
            </div>
            <button
              type="button"
              class="btn btn-primary btn-md border-0 ms-3 btn-pengumuman"
            >
              Pengumuman
            </button>
          </div>
        </div>
      </nav>

      <!-- HERO SECTION -->
      <div
        class="container-md hero d-flex justify-content-center align-items-center"
      >
        <div class="row content-hero">
          <div class="col-md-7 text-hero">
            <h3 class="mb-3">Selamat Datang di website</h3>
            <h1 class="mb-4">PPDB Online 2023/2024 Perguruan Panca Budi</h1>
            <p class="mb-4">
              Situs ini dipersiapkan sebagai pengolahan seleksi peserta PPDB
              Perguruan Panca Budi Periode 2023 / 2024 untuk pelaksanaan PPDB
              Online.
            </p>
          </div>
          <div class="col-md-5">
            <div class="card ms-auto">
              <div class="card-body">
                <h5 class="card-subtitle mb-2">PPDB Online Jenjang</h5>
                <h3 class="card-title mb-3">Sekolah Menengah Atas (SMA)</h3>
                <p class="card-text mb-4">
                  Pilih Pendidikan yang Ingin Kamu Lanjutkan
                </p>
                <div class="d-grid gap-2 card-btn">
                  <a href="form.php" class="btn btn-primary mb-2 btn-isi-form"
                    >Isi formulir pendaftaran</a
                  >
                  <a href="login.php" class="btn btn-outline-primary btn-login"
                    >Login calon siswa</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END HERO -->
    </section>
    <!-- END WELCOME -->

    <!-- INFORMATION SCREEN -->
    <section id="informasi">
      <div
        class="container-md d-flex justify-content-center align-items-center"
      >
        <div class="container-content d-flex align-items-center">
          <div class="content">
            <div class="row d-flex justify-content-between">
              <h3 class="judul mb-4">Informasi PPDB online</h3>
              <div class="col-md-6">
                <p class="paragraf">
                  <span>Perguruan Panca Budi pada tahun ajaran 2022/2023</span>
                  menyediakan PPDB secara online, diharapkan proses PPDB dapat
                  berjalan cepat dan bisa dilakukan dimanapun dan kapanpun
                  selama sesi PPDB Online dibuka.
                </p>
              </div>
              <div class="col-md-6">
                <p class="paragraf">
                  <span>Pengisian form PPDB Online</span> mohon diperhatikan
                  data yang dibutuhkan yang nantinya akan dipakai dalam proses
                  PPDB.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END INFORMATION -->

    <!-- JALUR SCREEN-->
    <section id="jalur">
      <div class="container-md d-flex justify-content-center container-jalur">
        <div class="d-flex d-grid gap-4 flex-column">
          <h3 class="text-center mb-4 judul">Jalur dan jadwal PPDB online</h3>
          <div class="card-satu d-flex d-grid gap-3">
            <div class="icon">
              <img src="assets/img/Number Circle One.png" width="40" alt="" />
            </div>
            <div class="text">
              <h3>Jalur PMPA, Afirmasi dan Mutasi</h3>
              <p>
                Pendaftaran dan Verifikasi Berkas : 17 - 19 Mei 2023 <br />
                Seleksi Berkas : 18 - 21 Mei 2023 <br />
                Pengumuman : 24 Mei 2023 <br />
                Daftar Ulang Peserta Lulus : 25 - 28 Mei 2023
              </p>
            </div>
          </div>
          <div class="card-dua d-flex d-grid gap-3">
            <div class="icon">
              <img src="assets/img/Number Circle Two.png" width="40" alt="" />
            </div>
            <div class="text">
              <h3>Jalur Zonasi</h3>
              <p>
                Pendaftaran dan Verifikasi Berkas : 30 - 31 Juni 2023 <br />
                Pengumuman Zonasi : 6 Juni 2023 <br />
                Daftar Ulang Zonasi : 7 - 8 Juni 2023
              </p>
            </div>
          </div>
          <div class="card-tiga d-flex d-grid gap-3">
            <div class="icon">
              <img src="assets/img/Number Circle Three.png" width="40" alt="" />
            </div>
            <div class="text">
              <h3>Jalur Tes Potensi Akademik</h3>
              <p>
                Pendaftaran dan Verifikasi Berkas : 9 - 14 Juni 2023 <br />
                Tes Potensi Akademik : 16 Juni 2023 <br />
                Pengumuman TPA : 21 Juni 2023 <br />
                Daftar TPA : 22 - 24 Juni 2023
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END JALUR -->

    <!-- PROFIL SCREEN -->
    <section id="profil">
      <div class="container-md profil">
        <div class="row d-flex align-items-center content-profil">
          <div class="col-md-8 text-profil">
            <h3 class="mb-4">Tentang Sekolah</h3>
            <p>
              Perguruan Panca Budi sebagai salah satu sekolah favorit di kota
              Medan saat ini mengelola pendidikan dasar dan menengah dengan
              jenjang pendidikan mulai dari PG/TK, SD, SMP, SMA dan SMK.
              Perguruan Panca Budi lokasinya sangat strategis dan sangat mudah
              untuk dijangkau oleh berbagai transportasi di kota Medan. <br />
              <br />
              Dengan lingkungan yang asri, bersih dan nyaman serta didukung
              dengan sarana dan fasilitas yang baik juga bersama dengan
              penanganan stake holder pendidikan yang kompeten telah menjadikan
              Perguruan Panca Budi pilihan yang baik untuk mengantar generasi
              masa depan bangsa yang berkualitas dan berakhlak.
            </p>
          </div>
          <div class="col-md-4 gambar">
            <img src="assets/img/sekolah1.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- END PROFIL -->

    <!-- PERSYARATAN SCREEN -->
    <section id="persyaratan">
      <div class="container-md">
        <div class="container-content">
          <h3 class="mb-4">Persyaratan Pendaftaran PPDB Online</h3>
          <ol type="1">
            <li>Warga Negara Indonesia (WNI)</li>
            <li>Asal sekolah SMP/MTs di dalam maupun di luar kota Medan</li>
            <li>Peserta didik tahun pelajaran 2021/2022</li>
            <li>
              Nilai rata-rata kumulatif B.Indonesia, Matematika, IPA dan Bahasa
              Inggris semester 1 s/d 5 minimal 80
            </li>
            <li>
              Persyaratan berkas sesuai dengan jalur seleksi yang dipilih
              dikirim secara online, kecuali jalur zonasi wajib verifikasi rumah
              ke sekolah secara langsung dengan tim panitia PPDB
            </li>
          </ol>
        </div>
      </div>
    </section>
    <!-- END PERSYARATAN -->

    <!-- ALUR SCREEN -->
    <section id="alur">
      <div class="container-md">
        <div class="container-content">
          <h3 class="mb-4">Penjelasan Alur PPDB 2023</h3>
          <ol type="1">
            <li>
              Calon peserta didik baru melakukan pendaftaran secara mandiri dan
              ONLINE melalui website Perguruan Panca Budi sesuai dengan jadwal
              dan jalur yang telah ditentukan.
            </li>
            <li>
              Calon peserta didik melengkapi biodata pada formulir pendaftaran
              secara online .
            </li>
            <li>
              Panitia PPDB melakukan Verifikasi dan Validasi Berkas Pendaftaran.
            </li>
            <li>
              Pengumuman verifikasi berkas di informasikan melalui halaman login
              PPDB Perguruan Panca Budi dan Calon siswa yang telah lulus. tahap
              pemberkasan dapat mencetak TANDA BUKTI VERIFIKASI.
            </li>
            <li>
              Tahap selanjutnya proses seleksi peserta didik baru oleh sekolah.
            </li>
            <li>
              Bagi Calon Peserta Didik Baru yang tidak lulus melalui Jalur PMPA,
              Jalur Afirmasi & Mutasi Orang Tua, Jalur Zonasi, maka dapat
              mendaftar seleksi melalui Jalur Tes Potensi Akademik.
            </li>
          </ol>
        </div>
      </div>
    </section>
    <!-- END ALUR -->

    <!-- FOOTER SCREEN -->
    <section id="footer">
      <footer>
        <div class="container-fluid">
          <div class="container-content">
            <div class="row">
              <div class="col-md-4 kontak">
                <img
                  src="assets/img/logo-kecil.png"
                  class="mb-4"
                  width="80"
                  alt=""
                />
                <h3 class="mb-4">Kontak Kami</h3>
                <div class="email d-flex align-items-center">
                  <img src="assets/img/Mail.svg" alt="" />
                  <span>perguruanpancabudi@gmail.com</span>
                </div>
                <div class="phone d-flex">
                  <img src="assets/img/phone.svg" alt="" />
                  <span>001122334455</span>
                </div>
              </div>
              <div class="col-md-8 map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.991128335641!2d98.64343701404309!3d3.5895093512904053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e30ee18327d%3A0x1633bc2fd434e590!2sPerguruan%20Panca%20Budi!5e0!3m2!1sid!2sid!4v1678974772091!5m2!1sid!2sid"
                  width="100%"
                  height="100%"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                >
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="30"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        class="container-md fixed-bottom"
      >
        <div class="position-relative">
          <div class="position-absolute to-top">
            <a href="#welcome"
              ><button type="button" class="btn btn-light">
                Kembali ke atas
              </button></a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- END FOOTER -->

    <script>
      document.addEventListener("scroll", () => {
        const nav = document.querySelector(".navbar");
        const btnPengumuman = document.querySelector(".btn-pengumuman");

        if (window.scrollY >= 100) {
          nav.classList.add("navbar-scrolled");
          btnPengumuman.style.cssText = `
            background-color: var(--putih);
            color: var(--hitam1); 
          `;
        } else {
          nav.classList.remove("navbar-scrolled");
          btnPengumuman.style.cssText = `
            background-color: var(--biru);
            color: ; 
          `;
        }
      });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
