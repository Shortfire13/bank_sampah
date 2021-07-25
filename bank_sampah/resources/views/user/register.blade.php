@extends('user.main')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Register</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <center>
                        <h2>Registrasi</h2>
                    </center>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="name" value="" maxlength="45"
                                placeholder="Masukkan Nama Lengkap Anda" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" id="username" value=""
                                maxlength="45" placeholder="Masukkan Username Anda" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" id="email" value="" maxlength="45"
                                placeholder="Masukkan Email Anda" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="password" value=""
                                maxlength="45" placeholder="Masukkan Password Anda" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nomer Telpon</label>
                        <div class="col-sm-8">
                            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control"
                                id="phone" value="" maxlength="45" placeholder="Masukkan Nomer Telepon Anda" required>
                        </div>
                    </div>
                    <a name="" id="" class="btn btn-primary col-md-12 mt-4" href="#" role="button">Submit</a>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->