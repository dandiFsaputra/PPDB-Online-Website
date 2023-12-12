<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPDB | Perguruan Panca Budi</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="CSS/login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body>
    <!-- LOGIN -->
    <div
      class="container-fluid d-flex justify-content-center align-items-center"
    >
      <div class="card-login">
        <form>
          <div class="logo-form">
            <a href="index.php"
              ><img src="assets/img/logo-form.png" width="200" alt="logo form"
            /></a>
          </div>

          <div class="mb-3">
            <label for="exampleNamaLengkap1" class="form-label"
              >Nama Lengkap</label
            >
            <input
              type="text"
              placeholder="Masukkan nama lengkap"
              class="form-control"
              id="exampleNamaLengkap1"
            />
          </div>
          <div class="mb-3">
            <label for="exampleUsername1" class="form-label">Username</label>
            <input
              type="text"
              placeholder="Masukkan username"
              class="form-control"
              id="exampleUsername1"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              placeholder="Masukkan password"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <div class="d-grid gap-3">
            <a href="#" type="submit" class="btn btn-primary btn-daftar2"
              >Daftar</a
            >
            <a href="login.php" class="btn btn-outline-primary btn-masuk2"
              >Masuk calon siswa</a
            >
          </div>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
