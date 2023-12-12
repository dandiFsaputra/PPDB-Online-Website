<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPDB | Perguruan Panca Budi</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="CSS/form.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body>
    <section id="bgImage">
      <img src="assets/img/bg-form.png" alt="background form" />
    </section>
    <section id="formulir">
      <div class="container-md wrapper content-form">
        <div class="logo-form mb-5">
          <a href="index.php"
            ><img src="assets/img/logo-form.png" width="250" alt="logo form"
          /></a>
        </div>
        <h3>FORMULIR CALON SISWA BARU 2023/2024</h3>
        <p class="mb-5">Silahkan isi formulir berikut dengan data yang benar</p>

        <form action="formEnd.php" method="POST">
          <!-- DATA SISWA -->
          <h5 class="mb-4">DATA SISWA</h5>
          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="nisn" class="form-label">NISN</label>
                  <input
                    type="text"
                    placeholder="Contoh: 1234567"
                    class="form-control"
                    id="nisn"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="alamatLengkap" class="form-label"
                    >Alamat Siswa</label
                  >
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="alamatLengkap"
                  />
                  <div id="alamatHelp" class="form-text">
                    Desa/RT/RW/Kecamatan
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="namaLengkap" class="form-label"
                    >Nama Lengkap Siswa</label
                  >
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="namaLengkap"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating d-flex">
                <div class="d-inline-block mb-3 ms-5">
                  <input type="text" placeholder="" class="form-control" />
                  <div id="kabupatenHelp" class="form-text">Kabupaten</div>
                </div>
                <div class="d-inline-block mb-3 ms-5">
                  <input type="text" placeholder="" class="form-control" />
                  <div id="provinsiHelp" class="form-text">Provinsi</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="tempatLahir" class="form-label"
                    >Tempat Lahir</label
                  >
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="tempatLahir"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="noTelp" class="form-label">No.Telephone</label>
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="noTelp"
                  />
                  <div id="noHelp" class="form-text">
                    No. Hp yang dapat dihubungi
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                  <input
                    type="date"
                    placeholder=""
                    class="form-control"
                    id="tglLahir"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="asalSekolah" class="form-label"
                    >Asal Sekolah</label
                  >
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="asalSekolah"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating d-flex">
                <div class="d-inline-block">
                  <label for="kelamin" class="form-label">Jenis Kelamin</label>
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="kelamin"
                  >
                    <option value="1" selected>Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>
                <div class="d-inline-block mb-3 ms-5">
                  <label for="agama" class="form-label">Agama</label>
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="agama"
                  >
                    <option value="1" selected>Islam</option>
                    <option value="2">Protestan</option>
                    <option value="2">Katolik</option>
                    <option value="2">Hindu</option>
                    <option value="2">Buddha</option>
                    <option value="2">Konghucu</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="thnLulus" class="form-label">Tahun Lulus</label>
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="thnLulus"
                  >
                    <option value="1" selected>2023</option>
                    <option value="2">2022</option>
                    <option value="3">2021</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- DATA ORANGTUA -->
          <h5 class="mb-4 mt-5">DATA ORANG TUA</h5>
          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="namaAyah" class="form-label">Nama Ayah</label>
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="namaAyah"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="namaIbu" class="form-label">Nama Ibu</label>
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="namaIbu"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 me-5">
                  <label for="pendAyah" class="form-label"
                    >Pendidikan Ayah</label
                  >
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="pendAyah"
                  >
                    <option value="1" selected>SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA / SMK</option>
                    <option value="3">Ahli Madya</option>
                    <option value="3">Sarjana</option>
                    <option value="3">Pasca Sarjana</option>
                    <option value="3">Doktor</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3 ms-5">
                  <label for="pendIbu" class="form-label">Pendidikan Ibu</label>
                  <select
                    class="form-select"
                    aria-label="Default select example"
                    id="pendIbu"
                  >
                    <option value="1" selected>SD</option>
                    <option value="2">SMP</option>
                    <option value="3">SMA / SMK</option>
                    <option value="3">Ahli Madya</option>
                    <option value="3">Sarjana</option>
                    <option value="3">Pasca Sarjana</option>
                    <option value="3">Doktor</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-floating d-inline-block">
                <div class="mb-3 me-5">
                  <label for="noOrtu" class="form-label"
                    >No. Telephone Orang Tua</label
                  >
                  <input
                    type="text"
                    placeholder=""
                    class="form-control"
                    id="noOrtu"
                  />
                  <div id="noHelp" class="form-text">
                    No. Hp yang dapat dihubungi
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- DATA NILAI -->
          <h5 class="mb-4 mt-5">SELEKSI NILAI</h5>
          <div class="row d-inline-block">
            <div class="col">
              <div class="form-floating">
                <div class="mb-3">
                  <label for="nilaiUn" class="form-label"
                    >Nilai Ujian Nasional (UN)</label
                  >
                  <input
                    type="number"
                    placeholder=""
                    class="form-control"
                    id="nilaiUn"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3">
                  <label for="namaIbu" class="form-label"
                    >Nilai Matematika</label
                  >
                  <input
                    type="number"
                    placeholder=""
                    class="form-control"
                    id="namaIbu"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3">
                  <label for="namaIbu" class="form-label"
                    >Nilai Bahasa Indonesia</label
                  >
                  <input
                    type="number"
                    placeholder=""
                    class="form-control"
                    id="namaIbu"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3">
                  <label for="namaIbu" class="form-label"
                    >Nilai Bahasa Inggris</label
                  >
                  <input
                    type="number"
                    placeholder=""
                    class="form-control"
                    id="namaIbu"
                  />
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-floating">
                <div class="mb-3">
                  <label for="namaIbu" class="form-label">Nilai IPA</label>
                  <input
                    type="number"
                    placeholder=""
                    class="form-control"
                    id="namaIbu"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="btn-form d-flex justify-content-end mt-3">
            <button
              type="reset"
              class="btn btn-primary btn-md border-0 btn-reset"
            >
              Batalkan
            </button>
            <button
              type="submit"
              class="btn btn-primary btn-md border-0 ms-3 btn-kirim"
            >
              Kirim Formulir
            </button>
          </div>
        </form>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
