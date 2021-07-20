@extends('user.main')

@section('content')
  <!-- ======= Header ======= -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Profile</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <br><br>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="card">
            <div class="card-header bg-success text-light">
            <h3 class="text-center">Perbarui Data Anda</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="InputNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda">
              </div>
              <div class="form-group">
                <label for="InputUsername">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Nama Lengkap Anda">
              </div>
              <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda">
              </div>
              <div class="form-group">
                <label for="InputAlamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Rumah Anda">
              </div>
              <div class="form-group">
                <label for="InputFoto">Foto Profile</label>
                <input type="file" class="form-control mb-5" id="alamat" placeholder="Masukkan Foto Profile Anda">
              </div>
              <div class="form-group">
                <label for="InputPasswordLama">Password Lama</label>
                <input type="password" class="form-control" id="passwordlama" placeholder="Masukkan Password Lama Anda">
              </div>
              <div class="form-group">
                <label for="InputPasswordBaru">Password Baru</label>
                <input type="password" class="form-control" id="passwordbaru" placeholder="Masukkan Password Baru Anda">
              </div>
              <div class="form-group">
                <label for="KonfirmasiPassword">Password Baru</label>
                <input type="password" class="form-control" id="confirmpass" placeholder="Masukkan Lagi Password Baru Anda">
              </div>
              <a href="" class="btn btn-success col-md-12 mt-2">Perbarui</a>
            </form>
          </div>
        </div>

    </section><!-- End Team Section -->

  </main><!-- End #main -->