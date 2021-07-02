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
        <div class="row mt-5"> 
          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
            <form action="" method="post" role="form">
              
              <div class=" form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama"  data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class=" form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Username" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class=" form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Password"  data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class=" form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Repeat Password"  data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
              
              <div class="text-center"><button type="submit">Register</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->