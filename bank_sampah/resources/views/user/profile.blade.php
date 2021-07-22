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
            <h3 class="text-center">Data Diri</h3>
          </div>
          <div class="card-body">
           
            <form>
              @foreach ($profile as $item)
              <div class="form-group">
                <label for="nama_user">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_user" placeholder="" value="{{ $item->nama_user }}">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="" value="{{ $item->username }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="" value="{{ $item->email }}"
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" value=""
              </div> 
            @endforeach
              <a href="" class="btn btn-success col-md-12 mt-2">Perbarui</a>
            </form>
          </div>
        </div>

    </section><!-- End Team Section -->

  </main><!-- End #main -->