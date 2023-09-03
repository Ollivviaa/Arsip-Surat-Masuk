<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Arsip Surat Masuk</title>

    <!-- css -->
    <link rel="stylesheet" href="daftar-surat.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,200;0,400;1,600;1,800&family=Nunito:ital,wght@0,300;0,400;0,700;1,300;1,500&family=Poppins:ital,wght@0,200;0,400;0,700;1,700&family=Rubik:ital,wght@0,300;0,700;1,500&display=swap" rel="stylesheet">

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href ="#" class ="logo"><span>E</span>-Arsip Surat Masuk</a>

      <div class="search-form">
        <input type="search" id="search-box" placeholder="cari">
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- tabel start -->
    <div class="mails">
      <div class="border"></div>
      <div class="table-header table-row">
        <div class="no table-cell">
          No
        </div>
        <div class="no-surat table-cell">
          Nomor Surat
        </div>
        <div class="tanggal-surat table-cell">
          Tgl Surat
        </div>
        <div class="instansi table-cell">
          Instansi
        </div>
        <div class="disposisi table-cell">
          Disposisi
        </div>
        <div class="keterangan table-cell">
          Keterangan
        </div>
        </div>
      </div>
      <div class="table-body" id="mails-container"></div>
    </div>
    
    <!-- belum beres, table body belum tertata -->
    <!-- tabel end -->

    <!-- side-bar start -->
    <div class="side-bar">
      <button class="add-btn"><i data-feather="upload" class="add-icon"></i>Buat Arsip</button>
      <button class="del-btn"><i data-feather="trash" class="del-icon"></i>Hapus Arsip</button>
    </div>
    <!-- side-bar end -->

    <!-- form start -->
    <div class="form-box">
      <!-- form add -->
      <div class="form-add">
        <div class="header-form">Buat Arsip</div>
        <form id="form-mails" action="#'">
          <div class="input-group">
            <label for="no-surat" class="label">No Surat</label>
            <input type="text" id="no-surat" name="no-surat" class="input" required>
          </div>
          <div class="input-group">
            <label for="tgl-surat" class="label">Tanggal Surat</label>
            <input type="date" id="tgl-surat" name="tgl-surat" class="input" required>
          </div>
          <div class="input-group">
            <label for="instansi" class="label">Instansi</label>
            <input type="text" id="instansi" name="instansi" class="input" required>
          </div>
          <div class="input-group">
            <label for="disposisi" class="label">Disposisi</label>
            <input type="text" id="disposisi" name="disposisi" class="input" required>
          </div>
          <div class="input-group">
            <label for="keterangan" class="label">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="input" required>
          </div>

          <div class="form-btn">
            <button type="reset" class="input" id="cancel">Batal</button>
            <button type="submit" class="input" id="submit">Kirim</button>
          </div>
        </form>
      </div>

      <!-- form del -->
      <div class="form-del">
        <div class="header-form">Hapus Arsip</div>
        <form id="form-mails" action="#'">
          <div class="input-group">
            <label for="no-surat" class="label">No Surat</label>
            <input type="text" id="no-surat" name="no-surat" class="input" required>
          </div>
          <div class="input-group">
            <label for="tgl-surat" class="label">Tanggal Surat</label>
            <input type="date" id="tgl-surat" name="tgl-surat" class="input" required>
          </div>
          <div class="input-group">
            <label for="instansi" class="label">Instansi</label>
            <input type="text" id="instansi" name="instansi" class="input" required>
          </div>
          <div class="input-group">
            <label for="disposisi" class="label">Disposisi</label>
            <input type="text" id="disposisi" name="disposisi" class="input" required>
          </div>

          <div class="form-btn">
            <button type="reset" class="input" id="cancel1">Batal</button>
            <button type="submit" class="input" id="delete">Hapus</button>
          </div>
        </form>
      </div>
    </div>
    <!-- form end -->

    <!-- footer start -->
    <footer>
    <div class="credit">
      <p>Created by <a href="">zoalkikviiaa</a> | &copy; 2023.</p>
  </div>
    </footer>
    <!-- footer end -->

    <!-- feather icons -->
    <script>
      feather.replace()
  </script>

  <!-- javasript -->
  <script src="daftar-surat.js"></script>
  </body>
</html>