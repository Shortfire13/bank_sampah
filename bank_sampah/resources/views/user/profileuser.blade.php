@extends('user.main')

@section('content')
<!-- ======= Header ======= -->
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="height: 20%">
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
    <div class="mb-5"></div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Data Diri
                </div>
                <div class="card-body">
                    <form>
                        @foreach ($profile as $item)
                            
                        
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="{{ $item->nama_user }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $item->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $item->username }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="{{ $item->no_hp }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="staticEmail" placeholder="Masukkan Password Baru Anda" value="">
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-5"></div>
                        <a href="" class="btn btn-success">Perbarui</a>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->