@extends('user.main')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Log In</h2>
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
                <div class="row mt-5">
                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
                        <form action="" method="post" role="form">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" name="username" class="form-control" id="username" value="" maxlength="45" placeholder="Masukkan Username Anda" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" id="password" value="" maxlength="45" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="" class="btn btn-success col-sm-2">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
